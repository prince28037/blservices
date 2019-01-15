<?php

namespace App\Http\Controllers;

use App\Banks;
use App\Countries;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel as Excel;
use PDF;
use Illuminate\Http\Request;

class BLservices extends Controller
{
    public function pdfForms(Request $request){
        $rpa = '<h3 class="text-center">Referral Partner Agreement</h3>
                <br>
                <div class="form-row">
                    <label class="form-inline">This  agreement  is  made  and  entered  into  effective  this by  and <input type="text" class="form-control" name="and1"> between Samaritus Capital Inc. a New York Corporation (the “Company”), and the undersigned Referral Partner (“Referral Partner”).
                    </label><br>
                    WHEREAS, the Company is engaged in the business of providing commercial financing solutions itself as well as through an aggregate network (the “Network”) of funding and payment processing companies or organizations that may purchase all of the merchant’s rights, title and interests in and to a specified amount of the merchant’s future sales (“Future Receivables”) from qualifying merchants  (the  “Program”)  in  their  sole  and  absolute  discretion  and  may  implement  payment processing  software  and  integrations  and  related  products  as  mentioned  in  the  aggregate network’s (the “Network”) respective contracts and terms; and WHEREAS the Company is paid commissions  by  referring  any  merchant  by  which  the  Company  or  its  undersigned  Referral Partners engage with (a “Referred Merchant”) to the Company, or to any company or organization with the Network.
                    <br><br>WHEREAS, Referral Partner is engaged in business as a leasing, funding advisor, association, or independent sales organization; consultant or broker or service provider that works with small business owners on a regular basis; and
                    <br><br>WHEREAS, the Company and Referral Partner desire to enter into an arrangement for Referral Partner to refer merchants to the Company as set forth in this Agreement.
                    <br><br>NOW, THEREFORE, for good and valuable consideration, the receipt and sufficiency of which are hereby acknowledged, the parties hereto, intending to be legally bound, hereby agree as follows.
                    <br><br>1) Referral Process; Referral Fee
                    If the Company and Network accepts the application of any merchant that includes a statement that  Referral  Partner  is  the  referring  organization  (a  “Referred  Merchant”)  and,  in  its  sole discretion,  enters  into  an  Agreement  to  purchase  Future  Receivables  from  such  Referred Merchant  (a  “Purchase  Agreement”),  then  pursuant  to  amount  paid  under  the  Purchase Agreement (the “Purchase Price”) or implements payment processing software and integrations or related products as mentioned in the Network’s respective contracts and terms, Referral  Partner  shall  be  entitled  to  receive  Revenue  as  detailed  in  the  schedule  A  of  this agreement. Notwithstanding anything herein to the contrary, the Company and the Network shall be entitled to accept or reject any application by a Referred Merchant in its sole discretion and shall  have  no  obligation  to  accept  any  application  of  any  Referred  Merchant.  No  Purchase Agreement  shall  be  binding  on  the  Company  and  shall  not  entitle  the  Referral  Partner  to  any revenue unless said agreement has been accepted and fully executed by a duly authorized officer
                    of the Company and duly authorized officer in association with the Network’s applicable company or organization.
                    <br><br>2) Term: Termination

                    The term of this Agreement shall commence on the date hereof and continue until terminated by either party upon thirty (30) days’ prior written notice to the other party. Upon termination of this Agreement, all rights and obligations hereunder shall cease, except for the obligation of  (a) the Company to make any payments to Referral Partner pursuant to Section I and (b)  Referral Partner to make any payments to the Company, in each case with respect to any Referral Partner monthly dues or any application received from Referred Merchant prior to the notice of termination. The Company may terminate this Agreement for any reason, upon ten (10) days’ written notice to Referral Partner. Upon termination, Referral Partner shall cease marketing the Company’s and the Network’s services to merchants.
                    <br><br>3) Representations, Warranties and Covenants of Referral Partner    a) In General. Referral Partner represents and warrants to the Company as follows: (a) if applicable, Referral Partner is duly incorporated/formed/organized, validly existing, and in good standing in the jurisdiction of its incorporation/formation/organization and is duly qualified to do business and in good standing in each jurisdiction in which it conducts its business; (b) if applicable, Referral Partner has full corporate/partnership/limited liability company power and authority to enter into this Agreement and perform this Agreement in accordance with its terms; (c) this Agreement does not violate any law applicable to Referral Partner, Referral Partner’s charter or governing documents or any agreement, document or instrument to which Referral Partner is a party or by which it is bound; (d) this Agreement is a legal, valid and binding obligation of Referral Partner, enforceable against Referral Partner in accordance with its terms.    b) Referral Partner’s Conduct. Referral Partner covenants and agrees to use commercially reasonable efforts to market the Company’s services in good faith, and shall, at all times: (i) accurately describe the Company’s or the Network’s Program to qualifying merchants; (ii) adhere to the Company’s or Network’s funding or product guidelines; (iii) not represent that the merchant has been accepted or guaranteed acceptance into the Program prior to the acceptance by the Company and applicable Network entity; (iv) not act in a fashion that embarrasses, devalues, disparages or harms the Company, the Network, the Program, or other persons or entities marketing the Network or the Program;  and (v) be professional at all times. Furthermore, Referral Partner agrees not to (i) directly or indirectly publish, disclose, use or distribute the Company’s agreements, marketing materials, funding guidelines or other materials, unless specifically approved, in writing, by the Company; and (ii) Referral Partner shall secure approval by the Company prior to use of any marketing materials or forms that bear the Company’s logo and/or contain information related to the Company, the
                    Network or the Program. Referral Partner shall also obtain the Company’s approval to any subsequent changes made thereto affecting the description or information relating to the Company, the Network or the Program. Referral Partner agrees not to market or advertise the program in a manner that violates any state or federal law.
                    c) Due  Diligence. Referral  Partner  agrees  to  utilize  its  best  efforts  to  maintain accurate information on Referred Merchants on an ongoing basis, and to provide the Company with any new additional information about the Referred Merchant, and  to  investigate  any  inconsistencies  or  other  financial  issues  pertaining  to the Referred  Merchant  which  may  be  related  to  Referred   Merchant’s performance of  the  Company’s  or Network’s  Purchase  Agreement.  Referral Partner  shall  promptly notify   the  Company  in  writing  if   Referral   Partner  has  any  knowledge  that  any  application submitted by a Referred Merchant is not true, correct and complete in all respects.
                    i) Representations and Warranties of the Company
                    The Company represents and warrants to Referral Partner as follows: this Agreement is legal, valid and binding.
                    <br><br>4) Non-solicitation / Confidentiality
                    Referral Partner agrees that, during the term of this Agreement, Referral Partner shall not, directly or  indirectly,  solicit  or  induce  any  employee,  agent  or  Referral  Partner  of  the  Company  to terminate his or her employment or relationship with the Company. The parties agree that any breach of this section 4 would subject the Company to irreparable harm for which money damages would not be a sufficient remedy. Accordingly, Referral Partner agrees that the Company shall be entitled to injunctive or equitable relief in addition to other remedies that may be available at law or in equity. Referral Partner further agrees that, during the course of performing its obligations under this Agreement, it may acquire information about the other party, its business activities and operations,  its  technical  information  and  trade  secrets  of  a  highly  confidential  and  proprietary nature,  including,  without  limitation,  agreements,  marketing  records  and  plans,  forecasts  and strategies, prospect records including all lead data provided, client records and documentation, mailing  lists,  staffing  levels,  system  information,  technology,  technical  information,  know-how, computer  programs,  and  general  financing  and  business  plans  and  information  (all  such information  being  “Confidential  Information”).  Referral  Partner  shall  hold  the  Company’s Confidential Information in strict confidence and will use reasonable precautions to prevent the unauthorized  disclosure  or  access  to  the  Company’s  Confidential  Information.  Referral  Partner agrees that it will not, during the term hereof or thereafter and unless otherwise instructed by the  Company or  required by  law,  (a)  divulge,  furnish,  disclose,  or  make  accessible  to  any  third party  (other  than  directors,  officers,  or  employees  of  the  Company) any  of  the  Confidential Information; (b) make use of the Company’s confidential information, other than as reasonably necessary  for  the  performance  of  this  Agreement;  provided,  however,  that  Confidential Information shall not include any information which, at the time of disclosure by the disclosing party is generally available to and known by the public other than through any action or inaction
                    by the Company; or (c) has been independently acquired or developed by the receiving party without access to such information and without use of any Confidential Information of the disclosing party, and without violating any obligations under this Agreement, or of any other agreement between the Company and Referral Partner.
                    <br><br>5) Notice; Payments    All notices and other communications hereunder shall be in writing and shall be deemed given (a) three days after being deposited in the U.S. mail, first class, certified mail, return receipt requested, postage prepaid, or (b) upon delivery if delivered in person or sent by a nationally recognized overnight courier which provides confirmation of receipt, in any case to the address specified below. Notices shall not be sent in any other manner. Either party may change the address to which notices are to be sent to such party by providing written notice to the other party in the manner specified herein.
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">If to the Company:</div>
                    <div class="col">Samaritus Capital <br>  4250 Veterans Highway <br>Suite 303 East Tower<br>  Holbrook, NY 11741</div>
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">If to the Referral Partner:</div>
                    <div class="col">
                        <input type="text" class="form-control" name="partner1"><br>
                        <input type="text" class="form-control" name="partner2"><br>
                        <input type="text" class="form-control" name="partner3">
                    </div>
                </div>
                <br><br>
                <div class="form-row">
                    6) Miscellaneous
                    <br><br>a) Jurisdiction; Venue; Governing Law. Jurisdiction and venue for any claim or cause of action arising under this Agreement shall be exclusively in the state courts of New York located in Suffolk County and this agreement shall be governed and construed in accordance with the laws of the state of New York.
                    <br><br>b) Referral Partners. The Company and Referral Partner are and shall remain Referral Partners and nothing herein shall be deemed or construed to create the relationship of employee, agent, joint venture, or any other relationship between the Company and Referral Partner.
                    <br><br>c) Assignment. This agreement shall be binding upon and inure to the benefit of the parties hereto and their respective successors and permitted assigns. This Agreement shall not confer any rights or remedies upon any person other than the parties hereto and their respective successors and permitted assigns. This agreement may not be assigned by Referral Partner without the prior written consent of the Company, which will not be unreasonably withheld. Any attempted assignment of this Agreement without such prior written consent shall be void.

                    Referral Partner shall notify the company in writing of any change of control of Referral Partner at least 3 days prior to the effective date thereof.
                    <br><br>d) No Third-Party Beneficiaries. No provision of this agreement is intended to benefit any person or entity other than the parties hereto and their successors and permitted assigns, and no provision of this agreement shall be enforceable by any other person or entity.
                    <br><br>e) Referred Merchant Defaults. In the event a Referred Merchant is deemed to be in default under the Purchase Agreement within thirty (30) days of the initial advance from the selected Funding Source to the Referred Merchant or if an Referral Partner is found to have violated any section of this Agreement, the  Company may demand and the Referral Partner shall immediately return to the Company the commission owed to the Company from Referral Partners bank account via Automated Clearing House (“ACH”) without prior notice or to deduct such amount from any amounts due to Referral Partner for other Referred Merchant referrals.
                    <br><br>f) Limitations of Damages. The parties agree and acknowledge that each party’s damages under this Agreement or the activity contemplated herein are limited to actual losses incurred by a party as a result of a breach of this Agreement and their responsible attorneys’ fees incurred, and that no incidental, indirect, consequential, special, speculative, lost profits, exemplary, punitive or statutory damages may be asserted or collected by one party against the other party, unless relating to a breach of paragraph 5 herein.
                    <br><br>g) Severability. If any provision of this Agreement shall, for any reason, be adjudged by any court of competent jurisdiction to be invalid or unenforceable, such judgment shall not affect, impair or invalidate the remainder of this Agreement but shall be confined to the provision of this Agreement directly involved in the controversy in which such judgement shall have been rendered.
                    <br><br>h) Waiver. No failure by any party to exercise, and no delay in exercising any right hereunder shall operate as a waiver of such right, nor shall any single or partial exercise of any right hereunder by any party preclude any by the waiving party.
                    <br><br>i) Indemnification. Referral Partner indemnifies and holds the Company harmless from any liabilities, lawsuits, penalties, claims or demands (including the costs, expenses and reasonable attorney fees on account therefore) arising out of thirdparty claims relating to Referral Partner’s actions or inactions.
                    <br><br>j) Agreement Modification. Other than expressly referenced herein, this agreement contains all terms agreed upon by the parties hereto with respect to the subject matter hereof and supersedes all prior agreements or arrangements or understandings between such parties as to the subject matter hereof. This agreement may not be changed orally but only by an instrument in writing signed by the party against whom enforcement of any waiver, change, modification, extension, or discharge is sought.
                    <br><br>k) Further Assurances. Each party shall, at the request of the other but without further consideration (other than reimbursement for all reasonable out-of-pocket third-party expenses), do, execute, acknowledge, deliver and file, or shall cause to
                    be  done,  executed,  acknowledged,  delivered or  filed,  all  such  further  acts  and documents  as  maybe  reasonably  requested  to  consummate  the  transactions contemplated by this Agreement.
                    <br><br>l) Headings. The  section  headings  contained  in  this  Agreement  are  inserted  for convenience only and shall not affect in any way the meaning or interpretation of this Agreement.
                    <br><br>m) Counterparts. This Agreement may be executed in multiple counterparts, each of which shall be deemed an original and all of which together shall constitute one and the same instrument.
                    <br><br>n) Commissions. Referral  Partner  shall  be  paid  commissions  in  the  amount  and method equal to that depicted in Schedule A and within five (5) business days of funding  or  Company’s  receipt  of  commissions.  Schedule  A  is  subject  to  change without  notice.  Referral Partner should  be  advised  their  commissions  within  the referral funding program will vary based on the company or organization selected for deal closure within the Network.


                    <br><br>[Signature page to follow]

                    <br><br>IN WITNESS WHEREOF, the parties hereto have executed this Agreement as of the date first above written.
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">Samaritus Capital: </div>
                    <div class="col">
                        <label class="form-inline">
                            Referral Partner:<input type="text" class="form-control" name="ref_partner">
                        </label>
                    </div>
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        <label class="form-inline">
                            Print Name:<input type="text" class="form-control" name="print_name1">
                        </label>
                    </div>
                    <div class="col">
                        <label class="form-inline">
                            Print Name:<input type="text" class="form-control" name="print_name2">
                        </label>
                    </div>
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        <label class="form-inline">
                            Title:<input type="text" class="form-control" name="title1">
                        </label>
                    </div>
                    <div class="col">
                        <label class="form-inline">
                            Title:<input type="text" class="form-control" name="title2">
                        </label>
                    </div>
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        Signature ________________________________
                    </div>
                    <div class="col">
                        Signature _________________________________
                    </div>
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        <label class="form-inline">
                            Date:<input type="text" class="form-control" name="date1">
                        </label>
                    </div>
                    <div class="col">
                        <label class="form-inline">
                            Date:<input type="text" class="form-control" name="date2">
                        </label>
                    </div>
                </div>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        Samaritus Capital Inc. <br>4250 Veterans Highway <br>Suite 303 East Tower, <br>Holbrook NY 11741 <br>Attn: David Kornfeld <br>Phone: 516-567-2278 <br>davidk@samarituscapital.com
                    </div>
                    <div class="col"></div>
                </div>
                <br><br>
                <h4 class="text-center">ACH Authorization Form</h4>
                <br><br>
                <div class="form-row">
                    <label class="form-inline">
                        Referral Partner Name :<input type="text" name="ref_partner2" class="form-control">
                    </label>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group">
                        <label for="types">Type of Authorization (please check one):</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="types" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">New ACH Authorization </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="types" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">Change of Bank Info </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="types" id="inlineRadio3" value="3">
                            <label class="form-check-label" for="inlineRadio3">Terminate ACH Authorization </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    I authorize Samaritus Capital to initiate ACH debits and credits against the account listed below, in accordance with the terms stated in the Referral Partner Agreement. This authorization will remain in effect until SCP has received written notification from me to terminate said authorization.
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" class="form-control" name="bank_name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Bank Address</label>
                            <input type="text" class="form-control" name="bank_address">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label>Bank Phone</label>
                            <input type="text" class="form-control" name="bank_phone">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Type of Account</label>
                            <input type="text" class="form-control" name="ac_type">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label>Account #:</label>
                            <input type="text" class="form-control" name="ac">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>ABA/Routing #:</label>
                            <input type="text" class="form-control" name="aba">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label>Date :</label>
                            <input type="text" class="form-control" name="bank_date">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Signature:</label>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="jumbotron">
                    <h2 class="mt-2 text-center">INDEPENDENT CONTRACTOR	APPLICATION</h2>
                    <h3 class="mt-2 text-center">COMPANY INFORMATION</h3>
                    <div class="form-row">
                        <div class="col">
                            <label for="name" class="font-weight-bold">Company Legal Name :</label>
                            <input class="form-control" id="name" name="clname">
                        </div>
                        <div class="col">
                            <label for="dba" class="font-weight-bold">DBA Name :</label>
                            <input class="form-control" id="dba" name="dba_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="fti" class="font-weight-bold">Contact :</label>
                                    <input class="form-control" id="fti" name="contact">
                                </div>
                                <div class="col">
                                    <label for="bsd" class="font-weight-bold">Phone :</label>
                                    <input class="form-control" id="bsd" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label class="font-weight-bold">Email :</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <label class="font-weight-bold">Current Address :</label>
                        <input type="text" class="form-control" name="cAddress">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="phone" class="font-weight-bold">City :</label>
                                    <input class="form-control" id="phone" name="city">
                                </div>
                                <div class="col">
                                    <label for="fax" class="font-weight-bold">State :</label>
                                    <input class="form-control" id="fax" name="state">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="site" class="font-weight-bold">Zip :</label>
                            <input class="form-control" id="site" name="zip">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <div class="col">
                                        <label for="paddress" class="font-weight-bold">Tax ID :</label>
                                        <input class="form-control" id="paddress" name="taxId">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <label for="paddress" class="font-weight-bold">Years in Business :</label>
                                        <input class="form-control" id="paddress" name="years">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="pcity" class="font-weight-bold">Entity Structure :</label>
                                    <input class="form-control" id="pcity" name="entity">
                                </div>
                                <div class="col">
                                    <label for="pstate" class="font-weight-bold">State of Incorporation :</label>
                                    <input class="form-control" id="pstate" name="stateIn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="maddress" class="font-weight-bold">Deal Volume per Month (Units) :</label>
                            <input class="form-control" id="maddress" name="volume">
                        </div>
                        <div class="col">
                            <div class="col">
                                <label for="mcity" class="font-weight-bold">Deal Volume per Month (Dollars) :</label>
                                <input class="form-control" id="mcity" name="dollars">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="maddress" class="font-weight-bold">Total Funding	Last Calendar Year :</label>
                            <input class="form-control" id="maddress" name="totalFund">
                        </div>
                        <div class="col">
                            <div class="col">
                                <label for="mcity" class="font-weight-bold">Website :</label>
                                <input class="form-control" id="mcity" name="website">
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-2 text-center">Principal Information</h2>
                <div class="form-row">
                    <div class="col">
                        <label for="name" class="font-weight-bold">Name :</label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <div class="col">
                        <label class="font-weight-bold" for="home">DOB :</label>
                        <input type="text" class="form-control" name="dob">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="email" class="font-weight-bold">Cell :</label>
                        <input class="form-control" id="email" name="cell">
                    </div>
                    <div class="col">
                        <label for="mobile" class="font-weight-bold">SSN :</label>
                        <input class="form-control" id="mobile" name="ssn">
                    </div>
                </div>
                <div class="form-row">
                    <label for="haddress" class="font-weight-bold">Home Address :</label>
                    <input class="form-control" id="haddress" name="haddress">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="hcity" class="font-weight-bold">City :</label>
                        <input class="form-control" id="hcity" name="hcity">
                    </div>
                    <div class="col">
                        <div class="form-row">
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
                        <label class="font-weight-bold">Email :</label>
                        <input type="text" class="form-control" name="email2">
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col">
                                <label for="email" class="font-weight-bold">Years of Industry Experience :</label>
                                <input class="form-control" id="email" name="yie">
                            </div>
                            <div class="col">
                                <label for="mobile" class="font-weight-bold">Title :</label>
                                <input class="form-control" id="mobile" name="title3">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="jumbotron">
                    <h2 class="mt-2 text-center">INDUSTRY TRADE REFERENCES (2)</h2>
                    <div class="form-row">
                        <label class="font-weight-bold">Company Name :</label>
                        <input type="text" class="form-control" name="company_name3">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="in-type" class="font-weight-bold">Contact :</label>
                                    <input class="form-control" id="in-type" name="contact4">
                                </div>
                                <div class="col">
                                    <label for="sfo" class="font-weight-bold">Phone :</label>
                                    <input class="form-control" id="sfo" name="phone4">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="sfo" class="font-weight-bold">Email :</label>
                            <input class="form-control" id="sfo" name="email4">
                        </div>
                    </div>
                    <div class="form-row">
                        <label class="font-weight-bold">Company Name :</label>
                        <input type="text" class="form-control" name="company_name4">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <label for="in-type" class="font-weight-bold">Contact :</label>
                                    <input class="form-control" id="in-type" name="contact5">
                                </div>
                                <div class="col">
                                    <label for="sfo" class="font-weight-bold">Phone :</label>
                                    <input class="form-control" id="sfo" name="phone5">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="sfo" class="font-weight-bold">Email :</label>
                            <input class="form-control" id="sfo" name="email5">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="roo" class="font-weight-bold">Have you worked with Samaritus Capital in the past?</label>
                            <input class="form-control" id="roo" name="past">
                        </div>
                        <div class="col">
                            <label for="amount" class="font-weight-bold">If Yes, in what way?</label>
                            <input class="form-control" id="amount" name="why">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lmcci" class="font-weight-bold">How did you hear about Samaritus Capital?</label>
                        <input type="text" class="form-control" id="lmcci" name="hear">
                    </div>
                </div>
                <div class="form-row">
                    The undersigned hereby authorizes Samaritus Capital and its affiliates to obtain business and non-business investigative reports,including, but not limited to credit report,and consents to the use of such information by Samaritus Capital in its normal course of business. This authorization  is made by the undersigned as an individual and on behalf of the entity identifiedabove.The undersigned understands that Samaritus Capital may refuse to do business or enter into a formal agreement for any reason, and this application does not constitute an agreement or intent to enter into an agreement.
                    <br><br>I attest that the information and any documents submitted in connection with this application are correct and complete to the best of my knowledge and have been voluntarily submitted. Electronic copy of this authorization shall be deemed to be the equivalent	of	the	original.
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="roo" class="font-weight-bold">Signature</label>
                    </div>
                    <div class="col">
                        <label for="amount" class="font-weight-bold">Date :</label>
                        <input class="form-control" id="amount" name="date6">
                    </div>
                </div>';
        $coj = '<h1 class="text-center">CONFESSION OF JUDGMENT</h1>

                <div>
                    <div class="form-row">
                        SUPREME COURT OF THE STATE OF NEW YORK
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2">COUNTY OF </div>
                        <div class="col-sm-4"><input type="text" class="form-control" name="county"></div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        ---------------------------------------------------------------------X
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control cname1" name="in_x">
                        </div>
                        <div class="col">
                            <div class="form-row">
                                <div class="col-sm-2 col-sm-offset-2">
                                    <label class="pull-right">Index No</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="index_no">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col"></div>
                        <div class="col">Plaintiff</div>
                        <div class="col">AFFIDAVIT OF CONFESSION OF JUDGMENT</div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col"></div>
                        <div class="col">-against-</div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control cname2" name="against1">
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col text-center">and</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control oname1" name="against2">
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col"></div>
                        <div class="col">Defendants.</div>
                        <div class="col"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        ---------------------------------------------------------------------X
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2">
                            STATE OF [
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="col">])</div>
                    </div>
                    <div class="form-row">
                        <div class="col"></div>
                        <div class="col">) ss.:</div>
                        <div class="col"></div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2">
                            COUNTY OF [
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="county_of" class="form-control">
                        </div>
                        <div class="col">])</div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control oname2" name="sworn" type="text">
                        </div>
                        <div class="col">
                            , being duly sworn, deposes and says:
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            1.  I am a principal, owner, and an officer of
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="officer" class="form-control cname3">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-3">(“Defendant Merchant”), located at</div>
                        <div class="col-sm-5">
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2">in the County of</div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="county_of_2">
                        </div>
                        <div class="col-sm-8">
                            and as such, I have the authority to act on behalf of Defendant Merchant, and have been authorized by Defendant Merchant to execute this Affidavit of  Confession of Judgment.
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            2.  I  reside at
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="reside">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2">in  the  County of</div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="county_of_3">
                        </div>
                        <div class="col">.</div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            3.  I, individually, and on behalf of Defendant Merchant consent to the jurisdiction  of this

                            Court.
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            4.  Defendant Merchant  hereby confesses judgment and authorizes entry of judgment    in

                            favor of Plaintiff against Defendant
                        </div>
                    </div>
                    <div class="form-row">
                        Merchant in the Federal District Court for the Southern District of New York, Supreme Court of  the  State  of  New York, County  of  Nassau,  Supreme Court  of  the State of  New York, County of Suffolk, Supreme Court of the State of  New York, County  of  New York, Supreme Court of the State of New York, County of Westchester, Supreme Court  of  the  State of  New York, County of  Rockland, Supreme Court of  the State of New York, County of Erie, Supreme Court of the State of  New York, County  of  Orange, Supreme  Court of the State of New York, County of  Bronx,  and/or  Civil  Court  of  the City  of  New York, County  of  New
                        York,  in
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2">the  sum of</div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control sum1" name="sum">
                        </div>
                        <div class="col">
                            , less  any  payments  timely  made  pursuant  to the

                            Agreement  for  the Purchase
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            and Sale of  Future Receipts (the “Merchant Agreement”) dated
                        </div>
                        <div class="col">
                            <input type="text" class="form-control date1" name="dated">
                        </div>
                    </div>
                    <div class="form-row">
                        , plus legal fees to Plaintiff calculated at thirty three (33%) percent of the total of the aforesaid sums, costs, expenses and disbursements and interest at the rate of sixteen (16%) percent per annum   from
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control date2" name="from">
                        </div>
                        <div class="col">
                            or the highest amount allowed by law, whichever is greater, in connection with the enforcement of this
                        </div>
                    </div>
                    <div class="form-row">
                        Confession of Judgment. Such amount shall be set forth in an affidavit to be executed by Plaintiff or an affirmation by Plaintiff’s  attorney, which  shall  be  attached  hereto  at  the  time  of  entry  of  this Confession of Judgment.
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            5.  In   addition,  I  hereby  confess  judgment,  individually and   personally,  jointly   and

                            severally,  and  authorize entry  of  judgment  in
                        </div>
                    </div>
                    <div class="form-row">
                        favor of  Plaintiff  against  myself  personally in the Federal District Court    for  the  Southern  District   of   New  York,  Supreme  Court  of  the  State of  New York, County  of  Nassau, Supreme    Court of the State of New York, County of Suffolk, Supreme Court of the State of  New  York, County  of  New  York, Supreme Court of  the  State  of  New  York,  County  of  Westchester,  Supreme  Court  of  the  State of  New York, County  of  Rockland, Supreme Court of  the  State of  New York, County  of  Erie,  Supreme  Court of  the State of  New York,   County of Orange, Supreme Court of the State of New York, County of  Bronx,  and/or  Civil  Court  of the City of
                    </div>
                    <div class="form-row">
                        <div class="col">New  York, County of  New York, in the  sum of</div>
                        <div class="col">
                            <input type="text" class="form-control sum2" name="sum2">
                        </div>
                        <div class="col">
                            ,  less  any  payments   timely made under   the
                        </div>
                    </div>
                    <div class="form-row">
                        Merchant Agreement, plus legal fees to  Plaintiff  calculated  at  thirty three (33%)  percent  of  the total  of  the aforesaid sums,  costs,  expenses  and  disbursements
                    </div>
                    <div class="form-row">
                        <div class="col-sm-5">
                            and interest  at  the  rate  of  sixteen (16%)  percent  per  annum from
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control date3" name="from2">
                        </div>
                        <div class="col">
                            , or  the  highest  rate  allowed  by  law, whichever  is  greater,
                        </div>
                    </div>
                    <div class="form-row">
                        in  connection   with  the enforcement of this Confession of Judgment. Such amount  shall  be  set  forth  in  an  affidavit to be executed by Plaintiff or  an affirmation  by Plaintiff’s  attorney, which  shall  be  attached  here to  at  the  time of entry of  this Confession of Judgment.
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            6.  Plaintiff fully performed its duties under the Merchant Agreement.
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            7.  This Confession of Judgment is for a debt due to Plaintiff arising from both Defendant Merchant and  I individually, failing to pay
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-11">to the Plaintiff     Merchant Defendant’s future receipts, which were purchased by
                        Plaintiff  pursuant to the  Merchant  Agreement dated
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control date4" name="date2">
                        </div>
                    </div>
                    <div class="form-row">
                        , and for  Defendant Merchant and I individually breaching the Merchant Agreement, plus agreed-upon interest, attorneys’ fees, costs and disbursements, as agreed-upon  by  Defendant  Merchant  and  myself  individually  under  the  Merchant  Agreement  dated

                        <input type="text" class="form-control col-sm-4 date5" name="date3"> of  which supporting documents include  a  Personal  Guarantee and UCC-1 financing statement(s).
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            8.  Defendant Merchant and I hereby agree that the execution and delivery of this Affidavit of Confession of Judgment and any
                        </div>
                    </div>
                    <div class="form-row">
                        entry of judgment thereon shall be without prejudice to any and all rights of Plaintiff,  which  reserves  all  of  its  rights  and  remedies  against Defendants.
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            9.  If for any reason entry of judgment in the above specified amount or execution on the same is outside the jurisdiction of this
                        </div>
                    </div>
                    <div class="form-row">
                        Court, Defendant Merchant and I hereby consent to the personal jurisdiction, entry of judgment, and execution thereon in any State or Federal Court of the United States of America.
                        By: <input type="text" class="form-control col-sm-4 cname4" name="by">
                        <input type="text" class="form-control col-sm-4" name="left1">
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            Sworn  to  before me this day of '.date('d, M').' ,  2019 before  me, the undersigned, personally appeared,
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control oname3" name="appeared">
                        </div>
                    </div>
                    <div class="form-row">
                        , personally known to me on the basis of satisfactory evidence to be the individual whose name is executed to the within Affidavit of Confession of Judgment and sworn to me that they signed
                        <br><br><br>
                        NOTARY PUBLIC<br>
                        County of:<br>
                        Commission Expires:
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col"></div>
                        <div class="col">
                            <label class="form-inline">By:<input type="text" class="form-control oname4" name="by3"></label>
                        </div>
                        <div class="col">, individually,</div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            Sworn  to  before me this day of '.date('d, M').' ,  2019 before  me, the undersigned, personally appeared,
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control oname5" name="appeared2">
                        </div>
                    </div>
                    <div class="form-row">
                        , personally known to me on the basis of satisfactory evidence to be the individual whose name is executed to the within Affidavit of Confession of Judgment and sworn to me that they signed
                        <br><br><br>
                        NOTARY PUBLIC<br>
                        County of:<br>
                        Commission Expires:
                    </div>
                </div>';
        $agree = '<h1 class="text-center">Agreement for the Purchase and Sale of Future Receipts</h1>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control seller1" id="legalName" name="legalName" placeholder="Seller’s Legal Name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="dba" name="dba" placeholder="D/B/A">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="fbe" class="col-sm-3 col-form-label font-weight-bold">Form of Business Entity</label>
                    <div class="col-sm-9" id="fbe">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Corporation</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Limited Liability Company</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox4" value="option3">
                            <label class="form-check-label" for="inlineCheckbox4">Partnership</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox3" value="option4">
                            <label class="form-check-label" for="inlineCheckbox3">Limited Partnership</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox5" value="option5">
                            <label class="form-check-label" for="inlineCheckbox5">Limited Liability Partnership</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox6" value="option6">
                            <label class="form-check-label" for="inlineCheckbox6">Sole Partnership</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="fbe" type="radio" id="inlineCheckbox7" value="option7">
                            <label class="form-check-label" for="inlineCheckbox7">Other</label>
                            <input type="text" class="form-control" name="other">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="sAddress" name="sAddress" placeholder="Street Address">
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control" id="state" name="state" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="mAddress" name="mAddress" placeholder="Mailing Address">
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" id="mcity" name="mcity" placeholder="City">
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control" id="mstate" name="mstate" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="mzip" name="mzip" placeholder="Zip">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control owner1" id="pcn" name="pcn" placeholder="Primary Contact Name">
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control ttl1" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control tax1" id="fti" name="fti" placeholder="Federal Tax ID">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Purchase Price">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Purchase Amount">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="ams" name="ams" placeholder="Average Monthly Sales">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="sp" name="sp" placeholder="Specified Percentage">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="ofee" name="ofee" placeholder="Origination Fee">
                    </div>
                    <div class="col">
                        (To be deducted from the Purchase Price)
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="ida" name="ida" placeholder="Initial Daily Amount">
                    </div>
                    <div class="col-sm-8">
                        (Average Monthly Sales * Specified Percentage / Average Business Days in a Calender Month)
                    </div>
                </div>
                <br>
                <div class="form-row">
                    Effective,

                    <input class="form-control inline col-sm-4" type="text" name="effective">, 2018

                    Seller, identified above, hereby sells, assigns and transfers to

                    Samaritus Capital

                    Inc.,

                    4250 Veterans Memorial Highway Suite 303 East Tower



                    Holbrook, NY 11741

                    (“Buyer”),

                    without recourse, the Purchased

                    Amount
                    by delivering the Specified Percentage of the proceeds of each future sale made by Seller (collectively “Future Receipts”).

                    “Future

                    Receipts” includes all payments made by cash, check, ACH or other electronic transfer, credit card, debit card, bank

                    card, charge card
                    (each such card shall be referred to herein as a “Payment Card”)

                    or other form of monetary payment in the ordinary course of Seller’s
                    business.

                    As payment for the Purchased Amount, Buyer will deliver to Seller the Purchase Price, shown

                    above, minus any Origination

                    Fee shown above.

                    Seller acknowledges that it has no right to repurchase the Purchased Amount from Buyer.
                    <br>
                    <br>
                    The obligation of Buyer under this Agreement will not be effective unless and until Buyer has completed its review of the Seller and
                    has accepted this Agreement by delivering the Purchase Price,
                    minus any Origination Fee.  Prior to accepting this Agreement, Buyer
                    may conduct a
                    processing trial to confirm its access to the business bank
                    account
                    designated
                    in the Authorization Agreement
                    for
                    Automated Clearing House Transactions
                    signed on the date of this Agreement and as it may be amended or replaced from time to
                    time
                    (the “Account”) and the ability to withdraw the Initial Daily Amount. If the processing trial is not completed
                    to the satisfaction of Buyer, Buyer will refund to Seller all funds that were obtained by Buyer during the processing trial.
                    <br>
                    <br>
                    The Personal Guaranty of Performance by Guarantor(s) is attached hereto as Exhibit “A”.
                    <br>
                    <br>
                    <strong>Agreement of Seller:</strong>

                    By signing below Seller agrees to the terms and conditions contained in this Agreement, including those terms
                    and conditions on the following pages, and further agrees that this transaction is for business purposes and not for personal, family, or household purposes.
                    Signor also agrees that he/she is an owner of Seller and fully authorized to enter into this transaction.
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="seller" class="form-control seller2" placeholder="Seller">
                    </div>
                    <div class="col">
                        (Company Name)
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-9">
                                <input type="text" name="atb" class="form-control" placeholder="Agreed to by">
                            </div>
                            <div class="col-sm-3">
                                (Signature)
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control owner2" name="printName" placeholder="Printed Name">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-1">
                                its
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control ttl2" name="lTitle">
                            </div>
                            <div class="col-sm-2">
                                (Title)
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <br>
                <div class="form-row">
                    <strong>Agreement of Each Owner:</strong>  Each Owner signing below agrees to the terms of the Credit Report Authorization below. (# 6)
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="signature1">
                            </div>
                            <div class="col-sm-4">
                                (Signature)
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="signature2">
                            </div>
                            <div class="col-sm-4">
                                (Signature)
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <strong>1. Delivery of Purchased Amount:</strong>  Seller must deposit all Future Receipts into the Account and must instruct Seller’s credit card processor, which must be approved by Buyer (the “Processor”) to deposit all Payment Card receipts of Seller into the Account. Seller agrees not to change the Account or add an additional Account without the express written consent of Buyer.  Seller authorizes Buyer to debit the Daily Amount from the Account each business day by either ACH or electronic check.  Seller will provide Buyer with all required access codes and agrees not to change them without prior written consent from Buyer.  Seller will provide an appropriate ACH authorization to Buyer. Seller understands that it is responsible for either ensuring that the Daily Amount is available in the Account each business day or advising Buyer prior to each daily withdrawal of a shortage of funds. Otherwise, Seller will be responsible for any fees incurred by Buyer resulting from a rejected electronic check or ACH debit attempt, as set forth on Appendix A. Buyer is not responsible for any overdrafts or rejected transactions that may result from Buyer’s debiting any amount authorized under the terms of this Agreement. Seller understands that the foregoing ACH authorization is a fundamental condition to induce Buyer to accept the Agreement. Consequently, such authorization is intended to be irrevocable.
                    In the event that Seller changes or permits changes to the Account or the ACH authorization approved by the Buyer or adds an additional bank account, Buyer shall have the right, without waiving any of its rights and remedies and without notice to Seller or any Guarantor, to notify the new or additional bank of this Agreement and to direct such new or additional bank to remit to the Buyer all or any portion of the amounts received by such bank. Seller hereby grants to Buyer an irrevocable power of attorney, which power of attorney shall be coupled with an interest, and hereby appoints the Buyer or any of the representatives of Buyer as Seller’s attorney in fact, to take any and all action necessary to direct such new or additional bank to remit to Buyer amounts received by such bank.
                </div>
                <br>
                <div class="form-row">
                    In the event that Seller changes or permits changes to the Account or the ACH authorization approved by the Buyer or adds an additional bank account, Buyer shall have the right, without waiving any of its rights and remedies and without notice to Seller or any Guarantor, to notify the new or additional bank of this Agreement and to direct such new or additional bank to remit to the Buyer all or any portion of the amounts received by such bank. Seller hereby grants to Buyer an irrevocable power of attorney, which power of attorney shall be coupled with an interest, and hereby appoints the Buyer or any of the representatives of Buyer as Seller’s attorney in fact, to take any and all action necessary to direct such new or additional bank to remit to Buyer amounts received by such bank.
                </div>
                <br>
                <div class="form-row">
                    <strong>2. Seller May Request Changes to the Daily Amount (IMPORTANT PROTECTION FOR SELLER):  </strong>The initial Daily Amount is intended to represent the Specified Percentage of Seller’s daily Future Receipts. For as long as no Event of Default has occurred, once each calendar month, Seller may request that Buyer adjust the Daily Amount to more closely reflect the Seller’s actual Future Receipts times the Specified Percentage.  Seller agrees to provide Buyer any information requested by Buyer to assist in this reconciliation. Upon reasonable verification of such information, Buyer shall adjust the Daily Amount on a going-forward basis to more closely reflect the Seller’s actual Future Receipts times the Specified Percentage.  Buyer will give Seller notice five business days prior to any such adjustment.  After each adjustment made pursuant to this paragraph, the new dollar amount shall be deemed the Daily Amount until any subsequent adjustment.  Buyer may request updated information from time to time to determine whether the Daily Amount should be subsequently adjusted to more closely reflect the Seller’s actual Future Receipts times the Specified Percentage.
                </div>
                <br>
                <div class="form-row">
                    <strong>3. Daily Amount Upon Default.</strong>  Upon the occurrence of an Event of Default, the Daily Amount shall equal 100% of all Future Receipts.
                </div>
                <br>
                <div class="form-row">
                    <strong>4. Nonrecourse Sale of Future Receipts (THIS IS NOT A LOAN): </strong> Seller is selling a portion of a future revenue stream to Buyer at a discount, not borrowing money from Buyer. There is no interest rate or payment schedule and no time period during which the Purchased Amount must be collected by Buyer. If Future Receipts are remitted more slowly than Buyer may have anticipated or projected because Seller’s business has slowed down, or if the full Purchased Amount is never remitted because Seller’s business went bankrupt or otherwise ceased operations in the ordinary course of business, and Seller has not breached this Agreement, Seller would not owe anything to Buyer and would not be in breach of or default under this Agreement. Buyer is buying the Purchased Amount of Future Receipts knowing the risks that Seller’s business may slow down or fail, and Buyer assumes these risks based on Seller’s representations, warranties and covenants in this Agreement that are designed to give Buyer a reasonable and fair opportunity to receive the benefit of its bargain. By this Agreement, Seller transfers to Buyer full and complete ownership of the Purchased Amount of Future Receipts and Seller retains no legal or equitable interest therein.  Seller agrees that it will treat Purchase Price and Purchased Amount in a manner consistent with a sale in its accounting records and tax returns. Seller agrees that Buyer is entitled to audit Seller’s accounting records upon reasonable Notice in order to verify compliance.  Seller waives any rights of privacy, confidentiality or taxpayer privilege in any such litigation or arbitration in which Seller asserts that this transaction is anything other than a sale of future receipts.

                </div>
                <br>
                <div class="form-row">
                    <strong>5. Fees and Charges:</strong>  Other than the Origination Fee, if any, set forth above, Buyer is NOT CHARGING ANY OTHER ORIGINATION OR BROKER FEES to Seller.  If Seller is charged another such fee, it is not being charged by Buyer. A list of all fees and charges applicable under this Agreement is contained in Appendix A.

                </div>
                <br>
                <div class="form-row">
                    <strong>6. Credit Report and Other Authorizations:  </strong>Seller and each of the Owners signing above authorize Buyer, its agents and representatives and any credit reporting agency engaged by Buyer, to (i) investigate any references given or any other statements or data obtained from or about Seller or any of its Owners for the purpose of this Agreement, (ii) obtain consumer and business
                    credit reports on the Seller and any of its Owners, and (iii) to contact personal and business references provided by the Seller in the Application, at any time now or for so long as Seller and/or Owners continue to have any obligation owed to Buyer as a consequence of this Agreement or for Buyer\'s ability to determine Seller\'s eligibility to enter into any future agreement with Buyer.
                </div>
                <br>
                <div class="form-row">
                    <strong>7. Authorization to Contact Current and Prior Banks:  </strong>Seller hereby authorizes Buyer to contact any current or prior bank of the Seller in order to obtain whatever information it may require regarding Seller’s transactions with any such bank. Such information may include but is not limited to, information necessary to verify the amount of Future Receipts previously processed on behalf of Seller and any fees that may have been charged by the bank. In addition, Seller authorizes Buyer to contact any current or prior bank of the Seller for collections and in order to confirm that Seller is exclusively using the Account identified above, or any other account approved by Buyer, for the deposit of all business receipts.
                </div>
                <br>
                <div class="form-row">
                    <strong>8. Right to Cancel:  </strong>Seller understands that Buyer offers Seller a right to cancel this Agreement at any time within 14 days after Buyer has delivered the Purchase Price.  Seller may exercise this right by notifying Buyer that it is cancelling this Agreement and returning the Purchase Price to Buyer.  For the Seller’s right to cancel to be effective, Buyer must receive both the notice and the Purchase Price within 14 days after the Buyer has delivered the Purchase Price.  Buyer shall retain the Origination Fee, but Seller shall not be responsible for any other costs if this Agreement is cancelled pursuant to this Section.
                </div>
                <br>
                <div class="form-row">
                    <strong>9. Financial Information. </strong>Seller authorizes Buyer and its agents to investigate its financial responsibility and history, and will provide to Buyer any authorizations, bank or financial statements, tax returns, etc., as Buyer deems necessary in its sole discretion prior to or at any time after execution of this Agreement. A photocopy of this authorization will be deemed acceptable as an authorization for release of financial and credit information. Buyer is authorized to update such information and financial and credit profiles from time to time as it deems appropriate.  Seller waives, to the maximum extent permitted by law, any claim for damages against Buyer or any of its affiliates relating to any investigation undertaken by or on behalf of Buyer as permitted by this Agreement or disclosure of information as permitted by this Agreement.
                </div>
                <br>
                <div class="form-row">
                    <strong>10. Transactional History. </strong>Seller authorizes all of its banks and brokers and Payment Card processors to provide Buyer with Seller’s banking, brokerage and/or processing history to determine qualification or continuation in this program, or for collections upon an Event of Default.
                </div>
                <br>
                <div class="form-row">
                    <strong>11. Publicity. </strong>Seller hereby authorizes Buyer to use its name in listings of clients and in advertising and marketing materials.
                </div>
                <br><br><strong>12. Application of Amounts Received by Buyer. </strong> Buyer reserves the right to apply amounts received by it under this Agreement to any fees or other charges due to Buyer from Seller prior to applying such amounts to reduce the amount of any outstanding Purchased Amount.
                <br><br><strong>13. Representations, Warranties and Covenants of Seller:</strong>

                <br><br><strong>13.1. Good Faith, Best Efforts and Due Diligence.</strong> Seller will conduct its business in good faith and will use its best efforts to continue its business at least at its current level, to ensure that Buyer obtains the Purchased Amount.

                <br><br><strong>13.2. Stacking Prohibited.</strong> Seller shall not enter into any merchant cash advance or any loan agreement that relates to or involves its Future Receipts with any party other than Buyer for the duration of this Agreement. Buyer may share information regarding this Agreement with any third party in order to determine whether Seller is in compliance with this provision.

                <br><br><strong>13.3. Financial Condition and Financial Information.</strong> Any bank statements and financial statements of Seller that have been furnished to Buyer, and future statements that will be furnished to Buyer, fairly represent the financial condition of Seller at such dates, and Seller will notify Buyer immediately if there are material adverse changes, financial or otherwise, in the condition or operation of Seller or any change in the ownership of Seller.  Buyer may request statements at any time during the performance of this Agreement and the Seller shall provide them to Buyer within five business days.  Furthermore, Seller represents that all documents, forms and recorded interviews provided to or with Buyer are true, accurate and complete in all respects, and accurately reflect Seller’s financial condition and results of operations.  Seller further agrees to authorize the release of any past or future tax returns to Seller.

                <br><br><strong>13.4. Governmental Approvals.</strong> Seller is in compliance and shall comply with all laws and has valid permits, authorizations and licenses to own, operate and lease its properties and to conduct the business in which it is presently engaged and/or will engage in hereafter.
                <br><br><strong>13.5. Authority to Enter Into This Agreement.</strong>  Seller and the person(s) signing this Agreement on behalf of Seller, have full power and authority to incur and perform the obligations under this Agreement, all of which have been duly authorized.
                <br><br><strong>13.6. Change of Name or Location or Sale or Closing of Business.</strong> Seller will not conduct Seller’s businesses under any name other than as disclosed to Buyer or change any of its places of business without prior written consent of Buyer.  Seller will not sell, dispose, transfer or otherwise convey all or substantially all of its business or assets without (i) the express prior written consent of Buyer, and (ii) the written agreement of any purchaser or transferee assuming all of Seller’s obligations under this Agreement pursuant to documentation satisfactory to Buyer.  Except as disclosed to Buyer in writing, Seller has no current plans to close its business either temporarily, whether for renovations, repairs or any other purpose, or permanently.  Seller will not voluntarily close its business on a temporarily basis for renovations, repairs, or any other purposes.  This provision, however, does not prohibit Seller from closing its business temporarily if such closing  is required to conduct renovations or repairs that are required by local ordinance or other legal order, such as from a health or fire inspector, or if otherwise forced to do so by circumstances outside of the control of Seller.  Prior to any such closure, Seller will provide Buyer ten business days’ notice to the extent practicable.
                <br><br><strong>13.7. No Pending or Contemplated Bankruptcy.</strong>  As of the date Seller executes this Agreement, Seller is not insolvent and does not contemplate and has not filed any petition for bankruptcy protection under Title 11 of the United States Code and there has been no involuntary petition brought or pending against Seller. Seller represents that it has not consulted with a bankruptcy attorney within six months prior to the date of this Agreement.  Seller further warrants that it does not anticipate filing a bankruptcy petition and it does not anticipate that an involuntary petition will be filed against it.
                <br><br><strong>13.8. Seller to Maintain Insurance.</strong>  Seller will possess and maintain insurance in such amounts and against such risks as are necessary to protect its business and will provide proof of such insurance to Buyer upon demand.
                <br><br><strong>13.9. Seller to Pay Taxes Promptly. </strong> Seller will promptly pay all necessary taxes, including but not limited to employment and sales and use taxes.
                <br><br><strong>13.10. No Violation of Prior Agreements. </strong> Seller\'s execution and performance of this Agreement will not conflict with any other agreement, obligation, promise, court order, administrative order or decree, law or regulation to which Seller is subject, including any agreement that prohibits the sale or pledge of Seller’s future receipts.
                <br><br><strong>13.11. No Diversion of Receipts. </strong>Seller will not permit any event to occur that could cause a diversion of any of Seller’s Future Receipts from the Account to any other entity.
                <br><br><strong>13.12. Seller’s Knowledge and Representation. </strong> Seller represents warrants and agrees that it is a sophisticated business entity familiar with the kind of transaction covered by the Agreement; it was represented by counsel or had full opportunity to consult with counsel.
                <br><br><strong>13.13. No Liens, Judgments, Bankruptcies, or Payment Plans.</strong> Seller represents that neither Seller nor any principal owner of Seller has any pending or final state or federal tax liens against property owned by any of them; has any pending or final judgments entered against any of them; has filed or plans to file bankruptcy; or has entered into any payment plan to satisfy an obligation, judgment or lien that was not reported to Buyer.
                <br><br><strong>13.14. Statement of Truthful Information.</strong> Seller represents that all information and statements provided in the business application by Seller and any principal owner that induced Buyer to enter into this transaction (“Business Application”) is true and correct. The information and statements made in the Business Application are incorporated into this Agreement by this reference.
                <br><br><strong>13.15. Seller Must Update Information.</strong> Seller represents that Seller will promptly notify Buyer of any change to information or statements made in the Business Application.
                <br><br><strong>14. Rights of Buyer:</strong>
                <br><br><strong>14.1. Financing Statements.</strong> Seller authorizes Buyer to file one or more UCC-1 forms consistent with the Uniform Commercial Code (“UCC”) in order to give notice that the Purchased Amount of Future Receipts is the sole property of Buyer.  The UCC filing may state that such sale is intended to be a sale and not an assignment for security and may state that the Seller is prohibited from obtaining any financing that impairs the value of the Future Receipts or Buyer’s right to collect same.  Seller authorizes Buyer to debit the Account for all costs incurred by Buyer associated with the filing, amendment or termination of any UCC filings.
                <br><br><strong>14.2. Right of Access.</strong> In order to ensure that Seller is complying with the terms of this Agreement, Buyer shall have the right to (i) enter, without notice,  the premises of Seller’s business for the purpose of inspecting and checking Seller’s transaction processing terminals to ensure the terminals are properly programmed to submit and or batch Seller’s daily receipts to the Processor and to ensure that Seller has not violated any other provision of this Agreement, and (ii) Seller shall provide access to its employees and records and all other items as requested by Buyer, and (iii) have Seller provide information about its business operations, banking relationships, vendors, landlord and other information to allow Buyer to interview any relevant parties.
                <br><br><strong>14.3. Phone Recordings and Contact.</strong>  Seller agrees that any call between Buyer and Seller, and their agents and employees may be recorded or monitored.  Further, Seller agrees that (i) it has an established business relationship with Buyer, its employees and agents and that Seller may be contacted from time-to-time regarding this or other business transactions; (ii) that such communications and contacts are not unsolicited or inconvenient; and (iii) that any such contact may be made at any phone number, emails address, or facsimile number given to Buyer by the Seller, its agents or employees, including cellular telephones.
                <br><br><strong>14.4. ACH Authorization. </strong> Seller represents and warrants that (i) the Account is Seller’s bank account; (ii) the person executing this Authorization on behalf of Seller is an authorized signer on the Account and has the power and authority to authorize Buyer to initiate ACH transactions to and from the Account; (iii) the Account is a legitimate, open, and active bank account used solely for business purposes and not for personal, family or household purposes.  If an ACH transaction is rejected by Seller’s financial institution for any reason other than a stop payment order placed by Seller with its financial institution, including without limitation insufficient funds, Seller agrees that Buyer may resubmit up to two times any ACH transaction that is dishonored. Seller’s bank may charge Seller fees for unsuccessful ACH entries. Seller agrees that Buyer will have no liability to Seller for such fees.  In the event Buyer makes an error in processing any payment or credit, Seller authorizes Buyer to initiate ACH entries to or from the Account to correct the error.  Seller acknowledges that the origination of ACH entries to and from the Account must comply with applicable law and applicable network rules. Seller agrees to be bound by the Rules and Operating Guidelines of NACHA (formerly known as the National Automated Clearing House Association).  Seller will not dispute any ACH transaction initiated pursuant to this Authorization, provided the transaction corresponds to the terms of this Authorization.  Seller requests the financial institution that holds the Account to honor all ACH entries initiated in accordance with this Authorization.
                <br><br><strong>15. Events of Default.</strong> The occurrence of any of the following events shall constitute an “Event of Default”: (a) Seller interferes with Buyer’s right to collect the Daily Amount; (b) Seller violates any term, representation, warranty or covenant in this Agreement; (c) Seller uses multiple depository accounts without the prior written consent of Buyer; (d) Seller changes its depositing account or its payment card processor without the prior written consent of Buyer; (e) Seller defaults under any of the terms, covenants and conditions of any other agreement with Buyer, or (f) Seller fails to provide timely notice to Buyer such that in any given calendar month there are four or more ACH transactions attempted by Buyer are rejected by Seller’s bank.
                <br><br><strong>16. Remedies.</strong> If any Event of Default occurs, Buyer may proceed to protect and enforce its rights including, but not limited to, the following:
                <br><br>16.1. The Specified Percentage shall equal 100%.</strong> The full uncollected Purchased Amount plus all fees and charges (including legal fees) due under this Agreement will become due and payable in full immediately.
                <br><br>16.2. Buyer may enforce the provisions of the Personal Guaranty of Performance against each Owner.
                <br><br>16.3. Buyer may proceed to protect and enforce its rights and remedies by arbitration or lawsuit.  In any such arbitration or lawsuit, under which Buyer shall recover Judgment against Seller, Seller shall be liable for all of Buyer’s costs of the lawsuit, including but not limited to all reasonable attorneys’ fees and court costs.  However, the rights of Buyer under this provision shall be limited as provided in the arbitration provision set forth below.
                <br><br>16.4. This Agreement shall be deemed Seller’s Assignment of Seller’s Lease of Seller’s business premises to Buyer. Upon an Event of Default, Buyer may exercise its rights under this Assignment of Lease without prior notice to Seller.
                <br><br>16.5. Buyer may debit Seller’s depository accounts wherever situated by means of ACH debit or facsimile signature on a computer-generated check drawn on Seller’s bank account or otherwise for all sums due to Buyer.
                <br><br>16.6. Seller shall pay to Buyer all reasonable costs associated with the Event of Default and the enforcement of Buyer’s remedies, including but not limited to court costs and attorneys’ fees.
                <br><br>16.7. All rights, powers and remedies of Buyer in connection with this Agreement may be exercised at any time by Buyer after the occurrence of an Event of Default, are cumulative and not exclusive, and shall be in addition to any other rights, powers or remedies provided by law or equity.
                <br><br><strong>17. Modifications; Agreements.</strong> No modification, amendment, waiver or consent of any provision of this Agreement shall be effective unless the same shall be in writing and signed by Buyer.
                <br><br><strong>18. Assignment.</strong> Buyer may assign, transfer or sell its rights to receive the Purchased Amount or delegate its duties hereunder, either in whole or in part, with or without prior written notice to Seller.
                <br><br><strong>19. Notices.</strong>
                <br><br>19.1. Notices from Buyer to Seller.  Buyer may send any notices, disclosures, terms and conditions, other documents, and any future changes to Seller by regular mail or by e-mail, at Buyer’s option and Seller consents to such electronic delivery.  Notices sent by e-mail are effective when sent.  Notices sent by regular mail become effective three days after mailing to Seller’s address set forth in this Agreement.
                <br><br>19.2. Notices from Seller to Buyer.  Seller may send any notices to Buyer by e-mail only upon the prior written consent of Buyer, which consent may be withheld or revoked at any time in Buyer’s sole discretion.   Otherwise, any notices or other communications from Seller to Buyer must be delivered by certified mail, return receipt requested, to Buyer’s address set forth in this Agreement. Notices sent to Buyer shall become effective only upon receipt by Buyer.
                <br><br><strong>20. Binding Effect; Governing Law, Venue and Jurisdiction.</strong>  This Agreement shall be binding upon and inure to the benefit of Seller, Buyer and their respective successors and assigns, except that Seller shall not have the right to assign its rights hereunder or any interest herein without the prior written consent of Buyer which consent may be withheld in Buyer’s sole discretion. This Agreement shall be governed by and construed in accordance with the laws of the state of New York, without regards to any applicable principals of conflicts of law.  Seller understands and agrees that (i) Buyer is located in New York, (ii) Buyer makes all decisions from Buyer’s office in New York, (iii) the Agreement is made in New York (that is, no binding contract will be formed until Buyer receives and accepts Seller’s signed Agreement in New York) and (iv) Seller’s payments are not accepted until received by Buyer in New York. Except as provided in Section 30 of this Agreement, any suit, action or proceeding arising hereunder, or the interpretation, performance or breach of this Agreement, shall, if Buyer so elects, be instituted in any court sitting in New York (the “Acceptable Forum”). Seller agrees that the Acceptable Forum is convenient to it and submits to the jurisdiction of the Acceptable Forum and waives any and all objections to jurisdiction or venue. Should such proceeding be initiated in any other forum, Seller waives any right to oppose any motion or application made by Buyer to transfer such proceeding to an Acceptable Forum.
                <br><br><strong>21. Survival of Representation, etc.</strong> All representations, warranties and covenants herein shall survive the execution and delivery of this Agreement and shall continue in full force until all obligations under this Agreement shall have been satisfied in full.
                <br><br><strong>22. Interpretation. </strong> All Parties hereto have reviewed this Agreement with an attorney of their own choosing and have relied only on their own attorney’s guidance and advice. No construction determinations shall be made against either Party hereto as drafter.
                <br><br><strong>23. Entire Agreement and Severability.</strong> This Agreement embodies the entire agreement between Seller and Buyer and supersedes all prior agreements and understandings relating to the subject matter hereof.  In case any of the provisions in this Agreement is
                found to be invalid, illegal or unenforceable in any respect, the validity, legality and enforceability of any other provision contained herein shall not in any way be affected or impaired. Sections 11, 19, 20, 21, 25, 26, 27, 28, 29, 30 and 31 of this Agreement shall survive after Seller delivers the entire Purchased Amount to Buyer and the termination of this Agreement.
                <br><br><strong>24. Facsimile Acceptance.</strong>  Facsimile signatures hereon, or other electronic means reflecting the party’s signature hereto, shall be deemed acceptable for all purposes. This Agreement may be signed in one or more counterparts, each of which shall constitute an original and all of which when taken together shall constitute one and the same agreement.
                <br><br><strong>25. Confidentiality: </strong> The terms and conditions of this Agreement are proprietary and confidential unless required by law. Seller shall not disclose this information to anyone other than its attorney, accountant or similar service provider and then only to the extent such person uses the information solely for purpose of advising Seller and first agrees in writing to be bound by the terms of this Section. A breach entitles Buyer to damages and legal fees as well as temporary restraining order and preliminary injunction without bond.

                <br><br><strong>26. CONFESSION OF JUDGMENT. IMPORTANT NOTICE – THIS INSTRUMENT CONTAINS A CONFESSION OF JUDGMENT PROVISION WHICH CONSTITUTES A WAIVER OF IMPORTANT RIGHTS YOU MAY HAVE AS THE SELLER AND GUARANTOR(S) AND ALLOWS THE BUYER TO OBTAIN A JUDGMENT AGAINST YOU WITHOUT ANY FURTHER NOTICE.</strong> To secure the obligations of Seller covered under Section 13, Representations, Warranties and Covenants of Seller and the guarantee of Guarantor(s) of the prompt and complete performance to Buyer of all the obligations of Seller as stated on Exhibit “A”, Seller and Guarantor(s) hereby execute a Confession of Judgment, attached as Exhibit B to this Agreement. In case any “Event of Default” shall occur, as defined in section 15 above, or Seller breaches any provision of this Agreement, which includes without limitation, Seller not entering  into any merchant cash advance or any agreement that relates to or involves its Future Receipts with any party other than Buyer for the duration of this Agreement without the expressed written consent of Buyer, Seller and Guarantor(s) jointly and  severally irrevocably authorize any attorney of any court of record to appear for any one or more of them in such court and enter the Confession of Judgment without process or notice in favor of Buyer for such amount of the Purchased Amount as may then appear unpaid and other applicable fees and attorneys\' fees, to release all errors which may intervene in any such proceedings, and to consent to immediate execution upon such judgment, hereby ratifying every act of such attorney hereunder.


                <br><br><strong>27. Monitoring, Recording, and Solicitations.</strong>
                <br><br><strong>27.1 . Authorization to Contact Seller by Phone.</strong> Seller authorizes Buyer, its affiliates, agents and independent contractors to contact Seller at any telephone number Seller provides to Buyer or from which Seller places a call to Buyer, or any telephone number where Buyer believes it may reach Seller, using any means of communication, including but not limited to calls or text messages to mobile, cellular, wireless or similar devices or calls or text messages using an automated telephone dialing system and/or artificial voices or prerecorded messages, even if Seller incurs charges for receiving such communications.
                <br><br><strong>27.2. Authorization to Contact Seller by Other Means.</strong> Seller also agrees that Buyer, its affiliates, agents and independent contractors, may use any other medium not prohibited by law including, but not limited to, mail, e-mail and facsimile, to contact Seller. Seller expressly consents to conduct business by electronic means.
                <br><br><strong>28. JURY WAIVER.  THE PARTIES WAIVE THE RIGHT TO A TRIAL BY JURY IN ANY COURT IN ANY SUIT, ACTION OR PROCEEDING ON ANY MATTER ARISING IN CONNECTION WITH OR IN ANY WAY RELATED TO THE TRANSACTIONS OF WHICH THIS AGREEMENT IS A PART OR ITS ENFORCEMENT, EXCEPT WHERE SUCH WAIVER IS PROHIBITED BY LAW OR DEEMED BY A COURT OF LAW TO BE AGAINST PUBLIC POLICY.  THE PARTIES ACKNOWLEDGE THAT EACH MAKES THIS WAIVER KNOWINGLY, WILLINGLY AND VOLUNTARILY AND WITHOUT DURESS, AND ONLY AFTER EXTENSIVE CONSIDERATION OF THE RAMIFICATIONS OF THIS WAIVER WITH THEIR ATTORNEYS.

                </strong><br><br><strong>29. CLASS ACTION WAIVER.  BUYER, SELLER, AND EACH GUARANTOR ACKNOWLEDGE AND AGREE THAT THE AMOUNT AT ISSUE IN THIS TRANSACTION AND ANY DISPUTES THAT ARISE BETWEEN THEM ARE LARGE ENOUGH TO JUSTIFY DISPUTE RESOLUTION ON AN INDIVIDUAL BASIS.  EACH PARTY HERETO WAIVES ANY RIGHT TO ASSERT ANY CLAIMS AGAINST THE OTHER PARTY AS A REPRESENTATIVE OR MEMBER IN ANY CLASS OR REPRESENTATIVE ACTION, EXCEPT WHERE SUCH WAIVER IS PROHIBITED BY LAW OR DEEMED BY A COURT OF LAW TO BE AGAINST PUBLIC POLICY.  TO THE EXTENT EITHER PARTY IS PERMITTED BY LAW OR COURT OF LAW TO PROCEED WITH A CLASS OR REPRESENTATIVE ACTION AGAINST THE OTHER, THE PARTIES AGREE THAT:  (I) THE PREVAILING PARTY SHALL NOT BE ENTITLED TO RECOVER ATTORNEYS’ FEES OR COSTS ASSOCIATED WITH
                PURSUING THE CLASS OR REPRESENTATIVE ACTION (NOT WITHSTANDING ANY OTHER PROVISION IN THIS AGREEMENT); AND (II) THE PARTY WHO INITIATES OR PARTICIPATES AS A MEMBER OF THE CLASS WILL NOT SUBMIT A CLAIM OR OTHERWISE PARTICIPATE IN ANY RECOVERY SECURED THROUGH THE CLASS OR REPRESENTATIVE ACTION.
                    </strong><br><br><strong>30. ARBITRATION.  IF BUYER, SELLER OR ANY GUARANTOR REQUESTS, THE OTHER PARTIES AGREE TO ARBITRATE ALL DISPUTES AND CLAIMS ARISING OUT OF OR RELATING TO THIS AGREEMENT. IF BUYER, SELLER OR ANY GUARANTOR SEEKS TO HAVE A DISPUTE SETTLED BY ARBITRATION, THAT PARTY MUST FIRST SEND TO ALL OTHER PARTIES, BY CERTIFIED MAIL, A WRITTEN NOTICE OF INTENT TO ARBITRATE. IF BUYER, SELLER OR ANY GUARANTOR DO NOT REACH AN AGREEMENT TO RESOLVE THE CLAIM WITHIN 30 DAYS AFTER THE NOTICE IS RECEIVED, BUYER, SELLER OR ANY GUARANTOR MAY COMMENCE AN ARBITRATION PROCEEDING WITH THE AMERICAN ARBITRATION ASSOCIATION (“AAA”) OR NATIONAL ARBITRATION FORUM (“NAF”). BUYER WILL PROMPTLY REIMBURSE SELLER OR THE GUARANTOR ANY ARBITRATION FILING FEE, HOWEVER, IN THE EVENT THAT BOTH SELLER AND THE GUARANTOR MUST PAY FILING FEES, BUYER WILL ONLY REIMBURSE SELLER’S ARBITRATION FILING FEE AND, EXCEPT AS PROVIDED IN THE NEXT SENTENCE, BUYER WILL PAY ALL ADMINISTRATION AND ARBITRATOR FEES. IF THE ARBITRATOR FINDS THAT EITHER THE SUBSTANCE OF THE CLAIM RAISED BY SELLER OR THE GUARANTOR OR THE RELIEF SOUGHT BY SELLER OR THE GUARANTOR IS IMPROPER OR NOT WARRANTED, AS MEASURED BY THE STANDARDS SET FORTH IN FEDERAL RULE OF PROCEDURE 11(B), THEN BUYER WILL PAY THESE FEES ONLY IF REQUIRED BY THE AAA OR NAF RULES.  SELLER AND THE GUARANTOR AGREE THAT, BY ENTERING INTO THIS AGREEMENT, THEY ARE WAIVING THE RIGHT TO TRIAL BY JURY. BUYER, SELLER OR ANY GUARANTOR MAY BRING CLAIMS AGAINST ANY OTHER PARTY ONLY IN THEIR INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING.  FURTHER, BUYER, SELLER AND ANY GUARANTOR AGREE THAT THE ARBITRATOR MAY NOT CONSOLIDATE PROCEEDINGS FOR MORE THAN ONE PERSON’S CLAIMS, AND MAY NOT OTHERWISE PRESIDE OVER ANY FORM OF A REPRESENTATIVE OR CLASS PROCEEDING, AND THAT IF THIS SPECIFIC PROVISION IS FOUND UNENFORCEABLE, THEN THE ENTIRETY OF THIS ARBITRATION CLAUSE SHALL BE NULL AND VOID.
                    <br><br><strong>31. RIGHT TO OPT OUT OF ARBITRATION.  SELLER AND GUARANTOR(S) MAY OPT OUT OF THIS CLAUSE. TO OPT OUT OF THIS ARBITRATION CLAUSE, SELLER AND EACH GUARANTOR MUST SEND BUYER A NOTICE THAT THE SELLER AND EACH GUARANTOR DOES NOT WANT THIS CLAUSE TO APPLY TO THIS AGREEMENT. FOR ANY OPT OUT TO BE EFFECTIVE, SELLER AND EACH GUARANTOR MUST SEND AN OPT OUT NOTICE TO THE FOLLOWING ADDRESS BY REGISTERED MAIL, WITHIN 14 DAYS AFTER THE DATE OF THIS AGREEMENT: BUYER – ARBITRATION OPT OUT, SAMARITUS CAPITAL INC. 4250 VETERANS MEMORIAL HIGHWAY SUITE 303 EAST TOWER, HOLBROOK, NY 11741.</strong>
                <br><br>
                    <div class="form-row">
                    <h3 class="text-center">Appendix A – List of Fees and Charges</h3>
                    The Agreement provides that Seller shall be liable for the following amounts, in addition to the Purchased Amount of Future Receipts:
                    <br>1. Origination Fee as set forth on page one.
                        <br>2. All costs Buyer incurs because Seller fails to notify Buyer in a timely manner that the Daily Amount is not available in the Account.
                        <br>3. ACH Program Fee  $299
                        <br>4. Rejected ACH Fee $35
                        <br>5. Bank Change Fee $75 when Seller requires a change of bank account to be debited requiring Buyer to change its system.
                        <br>6. Default Fee $2,500
                        <br>7. All costs incurred by Buyer associated with the filing, amendment or termination of any UCC filings.
                        <br>8. All costs of collections, including attorney fees and all costs related to the enforcement of any other remedies available to Buyer if the Seller defaults.

                </div><br><br><div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        Authorized Company Owners on Exhibit A Sign Below
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        <label class="form-inline">
                            Seller :
                            <input type="text" class="form-control seller3" name="seller1">
                            (COMPANY)
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        ________________________________(SIGNATURE)
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        <label class="form-inline">
                            <input type="text" class="form-control owner3" name="printed1">
                            ,(Printed Name)
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        <label class="form-inline">
                            its
                            <input type="text" class="form-control ttl3" name="title1">
                            ,(Title)
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        Individual Guarantors on Exhibit A Sign Below:
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">________________________________(SIGNATURE)</div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">________________________________(SIGNATURE)</div>
                </div>
                <br>
                <br>
                <h4 class="text-center">Exhibit A</h4>
                <h4 class="text-center">PERSONAL GUARANTY OF PERFORMANCE</h4>
                <div class="form-row">
                    <label class="form-inline">
                        This Personal Guaranty of Performance (this “Guaranty”) is executed as of
                        <input type="text" class="form-control" name="as_of1">
                        2019

                        ,
                        by <input type="text" class="form-control gtr11" name="by1"> and
                        <input type="text" class="form-control gtr21" name="and1">(collectively
                        the “Guarantor”), for the benefit of
                        Samaritus Capital Inc., 4250 Veterans Memorial Highway Suite 303 East Tower, Holbrook, New York 11741
                        (“Buyer”).
                        Capitalized terms used herein, but not defined, shall have the meanings assigned to them in the
                        Purchase Agreement (as hereinafter
                        defined).
                    </label>
                </div>
                <br>
                <br>
                <h4 class="text-center">RECITALS</h4>
                <div class="form-row">
                    A.

                    Pursuant to that Agreement for the Purchase and Sale of Future Receipts (the “Purchase Agreement”), dated of even date herewith, between Buyer and
                    <input type="text" class="form-control seller4" name="and3">
                    (“Seller”),
                    Buyer
                    has purchased
                    Future Receipts of Seller.<br>
                    B.

                    Buyer

                    is

                    not

                    willing

                    to

                    enter

                    into

                    the

                    Purchase

                    Agreement

                    unless

                    Guarantor

                    irrevocably,

                    absolutely

                    and

                    unconditionally

                    guarantees prompt and complete performance to Buyer of all of the obligations of Seller; and
                    <br>C.
                    Guarantor will directly benefit from Buyer and Seller entering into the Purchase Agreement.
                </div>
                <br>
                <br>
                <h4 class="text-center">AGREEMENT</h4>
                <div class="form-row">

                    As an inducement to Buyer to purchase the Future Receipts identified in the Purchase Agreement, and for other good and valuable
                    consideration, the receipt and legal sufficiency of which are hereby acknowledged, Guarantor does hereby agree as follows:
                    <br><br>1.

                    Defined Terms:

                    All capitalized terms used and not otherwise defined herein shall have the meanings assigned to such terms in the
                    Purchase Agreement.
                    <br><br>2.

                    Guaranty of Obligations:

                    Guarantor hereby irrevocably, absolutely and unconditionally guarantees to Buyer prompt and complete performance of all of Seller’s obligations under the Purchase Agreement.
                    <br><br>3.

                    Guarantor’s Other

                    Agreements:

                    Guarantor will not dispose, convey, sell or otherwise transfer, or cause Seller to dispose, convey,
                    sell or otherwise transfer, any material business assets of Seller without the prior written consent of Buyer, which may be withheld
                    for
                    any
                    reason.
                    Guarantor
                    hereby
                    agrees
                    to
                    pay
                    all
                    costs
                    and
                    attorney’s
                    fees
                    incurred
                    by
                    Buyer
                    in
                    connection
                    with
                    any
                    actions commenced by Buyer to enforce its rights or incurred in any action to defend its performance under the Purchase Agreement and
                    this
                    Guaranty.  This Guaranty is binding upon Guarantor, and Guarantor’s heirs, legal representatives, successors and assigns. If there is more than one Guarantor, the obligations of the Guarantors hereunder shall be joint and several.  The obligation of Guarantor
                    shall
                    be unconditional and absolute, regardless of the unenforceability of any provision of any agreement between Seller and Buyer,
                    or the
                    existence of any defense, setoff or counterclaim which Seller may assert. Buyer is hereby authorized, without notice or demand and without
                    affecting
                    the
                    liability
                    of
                    Guarantor
                    hereunder,
                    to
                    at
                    any
                    time
                    renew
                    or
                    extend
                    Seller’s
                    obligations
                    under
                    the
                    Purchase
                    Agreement or otherwise modify, amend or change the terms of the Purchase Agreement.  Guarantor is hereby notified that
                    a negative
                    credit report reflecting on his/her credit record may be submitted to a credit reporting agency if the terms of this Guaranty
                    are not
                    honored by the Guarantor.
                    Guarantor
                    expressly consents to conduct business by electronic means.
                    <br><br>4.

                    Waiver; Remedies:

                    No failure on the part of Buyer to exercise, and no delay in exercising, any right under this Guaranty shall
                    operate as a waiver, nor shall any single or partial exercise of any right under this Guaranty preclude any other or further
                    exercise of
                    any other right.  The remedies provided in this Guaranty are cumulative and not exclusive of any remedies provided by law or equity.
                    In the event that
                    Seller fails to perform any obligation under the Purchase Agreement, Buyer may enforce its rights under this Guaranty
                    without first seeking to obtain either performance or payment for such default from Seller or any other guarantor.
                    <br><br>5.

                    Acknowledgment of Purchase:

                    Guarantor acknowledges and agrees that the Purchase Price paid by Buyer to Seller in exchange

                    for

                    the

                    Purchased

                    Amount

                    is

                    a

                    purchase

                    of

                    the

                    Purchased

                    Amount

                    and

                    is

                    not

                    intended

                    to

                    be

                    treated

                    as

                    a

                    loan

                    or

                    financial

                    accommodation from Buyer to Seller.  Guarantor specifically acknowledges Buyer is not a lender, bank or credit card processor, and that Buyer has not offered any loans to Seller, and Guarantor waives any claims or defenses of usury in any action arising out of this Guaranty. Guarantor acknowledges the Purchase Price paid to Seller is good and valuable consideration for the sale of the Purchased Amount of Future Receipts.
                    <br><br>6. Governing Law and Jurisdiction:  This Guaranty shall be binding upon and inure to the benefit of Buyer its respective successors and assigns. This Guaranty shall be governed by and construed in accordance with the laws of the state of New York, without regards to any applicable principals of conflicts of law. Guarantor understands and agrees that (i) Buyer is located in New York, (ii) Buyer makes all decisions from Buyer’s office in New York, and (iii) the Guaranty is made in New York (that is, no binding contract will be formed until Buyer receives and accepts Guarantor’s signed Agreement in New York). Except as provided in Section 9 of this Guaranty, Guarantor submits to the exclusive jurisdiction and venue of the state or federal courts having jurisdiction over any court sitting in New York of any claims or actions arising, directly or indirectly, out of or related to this Guaranty.  The parties stipulate that the venue referenced in this Agreement are convenient and further hereby waive any claim against or objection to the jurisdiction for such venue. The parties further agree that the mailing by certified or registered mail, return receipt requested, of any process required by any such court will constitute valid and lawful service of process against them, without the necessity for service by any other means provided by statute or rule of court, but without invalidating service performed in accordance with such other provisions.
                    <br><br>7. JURY WAIVER:  THE PARTIES WAIVE THE RIGHT TO A TRIAL BY JURY IN ANY COURT IN ANY SUIT, ACTION OR PROCEEDING ON ANY MATTER ARISING IN CONNECTION WITH OR IN ANY WAY RELATED TO THE TRANSACTIONS OF WHICH THIS AGREEMENT IS A PART OR ITS ENFORCEMENT, EXCEPT WHERE SUCH WAIVER IS PROHIBITED BY LAW OR DEEMED BY A COURT OF LAW TO BE AGAINST PUBLIC POLICY.  THE PARTIES ACKNOWLEDGE THAT EACH MAKES THIS WAIVER KNOWINGLY, WILLINGLY AND VOLUNTARILY AND WITHOUT DURESS, AND ONLY AFTER EXTENSIVE CONSIDERATION OF THE RAMIFICATIONS OF THIS WAIVER WITH THEIR ATTORNEYS.
                    <br><br>8. CLASS ACTION WAIVER:  BUYER, SELLER, AND EACH GUARANTOR ACKNOWLEDGE AND AGREE THAT THE AMOUNT AT ISSUE IN THIS TRANSACTION AND ANY DISPUTES THAT ARISE BETWEEN THEM ARE LARGE ENOUGH TO JUSTIFY DISPUTE RESOLUTION ON AN INDIVIDUAL BASIS.  EACH PARTY HERETO WAIVES ANY RIGHT TO ASSERT ANY CLAIMS AGAINST THE OTHER PARTY AS A REPRESENTATIVE OR MEMBER IN ANY CLASS OR REPRESENTATIVE ACTION, EXCEPT WHERE SUCH WAIVER IS PROHIBITED BY LAW OR DEEMED BY A COURT OF LAW TO BE AGAINST PUBLIC POLICY.  TO THE EXTENT EITHER PARTY IS PERMITTED BY LAW OR COURT OF LAW TO PROCEED WITH A CLASS OR REPRESENTATIVE ACTION AGAINST THE OTHER, THE PARTIES AGREE THAT:  (I) THE PREVAILING PARTY SHALL NOT BE ENTITLED TO RECOVER ATTORNEYS’ FEES OR COSTS ASSOCIATED WITH PURSUING THE CLASS OR REPRESENTATIVE ACTION (NOT WITHSTANDING ANY OTHER PROVISION IN THIS AGREEMENT); AND (II) THE PARTY WHO INITIATES OR PARTICIPATES AS A MEMBER OF THE CLASS WILL NOT SUBMIT A CLAIM OR OTHERWISE PARTICIPATE IN ANY RECOVERY SECURED THROUGH THE CLASS OR REPRESENTATIVE ACTION.
                    <br><br>9. ARBITRATION:  IF BUYER, SELLER OR ANY GUARANTOR REQUESTS, THE OTHER PARTIES AGREE TO ARBITRATE ALL DISPUTES AND CLAIMS ARISING OUT OF OR RELATING TO THIS AGREEMENT. IF BUYER, SELLER OR ANY GUARANTOR SEEKS TO HAVE A DISPUTE SETTLED BY ARBITRATION, THAT PARTY MUST FIRST SEND TO THE OTHER PARTY, BY CERTIFIED MAIL, A WRITTEN NOTICE OF INTENT TO ARBITRATE. IF BUYER, SELLER OR ANY GUARANTOR DO NOT REACH AN AGREEMENT TO RESOLVE THE CLAIM WITHIN 30 DAYS AFTER THE NOTICE IS RECEIVED, BUYER, SELLER OR ANY GUARANTOR MAY COMMENCE AN ARBITRATION PROCEEDING WITH THE AMERICAN ARBITRATION ASSOCIATION (“AAA”) OR NATIONAL ARBITRATION FORUM (“NAF”). BUYER WILL PROMPTLY REIMBURSE SELLER OR THE GUARANTOR ANY ARBITRATION FILING FEE, HOWEVER, IN THE EVENT THAT BOTH SELLER AND THE GUARANTOR MUST PAY FILING FEES, BUYER WILL ONLY REIMBURSE SELLER’S ARBITRATION FILING FEE AND, EXCEPT AS PROVIDED IN THE NEXT SENTENCE, BUYER WILL PAY ALL ADMINISTRATION AND ARBITRATOR FEES. IF THE ARBITRATOR FINDS THAT EITHER THE SUBSTANCE OF THE CLAIM RAISED BY SELLER OR THE GUARANTOR OR THE RELIEF SOUGHT BY SELLER OR THE GUARANTOR IS IMPROPER OR NOT WARRANTED, AS MEASURED BY THE STANDARDS SET FORTH IN FEDERAL RULE OF PROCEDURE 11(B), THEN BUYER WILL PAY THESE FEES ONLY IF REQUIRED BY THE AAA OR NAF RULES. SELLER AND THE GUARANTOR AGREE THAT, BY ENTERING INTO THIS AGREEMENT, THEY ARE WAIVING THE RIGHT TO TRIAL BY JURY. BUYER, SELLER OR ANY GUARANTOR MAY BRING CLAIMS AGAINST ANY OTHER PARTY ONLY IN THEIR INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING. FURTHER, BUYER, SELLER AND ANY GUARANTOR AGREE THAT THE ARBITRATOR MAY NOT CONSOLIDATE PROCEEDINGS FOR MORE THAN ONE PERSON’S CLAIMS, AND MAY NOT OTHERWISE PRESIDE OVER ANY FORM OF A REPRESENTATIVE OR CLASS PROCEEDING, AND THAT IF THIS SPECIFIC PROVISION IS FOUND UNENFORCEABLE, THEN THE ENTIRETY OF THIS ARBITRATION CLAUSE SHALL BE NULL AND VOID.
                    <br><br>10. RIGHT TO OPT OUT OF ARBITRATION:  SELLER AND GUARANTOR(S) MAY OPT OUT OF THIS CLAUSE. TO OPT OUT OF THIS ARBITRATION CLAUSE, SELLER AND EACH GUARANTOR MUST SEND BUYER A NOTICE THAT THE SELLER AND EACH GUARANTOR DOES NOT WANT THIS CLAUSE TO APPLY TO THIS AGREEMENT. FOR ANY OPT OUT TO BE EFFECTIVE, SELLER AND EACH GUARANTOR MUST SEND AN OPT OUT NOTICE TO THE FOLLOWING ADDRESS BY REGISTERED MAIL, WITHIN 14 DAYS AFTER THE DATE OF THIS AGREEMENT: BUYER – ARBITRATION OPT OUT, SAMARITUS CAPITAL INC., 4250 VETERANS MEMORIAL HIGHWAY SUITE 303 EAST TOWER HOLBROOK, NY 11741.
                    <br><br>11. CONFESSION OF JUDGMENT: IMPORTANT NOTICE – THIS INSTRUMENT CONTAINS A CONFESSION OF JUDGMENT PROVISION WHICH CONSTITUTES A WAIVER OF IMPORTANT RIGHTS YOU MAY HAVE AS THE SELLER AND GUARANTOR(S) AND ALLOWS THE BUYER TO OBTAIN A JUDGMENT AGAINST YOU WITHOUT ANY FURTHER NOTICE. To secure the obligations of Seller covered under Section 13, Representations, Warranties and Covenants of Seller under the Purchase Agreement and the guarantee of Guarantor(s) under this Guarantee of the prompt and complete performance to Buyer of all the obligations of Seller, Seller and Guarantor(s) hereby execute a Confession of Judgment, attached as Exhibit B to the Purchase Agreement. In case any “Event of Default” shall occur, as defined in section 15 of the Purchase Agreement, or Seller breaches any provision of the Purchase Agreement, with includes without limitation, Seller not entering into any merchant cash advance or any agreement that relates to or involves its Future Receipts with any party other than Buyer for the duration of this Agreement without the expressed written consent of Buyer, Seller and Guarantor(s) jointly and severally irrevocably authorize any attorney of any court of record to appear for any one or more of them in such court and enter the Confession of Judgment without process or notice in favor of Buyer for such amount of the Purchased Amount as may then appear unpaid and other applicable fees and attorneys\' fees, to release all errors which may intervene in any such proceedings, and to consent to immediate execution upon such judgment, hereby ratifying every act of such attorney hereunder.
                    <br><br>12. Severability:  If for any reason any court of competent jurisdiction finds any provisions of this Guaranty to be void or voidable, the parties agree that the court may reform such provision(s) to render the provision(s) enforceable ensuring that the restrictions and prohibitions contained in this Guaranty shall be effective to the fullest extent allowed under applicable law.
                    <br><br>13. Opportunity for Attorney Review: The Guarantor represents that it has carefully read this Guaranty and has, or had a reasonable opportunity to, consult with its attorney.  Guarantor understands the contents of this Guaranty and signs this Guaranty as its free act and deed.
                    <br><br>14. Counterparts and Facsimile Signatures:  This Guaranty may be signed in one or more counterparts, each of which shall constitute an original and all of which when taken together shall constitute one and the same agreement.  Facsimile or scanned documents shall have the same legal force and effect as an original and shall be treated as an original document for evidentiary purposes.
                </div>
                <br>
                <br>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        For Individual Guarantors --
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <label class="form-inline">
            Guarantor
                            <input type="text" class="form-control gtr12" name="guarantor1">
                (Print Name)
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
            SIGNATURE :_________________________________________
            </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        For Individual Guarantors --
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        <label class="form-inline">
            Guarantor
                            <input type="text" class="form-control gtr22" name="guarantor2">
                (Print Name)
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
            SIGNATURE :_________________________________________
            </div>
                </div>
                <br>
                <br>
                <h4 class="text-center">AUTHORIZATION AGREEMENT</h4>
                <h4 class="text-center">FOR AUTOMATED CLEARING HOUSE TRANSACTIONS</h4>
                <br>
                <div class="form-row">
                    <input type="text" class="form-control seller5" name="seller4">
                (“Seller”) hereby authorizes Samaritus Capital Inc. (“Buyer”) to present automated clearing house (ACH) debits to the following checking account in the amount of fees and other payments due to Buyer from Seller under the terms of that Agreement for the Purchase and Sale of Future Receipts (the “Agreement”) entered into between Seller and Buyer, as it may be amended, supplemented or replaced from time to time.  Seller also authorizes Buyer to initiate additional entries (debits and credits) to correct any erroneous transfers.  In addition, if an Event of Default (as defined in the Agreement) occurs, Seller authorizes Buyer to debit any and all accounts controlled by Seller or controlled by any entity with the same Federal Tax Identification Number as Seller up to the total amount, including but not limited to, all fees and charges, due to Buyer from Seller under the terms of the Agreement.
                    <br><br>Seller agrees to be bound by the Rules and Operating Guidelines of NACHA and represents and warrants that the designated account is established and used primarily for commercial/business purposes, and not for consumer, family or household purposes.  Seller authorizes Buyer to contact Seller’s financial institution to obtain available funds information and/or to verify any information Seller has provided about the designated checking account and to correct any missing, erroneous or out-of-date information.  Seller understands and agrees that any revocation or attempted revocation of this Authorization will constitute an event of default under the Agreement for the Purchase and Sale of Future Receipts.  In the event that Seller closes the designated checking account, or the designated checking account has insufficient funds for any ACH transaction under this Authorization, Seller authorizes Buyer to contact Seller’s financial institution and obtain information (including account number, routing number and available balance) concerning any other deposit account(s) maintained by Seller with Seller’s financial institution, and to initiate ACH transactions under this Authorization to such additional account(s).  To the extent necessary, Seller grants Buyer a limited Power of Attorney to take action in Seller’s name to facilitate this authorization.
                </div>
                <br>
                <br>
                <div class="form-row">
                    <div class="col-sm-4">Transfer Funds To/From: </div>
                    <div class="col">
                        <div class="form-row">
                            <label class="form-inline">
            Exact Name of Checking Account
            <input type="text" class="form-control" name="check_account">
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
            Name of Bank
            <input type="text" class="form-control" name="nob">
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
            ABA Transit/Routing #
            <input type="text" class="form-control" name="transit1">
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
            Checking Account #
            <input type="text" class="form-control" name="check_account_2">
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-row">
                    <div class="col-sm-4">Seller Information: </div>
                    <div class="col">
                        <div class="form-row">
                            <label class="form-inline">
            Seller\'s Name (Company)
                                <input type="text" class="form-control seller6" name="seller5">
                            </label>
                        </div>
                        <div class="form-row">
                            Signature : _____________________________
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
                                Print Name
                                <input type="text" class="form-control owner4" name="print_name1">
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
                                Title
                                <input type="text" class="form-control ttl4" name="title_2">
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
                                Seller\'s Tax ID
            <input type="text" class="form-control tax2" name="taxId3">
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-inline">
            Date
                                <input type="text" class="form-control" name="date_2">
                            </label>
                        </div>
                    </div>
                </div>
                <br><br>
                <h4 class="text-center">[Attached Voided Check Here Or Email a Copy]</h4>';
        $bcaa = '<h1 class="mt-2 text-center">BUSINESS CASH ADVANCE APPLICATION</h1>
                <p><strong>Welcome to Samaritus Capital!</strong><br><br>
                    Thank you for taking the first step towards securing the loan you need to enrich and enhance your business!  We promise to make your experience quicker and easier than you could possibly imagine.
                    <br><br><strong>Here\'s what we\'ll need for APPROVAL:</strong>&nbsp;&nbsp;&nbsp;&nbsp;(step one, start immediately)</p>
                <div class="form-group">
                    <input class="form-check-input" name="opt" type="radio" id="opt1" value="opt1">
                    <label class="form-check-label" for="opt1">Completed and signed 1-page application</label>
                </div>
                <div class="form-group">
                    <input class="form-check-input" name="opt" type="radio" id="opt2" value="opt2">
                    <label class="form-check-label" for="opt2">Last 3-months business bank statements (all pages) </label>
                </div>
                <br><br>
                <p>We look forward to helping you realize your goals in just a few short days!<br><br>
                    If you have any questions, please contact me for assistance.<br><br>

                    Sincerely,<br><br>


                    <address>David Kornfeld<br>
                    davidk@SamaritusCapital.com<br>
                    Cell:  516-568-2278<br>
                    Text Anytime:   516-568-2278</address></p><br><br>
                    <div class="jumbotron">
                    <h2 class="mt-2 text-center">Business Cash Advance Application</h2>
                    <div class="form-row">
                        <div class="col">
                            <label for="name" class="font-weight-bold">Business Legal Name :</label>
                            <input class="form-control" id="name" name="blname">
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
                            <input class="form-control" id="in-type" name="in_type">
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
                        <input type="text" class="form-control col-sm-4" name="print_name" id="print-name">
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
            'scaa' => $scaa,
            'agree' => $agree,
            'coj' => $coj,
            'rpa' => $rpa
        ]);
    }

    public function previewPdf(Request $request){
        ini_set('memory_limit', '256M');
        if($request->isMethod('post')){
            $filename = 'bl.pdf';
            $data = array();
            if($request->sample == 1){
                $filename = 'bcaa.pdf';
                $data = [
                    'opt' => $request->opt,
                    'corp' => $request->corp,
                    'home' => $request->home,
                    'blname' => $request->blname,
                    'dba' => $request->dba,
                    'fti' => $request->fti,
                    'bsd' => $request->bsd,
                    'phone' => $request->phone,
                    'fax' => $request->fax,
                    'site' => $request->site,
                    'paddress' => $request->paddress,
                    'pcity' => $request->pcity,
                    'pstate' => $request->pstate,
                    'pzip' => $request->pzip,
                    'maddress' => $request->maddress,
                    'mcity' => $request->mcity,
                    'mstate' => $request->mstate,
                    'mzip' => $request->mzip,
                    'name' => $request->name,
                    'haddress' => $request->haddress,
                    'hcity' => $request->hcity,
                    'hstate' => $request->hstate,
                    'hzip' => $request->hzip,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'dob' => $request->dob,
                    'ss' => $request->ss,
                    'in_type' => $request->in_type,
                    'sfo' => $request->sfo,
                    'roo' => $request->roo,
                    'amount' => $request->amount,
                    'lmcci' => $request->lmcci,
                    'gas' => $request->gas,
                    'capital' => $request->capital,
                    'mccsv' => $request->mccsv,
                    'purpose' => $request->purpose,
                    'due' => $request->due,
                    'print_name' => $request->print_name,
                    'date' => $request->date,
                ];
                $pdf = PDF::loadView('pdf.bcaapplicationdk', $data);
            }elseif($request->sample == 2){
                $filename = 'scaa.pdf';
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
            }elseif($request->sample == 3){
                $filename = 'coj.pdf';
                $data = [
                    'county' => $request->county,
                    'in_x' => $request->in_x,
                    'index_no' => $request->index_no,
                    'against1' => $request->against1,
                    'against2' => $request->against2,
                    'state' => $request->state,
                    'county_of' => $request->county_of,
                    'sworn' => $request->sworn,
                    'officer' => $request->officer,
                    'location' => $request->location,
                    'county_of_2' => $request->county_of_2,
                    'reside' => $request->reside,
                    'county_of_3' => $request->county_of_3,
                    'sum' => $request->sum,
                    'dated' => $request->dated,
                    'from' => $request->from,
                    'sum2' => $request->sum2,
                    'from2' => $request->from2,
                    'date2' => $request->date2,
                    'date3' => $request->date3,
                    'by' => $request->by,
                    'appeared' => $request->appeared,
                    'by3' => $request->by3,
                    'appeared2' => $request->appeared2,
                    'left1' => $request->left1,
                ];
                $pdf = PDF::loadView('pdf.coj', $data);
            }elseif($request->sample == 4){
                $filename = 'rpa.pdf';
                $data = [
                    'and1' => $request->and1,
                    'partner1' => $request->partner1,
                    'partner2' => $request->partner2,
                    'partner3' => $request->partner3,
                    'ref_partner' => $request->ref_partner,
                    'print_name1' => $request->print_name1,
                    'print_name2' => $request->print_name2,
                    'title1' => $request->title1,
                    'title2' => $request->title2,
                    'date1' => $request->date1,
                    'date2' => $request->date2,
                    'ref_partner2' => $request->ref_partner2,
                    'bank_name' => $request->bank_name,
                    'bank_address' => $request->bank_address,
                    'bank_phone' => $request->bank_phone,
                    'ac_type' => $request->ac_type,
                    'ac' => $request->ac,
                    'aba' => $request->aba,
                    'bank_date' => $request->bank_date,
                    'clname' => $request->clname,
                    'dba_name' => $request->dba_name,
                    'contact' => $request->contact,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'cAddress' => $request->cAddress,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'taxId' => $request->taxId,
                    'years' => $request->years,
                    'entity' => $request->entity,
                    'stateIn' => $request->stateIn,
                    'volume' => $request->volume,
                    'dollars' => $request->dollars,
                    'totalFund' => $request->totalFund,
                    'website' => $request->website,
                    'name' => $request->name,
                    'dob' => $request->dob,
                    'cell' => $request->cell,
                    'ssn' => $request->ssn,
                    'haddress' => $request->haddress,
                    'hcity' => $request->hcity,
                    'hstate' => $request->hstate,
                    'hzip' => $request->hzip,
                    'email2' => $request->email2,
                    'yie' => $request->yie,
                    'title3' => $request->title3,
                    'company_name3' => $request->company_name3,
                    'contact4' => $request->contact4,
                    'phone4' => $request->phone4,
                    'email4' => $request->email4,
                    'company_name4' => $request->company_name4,
                    'contact5' => $request->contact5,
                    'phone5' => $request->phone5,
                    'email5' => $request->email5,
                    'past' => $request->past,
                    'why' => $request->why,
                    'hear' => $request->hear,
                    'date6' => $request->date6,
                    'types' => $request->types,
                ];
                $pdf = PDF::loadView('pdf.rpa', $data);
            }elseif($request->sample == 5){
                $filename = 'agree.pdf';
                $data = [
                    'legalName' => $request->legalName,
                    'dba' => $request->dba,
                    'fbe' => $request->fbe,
                    'other' => $request->other,
                    'op11' => $request->op11,
                    'sAddress' => $request->sAddress,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'mAddress' => $request->mAddress,
                    'mcity' => $request->mcity,
                    'mstate' => $request->mstate,
                    'mzip' => $request->mzip,
                    'title' => $request->title,
                    'fti' => $request->fti,
                    'price' => $request->price,
                    'amount' => $request->amount,
                    'ams' => $request->ams,
                    'sp' => $request->sp,
                    'ofee' => $request->ofee,
                    'ida' => $request->ida,
                    'effective' => $request->effective,
                    'seller' => $request->seller,
                    'atb' => $request->atb,
                    'printName' => $request->printName,
                    'lTitle' => $request->lTitle,
                    'seller1' => $request->seller1,
                    'printed1' => $request->printed1,
                    'title1' => $request->title1,
                    'as_of1' => $request->as_of1,
                    'by1' => $request->by1,
                    'and1' => $request->and1,
                    'and3' => $request->and3,
                    'guarantor1' => $request->guarantor1,
                    'guarantor2' => $request->guarantor2,
                    'seller4' => $request->seller4,
                    'check_account' => $request->check_account,
                    'nob' => $request->nob,
                    'transit1' => $request->transit1,
                    'check_account_2' => $request->check_account_2,
                    'seller5' => $request->seller5,
                    'print_name1' => $request->print_name1,
                    'title_2' => $request->title_2,
                    'taxId3' => $request->taxId3,
                    'date_2' => $request->date_2,
                    'pcn' => $request->pcn,
                ];
                $pdf = PDF::loadView('pdf.agree', $data);
            }else{
                abort(404);
            }
            return $pdf->setPaper('letter', 'portrait')
                ->stream($filename);
        }
    }

    public function downloadPdf(Request $request){
        ini_set('memory_limit', '256M');
        if($request->isMethod('post')){
            $filename = 'bl.pdf';
            $data = array();
            if($request->sample == 1){
                $filename = 'bcaa.pdf';
                $data = [
                    'opt' => $request->opt,
                    'corp' => $request->corp,
                    'home' => $request->home,
                    'blname' => $request->blname,
                    'dba' => $request->dba,
                    'fti' => $request->fti,
                    'bsd' => $request->bsd,
                    'phone' => $request->phone,
                    'fax' => $request->fax,
                    'site' => $request->site,
                    'paddress' => $request->paddress,
                    'pcity' => $request->pcity,
                    'pstate' => $request->pstate,
                    'pzip' => $request->pzip,
                    'maddress' => $request->maddress,
                    'mcity' => $request->mcity,
                    'mstate' => $request->mstate,
                    'mzip' => $request->mzip,
                    'name' => $request->name,
                    'haddress' => $request->haddress,
                    'hcity' => $request->hcity,
                    'hstate' => $request->hstate,
                    'hzip' => $request->hzip,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'dob' => $request->dob,
                    'ss' => $request->ss,
                    'in_type' => $request->in_type,
                    'sfo' => $request->sfo,
                    'roo' => $request->roo,
                    'amount' => $request->amount,
                    'lmcci' => $request->lmcci,
                    'gas' => $request->gas,
                    'capital' => $request->capital,
                    'mccsv' => $request->mccsv,
                    'purpose' => $request->purpose,
                    'due' => $request->due,
                    'print_name' => $request->print_name,
                    'date' => $request->date,
                ];
                $pdf = PDF::loadView('pdf.bcaapplicationdk', $data);
            }elseif($request->sample == 2){
                $filename = 'scaa.pdf';
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
            }elseif($request->sample == 3){
                $filename = 'coj.pdf';
                $data = [
                    'county' => $request->county,
                    'in_x' => $request->in_x,
                    'index_no' => $request->index_no,
                    'against1' => $request->against1,
                    'against2' => $request->against2,
                    'state' => $request->state,
                    'county_of' => $request->county_of,
                    'sworn' => $request->sworn,
                    'officer' => $request->officer,
                    'location' => $request->location,
                    'county_of_2' => $request->county_of_2,
                    'reside' => $request->reside,
                    'county_of_3' => $request->county_of_3,
                    'sum' => $request->sum,
                    'dated' => $request->dated,
                    'from' => $request->from,
                    'sum2' => $request->sum2,
                    'from2' => $request->from2,
                    'date2' => $request->date2,
                    'date3' => $request->date3,
                    'by' => $request->by,
                    'appeared' => $request->appeared,
                    'by3' => $request->by3,
                    'appeared2' => $request->appeared2,
                    'left1' => $request->left1,
                ];
                $pdf = PDF::loadView('pdf.coj', $data);
            }elseif($request->sample == 4){
                $filename = 'rpa.pdf';
                $data = [
                    'and1' => $request->and1,
                    'partner1' => $request->partner1,
                    'partner2' => $request->partner2,
                    'partner3' => $request->partner3,
                    'ref_partner' => $request->ref_partner,
                    'print_name1' => $request->print_name1,
                    'print_name2' => $request->print_name2,
                    'title1' => $request->title1,
                    'title2' => $request->title2,
                    'date1' => $request->date1,
                    'date2' => $request->date2,
                    'ref_partner2' => $request->ref_partner2,
                    'bank_name' => $request->bank_name,
                    'bank_address' => $request->bank_address,
                    'bank_phone' => $request->bank_phone,
                    'ac_type' => $request->ac_type,
                    'ac' => $request->ac,
                    'aba' => $request->aba,
                    'bank_date' => $request->bank_date,
                    'clname' => $request->clname,
                    'dba_name' => $request->dba_name,
                    'contact' => $request->contact,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'cAddress' => $request->cAddress,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'taxId' => $request->taxId,
                    'years' => $request->years,
                    'entity' => $request->entity,
                    'stateIn' => $request->stateIn,
                    'volume' => $request->volume,
                    'dollars' => $request->dollars,
                    'totalFund' => $request->totalFund,
                    'website' => $request->website,
                    'name' => $request->name,
                    'dob' => $request->dob,
                    'cell' => $request->cell,
                    'ssn' => $request->ssn,
                    'haddress' => $request->haddress,
                    'hcity' => $request->hcity,
                    'hstate' => $request->hstate,
                    'hzip' => $request->hzip,
                    'email2' => $request->email2,
                    'yie' => $request->yie,
                    'title3' => $request->title3,
                    'company_name3' => $request->company_name3,
                    'contact4' => $request->contact4,
                    'phone4' => $request->phone4,
                    'email4' => $request->email4,
                    'company_name4' => $request->company_name4,
                    'contact5' => $request->contact5,
                    'phone5' => $request->phone5,
                    'email5' => $request->email5,
                    'past' => $request->past,
                    'why' => $request->why,
                    'hear' => $request->hear,
                    'date6' => $request->date6,
                    'types' => $request->types,
                ];
                $pdf = PDF::loadView('pdf.rpa', $data);
            }elseif($request->sample == 5){
                $filename = 'agree.pdf';
                $data = [
                    'legalName' => $request->legalName,
                    'dba' => $request->dba,
                    'fbe' => $request->fbe,
                    'other' => $request->other,
                    'op11' => $request->op11,
                    'sAddress' => $request->sAddress,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'mAddress' => $request->mAddress,
                    'mcity' => $request->mcity,
                    'mstate' => $request->mstate,
                    'mzip' => $request->mzip,
                    'title' => $request->title,
                    'fti' => $request->fti,
                    'price' => $request->price,
                    'amount' => $request->amount,
                    'ams' => $request->ams,
                    'sp' => $request->sp,
                    'ofee' => $request->ofee,
                    'ida' => $request->ida,
                    'effective' => $request->effective,
                    'seller' => $request->seller,
                    'atb' => $request->atb,
                    'printName' => $request->printName,
                    'lTitle' => $request->lTitle,
                    'seller1' => $request->seller1,
                    'printed1' => $request->printed1,
                    'title1' => $request->title1,
                    'as_of1' => $request->as_of1,
                    'by1' => $request->by1,
                    'and1' => $request->and1,
                    'and3' => $request->and3,
                    'guarantor1' => $request->guarantor1,
                    'guarantor2' => $request->guarantor2,
                    'seller4' => $request->seller4,
                    'check_account' => $request->check_account,
                    'nob' => $request->nob,
                    'transit1' => $request->transit1,
                    'check_account_2' => $request->check_account_2,
                    'seller5' => $request->seller5,
                    'print_name1' => $request->print_name1,
                    'title_2' => $request->title_2,
                    'taxId3' => $request->taxId3,
                    'date_2' => $request->date_2,
                    'pcn' => $request->pcn,
                ];
                $pdf = PDF::loadView('pdf.agree', $data);
            }else{
                abort(404);
            }
            return $pdf->setPaper('letter', 'portrait')
                ->download($filename);
        }
    }

    public function mcaCalculator(Request $request){
        return view('calc.mca');
    }

    public function banks(Request $request){
        $all_banks = new Collection();
        $reader = Excel::load('public/banks.xlsx')->skip(1)->ignoreEmpty()->get();
        foreach ($reader->toArray() as $row) {
            $all_banks->push($row);
        }
//        foreach($all_banks as $ab){
//            dd($ab);
//        }
//        dd($all_banks);
        //$countries = Countries::all();
        //$banks = Banks::paginate(100);
        if($request->isMethod('post')){
            if($request->action == 'add'){
                $errors = array();
                $bank = new Banks();
                if(!$bank->validate($request->all())){
                    $bank_e = $bank->errors();
                    foreach ($bank_e->messages() as $k => $v){
                        foreach ($v as $e){
                            $errors[] = $e;
                        }
                    }
                }
                if(empty($errors)){
                    $bank->bank_name = $request->bank_name;
                    $bank->url = $request->url;
                    $bank->country = $request->country;
                    if($bank->save()){
                        return redirect()
                            ->to('services/banks')
                            ->with('success', 'The bank was added!');
                    }else{
                        return redirect()
                            ->to('services/banks')
                            ->with('error', 'Something went wrong! Please try again!');
                    }
                }else{
                    return redirect()
                        ->to('services/banks')
                        ->with('errors', $errors);
                }
            }
            if($request->action == 'edit'){
                $bank = Banks::find($request->bank_id);
                $bank->bank_name = $request->bank_name;
                $bank->url = $request->url;
                $bank->country = $request->country;
                if($bank->save()){
                    return redirect()
                        ->to('services/banks')
                        ->with('success', 'The bank was updated!');
                }else{
                    return redirect()
                        ->to('services/banks')
                        ->with('error', 'Something went wrong! Please try again!');
                }
            }
            if($request->action == 'delete'){
                if(Banks::destroy($request->bank_id)){
                    return redirect()
                        ->to('services/banks')
                        ->with('success', 'The bank was deleted!');
                }else{
                    return redirect()
                        ->to('services/banks')
                        ->with('error', 'Something went wrong! Please try again!');
                }
            }
        }
        return view('banks.ui', [
            'banks' => $all_banks
        ]);
    }
}
