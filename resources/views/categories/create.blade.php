@extends('layouts.master')

@section('content')


<h2>Add a new category</h2>


<div class="container">
  <a href="{{ url('/category')}}" class="btn btn-info float-right mb-2">Go Back</a>
  <form method="post" action="{{ url('/add-category') }}">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleFormControlInput1">Code</label>
      <input type="text" name="code" class="form-control" placeholder="Code">
    </div>

    <div class="form-group mb-2">
      <label for="exampleFormControlInput1">Description</label>
      <input type="text" name="desc" class="form-control" placeholder="Description">
    </div>

    <button class="btn btn-primary">Submit</button>

  </form>
</div>

@endsection