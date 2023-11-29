<?php

namespace App\Http\Controllers;
use App\Models\sideBer;
use Illuminate\Http\Request;

class SideBarController extends Controller
{
    public function index(){
        $sideBar = sideBer::orderBy(0,"desc")->paginate(10);
        return view("backend.pages.sidebar.index", compact("sideBar"));
    }

    public function create(){
        return view("backend.pages.sidebar.add");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);
        sideBer::create($request->all());
        return redirect()->route('sidebar.index')
            ->with('success', 'Profile created successfully.');
    }

}
