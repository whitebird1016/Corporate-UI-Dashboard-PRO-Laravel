<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('laravel-examples.item.item-management', compact('items'));
    }

    public function create()
    {
        $this->authorize('manage-items', User::class);
        $categories = Category::all();
        $tags = Tag::all();
        $options = ['First', 'Second', 'Third'];
        return view('laravel-examples.item.create-item-management', compact('categories', 'tags', 'options'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:3|max:255',
            'tag_id' => 'required',
            'status' => 'required',
            'options' => 'required|array',
            'date' => 'required|date',
        ], [
            'name.required' => 'Name is required',
            'category_id.required' => 'Category is required',
            'status.required' => 'Status is required',
            'photo.required' => 'Photo is required',
            'tag_id.required' => 'Tag is required',
            'description.required' => 'Description is required',
            'options.required' => 'Options are required',
            'date.required' => 'Date is required',
            'description.min' => 'Description must be at least 3 characters',
        ]);


        $picture = $request->file('photo');
        $photoPath = $picture ? '/storage/' . $picture->store('item', 'public') : asset('assets/img/default-avatar.png');

        $tags_id = $request->input('tag_id');

        $item = Item::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'photo' => $photoPath,
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'options' => json_encode($request->input('options')),
            'date' => $request->input('date'),
        ]);

        sort($tags_id);
        $item->tags()->sync($tags_id, false);

        return redirect(route('item-management'))->with('success', 'New item added successfully.');
    }

    public function edit($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return back()->with('error', 'Item not found.');
        }
        $this->authorize('manage-items', User::class);
        $categories = Category::all();
        $tags = Tag::all();
        $options = ['First', 'Second', 'Third'];
        return view('laravel-examples.item.edit-item-management', compact('item', 'categories', 'tags', 'options'));
    }

    public function update(Request $request)
    {
        $item = Item::find($request->id);
        $request->validate([
            'name' => 'required|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:3|max:255',
            'status' => 'required',
            'options' => 'required|array',
            'date' => 'required|date',
        ]);

        $picture = $request->file('photo');

        if ($item->photo && $picture && file_exists(storage_path('app/public/' . $item->photo))) {
            unlink(storage_path('app/public/' . $item->photo));
        }

        $tags_id = $request->input('tag_id');

        $item->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'photo' => $picture ? '/storage/' . $picture->store('item', 'public') : $item->photo,
            'description' => $request->description,
            'status' => $request->status,
            'options' => json_encode($request->input('options', [])),
            'date' => $request->date,
        ]);

        sort($tags_id);
        $item->tags()->sync($tags_id, false);

        return redirect(route('item-management'))->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return redirect(route('item-management'))->with('error', 'Item not found.');
        }

        if (config('app.is_demo') && in_array($id, [1, 2, 3])) {
            return back()->with('error', 'You are not allowed to delete a default item.');
        }

        $item->tags()->detach();

        $item->delete();

        return redirect(route('item-management'))->with('success', 'Item deleted successfully.');
    }
}
