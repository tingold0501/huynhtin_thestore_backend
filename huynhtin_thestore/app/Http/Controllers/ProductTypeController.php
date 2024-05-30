<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productTypes = ProductType::all();
        return response()->json($productTypes);
    }

    public function getProductsByType($id){
        $products = Product::where('producttype_id', $id)->get();
        if($products->isEmpty()){
            return response()->json(['products' => $products,'check' => 'false','msg' => 'Không tìm thấy sản phẩm']);
        }
        return response()->json(['products' => $products, 'check' => 'true','msg'=>'Tìm thấy sản phẩm'], 200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductType $productType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
