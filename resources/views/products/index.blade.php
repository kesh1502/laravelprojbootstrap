@extends('layouts.app')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<title>Products</title>
<div class="push-top">
  @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
  @endif

 
  <div class="container">
    <h1>Products</h1></br>
    <a href="/products/create" class="btn btn-primary btn-sm">Create New Product</a></br></br>
    <table class="table">
      <thead>
          <tr class="table-warning">
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Product description</td>
            <td class="text-center">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($products as $product)
          <tr>
              <td>{{$product->product_id}}</td>
              <td>{{$product->product_name}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->description}}</td>
              <td class="text-center">
                  <a href="{{ route('products.edit', $product->product_id)}}" class="btn btn-success btn-md">Edit</a>
                  <form action="{{ route('products.destroy', $product->product_id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-md" type="submit">Delete</button>
                    </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
      {!! $products->links() !!}
    </div>
  </div>
<div>
@endsection