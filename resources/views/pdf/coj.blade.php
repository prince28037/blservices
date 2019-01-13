<html>
<head>
    <title>Confession of Judgement</title>
    <style>
        .page-break {
            page-break-after: always;
        }
		
		.coj-p2 .coj-p3 .coj-p4 {
            position: relative;
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        }
		
 		.county {
            position: absolute;
            top: 10.2%;
            left: 18%;
        }
  		.company-name {
            position: absolute;
            top: 12.6%;
            left: 8%;
        }
  		.index {
            position: absolute;
            top: 13.1%;
            left: 67.5%;
        }
		
		.company-name2 {
            position: absolute;
            top: 23.1%;
            left: 8.4%;
        }

        .owner-name {
            position: absolute;
            top: 26.2%;
            left: 8.3%;
        }

        .state-name {
            position: absolute;
            top: 32.1%;
            left: 16.5%;
        }

		.county-of {
            position: absolute;
            top: 35.4%;
            left: 18.2%;
        }
		.owner-name2 {
            position: absolute;
            top: 38.9%;
            left: 8.5%;
        }

		.company-name3 {
            position: absolute;
            top: 42%;
            left: 55.5%;
        }

        .company-addr {
            position: absolute;
            top: 43.4%;
            left: 32.2%;
        }

         .company-county {
            position: absolute;
            top: 48%;
            left: 19.5%;
        }

		.owner-addr {
            position: absolute;
            top: 54.4%;
            left: 35.5%;
        }

        .owner-county {
            position: absolute;
            top: 57.4%;
            left: 20.8%;
        }
		
		.sum1 {
            position: absolute;
            top: 88%;
            left: 32%;
        }


       

        .date1 {
            position: absolute;
            top: 8.8%;
            left: 71%;
        }

        .date2 {
            position: absolute;
            top: 14.9%;
            left: 62%;
        }
         .sum2 {
            position: absolute;
            top: 49.1%;
            left: 38%;
        }
         .date3 {
            position: absolute;
            top: 58.2%;
            left: 9%;
        }
         .date4 {
            position: absolute;
            top: 76.6%;
            left: 45%;
        }



 		.date5 {
            position: absolute;
            top: 8.9%;
            left: 9%;
        }
        .company-name4 {
            position: absolute;
            top: 35.5%;
            left: 37.2%;
        }

        .title {
            position: absolute;
            top: 35.5%;
            left: 74%;
        }

		.owner-name3 {
            position: absolute;
            top:42.3%;
            left: 22.3%;
        }

		.owner-name4 {
            position: absolute;
            top: 61.5%;
            left: 37.5%;
        }
        .owner-name5 {
            position: absolute;
            top: 66.2%;
            left: 22.3%;
        }




    </style>
</head>
<body>

<div class="coj-p1">
<img src="{{ base_path() }}/public/pdf/coj/page1.jpg" width="725">

</div>

<div class="page-break"></div>

<div class="coj-p2">
<img src="{{ base_path() }}/public/pdf/coj/page2.jpg" width="725">
    <div class="county">{{ $county }}</div>
    <div class="company-name">{{ $in_x }}</div>
    <div class="index">{{ $index_no }}</div>
   
	<div class="company-name2">{{ $against1 }}</div>
	<div class="owner-name">{{ $against2 }}</div>
	 
	<div class="state-name">{{ $state }}</div>
	<div class="county-of">{{ $county_of }}</div>
	
	<div class="owner-name2">{{ $sworn }}</div>
	<div class="company-name3">{{ $officer }}</div>
	<p class="company-addr">{{ $location }}</p>
	<div class="company-county">{{ $county_of_2 }}</div>
	
	<div class="owner-addr">{{ $reside }}</div>
	<div class="owner-county">{{ $county_of_3 }}</div>
	
	<div class="sum1">{{ $sum }}</div>
    
</div>

<div class="page-break"></div>
<div class="coj-p3">
<img src="{{ base_path() }}/public/pdf/coj/page3.jpg" width="725">

	<div class="date1">{{ $dated }}</div>
	<div class="date2">{{ $from }}</div>
	
	<div class="sum2">{{ $sum2 }}</div>
	
	<div class="date3">{{ $from2 }}</div>
	
	<div class="date4">{{ $date2 }}</div>
	
    </div>
	
<div class="page-break"></div>
<div class="coj-p4">
<img src="{{ base_path() }}/public/pdf/coj/page4.jpg" width="725">
	
	<div class="date5">{{ $date3 }}</div>

	<div class="company-name4">{{ $by }}</div>

	<div class="title">{{ $appeared }}</div>
	
	<div class="owner-name3">{{ $by3 }}</div>
	
	<div class="owner-name4">{{ $appeared2 }}</div>
	
	<div class="owner-name5">Test</div>

    </div>
</body>
</html>