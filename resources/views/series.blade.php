@extends('layouts.app')

@section('content')
    <div class="row justify-content-center"><h1>Séries</h1></div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($movies as $movie)
                   <!--Como por aqui um if, para só mostrar o q está nos movies que so sao do type Movie, ou noutro caso do tipo Série-->
                    <div class="card">
                        <div class="card-header">{{$movie->title}}</div> {{--vai buscar o titulo do post--}}

                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <p><span>Title: </span>{{$movie->title}}</p>
                                    <p><span>Imdb: </span>{{$movie->imdb}}<span>/10</span></p>
                                    <p>{{$movie->description}}</p>
                                    <p>{{$movie->releaseDate}}</p>
                                    <p>{{$movie->year}}</p>
                                    <p>{{$movie->type->name}}</p>
                                    <p>{{$movie->category->name}}</p>
                                    <p>{{$movie->language->name}}</p>
                                    <p>{{$movie->country->name}}</p>
                                    <p>{{$movie->diretor->name}}</p>
                                    <p>{{$movie->star1->name}}</p>
                                    <p>{{$movie->star2->name}}</p>
                                    <p>{{$movie->star3->name}}</p>
                                    <!--tive problema por causa de os campos tarem a null!!!!!!-->

                                    <p>{{$movie->author->name}}</p>

                                    



                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid" src="/uploads/{{$movie->image}}">
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection