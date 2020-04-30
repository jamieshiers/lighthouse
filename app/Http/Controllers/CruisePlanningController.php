<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itinerary as Cruise;
use App\Room;
use App\DayPromotion as Promotion;

class CruisePlanningController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($cruise)
    {

        $days = Cruise::Code($cruise)->get();

       $start = $days->first()->day_date;
       $end = $days->last()->day_date;

       
       return view('cruisePlanning.index', [
            'days' =>  $days,
            'venues' => Room::OwnedVenues()->get(),
            'promotions' => Promotion::ByDate($start, $end)->get(),
            'title' => $cruise,
       ]);

        

        //return view('cruisePlanning.index')->with('days', $days)->with('venues', $venues);

    }


}
