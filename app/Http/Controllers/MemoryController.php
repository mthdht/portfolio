<?php

namespace App\Http\Controllers;

use App\MemoryScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoryController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * return all scores for memory game.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memory.index');
    }

    public function ranking()
    {
        return MemoryScore::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Auth::user()->memoryScores()->create($request->all());
        //return MemoryScore::create(array_merge($request->all(), ["user_id" => Auth::id()]));
    }

    public function userScores()
    {
        return Auth::user()->scores;
    }

}
