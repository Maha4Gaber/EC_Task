@extends('layouts.app')

@section('content')
    <div class="blogs">
        <div class="landsection text-center py-5">
            <h1 class="my-3">Welcom To Our Blog</h1>
            <p class="my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perspiciatis repellat debitis
                repellendus rem
                voluptatum placeat similique beatae dolor expedita.
            </p>
            <a href="" class="my-4">Learn More <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="container my-5">
            <ul class="catName">
                @foreach ($Cats as $cat)
                    <li><a href="{{ route('categoryid', $cat->id) }}">{{ $cat->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="row mx-5 my-5">
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="left-boxs">
                    <h1>Recent Post</h1>
                    <div class="box d-flex my-3 justify-content-between">
                        <img src="../img/1.png" alt="">
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam molestias
                            </p>
                            <div class="link">
                                <a href="" class="my-4">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="box d-flex my-3 justify-content-between">
                        <img src="../img/1.png" alt="">
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam molestias
                            </p>
                            <div class="link">
                                <a href="" class="my-4">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="box d-flex my-3 justify-content-between">
                        <img src="../img/1.png" alt="">
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam molestias
                            </p>
                            <div class="link">
                                <a href="" class="my-4">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="box d-flex my-3 justify-content-between">
                        <img src="../img/1.png" alt="">
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam molestias
                            </p>
                            <div class="link">
                                <a href="" class="my-4">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="right-boxs row">
                    <div class=" col-lg-6 col-md-12 col-sm-12">
                        <div class="box">
                            <a href="#" class="img">
                                <img src="../img/aboutus.jpg" alt="">
                            </a>
                            <div class="cat">
                                ui/ux
                            </div>
                            <div class="title">
                                figjogib
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, eius. Necessitatibus
                                deserunt atque molestias ipsam?</p>
                            <div class="data">
                                <div class="date">24 December</div>
                                <div class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-6 col-md-12 col-sm-12">
                        <div class="box">
                            <a href="#" class="img">
                                <img src="../img/aboutus.jpg" alt="">
                            </a>
                            <div class="cat">
                                ui/ux
                            </div>
                            <div class="title">
                                figjogib
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, eius. Necessitatibus
                                deserunt atque molestias ipsam?</p>
                            <div class="data">
                                <div class="date">24 December</div>
                                <div class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-6 col-md-12 col-sm-12">
                        <div class="box">
                            <a href="#" class="img">
                                <img src="../img/aboutus.jpg" alt="">
                            </a>
                            <div class="cat">
                                ui/ux
                            </div>
                            <div class="title">
                                figjogib
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, eius. Necessitatibus
                                deserunt atque molestias ipsam?</p>
                            <div class="data">
                                <div class="date">24 December</div>
                                <div class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-6 col-md-12 col-sm-12">
                        <div class="box">
                            <a href="#" class="img">
                                <img src="../img/aboutus.jpg" alt="">
                            </a>
                            <div class="cat">
                                ui/ux
                            </div>
                            <div class="title">
                                figjogib
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, eius. Necessitatibus
                                deserunt atque molestias ipsam?</p>
                            <div class="data">
                                <div class="date">24 December</div>
                                <div class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
