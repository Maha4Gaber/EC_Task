@extends('layouts.app')

@section('content')
    <section>
        <div class="sec-title">
            <h1>{{ $cat->name }} Products
                <span></span>
            </h1>

            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                        @if ($product->categori_id == $cat->id)
                            <div class="col-lg-3 col-md-4 col-6 ">
                                <div class="box">
                                    <div class="image">
                                        <img src="../img/Products/{{ $product->img }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <h6>{{ $product->name }}</h6>
                                        </div>
                                        <div class="price">
                                            <span>Categoriy : </span>
                                            <span>{{ $product->categori_id }}</span>
                                        </div>
                                        <div class="price">
                                            <span>Price :</span>
                                            <span>{{ $product->price }}$</span>
                                        </div>
                                        <div class="price">
                                            <span>Discount :</span>
                                            <span>{{ $product->discount }}$</span>
                                        </div>
                                        <div class="price">
                                            <span>Quantity :</span>
                                            <span>{{ $product->quantity }}$</span>
                                        </div>
                                        <div class="btns">
                                            <button class="loguot">More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </section>
@endsection
