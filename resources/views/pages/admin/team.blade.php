@extends('layouts.newadmin')

@section('content')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Banner Panel Editor</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="statbox widget box">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">


                                <div class="col-md-7 col-sm-7 text-sm-left">
                                    <h4>Banner</h4>
                                    <button class="btn btn-gradient-warning btn-rounded">Add New User</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content-area ">

                        <div class="table-responsive new-products">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Team</th>
                                        <th>Nama</th>
                                        <th>Job Role</th>
                                        <th>Image</th>
                                        <th>Image Location</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teams as $team)
                                    <tr>
                                        <td>Team {{ $team->id }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->position }}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$team->image) }}" width="100px" height="100px">
                                        </td>
                                        <td>{{ $team->image }}

                                        </td>

                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">

                                                    <li class="list-inline-item">

                                                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-warning">Edit</a>

                                                    </li>
                                                    <li class="list-inline-item">

                                                        <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn btn-danger">Delete</button>


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