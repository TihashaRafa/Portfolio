<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view("backend.pages.home.index");
   }

   public function create(){
    return view("backend.pages.home.add");

}

public function store(Request $request)
{
    $homepage = new home();
    $homepage->name = $request->name;
    $homepage->title = $request->title;
    $homepage->title_one = $request->title_one;
    $homepage->title_two = $request->title_two;
    $homepage->title_three = $request->title_three;
    $homepage->description = $request->description;
    $homepage->image = $request->image;
    $homepage->button_one = $request->button_one;
    $homepage->button_two = $request->button_two;
    $homepage->number = $request->number;
    $homepage->email = $request->email;
    $homepage->address = $request->address;
  
    
    $homepage->save();

    return redirect(route('home.index'))->with('success', 'Home Page data created successfully.');
}




}
