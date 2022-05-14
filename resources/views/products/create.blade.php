@extends('layouts.master')

@section('content')

<h2>Add a new product</h2>

<div class="container">
  <a href="{{ url('/')}}" class="btn btn-info float-right mb-2">Go Back</a>
  <form method="post" action="{{ url('/add-product') }}">
    {{ csrf_field() }}

    <select class="form-control" name="category_code">
      @foreach($categories as $category)
      <option value="{{ $category->code }}">{{ $category->desc }}</option>
      @endforeach
    </select>

    <div class="form-group">
      <label for="exampleFormControlInput1">Item Code</label>
      <input type="text" name="item_code" class="form-control" placeholder="Item Code">
    </div>

    <div class="form-group mb-2">
      <label for="exampleFormControlInput1">Description</label>
      <input type="text" name="description" class="form-control" placeholder="Description">
    </div>

    <button class="btn btn-primary">Submit</button>

  </form>
</div>

@endsection