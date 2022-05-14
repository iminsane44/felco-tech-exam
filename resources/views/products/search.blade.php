@extends('layouts.master')

@section('content')


<h4>REPORTS DISPLAY</h4>
<table class="table table-dark table-striped">
  <!-- table class="table" -->
  <thead>
    <tr>
      <th scope="col">ITEM TYPE CODE</th>
      <th scope="col">ITEM TYPE DESCRIPTION</th>
      <th scope="col">ITEM CODE</th>
      <th scope="col">ITEM DESCRIPTION</th>
      <!-- <th scope="col">action</th> -->

    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{$product->category_code}}</td>
      <td>{{$product->category->desc}}</td>
      <td>{{$product->item_code}}</td>
      <td>{{$product->description}}</td>
      <!-- <td><a href="{{ url('/edit-product/'.$product->id )}}" class="btn btn-primary">Edit</a></td> -->
      
    </tr>
    @endforeach

  </tbody>
</table>


@endsection