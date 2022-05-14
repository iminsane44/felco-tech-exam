@extends('layouts.master')

@section('content')
<h3>Transaction Add/Edit</h3>




<div class="container">
  <h4>Categories</h4>
  <a href="{{ url('/add-category')}}" class="btn btn-primary float-right mb-2">Add Category</a>
  <table class="table table-dark table-striped">
    <!-- table class="table" -->
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">CODE</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">DATE CREATED</th>
        <th scope="col">LAST EDIT DATE</th>
        <th scope="col">ACTION</th>

      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->code}}</td>
        <td>{{$category->desc}}</td>
        <td>{{$category->created_at }}</td>
        <td>{{$category->updated_at }}</td>
        <td><a href="{{ url('/edit-category/'.$category->id )}}" class="btn btn-primary">Edit</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>

  <div>

    @endsection