@extends('Admin.index')


@section('admin')



<div class="createCat">
    <div class="container">
        <div class="row">
                        <div class="col-12 mb-5">
                            <h1>{{$cat->name}}</h1>
                        </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="box">
                        <div class="image">
                            <img src="./img/Products/p1.png" alt="">
                        </div>
                        <div class="details">
                            <div class="name">
                                <h6>Armchair Maria Bella</h6>
                            </div>
                            <div class="price">
                                <span>Categoriy : </span>
                                <span>Chairs</span>
                            </div>
                            <div class="price">
                                <span>Price :</span>
                                <span>30$</span>
                            </div>
                            <div class="btns">
                                <button>More</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="box">
                        <div class="image">
                            <img src="./img/Products/p1.png" alt="">
                        </div>
                        <div class="details">
                            <div class="name">
                                <h6>Armchair Maria Bella</h6>
                            </div>
                            <div class="price">
                                <span>Categoriy : </span>
                                <span>Chairs</span>
                            </div>
                            <div class="price">
                                <span>Price :</span>
                                <span>30$</span>
                            </div>
                            <div class="btns">
                                <button>More</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ">
                        <div class="box">
                        <div class="image">
                            <img src="./img/Products/p1.png" alt="">
                        </div>
                        <div class="details">
                            <div class="name">
                                <h6>Armchair Maria Bella</h6>
                            </div>
                            <div class="price">
                                <span>Categoriy : </span>
                                <span>Chairs</span>
                            </div>
                            <div class="price">
                                <span>Price :</span>
                                <span>30$</span>
                            </div>
                            <div class="btns">
                                <button>More</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
    </div>
</div>


@endsection
