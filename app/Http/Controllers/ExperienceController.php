<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){

        $experience = Experience::all();
        return view("backend.pages.experience.index", compact("experience"));
    }

    public function create(){
        return view("backend.pages.experience.add");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $experience = new Experience();
        $experience->title                           = $request['title'];
        $experience->start_year                      = $request['start_year'];
        $experience->end_year                        = $request['end_year'];
        $experience->experience_title                = $request['experience_title'];
        $experience->organization                    = $request['organization'];
        $experience->description                     = $request['description'];
       
        $experience->save();

        return redirect(route('experience.index'))->with('success', 'Experience data created successfully.');
    }


    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('backend.pages.experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $experience = Experience::find($id);
        $experience->title = $request->title;
        $experience->start_year = $request->start_year;
        $experience->end_year = $request->end_year;
        $experience->experience_title = $request->experience_title;
        $experience->organization = $request->organization;
        $experience->description = $request->description;

       
        $experience->save();

        return redirect(route('experience.index'))->with('success', 'Data updated successfully.');
    }



    public function destroy($id){
        Experience::destroy($id);
        return redirect(route('experience.index'))->with('success','Delete successfully');
    }
}
