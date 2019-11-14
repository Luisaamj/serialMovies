<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     * @bodyParam title required string max:100 Title of Movie
     * @bodyParam description required string max:255 Description of Movie
     * @bodyParam imdb required IMBD Vote of Movie
     * @bodyParam image required image Image of the Movie
     * @bodyParam year required  Year of the Movie
     * @bodyParam releaseDate required date Release Date of the Movie
     * @bodyParam type_id required Type of Movie-> Serie or Movie
     * @bodyParam category_id required Category of Movie
     * @bodyParam language_id required Language of Movie
     * @bodyParam country_id required Country of Movie
     * @bodyParam diretor_id required Main Director of Movie
     * @bodyParam star1_id required Star of Movie
     * @bodyParam star2_id required Star of Movie
     * @bodyParam star3_id required Star of Movie
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $movie=Movie::all();
        $response=[
            'data'=>$movie,
            'message'=>'Lista de Filmes',
            'result'=>'ok'
        ];
        return response($response);
    }



    /**
     * Show the form for creating a new resource.
     * * @bodyParam title required string max:100 Title of Movie
     * @bodyParam description required string max:255 Description of Movie
     * @bodyParam imdb required IMBD Vote of Movie
     * @bodyParam image required image Image of the Movie
     * @bodyParam year required  Year of the Movie
     * @bodyParam releaseDate required date Release Date of the Movie
     * @bodyParam type_id required Type of Movie-> Serie or Movie
     * @bodyParam category_id required Category of Movie
     * @bodyParam language_id required Language of Movie
     * @bodyParam country_id required Country of Movie
     * @bodyParam diretor_id required Main Director of Movie
     * @bodyParam star1_id required Star of Movie
     * @bodyParam star2_id required Star of Movie
     * @bodyParam star3_id required Star of Movie
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     ** @bodyParam title required string max:100 Title of Movie
     * @bodyParam description required string max:255 Description of Movie
     * @bodyParam imdb required IMBD Vote of Movie
     * @bodyParam image required image Image of the Movie
     * @bodyParam year required  Year of the Movie
     * @bodyParam releaseDate required date Release Date of the Movie
     * @bodyParam type_id required Type of Movie-> Serie or Movie
     * @bodyParam category_id required Category of Movie
     * @bodyParam language_id required Language of Movie
     * @bodyParam country_id required Country of Movie
     * @bodyParam diretor_id required Main Director of Movie
     * @bodyParam star1_id required Star of Movie
     * @bodyParam star2_id required Star of Movie
     * @bodyParam star3_id required Star of Movie
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieStoreRequest $request)
    {
        //
        $data=$request->all();
        $file=$request->file('image')->store('images');
        //return $file;
        $data['image']=$file;
        $movie=Movie::create($data);


        $response=[
            'data'=>$movie,
            'message'=>'Filme Adicionado',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Display the specified resource.
     ** @bodyParam title required string max:100 Title of Movie
     * @bodyParam description required string max:255 Description of Movie
     * @bodyParam imdb required IMBD Vote of Movie
     * @bodyParam image required image Image of the Movie
     * @bodyParam year required  Year of the Movie
     * @bodyParam releaseDate required date Release Date of the Movie
     * @bodyParam type_id required Type of Movie-> Serie or Movie
     * @bodyParam category_id required Category of Movie
     * @bodyParam language_id required Language of Movie
     * @bodyParam country_id required Country of Movie
     * @bodyParam diretor_id required Main Director of Movie
     * @bodyParam star1_id required Star of Movie
     * @bodyParam star2_id required Star of Movie
     * @bodyParam star3_id required Star of Movie
     * @return \Illuminate\Http\Response
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        return $movie;

    }

    /**
     * Show the form for editing the specified resource.

     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     ** @bodyParam title required string max:100 Title of Movie
     * @bodyParam description required string max:255 Description of Movie
     * @bodyParam imdb required IMBD Vote of Movie
     * @bodyParam image required image Image of the Movie
     * @bodyParam year required  Year of the Movie
     * @bodyParam releaseDate required date Release Date of the Movie
     * @bodyParam type_id required Type of Movie-> Serie or Movie
     * @bodyParam category_id required Category of Movie
     * @bodyParam language_id required Language of Movie
     * @bodyParam country_id required Country of Movie
     * @bodyParam diretor_id required Main Director of Movie
     * @bodyParam star1_id required Star of Movie
     * @bodyParam star2_id required Star of Movie
     * @bodyParam star3_id required Star of Movie
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieStoreRequest $request, Movie $movie)
    {
        //
        $data=$request->all();

        if($request->hasFile('image')){
            $file=$request->file('image')->store('images');

            $data['image']=$file;
        }

        $movie->update($data);

        $response=[
            'data'=>$movie,
            'message'=>'Filme Atualizado',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     ** @bodyParam title required string max:100 Title of Movie
     * @bodyParam description required string max:255 Description of Movie
     * @bodyParam imdb required IMBD Vote of Movie
     * @bodyParam image required image Image of the Movie
     * @bodyParam year required  Year of the Movie
     * @bodyParam releaseDate required date Release Date of the Movie
     * @bodyParam type_id required Type of Movie-> Serie or Movie
     * @bodyParam category_id required Category of Movie
     * @bodyParam language_id required Language of Movie
     * @bodyParam country_id required Country of Movie
     * @bodyParam diretor_id required Main Director of Movie
     * @bodyParam star1_id required Star of Movie
     * @bodyParam star2_id required Star of Movie
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();
        $response=[
            'data'=>$movie,
            'message'=>'Filme Apagado',
            'result'=>'ok'
        ];
        return response($response);
    }
}
