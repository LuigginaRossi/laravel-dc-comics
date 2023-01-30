@extends('layouts.app')

@section('content')
  <h1>New Comic</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="thumb">
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" step=".01" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Series</label>
        <input type="text" class="form-control" name="series">
    </div>
    <div class="mb-3">
        <label class="form-label">Sale date</label>
        <input type="text" class="form-control" name="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label">Type</label>
        <input type="text" class="form-control" name="type">
    </div>


    <div class="d-flex aling-items-center gap-3 justify-content-center">
      <button class="btn btn-primary" type="submit">Save New Comic</button>
      <a href="{{ route('comics.index') }}" class="btn btn-info">
        Cancel
      </a>
    </div>
  </form>
@endsection