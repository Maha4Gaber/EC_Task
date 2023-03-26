@extends('Admin.index')


@section('admin')


<div class="createCat">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="">
                    Products
                </h1>
            </div>
            <div class="col-6">
                <a href="{{ url('products/create') }}" class="creatbtn">Create Product</a>
            </div>
            <div class="col-12 mt-5">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">price</th>
                            <th scope="col">discount</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td><a>{{$product->name}}</a></td>
                                <td>{{$product->desc}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discount}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>

    </div>
</div>

@endsection
