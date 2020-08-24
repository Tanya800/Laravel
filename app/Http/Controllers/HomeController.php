<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class HomeController extends Controller{
    public function submit(Request $req){
    	$validation= $req->validate([
    		'sender'=> 'required',
    		'message' => 'required|min:5'
    	]);
    //dd($req->input('sender'));

    $user= new Users();
    $user->sender = $req->input('sender');
    $user->message = $req->input('message');

    $user->save();

    return redirect()->route('home')->with('success','Message sent');
    }

    public function allData(){
    	$user= new Users();
    	return view('about',['data'=> $user->orderBy('sender')->get()]);
    }
}
