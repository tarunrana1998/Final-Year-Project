<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function profile(){
        return view('pages.profile');
    }

    public function messages(){
        return view('pages.messages');
    }

    public function society(){
        return view('pages.society');
    }
}

