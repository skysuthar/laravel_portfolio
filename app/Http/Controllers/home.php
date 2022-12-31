<?php

namespace App\Http\Controllers;

use App\Models\createproject;
use App\Models\blog;
use App\Models\service;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home(){
        return view('index');
    }

    public function work(){
        $project = createproject::all();
        return view('work',compact('project'));
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        $blog = blog::all();
        return view('blogs',compact('blog'));
    }

    public function fullblog($id){
        $blog = blog::where(['id'=>$id])->first();
        return view('detailedblog',compact('blog'));
    }

    public function service(){
        $service = service::all();
        return view('service',compact('service'));
    }

    public function about()
    {
        return view('about');
    }
}
