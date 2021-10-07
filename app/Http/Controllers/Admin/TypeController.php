<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Auth::user()->types;
        return view('admin.types.index', compact('types'));
    }

    public function create()
    {
        return view('admin.types.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        foreach ($data['types'] as $entry) {
            $type = new Type();

            $type->name = $entry;
            $type->user_id = Auth::user()->id;

            $type->save();
        }
        return redirect()->route('admin.types.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $type->name = $request->types[0];
        $type->save();
        return redirect()->route('admin.types.index');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index');
    }
}
