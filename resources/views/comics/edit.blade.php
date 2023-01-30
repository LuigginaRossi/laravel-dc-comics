@extends('layouts.app')

@section('content')
  <h1>Comic Edit</h1>

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('put')

    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value={{$comic->title}}>
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" cols="30" rows="5" class="form-control">{{$comic->description}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="thumb" value={{$comic->thumb}}>
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" step=".01" class="form-control" name="price" value={{$comic->price}}>
    </div>
    <div class="mb-3">
        <label class="form-label">Series</label>
        <input type="text" class="form-control" name="series" value={{$comic->series}}>
    </div>
    <div class="mb-3">
        <label class="form-label">Sale date</label>
        <input type="text" class="form-control" name="sale_date" value={{$comic->sale_date}}>
    </div>
    <div class="mb-3">
        <label class="form-label">Type</label>
        <input type="text" class="form-control" name="type" value={{$comic->type}}>
    </div>


    <button class="btn btn-primary" type="submit">Save Changes</button>
  </form>
@endsection