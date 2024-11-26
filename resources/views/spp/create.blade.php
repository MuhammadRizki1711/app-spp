@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah SPP</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('spp.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="tahun" class="col-md-4 col-form-label text-md-end">{{ __('Tahun') }}</label>
                            <div class="col-md-6">
                                <input id="tahun" type="number" class="form-control @error('tahun') is-invalid @enderror" 
                                       name="tahun" value="{{ old('tahun') }}" required autocomplete="tahun" autofocus>
                                @error('tahun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nominal" class="col-md-4 col-form-label text-md-end">{{ __('Nominal') }}</label>
                            <div class="col-md-6">
                                <input id="nominal" type="number" class="form-control @error('nominal') is-invalid @enderror" 
                                       name="nominal" value="{{ old('nominal') }}" required autocomplete="nominal" autofocus>
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah SPP') }}
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
