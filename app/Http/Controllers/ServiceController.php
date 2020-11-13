<?php

namespace App\Http\Controllers;

use App\Services;
use App\Times;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        //Render a list of a resource
    
        //$service = Services::latest()->get();
        $service = Services::all();

        return view('service.index', ['service' => $service]);
    }

     public function show($id)
    {
        //Show a single resource
        // dd($id);
        //die('hello');
        $service = Services::find($id);
        return view('service.show', ['service' => $service]);

        $times = Times::find($id);
        return view('service.show', ['times' => $times]);
        
    }

    public function create()
    {
        // if method === GET
        // show a view to create a new resource
        $services = Services::all();
        $times = Times::all();

        // Hanya masuk dalam if method == POST
        if (request()->isMethod('POST')) {
            
            request()->validate([
                'name' => 'required|exists:services,id',
                'service_feedback' => 'required|exists:times,id'
            ]);

            $data = request()->input();

            // Sini panggil dari engine

            dd($data);
        }

        
        return view('service.create',['services' => $services, 'times' => $times]);
    }

    public function store()
    {
        //Persist the new resource
        //die('hello');
        //dump(request()->all());

        //validation

        //clean up
        $service = new Services();
        $service->service_type = request('service_type');
        $service->save();


        $times = new Times();
        $times->service_feedback = request('service_feedback');
        $times->save();

        return redirect('/service');
    }

    public function edit()
    {
        //show a view to edit on existing resource
        return view('service.edit');
    }

    public function update()
    {
       // persist edited resource
        
    }

    public function destroy()
    {
        //delete the resource
        
    }


    ///

    
}
