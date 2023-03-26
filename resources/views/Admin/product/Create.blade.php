@extends('Admin.index')


@section('admin')



<div class="createCat">
    <div class="container">
        <h1>
            New Product
        </h1>

        @if ($errors->any())
            <div class="alert alert-warning  ">
                @foreach ($errors->all() as $error)
                    <div style="color: #000">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <form class=" form-group" action="{{ route('products.store') }}" method="post">
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="desc" class=" col-form-label">Category </label>
                    <select name="categori_id" id="" class=" form-control">
                        @foreach ($Cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="img" class=" col-form-label">Image </label>
                    <input type="file" name="img" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="price" class=" col-form-label">Price </label>
                    <input type="number" name="price" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="discount" class=" col-form-label">Discount </label>
                    <input type="number" name="discount" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="quantity" class=" col-form-label">Quantity </label>
                    <input type="number" name="quantity" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="offer" class=" col-form-label">Offer </label>
                    <input type="text" name="offer" class=" form-control" id="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <input type="submit" value="Create" class=" form-control">
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
