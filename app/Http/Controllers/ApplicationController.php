<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function new(Request $request)
    {
        $data = $request->all();
        // dd($request->all());
        Application::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "count_passengers" => $data['count_passengers'],
            "tour_id" => $data['tour_id']
        ]);
        // return redirect('/');
    }
}
