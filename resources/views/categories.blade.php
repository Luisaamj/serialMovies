@extends('layouts.app')

@section('content')
    <!--<div class="row justify-content-center"><h1>Filmes</h1></div>-->
    {{--Estou com problemas a mudar o cenas q diz filmes para filmes ou series por causa da condição--}}
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    Categories
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            @foreach($categories as $category)
                                    <p>{{$category->name}}
                                        ---> <a href=""> Edit</a></p>
                            @endforeach
                                <p><a href="{{ route('insertFormCategory') }}" >Add New Category</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 20px;"></div>
            </div>
        </div>
    </div>
@endsection