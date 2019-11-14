@extends('layouts.app')

@section('content')
    <!--<div class="row justify-content-center"><h1>Filmes</h1></div>-->
    {{--Estou com problemas a mudar o cenas q diz filmes para filmes ou series por causa da condição--}}
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    Countries
                </div>
                <div class="card">
                    <div class="card-body">
                        @foreach($countries as $country)
                            <div class="row" style="margin-bottom: 15px">
                                <div class="col-md-6">
                                    <img class="img-fluid float-left" style="width: 32px; height: 32px" src="/uploads/{{$country->flag}}">
                                    <p>{{$country->name}}
                                        @if(Auth::user()->role->name=="admin")
                                            ---> <a href=""> Edit</a></p>
                                        @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row" style="height: 20px;"></div>
            </div>
        </div>
    </div>
@endsection