<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navbar;

class NavbarController extends Controller
{
    public function index(){
        $nav = Navbar::all();
        return view('admin.pages.Navbar.index', compact('nav'));
    }

    public function create(){
        return view('admin.pages.Navbar.create');
    }

    public function store(Request $request){
       
        $validated = $request->validate([
        'name' => 'required',
        'ordering' => 'required',
        ]);

        $nav = new Navbar;
        $nav->name =  ucfirst($request->name);
        $nav->route =  lcfirst($request->name);
        $nav->ordering =  $request->ordering;

        if($nav->save()){
            return redirect()->route('navbar')->with('success','Successfully submit');
        }
        else{
            return redirect()->route('navbar_add')->with('error','Not insert data');
        }
    }

    public function edit($id){
        $post = Navbar::where('id', $id)->first();
        return view('admin.pages.Navbar.edit', compact('post'));
    }

    public function update(Request $request, $id){
      
        $validated = $request->validate([
        'name' => 'required',
        'ordering' => 'required',
        ]);
 
        $nav = Navbar::find($id);
        $nav->name =  ucfirst($request->name);
        $nav->route =  lcfirst($request->name);
        $nav->ordering =  $request->ordering;

        if($nav->save()){
            return redirect()->route('navbar')->with('success','Successfully submit');
        }
        else{
            return redirect()->route('navbar_add')->with('error','Not insert data');
        }
    }

    public function delete($id){
        $delete = Navbar::where('id',$id)->delete();
        if($delete){
            return redirect()->route('navbar')->with('success','Successfully submit');
        }
        else{
            return redirect()->route('navbar')->with('error','Not insert data');
        }
    }


}
