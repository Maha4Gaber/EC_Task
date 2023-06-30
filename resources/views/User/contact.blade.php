@extends('layouts.app')

@section('content')
    <div class="container contact">
        <div class="row">
            <h1 class="py-3 about">Contact Us
            </h1>
            <div class="form">

                {{-- <form action="" onsubmit="sendMail()"> --}}
                    @csrf
                    <div class="row mt-2">
                        <div class="col-lg-11 mt-2 contactfildes">
                            <label for="neme" class="mx-2 ">Name</label>
                            <input type="text" placeholder="Enter Your Name" name="name" class="  " id="name">
                        </div>
                        <div class="col-lg-11  mt-2  contactfildes">
                            <label for="Phone" class="mx-2 ">Email</label>
                            <input type="email"  placeholder="Enter Your Email" class="  " id="email">
                        </div>
                        <div class="col-lg-11  mt-2  contactfildes">
                            <label for="creditcard" class="mx-2 ">Message</label>
                            <textarea placeholder="Message" rows="6" name="" id="message"></textarea>
                        </div>

                        <div class="col-lg-12  d-flex justify-content-center mt-3  submit col-md-5 col-sm-12 ">
                            <button class="loguot" onclick="sendMail()" type="submit">Send </button>
                        </div>
                    </div>
                {{-- </form> --}}

            </div>
        </div>
    </div>




    </div>
@endsection
