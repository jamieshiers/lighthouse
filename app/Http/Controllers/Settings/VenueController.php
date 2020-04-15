<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Room;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Display a listing of all the Venues.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('rooms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }
}
