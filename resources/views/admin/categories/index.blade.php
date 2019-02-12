@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lijst van categories</h1>

                <a class="btn btn-primary" href="/categories/create">Nieuwe category</a>
                <ul class="list-group">
                @foreach($category as $cat)
                    <li class="list-group-item">
                        {{$cat->name}} -
                        <a class="btn btn-primary" href="/categories/{{$cat->id}}/edit">Edit</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection