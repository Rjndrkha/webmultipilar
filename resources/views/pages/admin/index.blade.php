@extends('layouts.newadmin')

@section('content')

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard</h3>
            </div>
        </div>

        <div class="row">
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
                                            <img src="dashboard/assets/img/90x90.jpg" class="img-fluid" alt="img-1" style="border-color: #3862f5;">
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

        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area raised-tickets p-0  h-100 br-4">
                    <div class=" table-header">
                        <div class="row">
                            <div class="col-6 pr-0">
                                <p class="mb-0">Tickets</p>
                            </div>
                            <div class="col-6 pl-0 text-right">
                                <p class="mb-0">Status</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                            <div class="media-body">
                                                <h6 class="usr-name">Shaun Park</h6>
                                                <p class="meta-info">
                                                    <i class="flaticon-stopwatch-1 mr-1"></i>
                                                    <span class="meta-date">9 Jan 2019 | Tue - </span>
                                                    <span class="meta-time">9:00 am</span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="action text-right">
                                        <i class="flaticon-danger-2 mb-2 t-inprogress bs-tooltip" data-placement="top" title="Pending"></i>
                                        <i class="flaticon-checked-1 mb-2 bs-tooltip" data-placement="top" title="Success"></i>
                                        <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                            <div class="media-body">
                                                <h6 class="usr-name">Nia Hillyer</h6>
                                                <p class="meta-info">
                                                    <i class="flaticon-stopwatch-1 mr-1"></i>
                                                    <span class="meta-date">5 Jan 2019 | Mon - </span>
                                                    <span class="meta-time">2:00 pm</span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="action text-right">
                                        <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                        <i class="flaticon-checked-1 mb-2 t-solved bs-tooltip" data-placement="top" title="Success"></i>
                                        <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                            <div class="media-body">
                                                <h6 class="usr-name">Mary McDonald</h6>
                                                <p class="meta-info">
                                                    <i class="flaticon-stopwatch-1 mr-1"></i>
                                                    <span class="meta-date">3 Jan 2019 | Mon - </span>
                                                    <span class="meta-time">10:00 am</span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="action text-right">
                                        <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                        <i class="flaticon-checked-1 mb-2 bs-tooltip" data-placement="top" title="Success"></i>
                                        <i class="flaticon-cancel-circle mb-2 t-not-solved bs-tooltip" data-placement="top" title="Close"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mr-4" alt="user">
                                            <div class="media-body">
                                                <h6 class="usr-name">Andy King</h6>
                                                <p class="meta-info">
                                                    <i class="flaticon-stopwatch-1 mr-1"></i>
                                                    <span class="meta-date">29 Dec 2018 | Fri - </span>
                                                    <span class="meta-time">03:00 pm</span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="action text-right">
                                        <i class="flaticon-danger-2 mb-2 bs-tooltip" data-placement="top" title="Pending"></i>
                                        <i class="flaticon-checked-1 mb-2 t-solved bs-tooltip" data-placement="top" title="Success"></i>
                                        <i class="flaticon-cancel-circle mb-2 bs-tooltip" data-placement="top" title="Close"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area task-container  p-0 h-100 br-4">
                    <div class="task-list">
                        <div class="task-header">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 mb-4 mb-sm-0">
                                    <h6 class="mt-3 mb-0">Today's Task</h6>
                                </div>
                                <div class="col-md-7 col-sm-7 text-sm-right">
                                    <button class="btn btn-gradient-warning btn-rounded">Create Task</button>
                                </div>
                            </div>
                        </div>
                        <div class="task-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="task-item">
                                                    <h6 class="task-title mb-3">Metting Scheduled with</h6>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                <br />
                                                <p class="meta-info">
                                                    <span class="meta-time">03:20 PM Wed,</span>
                                                    <span class="meta-date">16 Jan 2019</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="task-item">
                                                    <h6 class="task-title mb-3">Give purchase report to</h6>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-1" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <div class="txt-profile txt-profile-success mb-1">G</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                <br />
                                                <p class="meta-info">
                                                    <span class="meta-time">11:00 AM Wed,</span>
                                                    <span class="meta-date">16 Jan 2019</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="task-item">
                                                    <h6 class="task-title mb-3">Receive Shipment</h6>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <img src="dashboard/assets/img/90x90.jpg" class="rounded-circle mb-2" alt="user">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="action text-right">
                                                <i class="flaticon-edit-fill bs-tooltip" data-placement="top" title="Edit"></i>
                                                <i class="flaticon-delete-can-fill-2 ml-2 bs-tooltip" data-placement="top" title="Delete"></i>
                                                <br />
                                                <p class="meta-info">
                                                    <span class="meta-time">09:00 AM Wed,</span>
                                                    <span class="meta-date">16 Jan 2019</span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center action-button">
                                <button class="btn btn-light-success mb-4 mt-3 box-shadow-none">View All Tasks</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area event-calendar p-0  h-100 br-4">
                    <div class="calendar"></div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="top-searches widget-content-area p-0 widget-content-container h-100 br-4">
                    <div class="col-lg-12 col-md-12 col-12 map-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-6">
                                <p class="mb-4 mt-2">Top Searches</p>
                            </div>
                        </div>
                    </div>
                    <div class="child-content">
                        <div id="world-map" style="height: 435px; max-height: 100%;"></div>
                        <div class="world-map-section">
                            <div class="">
                                <div class="table-responsive top-search-scroll">
                                    <table class="table table-highlight-head">
                                        <thead>
                                            <tr>
                                                <th class="align-center">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-m-data-1 data-marker align-self-center"></div>
                                                        <span class="page-view mr-sm-3">USA</span>
                                                    </div>
                                                </th>
                                                <th class="align-center">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-m-data-2 data-marker align-self-center"></div>
                                                        <span class="page-view mr-sm-3">Australia</span>
                                                    </div>
                                                </th>
                                                <th class="align-center">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-m-data-3 data-marker align-self-center"></div>
                                                        <span class="page-view mr-sm-3">Spain</span>
                                                    </div>
                                                </th>
                                                <th class="align-center">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-m-data-4 data-marker align-self-center"></div>
                                                        <span class="page-view mr-sm-3">France</span>
                                                    </div>
                                                </th>
                                                <th class="align-center">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-m-data-5 data-marker align-self-center"></div>
                                                        <span class="page-view mr-sm-3">India</span>
                                                    </div>
                                                </th>
                                                <th class="align-center">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-m-data-6 data-marker align-self-center"></div>
                                                        <span class="page-view mr-sm-3">Other</span>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-center data-value-1">55%</td>
                                                <td class="align-center data-value-2">30%</td>
                                                <td class="align-center data-value-3">10%</td>
                                                <td class="align-center data-value-4">4%</td>
                                                <td class="align-center data-value-5">0.6%</td>
                                                <td class="align-center data-value-6">0.4%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-12 layout-spacing">
                <div class="statbox widget box box-shadow latest-invoice ">
                    <div class="widget-header ">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Latest Invoice</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-area ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="form-check-column text-center">
                                            <label for="invoiceAll" class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" id="invoiceAll" class="new-control-input">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </th>
                                        <th>Product</th>
                                        <th>Invoice no.</th>
                                        <th>Date</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Camera</td>
                                        <td>#0001</td>
                                        <td>16 Jan</td>
                                        <td class="align-center">$15,202</td>
                                        <td class="text-center">
                                            <span class="badge badge-pills outline-badge-secondary">In Progress</span>
                                        </td>
                                        <td>
                                            <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Iphone</td>
                                        <td>#0002</td>
                                        <td>16 Jan</td>
                                        <td class="align-center">$650</td>
                                        <td class="text-center">
                                            <span class="badge badge-pills outline-badge-success">Approved</span>
                                        </td>
                                        <td>
                                            <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Headphone</td>
                                        <td>#0003</td>
                                        <td>16 Jan</td>
                                        <td class="align-center">$25</td>
                                        <td class="text-center">
                                            <span class="badge badge-pills outline-badge-warning">Pending</span>
                                        </td>
                                        <td>
                                            <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Speakers</td>
                                        <td>#0004</td>
                                        <td>16 Jan</td>
                                        <td class="align-center">$100</td>
                                        <td class="text-center">
                                            <span class="badge badge-pills outline-badge-secondary">In Progress</span>
                                        </td>
                                        <td>
                                            <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Watch</td>
                                        <td>#0005</td>
                                        <td>16 Jan</td>
                                        <td class="align-center">$85</td>
                                        <td class="text-center">
                                            <span class="badge badge-pills outline-badge-success">Approved</span>
                                        </td>
                                        <td>
                                            <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="form-check-column text-center">
                                            <label class="new-control new-checkbox checkbox-primary pb-2">
                                                <input type="checkbox" class="new-control-input invoicechk">
                                                <span class="new-control-indicator mt-2"></span><span class="invisible">s</span>
                                            </label>
                                        </td>
                                        <td>Sunglasses</td>
                                        <td>#0006</td>
                                        <td>16 Jan</td>
                                        <td class="align-center">$19</td>
                                        <td class="text-center">
                                            <span class="badge badge-pills outline-badge-danger">Cancelled</span>
                                        </td>
                                        <td>
                                            <i class="flaticon-view-1 bs-tooltip" data-placement="top" data-original-title="View"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-12 layout-spacing">
                <div class="widget-content-area p-0 card-widget-content ">
                    <div id="user-profile-card-1" class="card br-4" style="">
                        <div class="card-body p-0">
                            <div class="usr-img-meta mx-auto">
                                <img alt="admin-profile" src="dashboard/assets/img/120x120.jpg" class="rounded-circle">
                            </div>
                            <div class="usr-info-meta text-center">
                                <p class="usr-name mb-0">Sean Freeman</p>
                                <p class="usr-occupation">Designer</p>
                                <button class="btn btn-secondary btn-rounded">View Profile</button>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 text-center mt-4">
                                    <button class="btn btn-light-info rounded-circle mb-2 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i>
                                    </button>
                                    <button class="btn btn-light-success rounded-circle mb-2 mr-2"><i class="flaticon-behance-logo flaticon-circle-p"></i>
                                    </button>
                                    <button class="btn btn-light-primary rounded-circle mb-2 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i>
                                    </button>
                                    <button class="btn btn-light-warning rounded-circle mb-2 mr-2"><i class="flaticon-dribbble-bold flaticon-circle-p"></i>
                                    </button>
                                    <button class="btn btn-light-danger rounded-circle mb-2 mr-2"><i class="flaticon-youtube-logo flaticon-circle-p"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area page-views p-0  br-4">
                    <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Daily</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Weekly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Monthly</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="daily">
                                        <p class="d-count mb-0">5,067</p>
                                        <p>Total Page Views</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div id="daily"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="weekly">
                                        <p class="w-count mb-0">25,067</p>
                                        <p>Total Page Views</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div id="weekly"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="month">
                                        <p class="m-count mb-0">276,097</p>
                                        <p>Total Page Views</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div id="month"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="row">

                    <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                        <div class="widget-content-area social-likes text-center p-0  br-4">
                            <div class="card facebook">
                                <div class="icon mb-4">
                                    <i class="flaticon-facebook-logo"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Facebook</h5>
                                    <p>13K Followers</p>
                                </div>
                                <div class="card-btn-section">
                                    <p>View Profile</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                        <div class="widget-content-area social-likes text-center p-0  br-4">
                            <div class="card dribbble">
                                <div class="icon mb-4">
                                    <i class="flaticon-dribbble-bold"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Dribbble</h5>
                                    <p>4K Followers</p>
                                </div>
                                <div class="card-btn-section">
                                    <p>Check Work</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                        <div class="widget-content-area social-likes text-center p-0  br-4">
                            <div class="card twitter">
                                <div class="icon mb-4">
                                    <i class="flaticon-twitter-logo"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Twitter</h5>
                                    <p>7.2K Followers</p>
                                </div>
                                <div class="card-btn-section">
                                    <p>Read Tweets</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

<!--  BEGIN FOOTER  -->
<footer class="footer-section theme-footer">

    <div class="footer-section-1  sidebar-theme">

    </div>

    <div class="footer-section-2 container-fluid">
        <div class="row">
            <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                <ul class="list-inline links ml-sm-5">
                    <li class="list-inline-item mr-3">
                        <a href="javascript:void(0);">Home</a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="javascript:void(0);">Blog</a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="javascript:void(0);">About</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);">Buy</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                    <li class="list-inline-item  mr-3">
                        <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                    </li>
                    <li class="list-inline-item align-self-center">
                        <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--  END FOOTER  -->

</body>

</html>