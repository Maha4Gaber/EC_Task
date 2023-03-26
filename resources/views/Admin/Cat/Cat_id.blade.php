@extends('Admin.index')


@section('admin')



<div class="createCat">
    <div class="container">
        <div class="row">
                        <div class="col-6 mb-5">
                            <h1>{{$cat->name}}</h1>
                        </div>
                        <div class="col-6 mb-5">
                        <a href="{{ url('products/create') }}" class="creatbtn">Create Product</a>
                        </div>
                        @foreach ($products as $product)
                        @if($product->categori_id == $cat->id)
                                <div class="col-lg-3 col-md-4 col-6 ">
                                <div class="box">
                                <div class="image">
                                    <img src="../img/Products/{{$product->img}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="name">
                                        <h6>{{$product->name}}</h6>
                                    </div>
                                    <div class="price">
                                        <span>Categoriy : </span>
                                        <span>{{$product->categori_id}}</span>
                                    </div>
                                    <div class="price">
                                        <span>Price :</span>
                                        <span>{{$product->price}}$</span>
                                    </div>
                                    <div class="price">
                                        <span>Price :</span>
                                        <span>{{$product->discount}}$</span>
                                    </div>
                                    <div class="price">
                                        <span>Price :</span>
                                        <span>{{$product->quantity}}$</span>
                                    </div>
                                    <div class="btns">
                                        <button>More</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

    </div>
</div>



@endsection
