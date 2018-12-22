<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Loan Services</title>

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
        <div class="col-lg-12">
            <h1 class="mt-5">Select from the dropdown to create a PDF.</h1>
            <form id="pdf" method="post">
                {{ csrf_field() }}
                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                    <label for="samples" class="font-weight-bold">Select a pdf form</label>
                    <select id="samples" class="form-control" name="sample">
                        <option value="1">Business Cash Advance Application</option>
                        <option value="2">Format 2</option>
                        <option value="3">Format 3</option>
                        <option value="4">Format 4</option>
                    </select>
                </div>
                <div class="jumbotron">
                    <h2 class="mt-2 text-center">Business Cash Advance Application</h2>
                    <div class="form-row">
                        <div class="col">
                            <label for="name" class="font-weight-bold">Business Legal Name :</label>
                            <input class="form-control" id="name" name="name">
                        </div>
                        <div class="col">
                            <label for="dba" class="font-weight-bold">DBA Name :</label>
                            <input class="form-control" id="dba" name="dba">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label class="font-weight-bold" for="corp">Legal Entity :</label>
                            <div id="corp">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="corp" type="radio" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Corporation</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="corp" type="radio" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">LLC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="corp" type="radio" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Sole Partnership</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="corp" type="radio" id="inlineCheckbox4" value="option4">
                                    <label class="form-check-label" for="inlineCheckbox4">Partnership</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="fti" class="font-weight-bold">Federal Tax Id :</label>
                                    <input class="form-control" id="fti" name="fti">
                                </div>
                                <div class="col">
                                    <label for="bsd" class="font-weight-bold">Business Start Date :</label>
                                    <input class="form-control" id="bsd" name="bsd">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="phone" class="font-weight-bold">Business Phone :</label>
                                    <input class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col">
                                    <label for="fax" class="font-weight-bold">Fax :</label>
                                    <input class="form-control" id="fax" name="fax">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="site" class="font-weight-bold">Business Website :</label>
                            <input class="form-control" id="site" name="site">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="paddress" class="font-weight-bold">Physical Address :</label>
                            <input class="form-control" id="paddress" name="paddress">
                        </div>
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="pcity" class="font-weight-bold">City :</label>
                                    <input class="form-control" id="pcity" name="pcity">
                                </div>
                                <div class="col">
                                    <label for="pstate" class="font-weight-bold">State :</label>
                                    <input class="form-control" id="pstate" name="pstate">
                                </div>
                                <div class="col">
                                    <label for="pzip" class="font-weight-bold">ZIP :</label>
                                    <input class="form-control" id="pzip" name="pzip">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="maddress" class="font-weight-bold">Mailing Address :</label>
                            <input class="form-control" id="maddress" name="maddress">
                        </div>
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="mcity" class="font-weight-bold">City :</label>
                                    <input class="form-control" id="mcity" name="mcity">
                                </div>
                                <div class="col">
                                    <label for="mstate" class="font-weight-bold">State :</label>
                                    <input class="form-control" id="mstate" name="mstate">
                                </div>
                                <div class="col">
                                    <label for="mzip" class="font-weight-bold">ZIP :</label>
                                    <input class="form-control" id="mzip" name="mzip">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-2 text-center">Owner/Principal Information</h2>
                <div class="form-row">
                    <div class="col">
                        <label for="name" class="font-weight-bold">Name :</label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <div class="col">
                        <label class="font-weight-bold" for="home">Rent/Own Home :</label>
                        <div id="home">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="home" type="radio" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Rent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="home" type="radio" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Own</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="haddress" class="font-weight-bold">Home Address :</label>
                        <input class="form-control" id="haddress" name="haddress">
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col">
                                <label for="hcity" class="font-weight-bold">City :</label>
                                <input class="form-control" id="hcity" name="hcity">
                            </div>
                            <div class="col">
                                <label for="hstate" class="font-weight-bold">State :</label>
                                <input class="form-control" id="hstate" name="hstate">
                            </div>
                            <div class="col">
                                <label for="hzip" class="font-weight-bold">ZIP :</label>
                                <input class="form-control" id="hzip" name="hzip">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="email" class="font-weight-bold">Email :</label>
                        <input class="form-control" id="email" name="email">
                    </div>
                    <div class="col">
                        <label for="mobile" class="font-weight-bold">Mobile :</label>
                        <input class="form-control" id="mobile" name="mobile">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="dob" class="font-weight-bold">Date of Birth :</label>
                        <input class="form-control" id="dob" name="dob">
                    </div>
                    <div class="col">
                        <label for="ss" class="font-weight-bold">Social Security # :</label>
                        <input class="form-control" id="ss" name="ss">
                    </div>
                </div>
                <br>

                <div class="jumbotron">
                    <h2 class="mt-2 text-center">Business Information</h2>
                    <div class="form-row">
                        <div class="col">
                            <label for="in-type" class="font-weight-bold">Industry Type :</label>
                            <input class="form-control" id="in-type" name="in-type">
                        </div>
                        <div class="col">
                            <label for="sfo" class="font-weight-bold">Square Feet of Office :</label>
                            <input class="form-control" id="sfo" name="sfo">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="roo" class="font-weight-bold">Renter or Owned :</label>
                            <input class="form-control" id="roo" name="roo">
                        </div>
                        <div class="col">
                            <label for="amount" class="font-weight-bold">Rent/Mortgage Amount :</label>
                            <input class="form-control" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lmcci" class="font-weight-bold">Landlord/Mortgage Company Contact Info :</label>
                        <input type="text" class="form-control" id="lmcci" name="lmcci">
                    </div>
                </div>

                <h2 class="mt-2 text-center">Funding & Financial Information</h2>
                <div class="form-row">
                    <div class="col">
                        <label for="gas" class="font-weight-bold">Gross Annual Sales :</label>
                        <input class="form-control" id="gas" name="gas">
                    </div>
                    <div class="col">
                        <label for="capital" class="font-weight-bold">How much capital is being requested :</label>
                        <input class="form-control" id="capital" name="capital">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="mccsv" class="font-weight-bold">Monthly Credit Card Sales Volume :</label>
                        <input class="form-control" id="mccsv" name="mccsv">
                    </div>
                    <div class="col">
                        <label for="purpose" class="font-weight-bold">Purpose for the loan :</label>
                        <input class="form-control" id="purpose" name="purpose">
                    </div>
                </div>
                <div class="form-group">
                    <label for="due" class="font-weight-bold">Do you currently have any business loans due? If yes, what is the total outstanding balance? :</label>
                    <input type="text" class="form-control" id="due" name="due">
                </div>
                <div class="jumbotron">
                    <h2 class="mt-2 text-center">Authorization Form</h2>
                    <p class="small font-weight-bold">The Merchant and Owner(s)/Officer(s) identified above (individually an “Applicant”) each represents, acknowledges and agrees that (1) all information and documents provided on this application to
                        Representative including bank and credit card processing statements are true accurate and complete, (2) Applicant will immediately notify Samaritus Capital Representative of any change in such
                        information or financial condition, (3) Applicant authorizes Representative to disclose all information and documents that Representative may obtain including credit reports to other persons or entities
                        (collectively, “Assignees”)that may be involved with or acquire commercial loans or working capital advances featuring the purchase of future receivables including Merchant Cash Advance transactions,
                        including without limitation the application therefor (collectively, “Transactions”), and each Assignee is authorized to use such information and documents, and share such information and documents
                        with other Assignees, in connection with potential Transactions, (4) Representative and each Assignee will rely upon the accuracy and completeness of such information and documents, (5)
                        Representative, Assignees, and each of their representatives, successors, assigns and designees (collectively, “Recipients”) are authorized to request and receive investigative reports, credit reports,
                        statements from creditors or financial institutions, verification of information, or any other information that a Recipient deems necessary, (6) Applicant waives and releases any claim against Recipients
                        and any information-providers providers arising from any act or omission relating to the requesting, receiving or release of information, and (7) each Owner/Officer represents that he or she is authorized
                        to sign this form on behalf of Merchant. A copy of this authorization may be accepted as an original. The term “Representative” shall mean any funding source looking to offer, make available or provide
                        to the Merchant access to loans or merchant cash advances or capital based on such Merchant’s future receivables or sales and/or structured with a periodic payment feature.</p>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="font-weight-bold">Owner Signature :</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="print-name" class="font-weight-bold">Print Name :</label>
                        <input type="text" class="form-control col-sm-4" name="print-name" id="print-name">
                    </div>
                    <div class="form-group">
                        <label for="date" class="font-weight-bold">Date :</label>
                        <input type="text" class="form-control col-sm-4" name="date" id="date">
                    </div>
                </div>
            </form>
            <br>
            <br>
            <button id="prev" class="btn btn-lg btn-success">Preview PDF</button>
            <button id="down" class="btn btn-lg btn-success">Generate PDF</button>
        </div>
    </div>
    <br>
    <br>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function(){
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
