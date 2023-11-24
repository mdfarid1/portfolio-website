<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function home(){
        return view("Pages.home");
    }
    public function about_me(){
        return view("Pages.about_me");
    }
    public function project(){
        return view("Pages.projects");

    }public function contact(){
        return view("Pages.contact");
    }
}
