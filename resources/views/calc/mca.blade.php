<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Loans Services - Merchant Cash Advance</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">Business Loans</a>
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
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Merchant Cash Advance Calculator</h1>
            <p class="lead">Enter your credentials for precise calculation</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header text-center">
                    MCA Loan Calculator
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Advance Amount</label>
                        <input class="form-control" type="text" id="ad-amount">
                    </div>
                    <div class="form-group">
                        <label>Factor Rate</label>
                        <input class="form-control" type="text" id="factor">
                    </div>
                    <div class="form-group">
                        <label>Monthly Credit Card Sales</label>
                        <input class="form-control" type="text" id="mccs">
                    </div>
                    <div class="form-group">
                        <label>Credit Card Sales Purchased</label>
                        <input class="form-control" type="text" id="ccsp">
                    </div>
                    <div class="form-group">
                        <label>Origination Fee</label>
                        <input class="form-control" type="text" id="of">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-lg btn-block" id="hishab">Calculate</button>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <p class="small text-info">Powered by <a href="#">Xerotic Inc.</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="calc"></div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#hishab').on('click', function(e){
            var html = '<h3>Base Calculation</h3>';
            $('#calc').html(html);
        });
    });
</script>

</body>

</html>
