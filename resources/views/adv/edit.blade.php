@extends('layouts.master')
@section('title')
    Edit
@endsection
@section('content')
    <h1>edit adv</h1>
    <div class="row">

        <form action="{{route('advcar.update', ['advcar' => $adv->id])}}" method="post">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="exampleInputEmail1">ADV Title</label>
                <input type="text" name="title" value="{{ $adv->title }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="What is the title Adv">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">description</label>
                <input type="text" value="{{ $adv->description }}" class="form-control" name="description" id="exampleInputPassword1" placeholder="description">
            </div>
            <div class="form-group">
                <label for="">Car</label>
                <select name="sub_car_id" id="" class="form-control">
                    @foreach ($subcars as $subcar)
                        <option @if ($subcar->id == $adv->sub_car_id)
                            selected
                        @endif value="{{ $subcar->id }}">{{ $subcar->car->car_name . ' ' . $subcar->sub_car }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="cars">Choose a gear:</label>

                <select name="gear">
                    <option @if ($adv->gear == 0)
                        selected
                    @endif value="0">Manuel</option>

                    <option @if ($adv->gear == 1)
                        selected
                    @endif value="1">Auto</option>
                </select>
            </div>
            <div>
                <label for="cars">Choose a Color:</label>

                <select name="color">
                    <option @if ($adv->color == "white")
                        selected
                    @endif value="white">white</option>
                    <option @if ($adv->color == "red")
                        selected
                    @endif value="red">red</option>
                    <option @if ($adv->color == "black")
                        selected
                    @endif value="black">black</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>

@endsection

