<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class BLservices extends Controller
{
    public function pdfForms(Request $request){
        $bcaa = '<div class="jumbotron">
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
                </div>';
        $scaa = '<h1 class="text-center jumbotron">Samaritus Capital Application Approval</h1><hr><div class="form-row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="company" class="col-sm-2 col-form-label">Company</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="to" class="col-sm-2 col-form-label">To</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="to" name="to">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="date" name="date">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="mt-1 text-center">Congratulations!</h1>
                        <p class="text-center">You are pre-approved!</p>
                    </div>
                </div>
                <hr>
                <p class="text-center">Please see below for advance pre approval amounts and required documents and/or information needed.
                </p>
                <div class="jumbotron">
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th></th>
                            <th>OPTION #1</th>
                            <th>OPTION #2</th>
                            <th>OPTION #3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Advance Amount
                            </th>
                            <td><input type="text" class="form-control" name="op11"></td>
                            <td><input type="text" class="form-control" name="op12"></td>
                            <td><input type="text" class="form-control" name="op13"></td>
                        </tr>
                        <tr>
                            <th scope="row">Factor Rate
                            </th>
                            <td><input type="text" class="form-control" name="op21"></td>
                            <td><input type="text" class="form-control" name="op22"></td>
                            <td><input type="text" class="form-control" name="op23"></td>
                        </tr>
                        <tr>
                            <th scope="row">Payback Amount
                            </th>
                            <td><input type="text" class="form-control" name="op31"></td>
                            <td><input type="text" class="form-control" name="op32"></td>
                            <td><input type="text" class="form-control" name="op33"></td>
                        </tr>
                        <tr>
                            <th scope="row">Fixed Daily ACH
                            </th>
                            <td><input type="text" class="form-control" name="op41"></td>
                            <td><input type="text" class="form-control" name="op42"></td>
                            <td><input type="text" class="form-control" name="op43"></td>
                        </tr>
                        <tr>
                            <th scope="row">Anticipated Payback Period
                            </th>
                            <td><input type="text" class="form-control" name="op51"></td>
                            <td><input type="text" class="form-control" name="op52"></td>
                            <td><input type="text" class="form-control" name="op53"></td>
                        </tr>
                        <tr>
                            <th scope="row">ACH Fee
                            </th>
                            <td><input type="text" class="form-control" name="op61"></td>
                            <td><input type="text" class="form-control" name="op62"></td>
                            <td><input type="text" class="form-control" name="op63"></td>
                        </tr>
                        <tr>
                            <th scope="row">Samaritus Origination Fee
                            </th>
                            <td><input type="text" class="form-control" name="op71"></td>
                            <td><input type="text" class="form-control" name="op72"></td>
                            <td><input type="text" class="form-control" name="op73"></td>
                        </tr>
                        <tr>
                            <th scope="row">Fresh-Start Credit Improvement Plan
                            </th>
                            <td><input type="text" class="form-control" name="op81"></td>
                            <td><input type="text" class="form-control" name="op82"></td>
                            <td><input type="text" class="form-control" name="op83"></td>
                        </tr>
                        <tr>
                            <th scope="row">Renewal Eligible
                            </th>
                            <td><input type="text" class="form-control" name="op91"></td>
                            <td><input type="text" class="form-control" name="op92"></td>
                            <td><input type="text" class="form-control" name="op93"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <h3 class="text-center">********THIS IS NOT A FINAL APPROVAL******** </h3>
                <p class="text-center">Pending verification of application information, review of the requested documents and conditions.
                </p>
                <div class="form-row">
                    <div class="col">
                        <h5>Documents Needed To Fund :</h5>
                        <hr>
                        <ul>
                            <li>Copy of photo ID</li>
                            <li>Copy of Voided Check</li>
                            <li>Valid Business License or Proof of Ownership</li>
                            <li>Copy of Lease or Mortgage Statement</li>
                            <li><input type="text" class="form-control" name="doc1"></li>
                            <li><input type="text" class="form-control" name="doc2"></li>
                            <li><input type="text" class="form-control" name="doc3"></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Subject to :</h5>
                        <hr>
                        <ul>
                            <li>Bank Account and Statements Verification</li>
                            <li>Favorable Merchant and LL Interview</li>
                            <li>Favorable Site Inspections (or self site with pictures of outside signage, inside equipment, seating area, inventory, business license on wall, and credit card machine)</li>
                            <li><input type="text" class="form-control" name="sub1"></li>
                            <li><input type="text" class="form-control" name="sub2"></li>
                            <li><input type="text" class="form-control" name="sub3"></li>
                        </ul>
                    </div>
                </div>';
        return view('loan-form', [
            'bcaa' => $bcaa,
            'scaa' => $scaa
        ]);
    }

    public function previewPdf(Request $request){
        if($request->isMethod('post')){
            //dd($request->all());
            $data = null;
            if($request->sample == 1){
                $pdf = PDF::loadView('pdf.bcaapplicationdk', $data);
            }elseif($request->sample == 2){
                $data = [
                    'company' => $request->company,
                    'to' => $request->to,
                    'date' => $request->date,
                    'op11' => $request->op11,
                    'op12' => $request->op12,
                    'op13' => $request->op13,
                    'op21' => $request->op21,
                    'op22' => $request->op22,
                    'op23' => $request->op23,
                    'op31' => $request->op31,
                    'op32' => $request->op32,
                    'op33' => $request->op33,
                    'op41' => $request->op41,
                    'op42' => $request->op42,
                    'op43' => $request->op43,
                    'op51' => $request->op51,
                    'op52' => $request->op52,
                    'op53' => $request->op53,
                    'op61' => $request->op61,
                    'op62' => $request->op62,
                    'op63' => $request->op63,
                    'op71' => $request->op71,
                    'op72' => $request->op72,
                    'op73' => $request->op73,
                    'op81' => $request->op81,
                    'op82' => $request->op82,
                    'op83' => $request->op83,
                    'op91' => $request->op91,
                    'op92' => $request->op92,
                    'op93' => $request->op93,
                    'doc1' => $request->doc1,
                    'doc2' => $request->doc2,
                    'doc3' => $request->doc3,
                    'sub1' => $request->sub1,
                    'sub2' => $request->sub2,
                    'sub3' => $request->sub3,
                ];
                $pdf = PDF::loadView('pdf.scaa', $data);
            }else{
                abort(404);
            }
            return $pdf->setPaper('letter', 'portrait')
                ->stream('scaa.pdf');
        }
    }

    public function downloadPdf(Request $request){
        if($request->isMethod('post')){
            $data = [
                'name' => 'Mahmud Abdur Rahman'
            ];
            $pdf = PDF::loadView('pdf.bcaapplicationdk', $data);
            return $pdf->setPaper('a4', 'landscape')
                ->download('invoice.pdf');
        }
    }

    public function mcaCalculator(Request $request){
        return view('calc.mca');
    }
}
