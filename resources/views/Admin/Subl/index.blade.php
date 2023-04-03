@extends('Admin.index')


@section('admin')
    <div class="createCat">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="">
                        Sublliers 
                    </h1>
                </div>
                <div class="col-6">
                    <a href="{{ url('subllier/create') }}" class="creatbtn">Create Subllier</a>

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
                            @foreach ($subs as $sub)
                                <tr>
                                    <th scope="row">{{ $sub->id }}</th>
                                    <td><a href="{{ route('subllier.show', $sub->id) }}">{{ $sub->name }}</a></td>
                                    <td class="pro">
                                        <a class="" href="{{ route('subllier.edit', $sub->id) }}">Edit</a>
                                        <form class="" action="{{ route('subllier.destroy', $sub->id) }}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="" type="submit" href="">Delete</button>
                                        </form>
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
