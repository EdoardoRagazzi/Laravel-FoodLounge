<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Type;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('admin.foods.index', compact('foods'));
    }

    public function show(Food $food)
    {
        $food = $food->with('type')->where('type_id', $food->type_id)->first();
        return view('admin.foods.show', compact('food'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.foods.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        return redirect()->route('admin.foods.index');
    }

    public function edit(Food $food)
    {
        $types = Type::all();
        return view('admin.foods.edit', compact('food', 'types'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'requires|max:255',
            'description' => 'required'
        ]);
        return redirect()->route('admin.foods.index')->with('updated', 'Update Element:' . ' ' . $food->id);
    }

    public function destroy(Food $food)
    {
        $food->delete();
        $food->tags()->detach();
        return redirect()->route('admin.foods.index')->with('delete', 'Delete Element' . ' '  . $food->id);
    }
}
