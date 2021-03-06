@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add a new movie') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('insertMovie') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put') {{--para submissao atraves do formulario e substitui a linha de baixo, este comando--}}

                            <input type="hidden" name="_method" value="post"> {{--apesar de tar a ser submetido como post, altera o seu comportamento como put--}}

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label> {{--nomes das partes deve tar com o msm nome do --}}

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('name') }}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" rows="" name="description" required autocomplete="description" ></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="imdb" class="col-md-4 col-form-label text-md-right" >Imdb</label>

                                <div class="col-md-6">
                                    <input id="imdb" type="number"  min="0" max="10" class="form-control @error('description') is-invalid @enderror" name="imdb" value="imdb" required autocomplete="imdb">

                                    @error('imdb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>

                                <div class="col-md-6">
                                    <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year" required autocomplete="year" max="2025">

                                    @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="releaseDate" class="col-md-4 col-form-label text-md-right">Release Date</label>

                                <div class="col-md-6">
                                    <input id="releaseDate" type="date" class="form-control @error('releaseDate') is-invalid @enderror" name="releaseDate" required autocomplete="year">

                                    @error('releaseDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type_id" class="col-md-4 col-form-label text-md-right">Type</label>

                                <div class="col-md-6">

                                    <select name="type_id" required>
                                        <option value="">Select Movie or Serie</option>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Category</label>

                                <div class="col-md-6">

                                    <select name="category_id" required>
                                        <option value="">Select a category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="language_id" class="col-md-4 col-form-label text-md-right">Language</label>

                                <div class="col-md-6">

                                    <select name="language_id" required>
                                        <option value="">Select a language</option>
                                        @foreach($languages as $language)
                                            <option value="{{$language->id}}">{{$language->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('language_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country_id" class="col-md-4 col-form-label text-md-right">Country</label>

                                <div class="col-md-6">

                                    <select name="country_id" required>
                                        <option value="">Select a country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="diretor_id" class="col-md-4 col-form-label text-md-right">Director</label>

                                <div class="col-md-6">

                                    <select name="diretor_id">
                                        <option value="">Select a director</option>
                                        @foreach($directores as $director)
                                            <option value="{{$director->id}}">{{$director->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('diretor_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="star1_id" class="col-md-4 col-form-label text-md-right">Star1</label>

                                <div class="col-md-6">

                                    <select name="star1_id">
                                        <option value="">Select a person</option>
                                        @foreach($stars1 as $star1)
                                            <option value="{{$star1->id}}">{{$star1->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('star1_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="star2_id" class="col-md-4 col-form-label text-md-right">Star2</label>

                                <div class="col-md-6">

                                    <select name="star2_id">
                                        <option value="">Select a person</option>
                                        @foreach($stars2 as $star2)
                                            <option value="{{$star2->id}}">{{$star2->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('star2_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="star3_id" class="col-md-4 col-form-label text-md-right">Star3</label>

                                <div class="col-md-6">

                                    <select name="star3_id">
                                        <option value="">Select a person</option>
                                        @foreach($stars3 as $star3)
                                            <option value="{{$star3->id}}">{{$star3->name}}</option>
                                        @endforeach

                                    </select>

                                    @error('star3_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Movie') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection