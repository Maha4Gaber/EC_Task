@extends('layouts.app')


@section('content')
    <div class="contain">
        <div class="row">
            <div class="col-2 ">
                <div class="asid">
                    <h4 class=" mb-3 ">Hello Maha</h4>

                    <div class="cat">
                        <ul>
                            <li>
                                <a> Category

                                </a>
                                <ul class="catlinks">
                                    <li><a href="{{ url('category/create') }}"> Create Category</a></li>
                                    <li><a href="{{ url('category') }}"> All Categories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a> Product

                                </a>
                                <ul class="catlinks">
                                    <li><a href="{{ url('products/create') }}"> Create Product</a></li>
                                    <li><a href="{{ url('products') }}"> All Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a> Sublliers

                                </a>
                                <ul class="catlinks">
                                    <li><a href="{{ url('subllier/create') }}"> Add Sublliers</a></li>
                                    <li><a href="{{ url('subllier') }}"> Show Sublliers</a></li>
                                </ul>
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
