@extends('layouts.app')

@section('content')
    <!--<div class="row justify-content-center"><h1>Filmes</h1></div>-->
    {{--Estou com problemas a mudar o cenas q diz filmes para filmes ou series por causa da condição--}}
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($people as $person)
                   <!--Como por aqui um if, para só mostrar o q está nos movies que so sao do type Movie, ou noutro caso do tipo Série-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid float-left" style="width: 300px; height: 445px" src="/uploads/{{$person->image}}">
                                </div>

                                <div class="col-md-6">
                                    <p style="font-weight: bold;" >{{$person->name}}</p>
                                    <p><span style="font-weight: bold;">Original Name:  </span>{{$person->original_name}}<span>/10</span></p>
                                    <p><span style="font-weight: bold">Job: </span>{{$person->job->name}}</p>
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