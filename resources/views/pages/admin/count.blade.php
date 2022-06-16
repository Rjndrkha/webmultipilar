@extends('layouts.newadmin')

@section('content')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Count Panel Editor</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="statbox widget box">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">


                            </div>
                        </div>
                    </div>

                    <div class="widget-content-area ">

                        <div class="table-responsive new-products">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Count</th>
                                        <th>Klien</th>
                                        <th>Ahli</th>
                                        <th>Symfoni</th>
                                        <th>Mobile</th>
                                        <th>Background</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($counts as $count)
                                    <tr>
                                        <td>{{ $count->id }}</td>
                                        <td>{{ $count->klien }}</td>
                                        <td>{{ $count->ahli }}</td>
                                        <td>{{ $count->symfoni }}</td>
                                        <td>{{ $count->mobile }}</td>

                                        <td><img src="{{asset('storage/'.$count->background)}}" width="100px" height="100px"></td>
                                        <td>
                                            <a href="{{ route('count.edit', $count->id) }}" class="btn btn-warning">Edit</a>

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