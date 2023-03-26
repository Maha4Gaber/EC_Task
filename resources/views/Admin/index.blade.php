@extends('layout.Header')


@section('content')

<div class="contain">
    <div class="row">
        <div class="col-2 ">
            <div class="asid">
                <h4 class=" mb-3 ">Hello Maha</h4>

                <div class="cat">
                    <ul>
                        <li>
                            <a > Category
                                <ul class="catlinks">
                                    <li><a href="{{url('category/create')}}">  Create Category</a></li>
                                    <li><a href="{{url('category')}}">  All Categories</a></li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a > Product
                                <ul class="catlinks">
                                    <li><a href="{{url('products/create')}}">  Create Product</a></li>
                                    <li><a href="{{url('products')}}">  All Products</a></li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="col-lg-9">
        {{-- <div class="left"> --}}
            @yield('admin')
            {{-- ;lsd;fo --}}
        </div>
    </div>
</div>

@endsection
