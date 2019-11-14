@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add a new Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('insertCategory') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put') {{--para submissao atraves do formulario e substitui a linha de baixo, este comando--}}

                            <input type="hidden" name="_method" value="post"> {{--apesar de tar a ser submetido como post, altera o seu comportamento como put--}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name of the category</label> {{--nomes das partes deve tar com o msm nome do --}}

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Category') }}
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