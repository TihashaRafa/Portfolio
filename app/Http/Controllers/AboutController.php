<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $about = about::all();
        return view("backend.pages.about.index", compact("about"));
    }

    public function create(){
        return view("backend.pages.about.add");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description_one' => 'required',
        ]);

        $about = new about();
        $about->description_one                 = $request['description_one'];
        $about->description_two                 = $request['description_two'];
        $about->description_three               = $request['description_three'];
        $about->age                             = $request['age'];
        $about->birth                           = $request['birth'];
        $about->experience_year                 = $request['experience_year'];
        $about->experience                      = $request['experience'];
        $about->project_num                     = $request['project_num'];
        $about->project                         = $request['project'];
        $about->client_num                      = $request['client_num'];
        $about->client                          = $request['client'];
       
        
        $about->save();

        return redirect(route('about.index'))->with('success', 'About created successfully.');
    }


    public function edit($id)
    {
        $about = about::findOrFail($id);
        return view('backend.pages.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {

        $about = about::find($id);
        $about->description_one                 = $request['description_one'];
        $about->description_two                 = $request['description_two'];
        $about->description_three               = $request['description_three'];
        $about->age                             = $request['age'];
        $about->birth                           = $request['birth'];
        $about->experience_year                 = $request['experience_year'];
        $about->experience                      = $request['experience'];
        $about->project_num                     = $request['project_num'];
        $about->project                         = $request['project'];
        $about->client_num                      = $request['client_num'];
        $about->client                          = $request['client'];
       
       
        $about->save();

        return redirect(route('about.index'))->with('success', 'Data updated successfully.');
    }



    public function destroy($id){
        about::destroy($id);
        return redirect(route('about.index'))->with('success','Delete successfully');
    }
}
