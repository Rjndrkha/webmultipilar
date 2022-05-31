@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                  

                    <!-- table banner start -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Banners</h3>
                                    <!-- create hide banner -->
                                    <a href="#" class="btn btn-primary">Create</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title1</th>
                                                <th>Subtittle1</th>
                                                <th>Image1</th>
                                                <th>Title2</th>
                                                <th>Image2</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($banners as $banner)
                                            <tr>
                                                <td>{{ $banner->title1 }}</td>
                                                <td>{{ $banner->subtitle1 }}</td>
                                                <td><img src="{{ asset('storage/'.$banner->image1) }}{{$banner->image1
                                                }}" width="100px" height="100px"></td>
                                                <td>{{ $banner->title2 }}</td>
                                                <td><img src="" width="100px" height="100px"></td>
                                                <td>
                                                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <!-- table banner end -->
                                <!-- table service start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Service</h3>
                                        <!-- create service -->
                                        <a href="{{ route('service.create') }}" class="btn btn-primary">Create</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Subtitle</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($services as $service)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $service->title }}</td>
                                                    <td><img src="{{ asset('storage/'.$service->image) }}" width="100px" height="100px"></td>
                                                    <td>{{ $service->subtitle }}</td>
                                                    <td>
                                                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    <!-- table service end -->
                                    
                                        <!-- table team start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Team</h3>
                                                <!-- create team -->
                                                <a href="{{ route('team.create') }}" class="btn btn-primary">Create</a>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example4" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($teams as $team)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $team->name }}</td>
                                                            <td><img src="{{asset('storage/'.$team->image) }}" 
                                                             width="100px" height="100px">
                                                            <td>
                                                                <a href="{{ route('team.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                                                                <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <button type="submit" class="btn btn-danger">Delete</button>

                                                                </form>
                                                                
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                            <!-- table team end -->
                                           <!-- table blog start -->
                                             <div class="card">
                                              <div class="card-header">
                                                    <h3 class="card-title">Blog</h3>
                                                    <!-- create blog -->
                                                    <a href="{{ route('blog.create') }}" class="btn btn-primary">Create</a>
                                              </div>
                                              <!-- /.card-header -->
                                              <div class="card-body">
                                                    <table id="example3" class="table table-bordered table-striped">
                                                     <thead>
                                                          <tr>
                                                                <th>No</th>
                                                                <th>Title</th>
                                                                <th>Image</th>
                                                                <th>Content</th>
                                                                <th>Category</th>
                                                                <th>Tag</th>
                                                                <th>Author</th>
                                                                <th>Action</th>
                                                          </tr>
                                                     </thead>
                                                     <tbody>
                                                          @foreach($blogs as $blog)
                                                          <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $blog->title }}</td>
                                                                <td><img src="{{asset('storage/'.$blog->image) }}" 
                                                                 width="100px" height="100px">
                                                                <td>{{ $blog->content }}</td>
                                                                <td>{{ $blog->category->name}}</td>
                                                                <td>{{$blog->tag->name}}</td>
                                                                <td>{{ $blog->user->name}}</td> 
                                                                <td>
                                                                 <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                                                                 <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                                                      @csrf
                                                                      @method('POST')
                                                                      <button type="submit" class="btn btn-danger">Delete</button>
    
                                                                 </form>
                                                                 
                                                                </td>
                                                          </tr>
                                                          @endforeach
                                                     </tbody>
                                                    </table>
                                              </div>
                                             </div>
                                              <!-- table testimonial -->
                                                <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Testimonial</h3>
                                                            <!-- create testimonial -->
                                                            <a href="{{ route('testimonial.create') }}" class="btn btn-primary">Create</a>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <table id="example5" class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Name</th>
                                                                        <th>Image</th>
                                                                        <th>Description</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($testimonials as $testimonial)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $testimonial->name }}</td>
                                                                        <td><img src="{{asset('storage/'.$testimonial->image) }}" 
                                                                         width="100px" height="100px">
                                                                        <td>{{ $testimonial->description }}</td>
                                                                        <td>
                                                                            <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                                                                            <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('POST')
                                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                            
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                </div>
                                             
                                <!-- table gallery -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Gallery Klien Kami</h3>

                                        <!-- create gallery -->
                                        <a href="{{ route('gallery.create') }}" class="btn btn-primary">Create</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example6" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>title</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($galleries as $gallery)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $gallery->title }}</td>
                                                    <td><img src="{{asset('storage/'.$gallery->image) }}" 
                                                     width="100px" height="100px">
                                                    <td>
                                                        <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
                                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn btn-danger">Delete</button>

                                                        </form>
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                
@endsection
