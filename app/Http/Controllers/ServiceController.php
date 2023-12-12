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
        $service = new service();
        $service->Service_title                           = $request['Service_title'];
        $service->Service_num                             = $request['Service_num'];
        $service->description                             = $request['description'];
        $service->image                                   = $request['image'];
      
        $service->save();

        return redirect(route('service.index'))->with('success', 'service data created successfully.');
    }

    public function edit($id)
    {
        $service = service::findOrFail($id);
        return view('backend.pages.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = service::find($id);
        $service->Service_title = $request->Service_title;
        $service->Service_num = $request->Service_num;
        $service->description = $request->description;
        $service->image = $request->image;

       
        $service->save();

        return redirect(route('service.index'))->with('success', 'Data updated successfully.');
    }


    public function destroy($id){
        service::destroy($id);
        return redirect(route('service.index'))->with('success','Delete successfully');
    }
}
