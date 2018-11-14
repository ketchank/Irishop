<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('pages.intro');
    }

    public function acceuil(){
        return view ('pages.index');
    }

    public function cosmetic(){
        return view ('pages.cosmetic');
    }
    public function electronic(){
        return view ('pages.electronic');
    }
}
