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
        $sideBer->image = $request->image;
        $sideBer->name = $request->name;
        $sideBer->fb_link = $request->fb_link;
        $sideBer->linkedin_link = $request->linkedin_link;
        $sideBer->git_link = $request->git_link;
        $sideBer->footer_content = $request->content;
        
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
        $sideBer->image = $request->image;
        $sideBer->name = $request->name;
        $sideBer->fb_link = $request->fb_link;
        $sideBer->linkedin_link = $request->linkedin_link;
        $sideBer->git_link = $request->git_link;
        $sideBer->footer_content = $request->content;
       
        $sideBer->save();

        return redirect(route('sidebar.index'))->with('success', 'Data updated successfully.');
    }

    public function destroy($id){
        sideBer::destroy($id);
        return redirect(route('sidebar.index'))->with('success','Delete successfully');
    }




}

