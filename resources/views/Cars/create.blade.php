@extends('layouts.master')
@section('title')
    Create
@endsection
@section('content')
    <h1>add car</h1>
    <div class="row">

            <form action="{{route('cars.store')}}" method="post" >
                @csrf

                <div class="form-group">
                 <label name="car_name"></label>
                        <input type="text" name="car_name" class="form-control">

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

