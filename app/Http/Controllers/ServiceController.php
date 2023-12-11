<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        $service = service::all();
        return view("backend.pages.service.index", compact("service"));
    }

    public function create(){
        return view("backend.pages.service.add");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $service = new service();
        $service->Service_title                           = $request['Service_title'];
        $service->Service_num                             = $request['Service_num'];
        $service->description                             = $request['description'];
        $service->image                                   = $request['image'];
       
        
       
        $service->save();

        return redirect(route('service.index'))->with('success', 'service data created successfully.');
    }


    // public function edit($id)
    // {
    //     $experience = service::findOrFail($id);
    //     return view('backend.pages.service.edit', compact('experience'));
    // }

    // public function update(Request $request, $id)
    // {

    //     $experience = service::find($id);
    //     $experience = new service();
    //     $experience->title                           = $request['title'];
    //     $experience->start_year                      = $request['start_year'];
    //     $experience->end_year                        = $request['end_year'];
    //     $experience->experience_title                = $request['experience_title'];
    //     $experience->organization                    = $request['organization'];
    //     $experience->description                     = $request['description'];
       
       
    //     $experience->save();

    //     return redirect(route('service.index'))->with('success', 'Data updated successfully.');
    // }



    // public function destroy($id){
    //     service::destroy($id);
    //     return redirect(route('service.index'))->with('success','Delete successfully');
    // }
}
