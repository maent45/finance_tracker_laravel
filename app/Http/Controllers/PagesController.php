<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    //function for admin route
    public function admin(){
        return view('pages.admin');
    }

    //new test function for 'test' route
    public function test(){
        return view('pages.test');
    }
}
