<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return 'INDEX';
    }

    public function about(){
        return 'pages.about';
    }

    public function services(){
        return 'pages.services';
    }
}
