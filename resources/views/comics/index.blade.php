@extends('layouts.app')

@section('content')
    {{-- <h4>file index</h4> --}}
    <div class="d-flex justify-content-end py-4 ">
        <a href="{{ route('comics.create') }}" class="btn btn-warning">
            Add New Comic<i class="fas fa-plus px-2"></i>
        </a>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{$comic->title}}</h5>
                        <p class="card-text">{{Str::limit($comic->description , 30)}}</p>
                        {{-- <div>{{$comic->series}}</div>
                        <div>{{$comic->type}}</div> --}}
                        <div>{{$comic->price}}</div>
                        <div class="d-flex gap-3 pt-4">
                            {{-- redirect show.blade.php --}}
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </a>

                            {{-- redirect edit.blade.php --}}
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                <i class="fas fa-pencil"></i>
                            </a>

                            {{-- delete-button --}}
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf()
                                @method('delete')
                
                                <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                            

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection