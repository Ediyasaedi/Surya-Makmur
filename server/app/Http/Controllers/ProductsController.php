<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = DB::table('products')->get();
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = new Product;
        // $product->name = $request->name;
        // $product->img_url = $request->img_url;
        // $product->price = $request->price;
        // $product->stock = $request->stock;
        // $product->discount = $request->discount;

        // $product->save();

        $request->validate([
            'name' => 'required',
            'img_url' => 'required',
            'stock' => 'required|min:1'
        ]);

        Product::create($request->all());

        return redirect('/product')->with('status', 'Product Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required',
            'img_url' => 'required',
            'stock' => 'required|min:1'
        ]);

        Product::where('id', $product->id)
            ->update([
                'name' => $request->name,
                'img_url' => $request->img_url,
                'price' => $request->price,
                'stock' => $request->stock,
                'discount' => $request->discount
            ]);

        return redirect('/product')->with('status', 'Product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/product')->with('status', 'Product Deleted!');
    }
}
