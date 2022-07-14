@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Cars</h1>
            <div class='actionbutton'>

                <a class='btn btn-info float-right' href="{{route('cars.create')}}">Add</a>

            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                </tr>
                </thead>
                <tbody>
                <?php $x = 0?>
                @foreach($cars as $car)

                    <?php $x++?>
                    <tr>
                        <td>{{ $x }}</td>
                        <td>{{ $car->car_name }}</td>


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

