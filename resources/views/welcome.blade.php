@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <form action="{{ url('/searchpage') }}" method="get">
                    @csrf
                    <div class="row ">
                        <div class="col-lg-3 col-md-6 col-sm-12 ser ">
                            <input type="text" placeholder="Enter product Name" name="name" class="  " id="">
                            <label for="neme" class=" ">Name</label>
                        </div>
                        <div class="col-lg-3   col-md-6 col-sm-12 ser">
                            <input type="text" name="cat" placeholder="Enter category Name" class="  "
                                id="">
                            <label for="cat" class=" ">Categoriy</label>
                        </div>
                        <div class="col-lg-3   col-md-6 col-sm-12 ser">
                            <input type="text" name="subpllier" placeholder="Enter subpllier Name" class="  "
                                id="">
                            <label for="subpllier" class=" ">Subllier</label>
                        </div>

                        <div class="col-lg-2   submit col-md-5 col-sm-12 ">
                            <input type="submit" value="Search" class=" " id="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="home pt-5 mt-5">
                <div class="left ">
                    <h1>MyArtscape</h1>
                    <p>
                        We offer premium drawing tools from top manufacturers at
                        <span>affordable prices</span>
                        , so you can create your best work without breaking the bank.
                    </p>
                    <div class="btns">
                        <button>login</button>
                        <a href="{{ url('search') }}">login</a>
                    </div>
                </div>
                <div class="right">
                    <div class="img">
                        <div class="cover">
                            <div><i class="fa fa-play"></i></div>
                            <p>Watch Company Presentaion</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container">
        <ul class="catName">
            @foreach ($Cats as $cat)
                <li><a href="{{ route('categoryid', $cat->id) }}">{{ $cat->name }}</a></li>
            @endforeach
            <li><a>+ More</a></li>
        </ul>

        <section>
            <div class="sec-title">
                <h1>Popular Products
                    <span></span>
                </h1>
            </div>
            <div class="products">
                <div class="boxs">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-12 ">
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
                                        <div class="overlay">
                                            <div class="">
                                                <button class="loguot">
                                                    <a href="{{ url('addtocart', $product->id) }}">Add to cart</a>
                                                </button>
                                            </div>
                                            {{-- <form id="cart" action="{{ route('cart.edit',$product->id) }}" method="get"
                                            class="d-none">
                                            @csrf
                                            {{-- @method('p') --}}
                                            {{-- <input type="text" value="id" hidden> --}}
                                            {{-- </form> --}}
                                        </div>
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
        </section>
    @endsection
