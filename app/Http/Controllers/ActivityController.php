<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\ActivityStoreRequest;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $activities = Activity::all();

        return view('activity.index', compact('activity'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('activity.create');
    }

    /**
     * @param \App\Http\Requests\ActivityStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityStoreRequest $request)
    {
        $activity = Activity::create($request->all());

        return redirect()->route('activity.index');

        $request->session()->flash('activity.title', $activity->title);
    }
}
