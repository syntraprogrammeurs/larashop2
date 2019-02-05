@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lijst van brands</h1>
                <ul class="list-group">
                @foreach($brands as $brand)
                    <li class="list-group-item">{{$brand->name}}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection