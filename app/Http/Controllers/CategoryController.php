<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.showCategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate(
            [
                'title' => 'required|string|min:2|max:30|unique:categories,title|regex:/^[a-zA-Z]+[\w\s]{0,}$/'
            ],
            [
                'title.required' => 'The title field is required.',
                'title.min' => 'The title must be at least 2 characters.',
                'title.max' => 'The title cannot exceed 30 characters.',
                'title.unique' => 'The title is already taken. Please choose a different one.',
                'title.regex' => 'The title must contain only letters and spaces.',
            ]
        );
        Category::create($incomingFields);
        return redirect()->back()->with('message', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->back();
        }
        return view('admin.category.updateCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $incomingFields = $request->validate(
            [
                'title' => 'required|string|min:2|max:30|unique:categories,title|regex:/^[a-zA-Z]+[\w\s]{0,}$/'
            ],
            [
                'title.required' => 'The title field is required.',
                'title.min' => 'The title must be at least 2 characters.',
                'title.max' => 'The title cannot exceed 30 characters.',
                'title.unique' => 'The title is already taken. Please choose a different one.',
                'title.regex' => 'The title must contain only letters and spaces.',
            ]
        );
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->back();
        }
        $category->update([
            'title' => $incomingFields['title'],
        ]);
        return redirect()->back()->with('message', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->back();
        }
        $category->delete();
        return redirect()->back();
    }
}
