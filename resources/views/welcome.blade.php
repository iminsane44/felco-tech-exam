
@extends('layouts.master')

@section('content')

<!-- <a href="{{ url('/home') }}">Home</a>
<h3>Transaction Add/Edit</h3> -->





  <h4>ITEMS</h4>
  <a href="{{ url('/add-product')}}" class="btn btn-primary float-right mb-2">Add Product</a>
  <table class="table table-dark table-striped">
    <!-- table class="table" -->
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ITEM TYPE</th>
        <th scope="col">ITEM CODE</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">ACTION</th>

      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->category->code}}</td>
        <td>{{$product->item_code}}</td>
        <td>{{$product->description}}</td>
        <td><a href="{{ url('/edit-product/'.$product->id )}}" class="btn btn-primary">Edit</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>


@endsection