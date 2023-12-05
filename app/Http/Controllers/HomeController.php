<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view("backend.pages.home.index");
   }

   public function create(){
    return view("backend.pages.home.add");

}

}
