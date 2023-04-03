@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <section class=" ">
=======

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
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
        <div class="container">
            <ul class="catName">
                @foreach ($Cats as $cat)
<<<<<<< HEAD
                    <li><a href="{{ route('categoryid', $cat->id) }}">{{ $cat->name }}</a></li>
                @endforeach
            </ul>
            <div class="home pt-5 mt-5">
                <div class="left ">
                    <p>Premium furniturefrom the manufacturer
                        <span>B. Brand</span>
                        at reasonable prices
                    </p>
                    <div class="btns">
                        <button>login</button>
                        <a href="{{ url('search') }}">login</a>
                    </div>
                </div>
                <div class="right">
                    <div class="img">
                        <div class="cover">
                            <div>i</div>
                            <p>Watch Company Presentaion</p>
=======
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
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row">
        <form action="{{ url('/searchpage') }}" method="get">
            @csrf
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="neme" class=" col-form-label">Name</label>
                    <input type="text" name="name" class=" form-control " id="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="cat" class=" col-form-label">Categoriy</label>
                    <input type="text" name="cat" class=" form-control " id="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="subpllier" class=" col-form-label">Subllier</label>
                    <input type="text" name="subpllier" class=" form-control " id="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="subpllier" class=" col-form-label"></label>
                    <input type="submit" value="Search" class=" form-control mt-2" id="">
                </div>
            </div>
        </form>
    </div>
    </div>
    
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
                                <h1><a href="{{ url('categoryid', $cat->id) }}">{{ $cat->name }}</a></h1>
                            </div>

                            @foreach ($products as $product)
                                @if ($product->categori_id == $cat->id)
                                    <div class="col-lg-3 col-md-4 col-6 ">
                                        <div class="box">
                                            <div class="image">
                                                <img src="./img/Products/{{ $product->img }}" alt="">
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
                    @endforeach



                </div>
            </div>
        </div>
    </section>
@endsection
