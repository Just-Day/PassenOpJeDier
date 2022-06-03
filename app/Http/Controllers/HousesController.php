<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class HousesController extends Controller
{

    public function index(){
        return view('houses.index',[
            'houses' => \App\Models\House::all()
        ]);
        
    }

    public function show($id){
        return view('houses.show',[
            'houses' => \App\Models\House::find($id,)
        ]);
    }

    public function create(){
        return view('houses.create', [
            'kind_of_houses' => \App\Models\KindOfHouses::all(),
            'images' => \App\Models\Image::all()
            ]);
    }

    public function store(Request $request, \App\Models\House $houses){
        $houses->name = $request->input('name');
        $houses->kind = $request->input('kind');
        $houses->description = $request->input('description');
        $houses->image = $request->input('image');

        try{
            $houses->save();
            return redirect('/house');
        }
        catch(exception $e){
            return redirect('/house/create');
        }
    }
}
