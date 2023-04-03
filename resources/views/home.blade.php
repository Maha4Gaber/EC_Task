@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
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


        <div class="products pt-5">
            <div class="container">
                <div class="boxs">
                    <div class="row">
                        @foreach ($products as $product)
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
                    @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>
=======
>>>>>>> Stashed changes
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< Updated upstream
=======
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
@endsection
