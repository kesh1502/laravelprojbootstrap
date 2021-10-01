@extends('layouts.app')

@section('content')
<title>Create</title>
<center>
<div class="card push-top" style="width: 30rem;">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
  <div class="card-header">
    Add Product
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}"/>
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" name="price" value="{{ old('price') }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="{{ old('description') }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-success">Create Product</button>
      </form>
  </div>
</div>
</center>
@endsection