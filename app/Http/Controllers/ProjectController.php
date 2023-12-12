<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::all();
        return view("backend.pages.Project.index", compact("projects"));
    }

    public function create(){
        return view("backend.pages.Project.add");
    }

    public function store(Request $request)
    {
        $sideBars = new Project();
        $sideBars->image = $request->image;
        $sideBars->name = $request->name;
        $sideBars->fb_link = $request->fb_link;
        $sideBars->linkedin_link = $request->linkedin_link;
        $sideBars->git_link = $request->git_link;
        $sideBars->footer_content = $request->content;
        
        $sideBars->save();

        return redirect(route('projects.index'))->with('success', 'Sideber created successfully.');
    }


    public function edit($id)
    {
        $sideBars = Project::findOrFail($id);
        return view('backend.pages.Project.edit', compact('sideBars'));
    }

    public function update(Request $request, $id)
    {
        $sideBars = Project::find($id);
        $sideBars->image = $request->image;
        $sideBars->name = $request->name;
        $sideBars->fb_link = $request->fb_link;
        $sideBars->linkedin_link = $request->linkedin_link;
        $sideBars->git_link = $request->git_link;
        $sideBars->footer_content = $request->content;
       
        $sideBars->save();

        return redirect(route('projects.index'))->with('success', 'Data updated successfully.');
    }

    public function destroy($id){
        Project::destroy($id);
        return redirect(route('projects.index'))->with('success','Delete successfully');
    }
}
