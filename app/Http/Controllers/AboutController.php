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
            'title' => 'required',
        ]);

        $about = new about();
        $about->description_one                 = $validated['description_one'];
        $about->description_two                 = $validated['description_two'];
        $about->description_three               = $validated['description_three'];
        $about->age                             = $validated['age'];
        $about->birth                           = $validated['birth'];
        $about->experience_year                 = $validated['experience_year'];
        $about->experience                      = $validated['experience'];
        $about->project_num                     = $validated['project_num'];
        $about->project                         = $validated['project'];
        $about->client_num                      = $validated['client_num'];
        $about->client                          = $validated['client'];
       
        
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
        $validatedData = $request->validate([
            
        ]);

        $about = about::find($id);
        $about->description_one                 = $validatedData['description_one'];
        $about->description_two                 = $validatedData['description_two'];
        $about->description_three               = $validatedData['description_three'];
        $about->age                             = $validatedData['age'];
        $about->birth                           = $validatedData['birth'];
        $about->experience_year                 = $validatedData['experience_year'];
        $about->experience                      = $validatedData['experience'];
        $about->project_num                     = $validatedData['project_num'];
        $about->project                         = $validatedData['project'];
        $about->client_num                      = $validatedData['client_num'];
        $about->client                          = $validatedData['client'];
       
       
        $about->save();

        return redirect(route('about.index'))->with('success', 'Data updated successfully.');
    }

    public function destroy($id){
        about::destroy($id);
        return redirect(route('about.index'))->with('success','Delete successfully');
    }
}
