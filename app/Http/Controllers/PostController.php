<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        // dd($request->all());
        $formfields=$request->validate([

            'title'=>'required',
            'name'=>'required',
            'description'=>'required'
        ]);
        $formfields['user_id']=auth()->id();
        Posts::create($formfields);
        return redirect('/')->with('message','post created successfully!');
    }
    // public function show(posts $post){
    // return view('show',['post'=>$post]);
    // }
    // public function layout(){
    //     return view('layout');
    // }

}
