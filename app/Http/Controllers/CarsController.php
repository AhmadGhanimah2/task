<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('Cars.index', compact('cars'));
    }

    public function create()
    {
        return view('Cars.create');
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->car_name = $request->car_name;
        $car->save();
        return redirect()->route('cars.index');


    }

    public function edit($id)
    {
        $cars = Car::find($id);
        return view('Cars.edit', compact('cars'));

    }

    public function show()
    {

    }

    public function delete()
    {

    }
}
