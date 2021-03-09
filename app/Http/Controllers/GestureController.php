<?php

namespace App\Http\Controllers;

use App\Models\Gesture;
use Illuminate\Http\Request;

class GestureController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Http\Response
    {
        $gestures = Gesture::all();

        return view('gesture.index', compact('gestures'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request): \Illuminate\Http\Response
    {
        return view('gesture.import');
    }
}
