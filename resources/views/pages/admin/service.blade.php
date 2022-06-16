@extends('layouts.newadmin')

@section('content')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Service Panel Editor</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="statbox widget box">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">


                                <div class="col-md-7 col-sm-7 text-sm-left">
                                    <h4>Service</h4>
                                    <!-- create -->
                                    <a href="{{ route('service.create') }}" class="btn btn-primary">Create</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content-area ">

                        <div class="table-responsive new-products">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Banner</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Image</th>
                                        <th>description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>Service {{ $service->id }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->subtitle }}</td>
                                        <td>{{ $service->image }}</td>
                                        <td>{{ $service->description }}</td>
                                       
                                       
                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">

                                                    <li class="list-inline-item"><a href="{{ route('service.edit', $service->id) }}" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>

                                                    <!-- destroy -->
                                                    <li class="list-inline-item">
                                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="bs-tooltip" data-original-title="Delete"><i class="flaticon-delete-2"></i></button>
                                                        </form>
                                                    </li>
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