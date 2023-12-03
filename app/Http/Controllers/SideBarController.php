<?php

namespace App\Http\Controllers;
use App\Models\sideBer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SideBarController extends Controller
{
    public function index(){

        $sideBar = sideBer::all();
        return view("backend.pages.sidebar.index", compact("sideBar"));
    }

    public function create(){
        return view("backend.pages.sidebar.add");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $sideBer = new sideBer();
        $sideBer->title = $request->title;
        $sideBer->slug = Str::slug($request->title);
        $sideBer->save();

        return redirect(route('sidebar.index'))->with('success', 'Sideber created successfully.');
    }


    public function edit($id)
    {
        $sideBer = sideBer::findOrFail($id);
        return view('backend.pages.sidebar.edit', compact('sideBer'));
    }



    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            
        ]);

        $sideBer = sideBer::find($id);
        $sideBer->title = $validatedData['title'];
        $sideBer->slug = $validatedData['slug'];
       
        $sideBer->save();

        return redirect(route('sidebar.index'))->with('success', 'Data updated successfully.');
    }


}

