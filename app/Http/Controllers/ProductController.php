<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = [];
        $data['products'] = Product::orderBy('id', 'desc')->get();
        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Product::create($request->post());

        return redirect()->route('product.index')->with('success', 'Product has been created successfully.');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $data = [];
        $data['product'] = $product;
        return view('product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $data = [];
        $data['product'] = $product;
        /**$data['products'] = Product::findOrFail($id);*/
        return view('product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,$id)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);
    
        $query = Product::findOrFail($id);
        $query->update($request->all());
    
        return redirect()->route('product.index')->with('success', 'Product has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = Product::findOrFail($id);
        $query->delete();

        return redirect()->route('product.index')->with('success', 'Product has been deleted successfully.');
    }
}
