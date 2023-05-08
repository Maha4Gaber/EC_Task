@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form action="{{ url('/searchpage') }}" method="get">
        @csrf
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 col-sm-12 ser mt-5">
                <input type="text" placeholder="Enter product Name" name="name" class="  " id="">
                <label for="neme" class=" ">Name</label>
            </div>
            <div class="col-lg-3  mt-5 col-md-6 col-sm-12 ser" >
                <input type="text" name="cat" placeholder="Enter category Name" class="  " id="">
                <label for="cat" class=" ">Categoriy</label>
            </div>
            <div class="col-lg-3  mt-5 col-md-6 col-sm-12 ser" >
                <input type="text" name="subpllier" placeholder="Enter subpllier Name" class="  " id="">
                <label for="subpllier" class=" ">Subllier</label>
            </div>

            <div class="col-lg-2 mt-5  submit col-md-5 col-sm-12 " >
                <input type="submit" value="Search" class=" " id="">
            </div>
        </div>
    </form>
</div>
</div>


        <div class="products pt-5">
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


    </div>

@endsection
