<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //
    public function index()
    {
        $tours = Tour::all();
        // dd($tours);
        return view('index', [
            "all_tours" => $tours,
        ]);
    }

    public function get_details($id_tour)
    {
        $tour = Tour::find($id_tour);
        // dd($this->index());
        
        $tours = Tour::all();
        // dd($tours);
        return view("details", [
            'tour' => $tour,
            'all_tours' => $tours
        ]);
    }
}
