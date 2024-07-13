<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function index()
    {
        $this->authorize('manage-items', User::class);
        $tags = Tag::all();
        return view('laravel-examples.tag.tag-management', compact('tags'));
    }

    public function create()
    {
        $this->authorize('manage-items', User::class);
        return view('laravel-examples.tag.create-tag-management');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3|max:255',
            'color' => 'required|min:3|max:255',
        ], [
            'name.required' => 'Name is required',
            'color.required' => 'color is required',
        ]);

        $tag = Tag::create([
            'name' => $request->name,
            'color' => $request->color,
        ]);

        return redirect(route('tag-management'))->with('success', 'New tag added successfully.');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return redirect(route('tag-management'))->with('error', 'Tag not found.');
        }
        $this->authorize('manage-items', User::class);
        return view('laravel-examples/tag/edit-tag-management', compact('tag'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:255',
            'color' => 'required|min:3|max:255',

        ], [
            'name.required' => 'Name is required',
            'color.required' => 'Color is required',
        ]);

        $tag = Tag::find($request->id);


        $tag->update([
            'name' => $request->name,
            'color' => $request->color,
        ]);

        return redirect(route('tag-management'))->with('success', 'Tag updated successfully.');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return redirect(route('tag-management'))->with('error', 'Tag not found.');
        }

        if (!$tag->items->isEmpty()) {
            return redirect(route('tag-management'))->with('error', 'Tag cannot be deleted because it is associated with one or more items.');
        } else {
            $tag->delete();
        }

        return redirect(route('tag-management'))->with('success', 'Tag deleted successfully.');
    }
}
