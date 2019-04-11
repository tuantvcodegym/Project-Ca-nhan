<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class SlideController extends Controller
{
    public function getAll(){
        $slide = Slide::all();
        return view('slides.slide', compact('slide'));
    }
    public function store(){
        return view('slides.store');
    }
    public function create(Request $request){
        $slide = new Slide();
        $slide->name = $request->input('name');
        if($request->hasFile('file')){
            $image = $request->file('file');
            $path = $image->store('image', 'public');
            $slide->image = $path;
            $slide->save();
            return redirect()->route('slide');
        }else{
            return redirect()->route('store');
        }
    }
    public function index(){
        return view('home.index');
    }
}
