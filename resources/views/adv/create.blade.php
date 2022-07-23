@extends('layouts.master')
@section('title')
    Create
@endsection
@section('content')
    <h1>add adv</h1>
    <div class="row">

        <form action="{{route('advcar.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">ADV Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="What is the title Adv">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">description</label>
                <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="description">
            </div>
            <div class="form-group">
                <label for="">Car</label>
                <select name="sub_car_id" id="" class="form-control">
                    @foreach ($subcars as $subcar)
                        <option value="{{ $subcar->id }}">{{ $subcar->car->car_name . ' ' . $subcar->sub_car }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="cars">Choose a gear:</label>

                <select name="gear">
                    <option value="0">Manuel</option>
                    <option value="1">Auto</option>
                </select>
            </div>
            <div>
                <label for="cars">Choose a Color:</label>

                <select name="color">
                    <option value="white">white</option>
                    <option value="red">red</option>
                    <option value="black">black</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>

@endsection

