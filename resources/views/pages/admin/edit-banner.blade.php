<!-- edit banner view -->
@extends('layouts.newadmin')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Banner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data">
                        @csrf

                        <!-- form title1 -->
                        <div class="form-group row">
                            <label for="title1" class="col-md-4 col-form-label text-md-right">{{ __('Title1') }}</label>

                            <div class="col-md-6">
                                <input id="title1" type="text" class="form-control @error('title1') is-invalid @enderror" name="title1" value="{{ $banner->title1 }}" required autocomplete="title1" autofocus>

                                @error('title1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form subtitle1 -->
                        <div class="form-group row">
                            <label for="subtitle1" class="col-md-4 col-form-label text-md-right">{{ __('Subtitle1') }}</label>

                            <div class="col-md-6">
                                <input id="subtitle1" type="text" class="form-control @error('subtitle1') is-invalid @enderror" name="subtitle1" value="{{ $banner->subtitle1 }}" required autocomplete="subtitle1" autofocus>

                                @error('subtitle1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <!-- form image1 -->
                        <div class="form-group row">
                            <label for="image1" class="col-md-4 col-form-label text-md-right">{{ __('Image1') }}</label>

                            <div class="col-md-6">
                                <input id="image1" type="file" class="form-control @error('image1') is-invalid @enderror" name="image1" value="{{ $banner->image1 }}" required autocomplete="image1" autofocus>

                                @error('image1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form description1 -->
                        <div class="form-group row">
                            <label for="description1" class="col-md-4 col-form-label text-md-right">{{ __('Description1') }}</label>

                            <div class="col-md-6">
                                <input id="description1" type="text" class="form-control @error('description1') is-invalid @enderror" name="description1" value="{{ $banner->description1 }}" required autocomplete="description1" autofocus>

                                @error('description1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form title2 -->
                        <div class="form-group row">
                            <label for="title2" class="col-md-4 col-form-label text-md-right">{{ __('Title2') }}</label>

                            <div class="col-md-6">
                                <input id="title2" type="text" class="form-control @error('title2') is-invalid @enderror" name="title2" value="{{ $banner->title2 }}" required autocomplete="title2" autofocus>

                                @error('title2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                       
                        <!-- form image2 -->
                        <div class="form-group row">
                            <label for="image2" class="col-md-4 col-form-label text-md-right">{{ __('Image2') }}</label>

                            <div class="col-md-6">
                                <input id="image2" type="file" class="form-control @error('image2') is-invalid @enderror" name="image2" value="{{ $banner->image2 }}" required autocomplete="image2" autofocus>

                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form button -->
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

