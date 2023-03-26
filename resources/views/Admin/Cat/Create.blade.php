@extends('Admin.index')


@section('admin')

<div class="createCat">
    <div class="container">
        <h1>
            New Categories
        </h1>
        <form class=" form-group" action="{{route('category.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="neme" class=" col-form-label">Name</label>
                    <input type="text" name="name" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="desc" class=" col-form-label">Description </label>
                    <input type="text" name="desc" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                    <input type="submit" value="Create" class=" form-control">
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
