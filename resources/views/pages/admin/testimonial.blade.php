@extends('layouts.newadmin')

@section('content')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Testimonial Panel Editor</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="statbox widget box">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">


                                <div class="col-md-7 col-sm-7 text-sm-left">
                                    <h4>Testimonial</h4>
                                    <a href="{{ route('testimonial.create') }}" class="btn btn-gradient-warning btn-rounded">
                                    Add New Testimonial</a>
                                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content-area ">

                        <div class="table-responsive new-products">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Testimonial</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->id }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td><img src="{{asset('storage/'.$testimonial->image) }}" width="100px" height="100px"></td>
                                        <td>{{ $testimonial->address }}</td>
                                        <td>{{ $testimonial->description }}</td>
                                       
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">

                                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="btn btn-danger">Delete</button>

                                                    </form>
                                                   
                                                    <br>

                                                    
                                                </ul>
                                            </div>
                                        </td>


                                    </tr>
                                    @endforeach


                                </tbody> 
                            </table>
                        </div>
                        <div class="pagination-section">
                            <ul class="pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3">
                                <li><a href="javascript:void(0);">«</a></li>
                                <li><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li><a href="javascript:void(0);">5</a></li>
                                <li><a href="javascript:void(0);">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>