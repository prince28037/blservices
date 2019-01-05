<html>
<head>
    <title>Test PDF</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .bca1 .bca2 {
            position: relative;
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        }
		
		  .chk1 {
            position: absolute;
            top: 44.85%;
            left: 10%;
        }
		
		 .chk2 {
            position: absolute;
            top: 48%;
            left: 10%;
        }
		
		.legal-name {
			position: absolute;
            top: 20.2%;
            left: 18%;
			
		}
		
		.dba-name {
			position: absolute;
            top: 20.2%;
            left: 57%;
			
		}
		
		
		.chk-corp {
			position: absolute;
            top: 23.8%;
            left: 20.5%;
			
		}
		.chk-llc {
			position: absolute;
            top: 23.8%;
            left: 25.5%;
			
		}
		.chk-solep {
			position: absolute;
            top: 23.8%;
            left: 38.2%;
			
		}
		.chk-part {
			position: absolute;
            top: 23.8%;
            left: 47.5%;
			
		}
		
		.tax-id {
			position: absolute;
            top: 23.5%;
            left: 58.5%;
			
		}
		
		.bis-date {
			position: absolute;
            top: 23.5%;
            left: 81.5%;
			
		}
		
		.bis-phone {
			position: absolute;
            top: 26.8%;
            left: 15%;
			
		}
		.fax {
			position: absolute;
            top: 26.8%;
            left: 38%;
			
		}
		.website {
			position: absolute;
            top: 26.7%;
            left: 60%;
			
		}
		
		.phy-addr {
			position: absolute;
            top: 29.3%;
            left: 16%;
			
		}
		.city {
			position: absolute;
            top: 29.3%;
            left: 53%;
			
		}
		.state {
			position: absolute;
            top: 29.3%;
            left: 80.3%;
			
		}
		.zip {
			position: absolute;
            top: 29.3%;
            left: 88.3%;
			
		}
		
		.mail-addr {
			position: absolute;
            top: 31.5%;
            left: 16%;
			
		}
		.city2 {
			position: absolute;
            top: 31.5%;
            left: 53%;
			
		}
		.state2 {
			position: absolute;
            top: 31.5%;
            left: 80.3%;
			
		}
		.zip2 {
			position: absolute;
            top: 31.5%;
            left: 88.3%;
			
		}
		
		.owner-name {
			position: absolute;
            top: 35.8%;
            left: 10.5%;
			
		}
		
		.chk-rent {
			position: absolute;
            top: 35.85%;
            left: 68.5%;
			
		}
		.chk-own {
			position: absolute;
            top: 35.85%;
            left: 76.8%;
			
		}
		
		.industry-type {
			position: absolute;
            top: 45.8%;
            left: 68.5%;
			
		}
		
		.sqft-office {
			position: absolute;
            top: 34.8%;
            left: 76.8%;
			
		}
		
		.owner-addr{
			position: absolute;
            top: 38.2%;
            left: 15%;
			
		}
		
		.city-owner {
			position: absolute;
            top: 38.2%;
            left: 53%;
			
		}
		.state-owner {
			position: absolute;
            top: 38.2%;
            left: 80.3%;
			
		}
		.zip-owner {
			position: absolute;
            top: 38.2%;
            left: 88.3%;
			
		}
		
		
		.owner-email {
			position: absolute;
            top: 40.3%;
            left: 10%;
			
		}
		.owner-mobile {
			position: absolute;
            top: 40.3%;
            left: 54.6%;
			
		}
		
		.owner-dob {
			position: absolute;
            top: 42.5%;
            left: 14%;
			
		}
		.owner-ssn {
			position: absolute;
            top: 42.5%;
            left: 59.3%;
			
		}
		.industry-type {
			position: absolute;
            top: 46.9%;
            left: 14.4%;
			
		}
		.sqft-office {
			position: absolute;
            top: 46.9%;
            left: 61.8%;
			
		}
		
		.rented-own {
			position: absolute;
            top: 49.2%;
            left: 16.2%;
			
		}
		
		.rentmor-amount {
			position: absolute;
            top: 49.2%;
            left: 64%;
			
		}
		
		
		.landmor-info {
			position: absolute;
            top: 51.4%;
            left: 29.7%;
			
		}
		.annual-sales {
			position: absolute;
            top: 55.75%;
            left: 16.7%;
			
		}
		
		.requested-amount {
			position: absolute;
            top: 55.75%;
            left: 71%;
			
		}
		
		.monthly-cc {
			position: absolute;
            top: 58%;
            left: 25.1%;
			
		}
		
		.loan-purpose {
			position: absolute;
            top: 58%;
            left: 62.5%;
			
		}
		
		.out-balance {
			position: absolute;
            top: 60.3%;
            left: 56%;
			
		}
		
		.sign-auth {
			position: absolute;
            top: 76.3%;
            left: 18%;
			
		}
		
		
		.print-name {
			position: absolute;
            top: 79.3%;
            left: 18%;
			
		}
		.date-auth {
			position: absolute;
            top: 82%;
            left: 18%;
			
		}
		
		
		
		
    </style>
</head>
<body>

<div class="bca1">
<img src="{{ base_path() }}/public/pdf/bcaa/page1.jpg" width="725">
    <div class="chk1">T</div>
    <div class="chk2">T</div>
	
</div>

<div class="page-break"></div>
<div class="bca2">
<img src="{{ base_path() }}/public/pdf/bcaa/page2.jpg" width="725">



    <div class="legal-name">Test</div>
    <div class="dba-name">Test</div>

    <div class="chk-corp">T</div>
    <div class="chk-llc">T</div>
    <div class="chk-solep">T</div>
    <div class="chk-part">T</div>
   
   <div class="tax-id">Test</div>
    <div class="bis-date">Test</div>

    <div class="bis-phone">Test</div>
    <div class="fax">Test</div>
    <div class="website">Test</div>

    <div class="phy-addr">Test</div>
    <div class="city">Test</div>
    <div class="state">Test</div>
    <div class="zip">Test</div>

    <div class="mail-addr">Test</div>
    <div class="city2">Test</div>
    <div class="state2">Test</div>
    <div class="zip2">Test</div>



    <div class="owner-name">Test</div>
    <div class="chk-rent">T</div>
    <div class="chk-own">T</div>

    <div class="owner-addr">Test</div>
    <div class="city-owner">Test</div>
    <div class="state-owner">Test</div>
    <div class="zip-owner">Test</div>

    <div class="owner-email">Test</div>
    <div class="owner-mobile">Test</div>

    <div class="owner-dob">Test</div>
    <div class="owner-ssn">Test</div>

  

    <div class="industry-type">Test</div>
    <div class="sqft-office">Test</div>

    <div class="rented-own">Test</div>
    <div class="rentmor-amount">Test</div>

    <div class="landmor-info">Test</div>

  

    <div class="annual-sales">Test</div>
    <div class="requested-amount">Test</div>

    <div class="monthly-cc">Test</div>
    <div class="loan-purpose">Test</div>

    <div class="out-balance">Test</div>



    <div class="sign-auth">Test</div>
    <div class="print-name">Test</div>
    <div class="date-auth">Test</div>

    </div>
	
	
</body>
</html>