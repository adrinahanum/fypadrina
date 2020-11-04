<?php

namespace App\Http\Controllers;

use App\Pcname;
use Illuminate\Http\Request;

class PCnameController extends Controller
{
    public function index()
    {
        //Render a list of a resource
    
        $pcname = Pcname::latest()->get();

        return view('pcname.index', ['pcname' => $pcname]);
    }

     public function show($id)
    {
        //Show a single resource
        // dd($id);
        //die('hello');
        $pcname = Pcname::find($id);

        return view('pcname.show', ['pcname' => $pcname]);
    }

    public function create()
    {
        //show a view to create a new resource
        return view('pcname.create');
    }

    public function store()
    {
        //Persist the new resource
        //die('hello');
        //dump(request()->all());

        //validation

        //clean up
        $pcname = new Pcname();
        $pcname->PCname = request('PCname');
        $pcname->rating = request('rating');
        $pcname->detail = request('detail');

        $pcname->save();

        return redirect('/pcname');
    }

    public function edit()
    {
        //show a view to edit on existing resource
        return view('pcname.edit');
    }

    public function update()
    {
       // persist edited resource
        
    }

    public function destroy()
    {
        //delete the resource
        
    }
}
