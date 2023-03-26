@extends('Admin.index')


@section('admin')

<div class="createCat">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="">
                    Categories
                </h1>
            </div>
            <div class="col-6">
                <a href="{{ url('category/create') }}" class="creatbtn">Create Category</a>

            </div>
            <div class="col-12 mt-5">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Propertis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Cats as $cat)
                            <tr>
                                <th scope="row">{{$cat->id}}</th>
                                <td><a href="{{route('category.show',$cat->id)}}">{{$cat->name}}</a></td>
                                <td>
                                    <a class="pro" href="http://">Edit</a>
                                    <a class="pro" href="http://">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>

    </div>
</div>


@endsection
