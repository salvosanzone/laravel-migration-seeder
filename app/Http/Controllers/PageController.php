<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function destinazioni() {
        return view('destinazioni');
    }

    public function offerte() {
        return view('offerte');
    }

    public function contatti() {
        return view('contatti');
    }

    
}
