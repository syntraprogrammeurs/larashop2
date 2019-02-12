@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lijst van brands</h1>

                <a class="btn btn-primary" href="/brands/create">Nieuwe Brand</a>
                <ul class="list-group">
                @foreach($brands as $brand)
                    <li class="list-group-item">
                        {{$brand->name}} -
                        <a class="btn btn-primary" href="/brands/{{$brand->id}}/edit">Edit</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection