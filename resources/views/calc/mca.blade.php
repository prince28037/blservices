<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Loans Services - Merchant Cash Advance</title>
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
            <img src="{{ asset('public/pdf/logo.jpg') }}" alt="Samaritus Capital" style="max-height: 50px;">
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

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Merchant Cash Advance Calculator</h1>
            <p class="lead">Enter your credentials for precise calculation</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header text-center">
                    MCA Loan Calculator
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Advance Amount</label>
                        <input class="form-control" type="number" id="ad-amount" value="50000" min="0">
                    </div>
                    <div class="form-group">
                        <label>Factor Rate</label>
                        <input class="form-control" type="number" id="factor" value="1.43" min="0">
                    </div>
                    <div class="form-group">
                        <label>Days</label>
                        <input class="form-control" type="text" id="days" value="105" min="1">
                    </div>
                    <div class="form-group">
                        <label>Starts from</label>
                        <input class="form-control" type="date" id="start" min="{{ date('Y-m-d') }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-lg btn-block" id="hishab">Calculate</button>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div id="calc-details"></div>
                    <p class="small text-info">Powered by <a href="#">Xerotic Inc.</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-8" id="calc-table"></div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#hishab').on('click', function(e){
            var amount = $('#ad-amount').val();
            var factor = $('#factor').val();
            var days = $('#days').val();
            var startDate = $('#start').val();
            var day = new Date(startDate);
            var total = parseFloat(Math.round(amount * factor)).toFixed(2);
            var html = '<div class="jumbotron">' +
                    '<p><strong>Advance Amount : </strong>'+amount+'</p>' +
                    '<p><strong>Factor Rate : </strong>'+factor+'</p>' +
                    '<p><strong>Days : </strong>'+days+'</p>' +
                    '<p><strong>Start Date : </strong>'+startDate+'</p>' +
                    '</div>';
            $('#calc-details').html(html);
            var tableData = '<table class="table table-responsive col-lg-12">' +
                    '<thead>' +
                    '<tr>' +
                    '<th>#Date</th>' +
                    '<th>Payment</th>' +
                    '<th>Balance</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>'+
                    '<tr>' +
                    '<td>---**********---</td>' +
                    '<td>---**********---</td>' +
                    '<td>'+total+'</td>' +
                    '</tr>';
            for(var i = 1; i <= days; i++){
                day.setDate(day.getDate() + 1);
                if(day.getDay() == 6 || day.getDay() == 0){
                    total = (total < 0) ? 0 : (total - 0);
                    tableData += '<tr>' +
                    '<td>'+day.getFullYear()+'-'+(day.getMonth()+1)+'-'+day.getDate()+'</td>' +
                    '<td>0</td>' +
                    '<td>'+total+'</td>' +
                    '</tr>';
                    i--;
                }else{
                    total = (total < 0) ? 0 : (total - parseFloat(Math.round(amount*factor/days)).toFixed(2));
                    tableData += '<tr>' +
                    '<td>'+day.getFullYear()+'-'+(day.getMonth()+1)+'-'+day.getDate()+'</td>' +
                    '<td>'+parseFloat(Math.round(amount*factor/days)).toFixed(2)+'</td>' +
                    '<td>'+total+'</td>' +
                    '</tr>';
                }
            }
            tableData += '</tbody></table>';
            $('#calc-table').html(tableData);
        });
    });
</script>

</body>

</html>
