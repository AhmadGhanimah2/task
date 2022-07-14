@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if(Session::has('Add'))
                <div class="alert {{ Session::get('alert-class') }}">
                    {{ Session::get('Add') }}
                </div>
            @endif

            <div class='actionbutton'>

                <a class='btn btn-info float-right' href="{{route('subcar.create')}}">Add</a>

            </div>
            <table class="table" >
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Car</th>
                </tr>
                </thead>
                <tbody>
                <?php $x = 0?>
                @foreach($SubCars as $Subcar)

                    <?php $x++?>
                    <tr>
                        <td>{{ $x }}</td>
                        <td>{{ $Subcar->car->car_name }}</td>
                        <td>{{ $Subcar->sub_car }}</td>



                        <td>
                            <!-- Edit -->
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <!-- Delete -->
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>


@endsection

