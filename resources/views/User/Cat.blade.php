@extends('layouts.app')

@section('content')
    <section>
        <div class="sec-title">
            <h1>{{ $cat->name }} Products
                <span></span>
            </h1>

            <div class="products">
                <div class="container">
                    <div class="boxs">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-6 ">
                                    <div class="box">
                                        <div class="head d-flex ">
                                            <div class="dots">
                                                <i class="fa fa-dot-circle" aria-hidden="true"></i>
                                                <i class="active fa fa-dot-circle" aria-hidden="true"></i>
                                                <i class="fa fa-dot-circle" aria-hidden="true"></i>
                                            </div>
                                            <i class="fa fa-list " aria-hidden="true"></i>
                                        </div>
                                        <div class="image">
                                            <img src="../img/Products/{{ $product->img }}.jpg" alt="{{ $product->img }}">
                                        </div>
                                        <div class="details">
                                            <div class="price">
                                                <span>{{ $product->name }}</span>
                                                <span>{{ $product->price }}$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
