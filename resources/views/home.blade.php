@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies | Series</div>

                <div class="card-body">
                    <p><a href="{{ url('/listMovies?id=1') }}" >List Movies</a></p>
                    <p><a href="{{ url('/listMovies?id=2') }}" >List Series</a></p>
                    <p><a href="{{ route('insertFormMovie') }}" >Add New </a></p>
                </div>
            </div>


            <div class="row" style="height: 20px;"></div>

            <div class="card">
                <div class="card-header">People</div>

                <div class="card-body">
                    <p><a href="{{ url('/listPeople') }}" >List People</a></p>
                    <p><a href="{{ route('insertFormMovie') }}" >Add New </a></p>
                </div>
            </div>

            @if(Auth::user()->role->name=="admin")

            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <p><a href="{{ url('/listCategories') }}" >List Categories</a></p>

                </div>
            </div>

            <div class="row" style="height: 20px;"></div>

            <div class="card">
                <div class="card-header">Countries</div>
                <div class="card-body">
                    <p><a href="{{ url('/listCountries') }}" >List Countries</a></p>
                    <p><a href="{{ route('insertFormCountry') }}" >Add New Country</a></p>
                </div>
            </div>

            <div class="row" style="height: 20px;"></div>

            <div class="card">
                <div class="card-header">Languages</div>
                <div class="card-body">
                    <p><a href="{{ url('/listLanguages') }}" >List Languages</a></p>
                    <p><a href="{{ route('insertFormLanguage') }}" >Add New Language</a></p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
