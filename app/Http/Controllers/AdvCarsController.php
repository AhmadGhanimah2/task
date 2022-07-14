<?php

namespace App\Http\Controllers;


use App\AdvCars;
use Illuminate\Http\Request;

class AdvCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advs = AdvCars::all();
        return view('adv.index',compact('advs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advs = AdvCars::all();
        return view('adv.create',compact('advs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $adv = new AdvCars();
       $adv->title = $request->title;
       $adv->description = $request->description;
       $adv->gear = $request->gear;
       $adv->color = $request->color;
       $adv->save();
       return redirect()->route('advcar.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function show(AdvCars $advCars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvCars $advCars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvCars $advCars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvCars $advCars)
    {
        //
    }
}
