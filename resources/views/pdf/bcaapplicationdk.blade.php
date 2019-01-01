<html>
<head>
    <title>Test PDF</title>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
<div class="bca1">
<img src="{{ base_path() }}/public/pdf/bcaa/page1.jpg" width="725">
    <p class="chk1">{{ $chk1 }}</p>
    <p class="chk2">{{ $chk2 }}</p>

</div>
<div class="page-break"></div>
<div class="bca2">
<img src="{{ base_path() }}/public/pdf/bcaa/page2.jpg" width="725">

    /* Business Cash Advance Application */

    <p class="legal-name">{{ $legal-name }}</p>
    <p class="dba-name">{{ $dba-name }}</p>

    <p class="chk-corp">{{ $chk-corp }}</p>
    <p class="chk-llc">{{ $chk-llc }}</p>
    <p class="chk-solep">{{ $chk-solep }}</p>
    <p class="chk-part">{{ $chk-part }}</p>
    <p class="tax-id">{{ $tax-id }}</p>
    <p class="bis-date">{{ $bisdate }}</p>

    <p class="bis-phone">{{ $bis-phone }}</p>
    <p class="fax">{{ $fax }}</p>
    <p class="website">{{ $website }}</p>

    <p class="phy-addr">{{ $phy-addr }}</p>
    <p class="city">{{ $city }}</p>
    <p class="state">{{ $state }}</p>
    <p class="zip">{{ $zip }}</p>

    <p class="mail-addr">{{ $phy-addr }}</p>
    <p class="city2">{{ $city }}</p>
    <p class="state2">{{ $state }}</p>
    <p class="zip2">{{ $zip }}</p>

    /* Owner/Principal Information */

    <p class="owner-name">{{ $owner-name }}</p>
    <p class="chk-rent">{{ $chk-rent }}</p>
    <p class="chk-own">{{ $chk-own }}</p>

    <p class="owner-addr">{{ $owner-addr }}</p>
    <p class="city-owner">{{ $city-owner }}</p>
    <p class="state-owner">{{ $state-owner }}</p>
    <p class="zip-owner">{{ $zip-owner }}</p>

    <p class="owner-email">{{ $owner-email }}</p>
    <p class="owner-mobile">{{ $owner-mobile }}</p>

    <p class="owner-dob">{{ $owner-dob }}</p>
    <p class="owner-ssn">{{ $owner-ssn }}</p>

    /* Business Information */

    <p class="industry-type">{{ $industry-type }}</p>
    <p class="sqft-office">{{ $sqft-office }}</p>

    <p class="rented-own">{{ $rented-own }}</p>
    <p class="rentmor-amount">{{ $rentmor-amount }}</p>

    <p class="landmor-info">{{ $landmor-info }}</p>

    /* Funding & Financial Information */

    <p class="annual-sales">{{ $annual-sales }}</p>
    <p class="requested-amount">{{ $requested-amount }}</p>

    <p class="monthly-cc">{{ $monthly-cc }}</p>
    <p class="loan-purpose">{{ $loan-purpose }}</p>

    <p class="out-balance">{{ $out-balance }}</p>

    /* Authorization Form */

    <p class="sign-auth">{{ $sign-auth }}</p>
    <p class="print-name">{{ $print-name }}</p>
    <p class="date-auth">{{ $date-auth }}</p>

    </div>
</body>
</html>