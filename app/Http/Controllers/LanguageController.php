<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageStoreRequest;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @bodyParam name required string max:10 Name of language
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $language=Language::all();
        $response=[
            'data'=>$language,
            'message'=>'Lista de Línguas',
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
     * @bodyParam name required string max:10 Name of language
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageStoreRequest $request)
    {
        //
        $data=$request->all();
        $language=Language::create($data);
        $response=[
            'data'=>$language,
            'message'=>'Língua Atualizada',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @bodyParam name required string max:10 Name of language
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
        return $language;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name required string max:10 Name of language
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(LanguageStoreRequest $request, Language $language)
    {
        //
        $data=$request->all();

        $language->update($data);

        $response=[
            'data'=>$language,
            'message'=>'Língua Atualizada',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        //
        $language->delete();
        $response=[
            'data'=>$language,
            'message'=>'Língua Apagada',
            'result'=>'ok'
        ];
        return response($response);
    }
}
