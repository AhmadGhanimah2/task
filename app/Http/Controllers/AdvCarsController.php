<?php

namespace App\Http\Controllers;


use App\AdvCars;
use App\SubCar;
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
        $subcars = SubCar::all();
        return view('adv.create',compact('subcars'));
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
       $adv->sub_car_id = $request->sub_car_id;
       $adv->description = $request->description;
       $adv->gear = $request->gear;
       $adv->color = $request->color;
       $adv->save();
       return redirect()->route('success');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function show(AdvCars $advCars, id $id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adv = AdvCars::find($id);
        $subcars = SubCar::all();
        return view('adv.edit',compact('subcars', 'adv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $adv = AdvCars::find($id);
       $adv->title = $request->title;
       $adv->sub_car_id = $request->sub_car_id;
       $adv->description = $request->description;
       $adv->gear = $request->gear;
       $adv->color = $request->color;
       $adv->save();
       return redirect()->route('advcar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdvCars  $advCars
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adv = AdvCars::find($id);
        $adv->delete();
        return redirect()->route('advcar.index');
    }
}
