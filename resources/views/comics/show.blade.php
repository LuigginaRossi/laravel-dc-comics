@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="d-flex gap-3 ">
                <div class="card-body pt-5">
                    <h5 class="card-title"> {{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <div>{{$comic->series}}</div>
                    <div>{{$comic->type}}</div>
                    <div>{{$comic->price}}</div>
                    <div class="d-flex aling-items-center gap-3 mt-3">
                        <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-info ">
                            Home
                        </a>
                        {{-- redirect edit.blade.php --}}
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                            <i class="fas fa-pencil"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection