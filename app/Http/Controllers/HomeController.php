<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){

    $homepage = Home::all();
    return view("backend.pages.home.index", compact("homepage"));
   }

   public function create(){
    return view("backend.pages.home.add");

}

public function store(Request $request)
{
   
    $homepage = new home();
    $homepage->name                         = $request->name;
    $homepage->title                        = $request->title;
    $homepage->title_one                    = $request->title_one;
    $homepage->title_two                    = $request->title_two;
    $homepage->title_three                  = $request->title_three;
    $homepage->description                  = $request->description;
    $homepage->image                        = $request->image;
    $homepage->button_one                   = $request->button_one;
    $homepage->button_two                   = $request->button_two;
    $homepage->number                       = $request->number;
    $homepage->email                        = $request->email;
    $homepage->address                      = $request->address;
  
    
    $homepage->save();

    return redirect(route('home.index'))->with('success', 'Home Page data created successfully.');
}


// public function edit($id)
// {
//     $homepage = home::findOrFail($id);
//     return view('backend.pages.home.edit', compact('homepage'));
// }

// public function update(Request $request, $id)
// {
//     $homepage = home::find($id);
//     $homepage->name                         = $request->name;
//     $homepage->title                        = $request->title;
//     $homepage->title_one                    = $request->title_one;
//     $homepage->title_two                    = $request->title_two;
//     $homepage->title_three                  = $request->title_three;
//     $homepage->description                  = $request->description;
//     $homepage->image                        = $request->image;
//     $homepage->button_one                   = $request->button_one;
//     $homepage->button_two                   = $request->button_two;
//     $homepage->number                       = $request->number;
//     $homepage->email                        = $request->email;
//     $homepage->address                      = $request->address;
   
//     $homepage->save();

//     return redirect(route('home.index'))->with('success', 'Home Page updated successfully.');
// }



public function edit($id)
{
    $homepage = home::findOrFail($id);
    return view('backend.pages.home.edit', compact('homepage'));
}

public function update(Request $request, $id)
{
    $homepage = home::find($id);
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

    return redirect(route('home.index'))->with('success', 'Data updated successfully.');
}


public function destroy($id){
    home::destroy($id);
    return redirect(route('home.index'))->with('success','Delete successfully');
}




}
