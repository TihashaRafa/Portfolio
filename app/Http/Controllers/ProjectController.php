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
        $projects = new Project();
        $projects->image = $request->image;
        $projects->Project_title = $request->Project_title;
        $projects->category = $request->category;
        
        $projects->save();

        return redirect(route('project.index'))->with('success', 'Sideber created successfully.');
    }


    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        return view('backend.pages.Project.edit', compact('projects'));
    }

    public function update(Request $request, $id)
    {
        $projects = Project::find($id);
        $projects->image = $request->image;
        $projects->Project_title = $request->Project_title;
        $projects->category = $request->category;
       
        $projects->save();

        return redirect(route('project.index'))->with('success', 'Data updated successfully.');
    }

    public function destroy($id){
        Project::destroy($id);
        return redirect(route('project.index'))->with('success','Delete successfully');
    }
}
