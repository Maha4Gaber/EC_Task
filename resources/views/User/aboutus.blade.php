@extends('layouts.app')

@section('content')
    <div class="container aboutus">
        <div class="row">
            <h1 class="py-3 about">About Us
            </h1>
            <div class="col-7">
                <p>
                    Welcome to <span>MyArtscape</span>, your one-stop shop for all your drawing tool needs! As passionate
                    artists
                    ourselves, we understand the importance of having high-quality and reliable drawing tools that can help
                    unleash your creativity. That's why we pride ourselves on offering a wide selection of drawing tools,
                    including pencils, pens, markers, paintbrushes, and more.
                </p>
                <p>
                    At <span>MyArtscape</span>, we believe that everyone deserves access to quality art supplies without
                    breaking the
                    bank. That's why we've curated a collection of affordable drawing tools that are designed to meet the
                    needs
                    of artists of all levels. Whether you're a professional artist or just starting out, our drawing tools
                    are
                    made from the highest quality materials and are designed to last, so you can focus on creating without
                    worrying about the tools holding you back.
                </p>
                <p>
                    We're committed to providing exceptional customer service, ensuring that every time you shop with us,
                    you
                    have a positive experience. Whatever your drawing needs may be, we're confident that our wide range of
                    high-quality drawing tools and accessories will help you unleash your creativity and explore your
                    artistic
                    potential. Thank you for choosing <span>MyArtscape</span>, and we can't wait to see what you create!
                </p>

                <div class=" my-5">
                    <button class="loguot">
                        <a href="{{ url('/contact') }}">
                            Contact Us
                        </a>
                    </button>
                </div>
            </div>
            <div class="col-5">
                <div style="
                width:100%;
                height:100%;
                    ">
                    <img src="../img/aboutus.jpg" alt="aboutus.jpg">
                </div>
            </div>
        </div>
    </div>




    </div>
@endsection
