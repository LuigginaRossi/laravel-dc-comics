@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"> {{$comic->title}}</h5>
                <p class="card-text">{{$comic->description}}</p>
                <div>{{$comic->series}}</div>
                <div>{{$comic->type}}</div>
                <div>{{$comic->price}}</div>
                <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-info mt-3">
                    Home
                </a>
                </div>
            </div>
        </div>
    </div>
        
@endsection