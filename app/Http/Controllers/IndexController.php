<?php

namespace App\Http\Controllers;
use App\Models\create_blog;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function blogs(){
        $blogs =create_blog::all();
        return view('blogs',compact('blogs'));
    }
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
    public function features(){
        return view('features');
    }
    public function pricing(){
        return view('pricing');
    }
    public function security(){
        return view('security');
    }
    public function single(){
        return view('single');
    }



    public function typography(){
        return view('typography');
    }
    public function team(){
        return view('team');
    }
    public function gallery(){
        return view('gallery');
    }


}
