@extends('layouts.app')

@section('content')
    <div class="container single_product">
        <div class="row my-5">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="images">
                    <div class="image1">
                        <img src="../img/aboutus.jpg" alt="">
                    </div>
                    <div class="sm_imgs">
                        <ul>
                            <li><img src="../img/aboutus.jpg" alt=""></li>
                            <li><img src="../img/aboutus.jpg" alt=""></li>
                            <li><img src="../img/aboutus.jpg" alt=""></li>
                            <li><img src="../img/aboutus.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5">
                <h6>MyArtscape</h6>
                <h1 class="my-3">Product Name</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aut repellendus, architecto odit ab
                    nemo assumenda numquam necessitatibus adipisci atque?
                </p>
                <div class="price">
                    <strong>$150 </strong>
                </div>
                <div class="addtocart mt-5">
                    <a href="" class="cart"><i>-</i></a>
                    <span>1</span>
                    <a href="" class="cart"><i>+</i></a>
                    <button class="loguot">
                        <a href="{{ url('/contact') }}">
                            Add To Cart
                        </a>
                    </button>
                </div>

            </div>
        </div>
    </div>




    </div>
@endsection
