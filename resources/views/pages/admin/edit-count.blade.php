<!-- edit count view -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Count</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('count.update', $count->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!-- form klien -->
                        <div class="form-group row">
                            <label for="klien" class="col-md-4 col-form-label text-md-right">{{ __('Klien') }}</label>

                            <div class="col-md-6">
                                <input id="klien" type="text" class="form-control @error('klien') is-invalid @enderror" name="klien" value="{{ $count->klien }}" required autocomplete="klien" autofocus>

                                @error('klien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form ahli -->
                        <div class="form-group row">
                            <label for="ahli" class="col-md-4 col-form-label text-md-right">{{ __('Ahli') }}</label>

                            <div class="col-md-6">
                                <input id="ahli" type="text" class="form-control @error('ahli') is-invalid @enderror" name="ahli" value="{{ $count->ahli }}" required autocomplete="ahli" autofocus>

                                @error('ahli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form symfoni -->
                        <div class="form-group row">
                            <label for="symfoni" class="col-md-4 col-form-label text-md-right">{{ __('Symfoni') }}</label>

                            <div class="col-md-6">
                                <input id="symfoni" type="text" class="form-control @error('symfoni') is-invalid @enderror" name="symfoni" value="{{ $count->symfoni }}" required autocomplete="symfoni" autofocus>

                                @error('symfoni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form mobile -->
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ $count->mobile }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- form background -->
                        <div class="form-group row">
                            <label for="background" class="col-md-4 col-form-label text-md-right">{{ __('Background') }}</label>

                            <div class="col-md-6">
                                <input id="background" type="file" class="form-control @error('background') is-invalid @enderror" name="background" value="{{ $count->background }}" required autocomplete="background" autofocus>

                                @error('background')
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


