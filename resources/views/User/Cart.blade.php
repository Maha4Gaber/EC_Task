@extends('layouts.app')

@section('content')
    <section>
        {{-- <div class="sec-title"> --}}
                <h1 class="text-center my-5" >My Cart </h1>

            {{-- </div> --}}
        {{-- </div> --}}

        <form action="" method="post">
            @csrf
            <div class="container my-5">
                <div class="row justify-content-center ">
                    <div class="col-md">
                        <table class="table  table-hover table- table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th scope="col" >name</th>
                                    <th scope="col" >Price</th>
                                    <th scope="col" >Quantity</th>
                                    <th scope="col" >Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item )
                                    <tr>
                                        <td scope="row"> {{ $item->name }} </td>
                                        <td>
                                            <form class="cart" action="" method="post">
                                                <input type="submit" value="+">
                                            </form>
                                            {{ $item->price }}
                                            <form class="cart" action="" method="post">
                                                <input type="submit" value="-">
                                            </form>
                                        </td>
                                        <td> {{ $item->quantity }}  </td>
                                        <td> {{ $item->quantity * $item->price }}  </td>
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
                    </div>
                </div>
            </div>
        </form>

    </section>
@endsection
