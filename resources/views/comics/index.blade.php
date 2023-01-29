@extends('layouts.app')

@section('content')
    <h4>file index</h4>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> {{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    {{-- <div>{{$comic->series}}</div>
                    <div>{{$comic->type}}</div> --}}
                    <div>{{$comic->price}}</div>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-link">
                        <i class="fas fa-eye"></i>
                    </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection