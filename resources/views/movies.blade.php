@extends('layouts.app')

@section('content')
    <!--<div class="row justify-content-center"><h1>Filmes</h1></div>-->
    {{--Estou com problemas a mudar o cenas q diz filmes para filmes ou series por causa da condição--}}
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach($movies as $movie)
                   <!--Como por aqui um if, para só mostrar o q está nos movies que so sao do type Movie, ou noutro caso do tipo Série-->
                    <div class="card">
                        <div class="card-header" style>{{$movie->title}}</div> {{--vai buscar o titulo do post--}}

                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <img class="img-fluid float-left" style="width: 300px; height: 445px" src="/uploads/{{$movie->image}}">
                                </div>
                                <!--aqui so vou mostrar o nome do filme e a imagem e depois ao clicar podemos aceder à pagina do respetivo filme -->
                                <div class="col-md-6">

                                    <p style="font-weight: bold;" >{{$movie->title}}</p>
                                    <p><span style="font-weight: bold;">Imdb: </span>{{$movie->imdb}}<span>/10</span></p>
                                    <p><span style="font-weight: bold">Description: </span>{{$movie->description}}</p>
                                    <p><span style="font-weight: bold">Release Date: </span>{{$movie->releaseDate}}</p>
                                    <p><span style="font-weight: bold">Year</span>{{$movie->year}}</p>
                                    <p><span style="font-weight: bold">Category: </span>{{$movie->category->name}}</p>
                                    <p><span style="font-weight: bold">Language: </span>{{$movie->language->name}}</p>
                                    <p><span style="font-weight: bold">Country:</span>{{$movie->country->name}}</p>
                                    <p><span style="font-weight: bold">Diretor: </span>{{$movie->diretor->name}}</p>
                                    <p><span style="font-weight: bold">Stars: </span></p>
                                        <p><a href="">{{$movie->star1->name}}</a>, <a href="">{{$movie->star2->name}}</a>, <a href="">{{$movie->star3->name}}</a></p>
                                    <!--tive problema por causa de os campos tarem a null!!!!!!-->
                                    <p style="text-align: right"><span style="font-weight: bold">Added by: </span>{{$movie->author->name}}</p>

                                    <p>{{$movie->type->name}}</p>
                                    @if(Auth::user()->role->name=="admin")
                                        <a href="{{route('editFormMovie',$movie->id)}}" class="btn btn-primary"> Edit</a>
                                    @endif

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 20px;"></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection