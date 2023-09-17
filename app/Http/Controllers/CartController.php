<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = session('cart') ?? [];
        return view('user.cart', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);
        $product = Product::find($id);
        $productsInCart = session('cart') ?? null;
        if ($productsInCart != null) {
            foreach ($productsInCart as $prod) {
                if ($prod->id == $id) {
                    $prod->quantity += $request->quantity;
                    return redirect()->back()->with(['message' => 'Added to cart Successfully']);
                }
            }
        }
        $product->quantity = $request->quantity;
        $previousProducts = session('cart', []);
        $newProducts = array_merge($previousProducts, [$product]);
        session([
            'cart' =>
                $newProducts,
        ]);

        return redirect()->back()->with(['message' => 'Added to cart Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = session('cart', []);
        unset($products[$id]);
        session(['cart' => array_values($products)]);
        return redirect()->back();
    }
}
