<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromotionsStoreRequest;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promotions = Promotion::all();

        return view('promtion.index', compact('promotions'));
    }

    /**
     * @param \App\Http\Requests\PromotionsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromotionsStoreRequest $request)
    {
        $promotion = Promotion::create($request->all());

        return redirect()->route('promotion.index');
    }
}
