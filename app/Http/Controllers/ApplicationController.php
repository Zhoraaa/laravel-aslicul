<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Tour;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function newApplication(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $tour = $request->tour_id ?? $data['tour'];
        $seats = Tour::find($tour)->count_seats;
        // dd($seats);


        if ($seats >= $data['count_passengers']) {
            Application::create([
                "name" => $data['name'],
                "email" => $data['email'],
                "count_passengers" => $data['count_passengers'],
                "tour_id" => $tour
            ]);
        }
        return redirect('/');
    }
}
