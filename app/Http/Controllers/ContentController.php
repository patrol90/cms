<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        return view('home')->with(['content' => Content::all()]);
    }
    public function store(Request $request){

        $content = new Content;
        $content->name = $request->name;
        $content->body = $request->body;
        $content->save();

        return redirect('/');

    }
    public function create(){
        return view('content.create');

    }
    public function show($id){
        return view('content.show')->with(['page'=>Content::findOrfail($id)]);
    }
    public function edit($id){
        return view('content.update')->with(['page'=>Content::findOrfail($id)]);
    }
    public function update($id, Request $request){
        $content = Content::findOrFail($id);
        $content->update($request->all());
        return redirect('/');
    }


}
