@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>All foods</h1>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-dark mt-2 mb-5 d-block mx-auto w-25" href="{{ route('admin.foods.create', Auth::user()->id) }}"
                            class="link-dark">ADD FOOD</a>
                    </div>
                </div>
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Visible</th>
                            <th>Details</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->id }}</td>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->price }} &euro;</td>
                                <td>{{ $food->visible ? 'Visible' : 'Not Visible' }}</td>
                                <td><a href="{{ route('admin.foods.show', $food->id) }}">Check Details</a></td>
                                <td><a href="{{ route('admin.foods.edit', $food->id) }}">Change</a></td>
                                <td>
                                    <form action="{{ route('admin.foods.destroy', $food->id) }}" method="post" class="d-inline-block delete-post-form">
                                        @csrf
                                        @method('DELETE')                                        
                                        <input type="submit" value="x" class="btn btn-danger rounded-circle">                                
                                    </form>
                                </td>                        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
