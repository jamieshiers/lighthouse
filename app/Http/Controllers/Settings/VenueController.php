<?php

namespace App\Http\Controllers\Settings;

use App\Fleet;
use App\Http\Controllers\Controller;
use App\Http\Requests\VenueStoreRequest;
use App\Room;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Display a listing of all the Venues.
     *
     * @return View
     */
    public function index()
    {
        return view('rooms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $owners = user::all();
        $ships = Fleet::all();

        return view('rooms.create')->with('owners', $owners)->with('ships', $ships);
    }

    public function store(VenueStoreRequest $request)
    {
        $venue = Room::create([
            'user_id' => $request->owner,
            'name' => $request->name,
            'short_name' => $request->short_name,
            'capacity' => $request->capacity,
            'category' => $request->category,
            'ship_id' => "$request->ship",
        ]);

        return redirect()->route('venues.index');
    }

    public function show()
    {
    }
}
