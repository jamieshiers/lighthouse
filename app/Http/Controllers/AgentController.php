<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $agents = Agent::all();

        return view('agent.index', compact('agents'));
    }
}
