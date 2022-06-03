<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{

    public function show($id){
        return view('review.show',[
            'review' => \App\Models\Review::find($id,)
        ]);
    }

    public function create(){
        return view('review.show', [
            'review' => \App\Models\Review::all(),
            ]);
    }

    public function store(Request $request, \App\Models\Review $review){
        $review->user = $request->input('user');
        $review->review = $request->input('review');

        try{
            $review->save();
            return redirect('/pet');
        }
        catch(exception $e){
            return redirect('/pet');
        }
    }
}
