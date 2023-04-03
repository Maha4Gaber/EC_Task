@extends('Admin.index')


@section('admin')

<div class="createCat">
    <div class="container">
        <h1>
            New Categories
        </h1>
        <form class=" form-group" action="{{route('subllier.update',$subl->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="neme" class=" col-form-label">Name</label>
                    <input value="{{$subl->name}}" type="text" name="name" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="desc" class=" col-form-label">Description </label>
                    <input value="{{$subl->desc}}" type="text" name="desc" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                    <input type="submit" value="Update" class=" form-control">
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
