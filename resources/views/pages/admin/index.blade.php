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
                                    <h4>User Database</h4>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Image</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ Auth::user()->id }}</td>
                                        <td>{{ Auth::user()->name }}</td>
                                        <td><span class="badge badge-info badge-pill">{{ Auth::user()->email }}</span></td>
                                        <td>{{ Auth::user()->password }}</td>

                                        <td>
                                            <img src="{{asset('storage/images/profile/profile.png')}}" class="img-fluid" alt="img-1" style="border-color: #3862f5;">
                                        </td>

                                        <td class="text-center">
                                            <div class="toolbar">
                                                <div class="toolbar-toggle">...</div>
                                                <ul class="toolbar-dropdown animated fadeInUp table-controls list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="View"><i class="flaticon-view-3"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Edit"><i class="flaticon-edit-5"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0);" class="bs-tooltip" data-original-title="Remove"><i class="flaticon-delete-6"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


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
<!--  END CONTENT PART  -->

</div>



</body>

</html>