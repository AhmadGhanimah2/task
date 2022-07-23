@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class='actionbutton'>

                <a class='btn btn-info float-right' href="{{ route('advcar.create') }}">Add</a>

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
                    @foreach ($advs as $i => $adv)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $adv->SubCar->sub_car }}</td>
                            <td>{{ $adv->title }}</td>
                            <td>{{ $adv->description }}</td>
                            <td>
                                @if ($adv->gear == 0)
                                    Manual
                                @else
                                    Automatic
                                @endif
                            </td>
                            <td>{{ $adv->color }}</td>


                            <td>
                                <!-- Edit -->
                                <a href="{{ route('advcar.edit', ['advcar' => $adv->id]) }}"
                                    class="btn btn-sm btn-info">Edit</a>
                                <!-- Delete -->
                                <form action="{{ route('advcar.destroy', ['advcar' => $adv->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
