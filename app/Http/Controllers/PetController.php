<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class PetController extends Controller
{

    public function index(){
        return view('pet.index',[
            'pet' => \App\Models\Pet::all()
        ]);
        
    }

    public function show($id){
        return view('pet.show',[
            'pet' => \App\Models\Pet::find($id,),
            'application_pet' => \App\Models\ApplicationPet::find($id,)
        ]);
    }


    public function create(){
        return view('pet.create', [
            'kind_of_pet' => \App\Models\KindOfPet::all(),
            'review' => \App\Models\Review::all(),
            'images' => \App\Models\Image::all()
            ]);
    }

    public function store(Request $request, \App\Models\Pet $pet){
        $pet->name = $request->input('name');
        $pet->kind = $request->input('kind');
        $pet->description = $request->input('description');
        $pet->image = $request->input('image');
        $pet->length = $request->input('length');
        $pet->wage = $request->input('wage');
        $pet->when = $request->input('when');
        $pet->user = $request->input('user');

        try{
            $pet->save();
            return redirect('/pet');
        }
        catch(exception $e){
            return redirect('/pet/create');
        }
    }
}
