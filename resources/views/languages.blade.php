@extends('layouts.app')

@section('content')
    <!--<div class="row justify-content-center"><h1>Filmes</h1></div>-->
    {{--Estou com problemas a mudar o cenas q diz filmes para filmes ou series por causa da condição--}}
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    Languages
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            @foreach($languages as $language)
                                    <p>{{$language->name}}
                                        @if(Auth::user()->role->name=="admin")
                                            ---> <a href=""> Edit</a></p>
                                        @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 20px;"></div>
            </div>
        </div>
    </div>
@endsection