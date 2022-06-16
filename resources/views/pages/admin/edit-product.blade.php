<!-- view edit product -->

@extends('layouts.newadmin')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit PRODUCT') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- form title -->
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $product->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form image -->
                        <div
                            class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $product->image }}" required autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- form banner -->
                        <div
                            class="form-group row">
                            <label for="banner" class="col-md-4 col-form-label text-md-right">{{ __('Banner') }}</label>

                            <div class="col-md-6">
                                <input id="banner" type="file" class="form-control @error('banner') is-invalid @enderror" name="banner" value="{{ $product->banner }}" required autocomplete="banner" autofocus>

                                @error('banner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form overview -->
                        <div
                            class="form-group row">
                            <label for="overview" class="col-md-4 col-form-label text-md-right">{{ __('Overview') }}</label>

                            <div class="col-md-6">
                                <textarea id="overview" type="text" class="form-control @error('overview') is-invalid @enderror" name="overview" value="{{ $product->overview }}" required autocomplete="overview" autofocus>{{ $product->overview }}</textarea>

                                @error('overview')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form submit -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
        
        <!-- form title -->
