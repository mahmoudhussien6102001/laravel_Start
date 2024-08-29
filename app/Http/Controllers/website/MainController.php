<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('website.pages.index');
    }
    public function about(){
        return view('website.pages.about');
    }
    public function book(){
        return view('website.pages.book');
    }
    public function menu(){
        return view('website.pages.menu');
    }
}