@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<title>Edit</title>
<div class="container">
<a href="/home" class="btn btn-outline-primary btn-sm">Go back</a>
      <div class="card push-top">
    <div class="card-header">
      Edit & Update
    </div>
        
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('products.update', $products->product_id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}"/>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $products->price }}"/>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $products->description }}"/>
            </div>
            <button type="submit" class="btn btn-block btn-success">Update Vehicle Type</button>
        </form>
    </div>
  </div>
@endsection