@extends('layouts.app')

@section('content')

    <div class="container">

                <div class="card my-3">
                    <div class="card-header" id="{{ $type->name . 'heading' }}">
                        <div class="mb-0 d-flex justify-content-between">
                            <div class="col-6">
                                <div class="py-2" data-target="#{{ $type->name . 'collapse' }}"
                                    aria-expanded="true" aria-controls="{{ $type->name . 'collapse' }}">
                                    {{ $type->name }}
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-around">
                                <a class="btn btn-outline-dark d-block mx-1"
                                    href="{{ route('admin.types.edit', $type->id) }}" class="link-dark">Edit</a>
                                <form method="post" class="post-delete"
                                    action={{ route('admin.types.destroy', $type->id) }}>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-outline-dark"
                                    href="{{ route('admin.types.edit', $type->id) }}" class="link-dark">Modifica</a>
                                </div>

                                <div class="col-6">
                                    <form method="post" class="post-delete" action={{ route('admin.types.destroy', $type->id) }}>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class=" btn btn-danger">Elimina</button>
                                    </form>
                                </div>                                   
                            </div>                                
                        </div>                        
                    </div>

                    <div id="{{ $type->name . 'collapse' }}" class="col collapse show"
                        aria-labelledby="{{ $type->name . 'heading' }}" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($type->foods as $food)
                                    <li class="list-group-item"><a
                                            href={{ route('admin.foods.show', $food->id) }}>{{ $food->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ Route('admin.home') }}" class="btn btn-secondary text-white mt-2">
            <span>Torna indietro</span>
        </a>
    </div>
@endsection
