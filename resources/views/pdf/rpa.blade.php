<html>
<head>
    <title>Referral Partner Agreement</title>
    <style>
        @font-face {
            font-family: 'Calibri';
            src: '{{ base_path() }}/public/fonts/calibri.ttf';
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: "Calibri", sans-serif;
            font-size: 11pt;
        }
        .page-break {
            page-break-after: always;
        }
		
		.refer-p1 .refer-p4 .agree-p7 .agree-p8 .agree-p9 {
            position: relative;
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        }

		.eff-date {
            position: absolute;
            top: 20.4%;
            left: 56.8%;
        }

        .ini1 {
            position: absolute;
            top: 87.5%;
            left: 80%;
        }

        .ini12 {
            position: absolute;
            top: 90%;
            left: 80%;
        }



 		.ini2 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini122 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }


		.ini3 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini132 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }



		.refer-name {
            position: absolute;
            top: 40.8%;
            left: 51.5%;
        }

        .refer-addr1 {
            position: absolute;
            top: 43.4%;
            left: 51.5%;
        }
  		
  		.refer-addr2 {
            position: absolute;
            top: 47%;
            left: 51.5%;
        }

		.ini4 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini142 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }


		.ini5 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini152 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }



		.ini6 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini162 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }


  		.refer7-name {
            position: absolute;
            top: 18%;
            left: 67.5%;
        }


		.s-printname {
            position: absolute;
            top: 24.2%;
            left: 25%;
        }
        .refer-printname {
            position: absolute;
            top: 24.2%;
            left: 64.4%;
        }

        .s-title {
            position: absolute;
            top: 30.4%;
            left: 20.2%;
        }

        .refer7-title {
            position: absolute;
            top: 30.4%;
            left: 59%;
        }

         .s-date {
            position: absolute;
            top: 42.5%;
            left: 24%;
        }
         .refer-date {
            position: absolute;
            top: 42.5%;
            left: 63%;
        }

        .ini7 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini72 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }



		.refer8-name {
            position: absolute;
            top: 11.5%;
            left: 31.7%;
        }

        .chk-new {
            position: absolute;
            top: 18.8%;
            left: 14.9%;
        }
		.chk-binfo {
            position: absolute;
            top: 18.8%;
            left: 37.8%;
        }

        .chk-ach {
            position: absolute;
            top: 18.8%;
            left: 60.35%;
        }


		.bname {
            position: absolute;
            top: 36.5%;
            left: 15%;
        }

        .baddr {
            position: absolute;
            top: 36.5%;
            left: 51%;
        }

		.bphone {
            position: absolute;
            top: 43.5%;
            left: 15%;
        }

 		.btype {
            position: absolute;
            top: 43.5%;
            left: 51%;
        }
        .bacct {
            position: absolute;
            top: 50%;
            left: 15%;
        }
	
		.brout {
            position: absolute;
            top: 50%;
            left: 51%;
        }

        .bdate {
            position: absolute;
            top: 56.5%;
            left: 15%;
        }


 		.ini8 {
            position: absolute;
            top: 85.2%;
            left: 80%;
        }

        .ini82 {
            position: absolute;
            top: 87.6%;
            left: 80%;
        }



		.legal-name {
            position: absolute;
            top: 18%;
            left: 18.5%;
        }

        .dba-name {
            position: absolute;
            top: 18%;
            left: 53%;
        }


		.contact {
            position: absolute;
            top: 20.7%;
            left: 11%;
        }

        .phone {
            position: absolute;
            top: 20.7%;
            left: 33%;
        }

 		.email {
            position: absolute;
            top: 20.7%;
            left: 50.1%;
        }

        .current-address {
            position: absolute;
            top: 23.3%;
            left: 15.5%;
        }

        .city {
            position: absolute;
            top: 26.2%;
            left: 8.7%;
        }

        .state {
            position: absolute;
            top: 26.2%;
            left: 32.5%;
        }
        .zip {
            position: absolute;
            top: 26.2%;
            left: 48.9%;
        }

         .taxid {
            position: absolute;
            top: 29%;
            left: 10%;
        }
        .bisyear {
            position: absolute;
            top: 29%;
            left: 38.9%;
        }

 		.struct {
            position: absolute;
            top: 29%;
            left: 55.9%;
        }
         .incorp {
            position: absolute;
            top: 29%;
            left: 79.2%;
        }
		.deal-units {
            position: absolute;
            top: 31.7%;
            left: 24%;
        }

        .deal-dollar {
            position: absolute;
            top: 31.7%;
            left: 65.2%;
        }


		.tot-fund {
            position: absolute;
            top: 34.5%;
            left: 24.4%;
        }

        .website {
            position: absolute;
            top: 34.5%;
            left: 51.7%;
        }


        .pname {
            position: absolute;
            top: 39.9%;
            left: 10%;
        }

        .pdob {
            position: absolute;
            top: 39.9%;
            left: 49.8%;
        }

 		.pcell {
            position: absolute;
            top: 42.5%;
            left: 9%;
        }

        .pssn {
            position: absolute;
            top: 42.5%;
            left: 49.6%;
        }

 		.paddr {
            position: absolute;
            top: 45.1%;
            left: 14.5%;
        }
		
		.pcity {
            position: absolute;
            top: 48.1%;
            left: 8.7%;
        }
        .pstate {
            position: absolute;
            top: 48.1%;
            left: 32.5%;
        }
        .pzip {
            position: absolute;
            top: 48.1%;
            left: 48.9%;
        }

		
		.pemail {
            position: absolute;
            top: 50.9%;
            left: 9.7%;
        }
        .pexp {
            position: absolute;
            top: 50.9%;
            left: 62%;
        }
        .ptitle {
            position: absolute;
            top: 50.9%;
            left: 69.7%;
        }

		.iname {
            position: absolute;
            top: 56.2%;
            left: 15.2%;
        }
        .icontact {
            position: absolute;
            top: 58.9%;
            left: 11%;
        }
        .iphone {
            position: absolute;
            top: 58.9%;
            left: 33%;
        }
        .iemail {
            position: absolute;
            top: 58.9%;
            left: 50.1%;
        }
        .icname {
            position: absolute;
            top: 61.7%;
            left: 15.4%;
        }

		.iccontact {
            position: absolute;
            top: 64.4%;
            left: 11%;
        }

        .icphone {
            position: absolute;
            top: 64.4%;
            left: 33%;
        }
        .icemail {
            position: absolute;
            top: 64.4%;
            left: 50.1%;
        }
        .past {
            position: absolute;
            top: 67.1%;
            left: 35%;
        }

		.why {
            position: absolute;
            top: 67.1%;
            left: 58%;
        }

		.hear {
            position: absolute;
            top: 69.8%;
            left: 31%;
        }

		.idate {
            position: absolute;
            top: 88.2%;
            left: 50%;
        }



    </style>
</head>
<body>

<div class="refer-p1">
<img src="{{ base_path() }}/public/pdf/rpa/page1.jpg" width="725">
	<div class="eff-date">{{ $and1 }}</div>
	<div class="ini1"></div>
	<div class="ini12"></div>


</div>

<div class="page-break"></div>
<img src="{{ base_path() }}/public/pdf/rpa/page2.jpg" width="725">
	
	<div class="ini2"></div>
	<div class="ini122"></div>


<div class="page-break"></div>
<img src="{{ base_path() }}/public/pdf/rpa/page3.jpg" width="725">
	
	<div class="ini3"></div>
	<div class="ini132"></div>

<div class="page-break"></div>

<div class="refer-p4">
<img src="{{ base_path() }}/public/pdf/rpa/page4.jpg" width="725">
	<div class="refer-name">{{ $partner1 }}</div>
	<div class="refer-addr1">{{ $partner2 }}</div>
	<div class="refer-addr2">{{ $partner3 }}</div>

	<div class="ini4"></div>
	<div class="ini142"></div>
</div>

<div class="page-break"></div>
<img src="{{ base_path() }}/public/pdf/rpa/page5.jpg" width="725">

	<div class="ini5"></div>
	<div class="ini152"></div>

<div class="page-break"></div>
<img src="{{ base_path() }}/public/pdf/rpa/page6.jpg" width="725">


	<div class="ini6"></div>
	<div class="ini162"></div>

<div class="page-break"></div>
<div class="refer-p7">
<img src="{{ base_path() }}/public/pdf/rpa/page7.jpg" width="725">

	<div class="refer7-name">{{ $ref_partner }}</div>

	<div class="s-printname">{{ $print_name1 }}</div>
	<div class="refer-printname">{{ $print_name2 }}</div>

	<div class="s-title">{{ $title1 }}</div>
	<div class="refer7-title">{{ $title2 }}</div>

	<div class="s-date">{{ $date1 }}</div>
	<div class="refer-date">{{ $date2 }}</div>


	<div class="ini7"></div>
	<div class="ini72"></div>

</div>

<div class="page-break"></div>
<div class="refer-p8">
<img src="{{ base_path() }}/public/pdf/rpa/page8.jpg" width="725">

	<div class="refer8-name">{{ $ref_partner2 }}</div>
	<div class="chk-new">@if(isset($types) && $types == 1)<div style="font-family: DejaVu Sans, sans-serif;">✔</div>@endif</div>
	<div class="chk-binfo">@if(isset($types) && $types == 2)<div style="font-family: DejaVu Sans, sans-serif;">✔</div>@endif</div>
	<div class="chk-ach">@if(isset($types) && $types == 3)<div style="font-family: DejaVu Sans, sans-serif;">✔</div>@endif</div>


	<div class="bname">{{ $bank_name }}</div>
	<div class="baddr">{{ $bank_address }}</div>
	<div class="bphone">{{ $bank_phone }}</div>
	<div class="btype">{{ $ac_type }}</div>
	<div class="bacct">{{ $ac }}</div>
	<div class="brout">{{ $aba }}</div>
	<div class="bdate">{{ $bank_date }}</div>


	<div class="ini8"></div>
	<div class="ini82"></div>

</div>

<div class="page-break"></div>
<div class="refer-p9">
<img src="{{ base_path() }}/public/pdf/rpa/page9.jpg" width="725">


	<div class="legal-name">{{ $clname }}</div>

	<div class="dba-name">{{ $dba_name }}</div>

	<div class="contact">{{ $contact }}</div>
	<div class="phone">{{ $phone }}</div>
	<div class="email">{{ $email }}</div>
	<div class="current-address">{{ $cAddress }}</div>
	<div class="city">{{ $city }}</div>
	<div class="state">{{ $state }}</div>
	<div class="zip">{{ $zip }}</div>
	<div class="taxid">{{ $taxId }}</div>
	<div class="bisyear">{{ $years }}</div>
	<div class="struct">{{ $entity }}</div>
	<div class="incorp">{{ $stateIn }}</div>
	<div class="deal-units">{{ $volume }}</div>
	<div class="deal-dollar">{{ $dollars }}</div>
	<div class="tot-fund">{{ $totalFund }}</div>
	<div class="website">{{ $website }}</div>


	<div class="pname">{{ $name }}</div>
	<div class="pdob">{{ $dob }}</div>
	<div class="pcell">{{ $cell }}</div>
	<div class="pssn">{{ $ssn }}</div>
	<div class="paddr">{{ $haddress }}</div>
	<div class="pcity">{{ $hcity }}</div>
	<div class="pstate">{{ $hstate }}</div>
	<div class="pzip">{{ $hzip }}</div>
	<div class="pemail">{{ $email2 }}</div>
	<div class="pexp">{{ $yie }}</div>
	<div class="ptitle">{{ $title3 }}</div>


	<div class="iname">{{ $company_name3 }}</div>
	<div class="icontact">{{ $contact4 }}</div>
	<div class="iphone">{{ $phone4 }}</div>
	<div class="iemail">{{ $email4 }}</div>
	<div class="icname">{{ $company_name4 }}</div>
	<div class="iccontact">{{ $contact5 }}</div>
	<div class="icphone">{{ $phone5 }}</div>
	<div class="icemail">{{ $email5 }}</div>
	<div class="past">{{ $past }}</div>
	<div class="why">{{ $why }}</div>
	<div class="hear">{{ $hear }}</div>
	
	<div class="idate">{{ $date6 }}</div>
</div>
</body>
</html>