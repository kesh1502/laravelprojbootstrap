@extends('layouts.app')

@section('content')
<title>{{ config('app.name', 'Home') }}</title>
@guest
@else
@if (Auth::user()->hasRole('Admin'))
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
                    <div class="row row-cols-2 row-cols-md-2 g-2">
                        <div class="col">    
                            <div class="card-dashboard" style="width: 17rem;" >
                                <img src="https://preview.pixlr.com/images/800wm/1236/2/1236106968.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Users Management</h2>
                                    <p class="card-text">Manage the users and their role in the website</p>
                                    <a href="/users" class="btn btn-dark btn-md">Manage Users</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">    
                            <div class="card-dashboard" style="width: 17rem;" >
                                <img src="https://us.123rf.com/450wm/artursz/artursz1909/artursz190906316/129642088-word-writing-text-know-your-role-business-photo-showcasing-end-acting-outside-who-you-actually-are-p.jpg?ver=6" style="height: 11.5rem;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Roles Management</h2>
                                    <p class="card-text">Manage the roles available in the website</p>
                                    <a href="/roles" class="btn btn-dark btn-md">Manage Roles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">    
                            <div class="card-dashboard" style="width: 17rem;" >
                                <img src="https://www.flip180media.com/wp-content/uploads/2019/10/catalog-layout-design-03-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Products</h2>
                                    <p class="card-text">Navigate through product to be able to view, create, edit or delete products.</p>
                                    <a href="/products" class="btn btn-dark btn-md">View Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">    
                            <div class="card-dashboard" style="width: 17rem;" >
                                <img src=" https://mfishbein.com/wp-content/uploads/2015/12/image01.jpg" style="height: 11.5rem;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Blogs</h2>
                                    <p class="card-text">Navigate through blog posts to be able to view, create, edit or delete blog posts.</p>
                                    <a href="/blog" class="btn btn-dark btn-md">View Blogs</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (Auth::user()->hasRole('Vendor'))
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
                    <div class="row row-cols-2 row-cols-md-2 g-2">
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
                                <img src="https://pj1.com/wp-content/uploads/2020/02/engine_assembly.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Create Products</h2>
                                    <p class="card-text">Create a new product right now in your website  which is editable and fun to navigate.</p>
                                    <a href="/products/create" class="btn btn-dark btn-md">Create Now</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (Auth::user()->hasRole('Editor'))
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
                    <div class="row row-cols-2 row-cols-md-2 g-2">
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
                    <div class="col">    
                        <div class="card-dashboard" style="width: 17rem;" >
                            <img src="https://www.reliablesoft.net/wp-content/uploads/2017/03/seo-friendly-blog-posts.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Create Blog</h2>
                                <p class="card-text">Create a new Blog right now in your website which is editable and fun to write.</p>
                                <a href="/blog/create" class="btn btn-dark btn-md">Create Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endguest
@endsection
