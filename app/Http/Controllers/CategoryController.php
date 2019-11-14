<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category=Category::all();

        $response=[
            'data'=>$category,
            'message'=>'Lista de Categorias',
            'result'=>'ok'
        ];
        return response($response);
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
     * @bodyParam name required string max:20 Name of Category
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CategoryStoreRequest $request)
    {
        //
        $data=$request->all();
        $category=Category::create($data);

        $response=[
            'data'=>$category,
            'message'=>'Categoria Adicionada',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Display the specified resource.
     * @bodyParam name required string max:20 Name of Category
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @bodyParam name required string max:20 Name of Category
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryStoreRequest $request, Category $category)
    {
        //
        $data=$request->all();

        $category->update($data);

        $response=[
            'data'=>$category,
            'message'=>'Categoria Atualizada',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

        $response=[
            'data'=>$category,
            'message'=>'Categoria Apagada',
            'result'=>'ok'
        ];
        return response($response);
    }
}
