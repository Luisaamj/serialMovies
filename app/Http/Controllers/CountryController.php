<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\CountryStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $country=Country::all();

        $response=[
            'data'=>$country,
            'message'=>'Lista de Países',
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
     * @bodyParam name required string max:10
     * @bodyParam flag image
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
        //
        $data=$request->all();
        $country=Country::create($data);

        $response=[
            'data'=>$country,
            'message'=>'País Adicionado',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Display the specified resource.
     * @bodyParam name required string max:10 Name of Country
     * @bodyParam flag image Flag of Country
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
        return $country;
    }

    /**
     * Show the form for editing the specified resource.
     *@bodyParam name required string max:10 Name of Country
     * @bodyParam flag image Flag of Country
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @bodyParam name required string max:10 Name of Country
     * @bodyParam flag image Flag of Country
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryStoreRequest $request, Country $country)
    {
        //
        $data=$request->all();

        if($request->hasFile('flag')){
            $file=$request->file('flag')->store('images');

            $data['flag']=$file;
        }

        $country->update($data);

        $response=[
            'data'=>$country,
            'message'=>'País Atualizado',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.

     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
        $country->delete();
        $response=[
            'data'=>$country,
            'message'=>'País Apagado',
            'result'=>'ok'
        ];
        return response($response);
    }
}
