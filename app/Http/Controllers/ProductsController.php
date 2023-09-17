<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.showProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.product.addProduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate(
            [
                'name' => 'required|string|min:2|max:50|unique:products,name|regex:/^[a-zA-Z]+/',
                'description' => 'required|string|min:2|max:700|regex:/^[a-zA-Z]+/',
                'price' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
                'quantity'=> 'required|numeric',
                'category_id'=> 'required|numeric',
            ],
            [
                'name.required' => 'The name field is required.',
                'name.min' => 'The name must be at least 2 characters.',
                'name.max' => 'The name cannot exceed 50 characters.',
                'name.unique' => 'The name is already taken. Please choose a different one.',
                'name.regex' => 'The name must start with a letter.',
            ]
        );
        $tempName =time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/products'),$tempName);
        $incomingFields['image']=$tempName;
        Product::create($incomingFields);
        return redirect()->back()->with('message', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->back();
        }

        return view('user.showProductDetails', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        if ($product == null |$categories==null) {
            return redirect()->back();
        }

        return view('admin.product.updateProduct', compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $incomingFields = $request->validate(
            [
                'name' => 'required|string|min:2|max:50|regex:/^[a-zA-Z]+/',
                'description' => 'required|string|min:2|max:700|regex:/^[a-zA-Z]+/',    
                'price' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
                'quantity' => 'required|numeric',
                'category_id' => 'required|numeric',
            ],
            [
                'name.required' => 'The name field is required.',
                'name.min' => 'The name must be at least 2 characters.',
                'name.max' => 'The name cannot exceed 50 characters.',
                'name.unique' => 'The name is already taken. Please choose a different one.',
                'name.regex' => 'The name must start with a letter.',
            ]
        );
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->back();
        }
        $tempName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/products'), $tempName);
        $incomingFields['image'] = $tempName;

        //delete old image
        $imagePath = public_path('images/products/' . $product->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $product->update($incomingFields);
        return redirect()->back()->with('message', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product != null) {
            $imagePath = public_path('images/products/' . $product->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $product->delete();
        }
        return redirect()->back();
    }
}
