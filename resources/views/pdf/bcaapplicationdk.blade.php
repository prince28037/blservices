<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>BUSINESS CASH ADVANCE APPLICATION</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Helvetica">
    <style>
        @font-face {
            font-family: 'Calibri';
            src: '{{ base_path() }}/public/fonts/calibri.ttf';
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: "Calibri", sans-serif;
            font-size: 8pt;
        }
        .page-break {
            page-break-after: always;
        }

        .bca1 .bca2 {
            position: relative;
            font-family: Calibri, serif;
        }
		
		  .chk1 {
            position: absolute;
            top: 44.85%;
            left: 10%;
        }
		
		 .chk2 {
            position: absolute;
            top: 48.15%;
            left: 10.2%;
        }
		



		.legal-name {
			position: absolute;
            top: 20.6%;
            left: 18%;
		}
		
		.dba-name {
			position: absolute;
            top: 20.6%;
            left: 57%;
			
		}
		
		
		.chk-corp {
			position: absolute;
            top: 23.9%;
            left: 20.5%;
			
		}
		.chk-llc {
			position: absolute;
            top: 23.9%;
            left: 25.5%;
			
		}
		.chk-solep {
			position: absolute;
            top: 23.9%;
            left: 38.2%;
			
		}
		.chk-part {
			position: absolute;
            top: 23.9%;
            left: 47.5%;
			
		}
		
		.tax-id {
			position: absolute;
            top: 23.85%;
            left: 58.5%;
			
		}
		
		.bis-date {
			position: absolute;
            top: 23.85%;
            left: 81.5%;
			
		}
		
		.bis-phone {
			position: absolute;
            top: 27.15%;
            left: 15.2%;
			
		}
		.fax {
			position: absolute;
            top: 27.15%;
            left: 38%;
			
		}
		.website {
			position: absolute;
            top: 27.05%;
            left: 60%;
			
		}
		
		.phy-addr {
			position: absolute;
            top: 29.6%;
            left: 16%;
			
		}
		.city {
			position: absolute;
            top: 29.6%;
            left: 53%;
			
		}
		.state {
			position: absolute;
            top: 29.6%;
            left: 80.4%;
			
		}
		.zip {
			position: absolute;
            top: 29.6%;
            left: 88.3%;
		}
		
		.mail-addr {
			position: absolute;
            top: 31.8%;
            left: 16%;
			
		}
		.city2 {
			position: absolute;
            top: 31.8%;
            left: 53%;
			
		}
		.state2 {
			position: absolute;
            top: 31.8%;
            left: 80.4%;
			
		}
		.zip2 {
			position: absolute;
            top: 31.8%;
            left: 88.3%;
			
		}
		


		.owner-name {
			position: absolute;
            top: 36.2%;
            left: 10.5%;
		}
		.chk-rent {
			position: absolute;
            top: 36.2%;
            left: 68.5%;
			
		}
		.chk-own {
			position: absolute;
            top: 36.2%;
            left: 76.8%;
			
		}
		
		

		.owner-addr{
			position: absolute;
            top: 38.4%;
            left: 15%;
			
		}
		
		.city-owner {
			position: absolute;
            top: 38.4%;
            left: 53%;
			
		}
		.state-owner {
			position: absolute;
            top: 38.4%;
            left: 80.4%;
			
		}
		.zip-owner {
			position: absolute;
            top: 38.4%;
            left: 88.3%;
			
		}
		
		
		.owner-email {
			position: absolute;
            top: 40.7%;
            left: 10%;
			
		}
		.owner-mobile {
			position: absolute;
            top: 40.7%;
            left: 54.7%;
			
		}
		
		.owner-dob {
			position: absolute;
            top: 42.9%;
            left: 14%;
			
		}
		.owner-ssn {
			position: absolute;
            top: 42.9%;
            left: 59.6%;
			
		}
		.industry-type {
			position: absolute;
            top: 47.2%;
            left: 14.4%;
			
		}
		.sqft-office {
			position: absolute;
            top: 47.2%;
            left: 61.8%;
			
		}
		
		.rented-own {
			position: absolute;
            top: 49.5%;
            left: 16.2%;
			
		}
		
		.rentmor-amount {
			position: absolute;
            top: 49.5%;
            left: 64%;
			
		}
		
		.landmor-info {
			position: absolute;
            top: 51.8%;
            left: 29.7%;
		}
		

		.annual-sales {
			position: absolute;
            top: 56%;
            left: 16.9%;
			
		}
		
		.requested-amount {
			position: absolute;
            top: 56%;
            left: 71%;
			
		}
		
		.monthly-cc {
			position: absolute;
            top: 58.3%;
            left: 25.1%;
			
		}
		
		.loan-purpose {
			position: absolute;
            top: 58.3%;
            left: 62.5%;
			
		}
		
		.out-balance {
			position: absolute;
            top: 60.6%;
            left: 56%;
			
		}
		
		.sign-auth {
			position: absolute;
            top: 76.6%;
            left: 18%;
			
		}
		
		
		.print-name {
			position: absolute;
            top: 79.6%;
            left: 18%;
			
		}
		.date-auth {
			position: absolute;
            top: 82.3%;
            left: 18%;
			
		}
		
		
		
		
    </style>
</head>
<body>

<div class="bca1">
<img src="{{ base_path() }}/public/pdf/bcaa/page1.jpg" width="725">
    <div class="chk1">@if(isset($opt) && $opt == 'opt1')&#x2714;@endif</div>
    <div class="chk2">@if(isset($opt) && $opt == 'opt2')&#x2714;@endif</div>
	
</div>

<div class="page-break"></div>
<div class="bca2">
<img src="{{ base_path() }}/public/pdf/bcaa/page2.jpg" width="725">



    <div class="legal-name">{{ $blname }}</div>
    <div class="dba-name">{{ $dba }}</div>

    <div class="chk-corp">@if(isset($corp) && $corp == 'option1')&#x2714;@endif</div>
    <div class="chk-llc">@if(isset($corp) && $corp == 'option2')&#x2714;@endif</div>
    <div class="chk-solep">@if(isset($corp) && $corp == 'option3')&#x2714;@endif</div>
    <div class="chk-part">@if(isset($corp) && $corp == 'option4')&#x2714;@endif</div>
   
   <div class="tax-id">{{ $fti }}</div>
    <div class="bis-date">{{ $bsd }}</div>

    <div class="bis-phone">{{ $phone }}</div>
    <div class="fax">{{ $fax }}</div>
    <div class="website">{{ $site }}</div>

    <div class="phy-addr">{{ $paddress }}</div>
    <div class="city">{{ $pcity }}</div>
    <div class="state">{{ $pstate }}</div>
    <div class="zip">{{ $pzip }}</div>

    <div class="mail-addr">{{ $maddress }}</div>
    <div class="city2">{{ $mcity }}</div>
    <div class="state2">{{ $mstate }}</div>
    <div class="zip2">{{ $mzip }}</div>



    <div class="owner-name">{{ $name }}</div>
    <div class="chk-rent">@if(isset($home) && $home == 'option1')&#x2714;@endif</div>
    <div class="chk-own">@if(isset($home) && $home == 'option2')&#x2714;@endif</div>

    <div class="owner-addr">{{ $haddress }}</div>
    <div class="city-owner">{{ $hcity }}</div>
    <div class="state-owner">{{ $hstate }}</div>
    <div class="zip-owner">{{ $hzip }}</div>

    <div class="owner-email">{{ $email }}</div>
    <div class="owner-mobile">{{ $mobile }}</div>

    <div class="owner-dob">{{ $dob }}</div>
    <div class="owner-ssn">{{ $ss }}</div>

  

    <div class="industry-type">{{ $in_type }}</div>
    <div class="sqft-office">{{ $sfo }}</div>

    <div class="rented-own">{{ $roo }}</div>
    <div class="rentmor-amount">{{ $amount }}</div>

    <div class="landmor-info">{{ $lmcci }}</div>

  

    <div class="annual-sales">{{ $gas }}</div>
    <div class="requested-amount">{{ $capital }}</div>

    <div class="monthly-cc">{{ $mccsv }}</div>
    <div class="loan-purpose">{{ $purpose }}</div>

    <div class="out-balance">{{ $due }}</div>



    <div class="sign-auth"></div>
    <div class="print-name">{{ $print_name }}</div>
    <div class="date-auth">{{ $date }}</div>

    </div>
	
	
</body>
</html>