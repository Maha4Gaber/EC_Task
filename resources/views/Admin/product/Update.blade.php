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
        <form class=" form-group" action="{{ route('products.update',$product->id )}}" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="neme" class=" col-form-label">Name</label>
                    <input type="text" value="{{$product->name}}" name="name" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="desc" class=" col-form-label">Description </label>
                    <input type="text" value="{{$product->desc}}" name="desc" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="desc" class=" col-form-label">Category </label>
                    <select value="{{$product->categori_id}}" name="categori_id" id="" class=" form-control">
                        @foreach ($Cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="img" class=" col-form-label">Image </label>
                    <input type="file" value="{{$product->img}}" name="img" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="price" class=" col-form-label">Price </label>
                    <input type="number" value="{{$product->price}}" name="price" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="discount" class=" col-form-label">Discount </label>
                    <input type="number" value="{{$product->discount}}" name="discount" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="quantity" class=" col-form-label">Quantity </label>
                    <input type="number" value="{{$product->quantity}}" name="quantity" class=" form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="offer" class=" col-form-label">Offer </label>
                    <input type="text" value="{{$product->offer}}" name="offer" class=" form-control" id="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <input type="submit"  value="Update" class=" form-control">
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
