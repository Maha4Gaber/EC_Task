@extends('layouts.app')

@section('content')
<section>
        <div class="container">
            <ul class="catName">
                @foreach ($Cats as $cat)
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
    {{-- </div> --}}

    <section>
        <div class="sec-title">
            <h1>Our Products
                <span></span>

            </h1>
        </div>
        <div class="products">
            <div class="container">
                <div class="boxs">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-6 ">
                                <div class="box">
                                    <div class="head d-flex ">
                                        <h5>{{ $cat->name }}</h5>
                                        <h5><i class="fa fa-list " aria-hidden="true"></i></h5>
                                    </div>
                                    <div class="image">
                                        <img src="./img/Products/{{ $product->img }}" alt="">
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
    </section>
@endsection
