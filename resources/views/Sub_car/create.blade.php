@extends('layouts.master')
@section('title')
    SubCar
@endsection
@section('content')
    <div class="row">
        <form action="{{route('subcar.store')}}" method="post">
            @csrf

            <div class="form-group">
                <h1>SubCar</h1>
                <input type="text" name="sub_car" class="form-control" required>

            </div>
            <div class="form-group">
                <label name="car_id">Car </label>
                <select name="car_id">
                    <option>
                        Select The Car
                    </option>
                    @foreach($cars as $car)
                        <option value="{{$car->id}}">
                            {{$car->car_name}}

                        </option>

                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <div class="col-md-6">

                    <input type="submit" name="submit" value='Submit' class='btn btn-success'>
                </div>
            </div>

        </form>

    </div>
    </div>

@endsection

