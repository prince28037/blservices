<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Samaritus Capital- PDF Generator</title>
    <link rel="icon" href="{{ asset('public/pdf/fav.jpg') }}" type="image/jpg" sizes="16x16">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Calibri';
            src: '{{ base_path() }}/public/fonts/calibri.ttf';
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: "Calibri", sans-serif;
        }
        nav {
            color: #193e78;
            background-color: #FFFFFF;
        }
        nav a {
            color: #193e78;
            font-size: 18px;
        }
    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg static-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('public/pdf/logo.jpg') }}" alt="" style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services/pdf-forms') }}">Contract Generator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services/mca') }}">MCA Calculator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services/banks') }}">Banks List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--<!-- Navigation -->--}}
{{--<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color:#243978">--}}
    {{--<div class="container">--}}
{{--<a class="navbar-brand" href="#">Contract Generator- Samaritus Capital</a>--}}
        {{----}}
        {{--<div class="collapse navbar-collapse" id="navbarResponsive">--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="#">Home--}}
                        {{--<span class="sr-only">(current)</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ url('/services/pdf-forms') }}">Contract Generator</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ url('/services/mca') }}">MCA Calculator</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ url('/services/banks') }}">Banks List</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mt-5">Select from the dropdown to create a PDF.</h1>
            <form id="pdf" method="post" target="_blank">
                {{ csrf_field() }}
                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                    <label for="samples" class="font-weight-bold">Select a pdf form</label>
                    <select id="samples" class="form-control" name="sample">
                        <option>Select one...</option>
                        <option value="1">Business Cash Advance Application</option>
                        <option value="2">Samaritus Capital Application Approval</option>
                        <option value="3">Confession of Judgement- COJ</option>
                        <option value="4">Referral Partner Agreement</option>
                        <option value="5">Agreement For The Purchase & Sale of Future Receipts</option>
                    </select>
                </div>
                <div id="form-content"></div>

            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="jumbotron">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button id="prev" class="btn btn-lg btn-info">Preview PDF</button>
                    <button id="down" class="btn btn-lg btn-success">Generate PDF</button>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function(){
        var bcaa = `<?php echo $bcaa; ?>`;
        var scaa = `<?php echo $scaa; ?>`;
        var agree = `<?php echo $agree; ?>`;
        var coj = `<?php echo $coj; ?>`;
        var rpa = `<?php echo $rpa; ?>`;
        $('#samples').on('change', function(e){
            e.preventDefault();
            if($(this).val() == 1){
                $('#form-content').html(bcaa);
            }else if($(this).val() == 2){
                $('#form-content').html(scaa);
            }else if($(this).val() == 3){
                $('#form-content').html(coj);
            }else if($(this).val() == 4){
                $('#form-content').html(rpa);
            }else if($(this).val() == 5){
                $('#form-content').html(agree);
            }else{
                $('#form-content').html('');
            }
        });
        $('body').on('change','.date1', function(e){
            e.preventDefault();
            $('.date2').val($(this).val());
            $('.date3').val($(this).val());
            $('.date4').val($(this).val());
            $('.date5').val($(this).val());
        });
        $('body').on('change','.sum1', function(e){
            e.preventDefault();
            $('.sum2').val($(this).val());
        });
        $('body').on('change','.cname1', function(e){
            e.preventDefault();
            $('.cname2').val($(this).val());
            $('.cname3').val($(this).val());
            $('.cname4').val($(this).val());
        });
        $('body').on('change','.oname1', function(e){
            e.preventDefault();
            $('.oname2').val($(this).val());
            $('.oname3').val($(this).val());
            $('.oname4').val($(this).val());
            $('.oname5').val($(this).val());
        });
        $('body').on('change','.seller1', function(e){
            e.preventDefault();
            $('.seller2').val($(this).val());
            $('.seller3').val($(this).val());
            $('.seller4').val($(this).val());
            $('.seller5').val($(this).val());
            $('.seller6').val($(this).val());
        });
        $('body').on('change','.owner1', function(e){
            e.preventDefault();
            $('.owner2').val($(this).val());
            $('.owner3').val($(this).val());
            $('.owner4').val($(this).val());
        });
        $('body').on('change','.ttl1', function(e){
            e.preventDefault();
            $('.ttl2').val($(this).val());
            $('.ttl3').val($(this).val());
            $('.ttl4').val($(this).val());
        });
        $('body').on('change','.gtr11', function(e){
            e.preventDefault();
            $('.gtr12').val($(this).val());
        });
        $('body').on('change','.gtr21', function(e){
            e.preventDefault();
            $('.gtr22').val($(this).val());
        });
        $('body').on('change','.tax1', function(e){
            e.preventDefault();
            $('.tax2').val($(this).val());
        });
        $('#prev').on('click', function(e){
            e.preventDefault();
            var url = "{{ url('/services/pdf-forms/preview') }}";
            $('#pdf').attr('action', url);
            $('#pdf').submit();
        });
        $('#down').on('click', function(e){
            e.preventDefault();
            var url = "{{ url('/services/pdf-forms/download') }}";
            $('#pdf').attr('action', url);
            $('#pdf').submit();
        });
    });
</script>



</body>

</html>
