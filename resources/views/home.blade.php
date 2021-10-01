@extends('layouts.app')

@section('content')
<title>{{ config('app.name', 'Home') }}</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-dashboard">
                <div class="card-header">{{ __('Options') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row row-cols-1 row-cols-md-2 g-2">
                        <div class="col">    
                            <div class="card-dashboard" style="width: 17rem;" >
                                <img src="https://www.flip180media.com/wp-content/uploads/2019/10/catalog-layout-design-03-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Products</h2>
                                    <p class="card-text">Navigate through product to be able to view, create, edit or delete products.</p>
                                    <a href="/products" class="btn btn-dark btn-md">View Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">    
                            <div class="card-dashboard" style="width: 17rem;" >
                                <img src=" https://mfishbein.com/wp-content/uploads/2015/12/image01.jpg" style="height: 11.5rem;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Blogs</h2>
                                    <p class="card-text">Navigate through blog posts to be able to view, create, edit or delete blog posts.</p>
                                    <a href="/blog" class="btn btn-dark btn-md">View Now</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
