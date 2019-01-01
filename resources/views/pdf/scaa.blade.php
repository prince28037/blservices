<html>
<head>
    <title>Test PDF</title>
    <style>
        .zzzz {
            position: relative;
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        }
        .company {
            position: absolute;
            top: 155px;
            left: 150px;
        }
        .to {
            position: absolute;
            top: 177px;
            left: 150px;
        }
        .date {
            position: absolute;
            top: 200px;
            left: 150px;
        }
        .op11 {
            position: absolute;
            top: 330px;
            left: 240px;
        }
        .op12 {
            position: absolute;
            top: 330px;
            left: 385px;
        }
        .op13 {
            position: absolute;
            top: 330px;
            left: 530px;
        }
        .op21 {
             position: absolute;
             top: 367px;
             left: 240px;
         }
        .op22 {
            position: absolute;
            top: 367px;
            left: 385px;
        }
        .op23 {
            position: absolute;
            top: 367px;
            left: 530px;
        }
        .op31 {
            position: absolute;
            top: 404px;
            left: 240px;
        }
        .op32 {
            position: absolute;
            top: 404px;
            left: 385px;
        }
        .op33 {
            position: absolute;
            top: 404px;
            left: 530px;
        }
        .op41 {
            position: absolute;
            top: 440px;
            left: 240px;
        }
        .op42 {
            position: absolute;
            top: 440px;
            left: 385px;
        }
        .op43 {
            position: absolute;
            top: 440px;
            left: 530px;
        }
        .op51 {
            position: absolute;
            top: 476px;
            left: 240px;
        }
        .op52 {
            position: absolute;
            top: 476px;
            left: 385px;
        }
        .op53 {
            position: absolute;
            top: 476px;
            left: 530px;
        }
        .op61 {
            position: absolute;
            top: 513px;
            left: 240px;
        }
        .op62 {
            position: absolute;
            top: 513px;
            left: 385px;
        }
        .op63 {
            position: absolute;
            top: 513px;
            left: 530px;
        }
        .op71 {
            position: absolute;
            top: 550px;
            left: 240px;
        }
        .op72 {
            position: absolute;
            top: 550px;
            left: 385px;
        }
        .op73 {
            position: absolute;
            top: 550px;
            left: 530px;
        }
        .op81 {
            position: absolute;
            top: 586px;
            left: 240px;
        }
        .op82 {
            position: absolute;
            top: 586px;
            left: 385px;
        }
        .op83 {
            position: absolute;
            top: 586px;
            left: 530px;
        }
        .op91 {
             position: absolute;
             top: 623px;
             left: 240px;
         }
        .op92 {
            position: absolute;
            top: 623px;
            left: 385px;
        }
        .op93 {
            position: absolute;
            top: 623px;
            left: 530px;
        }
        .fund1 {
            position: absolute;
            top: 792px;
            left: 80px;
            font-size: 10px;
            font-weight: 100;
        }
        .fund2 {
            position: absolute;
            top: 808px;
            left: 80px;
            font-size: 10px;
            font-weight: 100;
        }
        .fund3 {
            position: absolute;
            top: 824px;
            left: 80px;
            font-size: 10px;
            font-weight: 100;
        }
        .sub1 {
            position: absolute;
            top: 808px;
            left: 400px;
            font-size: 10px;
            font-weight: 100;
        }
        .sub2 {
            position: absolute;
            top: 824px;
            left: 400px;
            font-size: 10px;
            font-weight: 100;
        }
        .sub3 {
            position: absolute;
            top: 840px;
            left: 400px;
            font-size: 10px;
            font-weight: 100;
        }
        .blank {
            position: absolute;
            top: 280px;
            left: 450px;
        }
    </style>
</head>
<body>
<div class="zzzz">
    <img src="{{ base_path() }}/public/pdf/scaa/aaa.jpg" width="725">
    <p class="company">{{ $company }}</p>
    <p class="to">{{ $to }}</p>
    <p class="date">{{ $date }}</p>
    <p class="op11">{{ $op11 }}</p>
    <p class="op12">{{ $op12 }}</p>
    <p class="op13">{{ $op13 }}</p>
    <p class="op21">{{ $op21 }}</p>
    <p class="op22">{{ $op22 }}</p>
    <p class="op23">{{ $op23 }}</p>
    <p class="op31">{{ $op31 }}</p>
    <p class="op32">{{ $op32 }}</p>
    <p class="op33">{{ $op33 }}</p>
    <p class="op41">{{ $op41 }}</p>
    <p class="op42">{{ $op42 }}</p>
    <p class="op43">{{ $op43 }}</p>
    <p class="op51">{{ $op51 }}</p>
    <p class="op52">{{ $op52 }}</p>
    <p class="op53">{{ $op53 }}</p>
    <p class="op61">{{ $op61 }}</p>
    <p class="op62">{{ $op62 }}</p>
    <p class="op63">{{ $op63 }}</p>
    <p class="op71">{{ $op71 }}</p>
    <p class="op72">{{ $op72 }}</p>
    <p class="op73">{{ $op73 }}</p>
    <p class="op81">{{ $op81 }}</p>
    <p class="op82">{{ $op82 }}</p>
    <p class="op83">{{ $op83 }}</p>
    <p class="op91">{{ $op91 }}</p>
    <p class="op92">{{ $op92 }}</p>
    <p class="op93">{{ $op93 }}</p>
    <p class="fund1">{{ $doc1 }}</p>
    <p class="fund2">{{ $doc2 }}</p>
    <p class="fund3">{{ $doc3 }}</p>
    <p class="sub1">{{ $sub1 }}</p>
    <p class="sub2">{{ $sub2 }}</p>
    <p class="sub3">{{ $sub3 }}</p>
    <p class="blank"></p>
</div>
</body>
</html>