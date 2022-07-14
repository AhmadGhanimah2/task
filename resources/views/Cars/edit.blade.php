@extends('layouts.master')
@section('title')
    Create
@endsection
@section('content')
    <div class="row">
        <h1>تعديل سياره رئيسيه</h1>
        <form action="{{route('cars.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label name="car_name"></label>
                <input type="text" value="{{$cars->id}}" name="car_name" class="form-control">

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

