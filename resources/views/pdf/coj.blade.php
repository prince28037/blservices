<html>
<head>
    <title>Confession of Judgement</title>
    <style>
        .page-break {
            page-break-after: always;
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
    <p class="county">{{ $county }}</p>
    <p class="company-name">{{ $company-name }}</p>
    <p class="index">{{ $index }}</p>
   
	<p class="company-name">{{ $company-name }}</p>
	<p class="owner-name">{{ $owner-name }}</p>
	 
	<p class="state-name">{{ $state-name }}</p> 
	<p class="county">{{ $county }}</p>
	
	<p class="owner-name">{{ $owner-name }}</p>
	<p class="company-name">{{ $company-name }}</p>
	<p class="company-addr">{{ $company-addr }}</p>
	<p class="company-county">{{ $company-county }}</p>
	
	<p class="owner-addr">{{ $owner-addr }}</p>
	<p class="owner-county">{{ $owner-county }}</p>
	
	<p class="sum1">{{ $sum1 }}</p>
	
	
	
    
</div>
<div class="page-break"></div>
<div class="coj-p3">
<img src="{{ base_path() }}/public/pdf/coj/page3.jpg" width="725">

	<p class="date1">{{ $date1 }}</p>
	<p class="date2">{{ $date2 }}</p>
	
	<p class="sum1">{{ $sum1 }}</p>
	
	<p class="date3">{{ $date3 }}</p>
	
	<p class="date4">{{ $date4 }}</p>
	
	
    </div>
<div class="page-break"></div>
<div class="coj-p4">
<img src="{{ base_path() }}/public/pdf/coj/page4.jpg" width="725">
	
	<p class="date5">{{ $date5 }}</p>

	<p class="company-name">{{ $company-name }}</p>
	
	<p class="owner-name">{{ $owner-name }}</p>
	
	<p class="owner-name">{{ $owner-name }}</p>
	
	<p class="owner-name">{{ $owner-name }}</p>

    </div>
</body>
</html>