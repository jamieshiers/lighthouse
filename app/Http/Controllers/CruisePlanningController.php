<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itinerary as Cruise;
use App\Room;
use App\Promotion;

class CruisePlanningController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($cruise)
    {

        $days = Cruise::Code($cruise)->get();

        $venues = Room::OwnedVenues()->get();

        $promotions =

        return view('cruisePlanning.index')->with('days', $days)->with('venues', $venues);

    }


}
