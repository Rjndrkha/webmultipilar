@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- post banner -->
                    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title1">Title 1</label>
                            <input type="text" class="form-control" id="title1" name="title1">
                        </div>
                        <div class="form-group">
                            <label for="image1">Image 1</label>
                            <input type="file" class="form-control" id="image1" name="image1">
                        </div>
                        <div class="form-group">
                            <label for="subtitle1">Subtitle 1</label>
                            <input type="text" class="form-control" id="subtitle1" name="subtitle1">
                        </div>
                        <div class="form-group">
                            <label for="title2">Title 2</label>
                            <input type="text" class="form-control" id="title2" name="title2">
                        </div>
                        <div class="form-group">
                            <label for="image2">Image 2</label>
                            <input type="file" class="form-control" id="image2" name="image2">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
