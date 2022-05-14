<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

@extends('layouts.master')

@section('content')

<h1>You can edit product here</h1>


<div class="container">
  <a href="{{ url('/category')}}" class="btn btn-info float-right mb-2">Go Back</a>
  <form method="POST" action="{{ url('/edit-category/'.$category->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
      <label for="exampleFormControlInput1">Item Code</label>
      <input type="text" name="code" value="{{ old ('code') ?? $category->code }}" class="form-control" placeholder="Item Code">
    </div>

    <div class="form-group mb-2">
      <label for="exampleFormControlInput1">Description</label>
      <input type="text" name="desc" value="{{ old ('desc') ?? $category->desc }}" class="form-control" placeholder="Description">
    </div>

    <button class="btn btn-primary">Submit</button>

  </form>
</div>
@endsection