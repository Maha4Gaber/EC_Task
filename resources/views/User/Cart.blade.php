@extends('layouts.app')

@section('content')
    <section>
        {{-- <div class="sec-title"> --}}
        <h1 class="text-center my-5">My Cart </h1>

        {{-- </div> --}}
        {{-- </div> --}}

        <form action="" method="post">
            @csrf
            <div class="container my-5">
                <div class="row justify-content-center ">
                    <div class="col-md">
                        <form action="" method="post">
                            <table class="table   table- table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th scope="col">name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td scope="row"> {{ $item->name }} </td>
                                            <td>

                                                <span>{{ $item->price }}</span>


                                            </td>
                                            <td class="d-flex justify-content-center align-items-center ">
                                                <form class="cart" action="" method="post">
                                                </form>
                                                <form class="cart" action="{{ url('/increase1', $item->id) }}"
                                                    method="get">
                                                    <input type="submit" value="+">
                                                </form>
                                                {{ $item->quantity }}
                                                <form class="cart" action="{{ url('/decrease1', $item->id) }}"
                                                    method="get">
                                                    <input type="submit" value="-">
                                                </form>
                                            </td>
                                            <td> {{ $item->quantity * $item->price }} </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td scope="row"> Maha </td>
                                        <td> Maha </td>
                                        <td> Maha </td>
                                        <td> Maha </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> Maha </td>
                                        <td> Maha </td>
                                        <td> Maha </td>
                                        <td> Maha </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-6 text-center">
                                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Buy Now
                                    </a>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="{{ url('/') }}" class="">Home Page</a>
                                </div>
                            </div>
                        </form>
                        <div>


                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content order">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Now</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body ">

                                            <form action="" method="post">
                                                @csrf
                                                <div class="row mt-2">
                                                    <div class="col-lg-11 mt-2 ser">
                                                        <label for="neme" class="mx-2 ">Address</label>
                                                        <input type="text" placeholder="Enter product Name"
                                                            name="address" class="  " id="">
                                                    </div>
                                                    <div class="col-lg-11  mt-2  ser">
                                                        <label for="Phone" class="mx-2 ">Phone</label>
                                                        <input type="text" name="phone"
                                                            placeholder="Enter category Name" class="  " id="">
                                                    </div>
                                                    <div class="col-lg-11  mt-2  ser">
                                                        <label for="creditcard" class="mx-2 ">Creditcard</label>
                                                        <input type="text" name="creditcard"
                                                            placeholder="Enter subpllier Name" class="  "
                                                            id="">
                                                    </div>

                                                    <div class="col-lg-12 mt-2  submit col-md-5 col-sm-12 ">
                                                        <div class="modal-footer">
                                                            <button type="button" class="loguot">Save
                                                                changes</button>
                                                        </div>
                                                        {{-- <input type="submit" value="Search" class=" " id=""> --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

    </section>
@endsection
