<?php

namespace App\Http\Controllers;

use App\Models\sidebarTwo;
use Illuminate\Http\Request;

class SidebarTwoController extends Controller
{
    public function index(){

        $sideBar = sidebarTwo::all();
        return view("backend.pages.Sidebar_two.index", compact("sideBar"));
    }

    public function create(){
        return view("backend.pages.Sidebar_two.add");
    }

    public function store(Request $request)
    {
        $sideBer = new sidebarTwo();
        $sideBer->image = $request->image;
        $sideBer->name = $request->name;
        $sideBer->fb_link = $request->fb_link;
        $sideBer->linkedin_link = $request->linkedin_link;
        $sideBer->git_link = $request->git_link;
        $sideBer->footer_content = $request->content;
        
        $sideBer->save();

        return redirect(route('sidebars.index'))->with('success', 'Sideber created successfully.');
    }


    public function edit($id)
    {
        $sideBer = sidebarTwo::findOrFail($id);
        return view('backend.pages.Sidebar_two.edit', compact('sideBer'));
    }

    public function update(Request $request, $id)
    {
        $sideBer = sidebarTwo::find($id);
        $sideBer->image = $request->image;
        $sideBer->name = $request->name;
        $sideBer->fb_link = $request->fb_link;
        $sideBer->linkedin_link = $request->linkedin_link;
        $sideBer->git_link = $request->git_link;
        $sideBer->footer_content = $request->content;
       
        $sideBer->save();

        return redirect(route('sidebars.index'))->with('success', 'Data updated successfully.');
    }

    public function destroy($id){
        sidebarTwo::destroy($id);
        return redirect(route('sidebars.index'))->with('success','Delete successfully');
    }
}
