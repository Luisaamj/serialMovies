<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $person=Person::all();

        $response=[
            'data'=>$person,
            'message'=>'Lista de Pessoas',
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        $file=$request->file('image')->store('images');
        //return $file;
        $data['image']=$file;

        $person=Person::create($data);

        $response=[
            'data'=>$person,
            'message'=>'Pessoa Adicionada',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
        return $person;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
        $data=$request->all();

        $person->update($data);

        $response=[
            'data'=>$person,
            'message'=>'Pessoa Atualizada',
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
        $person->delete();
        $response=[
            'data'=>$person,
            'message'=>'Pessoa Apagada',
            'result'=>'ok'
        ];
        return response($response);
    }
}
