@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <div class="container">
    <br />
    <div class="d-flex justify-content-center align-items-center container "><h2>All Products</h2></div>
    <h3>{{$products->total()}} total products available in the database</h3>

    <b>In this page ({{$products->count()}}) products shown</b>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Category</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['decsription']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['quantity']}}</td>
        <td>{{$product['category']}}</td>

        <td><a href="{{url('products/edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{url('products/delete', $product['id'])}}" class="btn btn-danger">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  {{$products->links()}}
  </div>
  </body>
</html>
@endsection