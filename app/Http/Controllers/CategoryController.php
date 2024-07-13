<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $this->authorize('manage-items', User::class);
        return view('laravel-examples.category.category-management', compact('categories'));
    }

    public function create()
    {
        $this->authorize('manage-items', User::class);
        return view('laravel-examples.category.create-category-management');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
        ], [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);


        return redirect(route('category-management'))->with('success', 'New category added successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return back()->with('error', 'Category not found.');
        }
        $this->authorize('manage-items', User::class);
        return view('laravel-examples/category/edit-category-management', compact('category'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',

        ], [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
        ]);

        $category = Category::find($request->id);


        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect(route('category-management'))->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect(route('category-management'))->with('error', 'Category not found.');
        }

        if (!$category->items->isEmpty()) {
            return redirect(route('category-management'))->with('error', 'Category cannot be deleted because it is associated with one or more items.');
        } else {
            $category->delete();
        }

        return redirect(route('category-management'))->with('success', 'Category deleted successfully.');
    }
}
