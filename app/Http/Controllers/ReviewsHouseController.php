<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsHouseController extends Controller
{
    public function show($id){
        return view('reviewhouses.show',[
            'review_houses' => \App\Models\ReviewHouse::find($id,)
        ]);
    }

    public function create(){
        return view('reviewhouses.show', [
            'review_houses' => \App\Models\ReviewHouse::all(),
            ]);
    }

    public function store(Request $request, \App\Models\ReviewHouse $review_houses){
        $review_houses->user = $request->input('user');
        $review_houses->review = $request->input('review');

        try{
            $review_houses->save();
            return redirect('/house');
        }
        catch(exception $e){
            return redirect('/house');
        }
    }
}
