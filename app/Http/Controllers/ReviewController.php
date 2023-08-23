<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function reviews(){

        $submits = DB::table('submits')->paginate(3);

        return view('app.reviews', ['data' => $submits]);

    }
    public function reviews_submit(Request $req){

        $validation = $req->validate([

            'message' => 'required|min:5|max:500',

        ]);
        $submit = new Submit();

        $submit->message = $req->input('message');

        $submit->save();

        return redirect()->route('reviews')
            ->with('success' , 'Message has been added');
    }

    public function allMessages(){

        return view('app.allMessages', ['data' =>Submit::all()]);
    }
}
