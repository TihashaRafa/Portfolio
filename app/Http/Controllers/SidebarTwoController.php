<?php

namespace App\Http\Controllers;

use App\Models\sidebarTwo;
use Illuminate\Http\Request;

class SidebarTwoController extends Controller
{
    public function index(){

        $sideBars = sidebarTwo::all();
        return view("backend.pages.Sidebar_two.index", compact("sideBars"));
    }

    public function create(){
        return view("backend.pages.Sidebar_two.add");
    }

    public function store(Request $request)
    {
        $sideBars = new sidebarTwo();
        $sideBars->image = $request->image;
        $sideBars->name = $request->name;
        $sideBars->fb_link = $request->fb_link;
        $sideBars->linkedin_link = $request->linkedin_link;
        $sideBars->git_link = $request->git_link;
        $sideBars->footer_content = $request->content;
        
        $sideBars->save();

        return redirect(route('sidebars.index'))->with('success', 'Sideber created successfully.');
    }


    public function edit($id)
    {
        $sideBars = sidebarTwo::findOrFail($id);
        return view('backend.pages.Sidebar_two.edit', compact('sideBars'));
    }

    public function update(Request $request, $id)
    {
        $sideBars = sidebarTwo::find($id);
        $sideBars->image = $request->image;
        $sideBars->name = $request->name;
        $sideBars->fb_link = $request->fb_link;
        $sideBars->linkedin_link = $request->linkedin_link;
        $sideBars->git_link = $request->git_link;
        $sideBars->footer_content = $request->content;
       
        $sideBars->save();

        return redirect(route('sidebars.index'))->with('success', 'Data updated successfully.');
    }

    public function destroy($id){
        sidebarTwo::destroy($id);
        return redirect(route('sidebars.index'))->with('success','Delete successfully');
    }
}
