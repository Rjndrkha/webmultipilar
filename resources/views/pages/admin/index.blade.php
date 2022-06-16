@extends('layouts.newadmin')

@section('content')

    <!--  BEGIN CONTENT PART  -->
    <div id="content">
        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Dashboard</h3>
                </div>
            </div>

            <div class="row" id="dashboard">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="statbox widget box">
                        <div class="widget-header ">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                    <div class="col-md-7 col-sm-7 text-sm-left">
                                        <h4>Data Konsultasi</h4>
                                        <a href="{{ route('adduser') }}" class="btn btn-gradient-warning btn-rounded">Add
                                            New User</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="widget-content-area ">

                            <div class="table-responsive new-products">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Instansi</th>
                                            <th>Jabatan</th>
                                            <th>Pesan</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    @foreach ($consultations as $consultation)
                                        <tbody>
                                            <tr>
                                                <td>{{ $consultation->id }}</td>
                                                <td>{{ $consultation->nama }}</td>
                                                <td>{{ $consultation->email }}</td>
                                                <td>{{ $consultation->phone }}</td>
                                                <td>{{ $consultation->instansi }}</td>
                                                <td>{{ $consultation->jabatan }}</td>
                                                <td>{{ $consultation->pesan }}</td>
                                                <td>
                                                    <form action="{{ route('consultation.destroy', $consultation->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" onclick="confirmation()"
                                                            class="btn btn-warning">Terbaca</button>

                                                    </form>
                                                    <script>
                                                        function confirmation() {
                                                            var txt;
                                                            if (confirm("Data Akan Terkirim")) {
                                                                txt = "Yes";
                                                            } else {
                                                                return false;
                                                            }

                                                        }
                                                    </script>
                                                </td>


                                            </tr>

                                        </tbody>
                                    @endforeach
                                </table>




                            </div>


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




            <div class="row" id="dashboard">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="statbox widget box">
                        <div class="widget-header ">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">


                                    <div class="col-md-7 col-sm-7 text-sm-left">
                                        <h4>User Database</h4>
                                        <a href="{{ route('adduser') }}" class="btn btn-gradient-warning btn-rounded">Add
                                            New User</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content-area ">

                            <div class="table-responsive new-products">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Image</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td><span class="badge badge-info badge-pill">{{ $user->email }}</span>
                                                </td>
                                                <td>{{ $user->password }}</td>

                                                <td>
                                                    <img src="{{ asset('storage/images/profile/profile.png') }}"
                                                        class="img-fluid" alt="img-1" style="border-color: #3862f5;">
                                                </td>

                                                <td class="text-center">
                                                    <div class="toolbar">
                                                        <div class="toolbar-toggle">...</div>
                                                        <ul
                                                            class="toolbar-dropdown animated fadeInUp table-controls list-inline">

                                                            <li class="list-inline-item">
                                                                <form method="GET" action="/multipilar/admin/add/user/edit">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $user->id }}">
                                                                    <button type="submit"
                                                                        class="btn btn-warning">Edit</button>
                                                                </form>

                                                            </li>
                                                            <li class="list-inline-item">

                                                                <form action="{{ route('user.delete', $user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>


                                                                </form>


                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    @endforeach
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
    <!--  END CONTENT PART  -->

    </div>



    </body>

    </html>
