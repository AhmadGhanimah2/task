@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class='actionbutton'>

                <a class='btn btn-info float-right' href="{{route('advcar.create')}}">Add</a>

            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>sub_car_id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>gear</th>
                    <th>color</th>

                </tr>
                </thead>
                <tbody>
                <?php $x = 0?>
                @foreach($advs as $adv)
                    <?php $x++?>
                    <tr>
                        <td>{{ $x }}</td>
                        <td>{{ $adv->SubCar->sub_car }}</td>
                        <td>{{ $adv->title }}</td>
                        <td>{{ $adv->description }}</td>
                        <td>{{ $adv->gear }}</td>
                        <td>{{ $adv->color }}</td>


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

