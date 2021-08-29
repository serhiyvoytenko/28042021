<?php

namespace App\Http\Controllers;

use App\Models\Entities\ProductEntity;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * @mixin Builder
 */

class ProductEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): void
    {
        $product = ProductEntity::where('id',5)->get();
        $product2 = ProductEntity::where('id', 5)->first();
        var_dump($product, $product2);exit();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entities\ProductEntity  $productEntity
     * @return \Illuminate\Http\Response
     */
    public function show(ProductEntity $productEntity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entities\ProductEntity  $productEntity
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductEntity $productEntity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entities\ProductEntity  $productEntity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductEntity $productEntity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entities\ProductEntity  $productEntity
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductEntity $productEntity)
    {
        //
    }
}
