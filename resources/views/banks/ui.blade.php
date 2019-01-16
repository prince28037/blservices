<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banks Repository- Samaritus Capital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- stylesheet css -->
    <link rel="stylesheet" href="{{ asset('public/banks/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/banks/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/banks/css/bootstrap.min.css') }}">
    <!-- datatables css -->
    <link rel="stylesheet" href="{{ asset('public/banks/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/banks/css/responsive.bootstrap.min.css') }}">
    <!-- bootstrap select -->
    <link rel="stylesheet" href="{{ asset('public/banks/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('public/banks/css/style.css') }}">
    <!-- mordernizr css -->
    <script src="{{ asset('public/banks/js/vendor/modernizr.custom.97074.js') }}"></script>
    <style>
        .dataTables_filter {
            display: none;
        }
    </style>
</head>
<body>

<div class="loaf-dashboard clearfix">
    <!-- dashboard header -->
    <div class="dashboard-header navbar-fixed-top">
        <div class="container">
            <div class="col-sm-4 col-xs-4">
                <div class="slide-drawer-menu">
                    <span class="menu-icon"></span>
                    <span class="menu-icon menu-icon-small"></span>
                    <span class="menu-icon"></span>
                </div>
            </div>
            <div class="col-sm-5 col-xs-8 col-sm-offset-3 col-xs-offset-0">
                <div class="float-right clearfix">
                    <div class="user-nameno">
                        <h3 class="span">Joe Ialacci</h3>
                    </div>

                    <div class="user-icon">
                        <img src="{{ asset('public/banks/img/user-icon.png') }}" alt="user-icon">
                    </div>
                    <div class="user-dropdown">
                        <ul>
                            <li><a href="change-password.html" class="name">Change Password</a></li>
                            <li><a href="#" class="logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<!-- sidebar-dashboard -->--}}
    {{--<div class="dashboard-sidebar">--}}
        {{--<div class="sidebar-location clearfix text-center">--}}
            {{--<p>User ID : <span>4567</span></p>--}}
            {{--<p>Role : <span>Admin</span></p>--}}
        {{--</div>--}}
        {{--<div class="nav-side-menu">--}}
            {{--<ul id="menu-content" class="menu-content collapse out">--}}
                {{--<li class="active"><a href="dashboard.html">List of Users</a></li>--}}
                {{--<li><a href="dashboard-travel-list.html">List of Travel Request</a></li>--}}
                {{--<li  data-toggle="collapse" data-target="#products" class="collapsed">--}}
                    {{--<a href="#">Setting <span class="arrow"><i class="fas fa-angle-down"></i></span></a>--}}
                {{--</li>--}}
                {{--<ul class="sub-menu collapse" id="products">--}}
                    {{--<li><a href="dashboard-department.html">Department</a></li>--}}
                    {{--<li><a href="dashboard-grade.html">Grade</a></li>--}}
                    {{--<li><a href="dashboard-position.html">Position</a></li>--}}
                    {{--<li data-toggle="collapse" data-target="#department" class="collapsed"><a href="#">Mileage <span class="arrow"><i class="fas fa-angle-down"></i></span></a></li>--}}
                    {{--<ul class="sub-menu collapse" id="department">--}}
                        {{--<li><a href="dashboard-class.html">Class</a></li>--}}
                        {{--<li><a href="dashboard-allowance.html">Allowance</a></li>--}}
                    {{--</ul>--}}
                    {{--<li><a href="dashboard-accomodation.html">Accommodation</a></li>--}}
                    {{--<li><a href="dashboard-fooding.html">Fooding</a></li>--}}
                {{--</ul>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}


    <!-- main-content area -->
    <div class="dashboard-main-content clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 dashboad-title">
                    <h2>Banks</h2>
                    @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                    @if(isset($errors))
                        @foreach($errors as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="employee-table-center">
                        <h4 class="list-of-items">List Of Banks</h4>
                        <div class="dashoard-icon" data-toggle="modal" data-target=".bs-example-modal-lg" data-tooltip="tooltip" data-placement="right" title="Create Bank"><span class="glyph-icon flaticon-plus"></span></div>
                        <input type="text" class="form-control" id="search-box" placeholder="search">
                        <table id="example" class="table borderless" style="width:100%">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>URL</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($banks as $b)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $b['name'] }}</td>
                                <td>{{ $b['country'] }}</td>
                                <td>{{ $b['baseurl'] }}</td>
                                <td>
                                    {{--<div class="edit-icon" data-toggle="modal" data-target="#edit-bank-{{ $b->id }}" data-tooltip="tooltip" data-placement="bottom" title="Edit Bank">--}}
                                        {{--<img src="{{ asset('public/banks/img/icon-1.png') }}" alt="">--}}
                                    {{--</div>--}}

                                    {{--<div class="edit-icon icon-ed" data-toggle="modal" data-target="#delete-bank-{{ $b->id }}" data-tooltip="tooltip" data-placement="bottom" title="Delete Bank">--}}
                                        {{--<img src="{{ asset('public/banks/img/icon-3.png') }}" alt="">--}}
                                    {{--</div>--}}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="total-number-ofuser">
                        <p>Total Number Of Banks : <span>{{ $banks->count() }}</span></p>
                    </div>
                </div>
                <div class="footer-area footer-area-k2d clearfix">
                    <p class="text-center">Powered by <a href="#" target="_blank">Xerotic Inc.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


{{--<!--======================--}}
{{--create new account modal--}}
{{---->--}}

{{--<div class="modal fade bs-example-modal-lg model-that-hide" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
        {{--<div class="modal-content modal-lg-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                {{--<h4 class="modal-title" id="gridSystemModalLabel">Create New Bank</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="row">--}}
                    {{--<form action="{{ url('/services/banks') }}" method="post" id="add-bank">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="form-group clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<label for="loaf-user-id">Bank Name <span class="colon-right">:</span></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="text" class="form-control" id="load-muser-id" name="bank_name">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<label for="loaffullname">Website <span class="colon-right">:</span></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="text" class="form-control" id="load-fullname" name="url">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<label for="exampleFormControlSelect1">Country <span class="colon-right">:</span></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<div class="vechicle-select">--}}
                                    {{--<select class="form-control get-select-picker" name="country" id="exampleFormControlSelect1" title="Select country">--}}
                                        {{--@foreach($countries as $c)--}}
                                        {{--<option value="{{ $c->code }}">{{ $c->name }} ({{ $c->code }})</option>--}}
                                            {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<input type="hidden" name="action" value="add">--}}
                        {{--<div class="col-sm-7 col-sm-offset-4">--}}
                            {{--<button type="button" class="btn btn-default modal-hide" data-toggle="modal" data-target=".bs-example-modal-sm">Create</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<!-- Are you sure modal -->--}}
{{--<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">--}}
    {{--<div class="modal-dialog modal-sm" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-body text-center modal-padding">--}}
                {{--<p>Are you sure you want to create this bank ?</p>--}}
                {{--<button type="submit" form="add-bank" class="btn btn-default">Ok</button>--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<!--======================--}}
{{--Update account modal--}}
{{---->--}}
{{--@foreach($banks as $b)--}}
{{--<div class="modal fade bs-example-modal-lg2 model-that-hide" id="edit-bank-{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
        {{--<div class="modal-content modal-lg-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                {{--<h4 class="modal-title" id="gridSystemModalLabel">Update Bank</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="row">--}}
                    {{--<form action="{{ url('/services/banks') }}" method="post" id="editb{{ $b->id }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="form-group clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<label for="loaf-user-id">Bank Name <span class="colon-right">:</span></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="text" class="form-control" id="load-muser-id" name="bank_name" value="{{ $b->bank_name }}">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<label for="loaffullname">Website <span class="colon-right">:</span></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="text" class="form-control" id="load-fullname" name="url" value="{{ $b->url }}">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<label for="loaf-minstry">Country <span class="colon-right">:</span></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<div class="vechicle-select">--}}
                                    {{--<select class="form-control get-select-picker" name="country" id="exampleFormControlSelect1" title="Select Country">--}}
                                        {{--@foreach($countries as $c)--}}
                                            {{--<option value="{{ $c->code }}" @if($b->country == $c->code) {{ 'selected' }} @endif>{{ $c->name }} ({{ $c->code }})</option>--}}
                                            {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<input type="hidden" name="action" value="edit">--}}
                        {{--<input type="hidden" name="bank_id" value="{{ $b->id }}">--}}
                        {{--<div class="col-sm-7 col-sm-offset-4">--}}
                            {{--<button type="button" class="btn btn-default modal-hide" data-toggle="modal" data-target="#sure{{ $b->id }}">Update</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<!-- Are you sure modal -->--}}
{{--<div class="modal fade bs-example-modal-sm2" id="sure{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">--}}
    {{--<div class="modal-dialog modal-sm" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-body text-center modal-padding">--}}
                {{--<p>Are you sure you want to update this bank ?</p>--}}
                {{--<button type="submit" form="editb{{ $b->id }}" class="btn btn-default">Ok</button>--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Are you sure Active modal -->--}}
{{--<div class="modal fade bs-example-modal-sm3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">--}}
    {{--<div class="modal-dialog modal-sm" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-body text-center modal-padding">--}}
                {{--<p>Are you sure you want to Active this account ?</p>--}}
                {{--<button type="button" class="btn btn-default">Ok</button>--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Are you sure Deactive modal -->--}}
{{--<div class="modal fade bs-example-modal-sm5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">--}}
    {{--<div class="modal-dialog modal-sm" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-body text-center modal-padding">--}}
                {{--<p>Are you sure you want to Deactive this account ?</p>--}}
                {{--<button type="button" class="btn btn-default">Ok</button>--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Are you sure Delete modal -->--}}
{{--<div class="modal fade bs-example-modal-sm4" id="delete-bank-{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">--}}
    {{--<div class="modal-dialog modal-sm" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-body text-center modal-padding">--}}
                {{--<p>Are you sure you want to Delete this bank ?</p>--}}
                {{--<form action="{{ url('/services/banks') }}" method="post" id="deleteb{{ $b->id }}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<input type="hidden" name="action" value="delete">--}}
                    {{--<input type="hidden" name="bank_id" value="{{ $b->id }}">--}}
                {{--</form>--}}
                {{--<button type="submit" form="deleteb{{ $b->id }}" class="btn btn-default">Ok</button>--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- main js file -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('public/banks/js/vendor/jquery-3.2.1.min.js') }}"><\/script>')</script>
<!-- bootstrap css -->
<script src="{{ asset('public/banks/js/bootstrap.min.js') }}"></script>
<!-- dataTables js -->
<script src="{{ asset('public/banks/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/banks/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('public/banks/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/banks/js/responsive.bootstrap.min.js') }}"></script>
<!-- bootstrap select -->
<script src="{{ asset('public/banks/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('public/banks/js/plugins.js') }}"></script>
<script src="{{ asset('public/banks/js/niceScroll.min.js') }}"></script>
<!-- main js file -->
<script src="{{ asset('public/banks/js/custom.js') }}"></script>
    <script>
        $(document).ready(function () {
//            $('.dataTables_filter input[type="search"]').css(
//                    {'width':'500px','display':'inline-block'}
//            );
            var dataTable = $('#example').dataTable();
            $("#search-box").keyup(function() {
                dataTable.fnFilter(this.value);
            });
        });
    </script>
</body>
</html>