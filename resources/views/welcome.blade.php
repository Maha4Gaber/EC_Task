@extends('layouts.app')

@section('content')

<section class="pt-5 mt-5">
    <div class="container">
        <div class="home">
            <div class="left ">
                <p>Premium furniturefrom the manufacturer
                    <span>B. Brand</span>
                    at reasonable prices
                </p>
                <div class="btns">
                    <button>login</button>
                    <button>login</button>
                </div>
            </div>
            <div class="right">
                <div class="img">
                    <div class="cover">
                        <div>i</div>
                        <p>Watch Company Presentaion</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="sec-title">
        <h1>Our Products
            <span></span>

        </h1>
    </div>
    <div class="products">
        <div class="container">
            <div class="boxs">
                @foreach ($Cats as $cat)
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h1><a href="{{route('category.show',$cat->id)}}">{{$cat->name}}</a></h1>
                        </div>

                        @foreach ($products as $product)
                        @if($product->categori_id == $cat->id)

                        <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="box">
                        <div class="image">
                            <img src="./img/Products/{{$product->img}}" alt="">
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
                                <span>Discount :</span>
                                <span>{{$product->discount}}$</span>
                            </div>
                            <div class="price">
                                <span>Quantity :</span>
                                <span>{{$product->quantity}}$</span>
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
                @endforeach



            </div>
        </div>
    </div>
</section>


@endsection
