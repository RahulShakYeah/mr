@extends('layouts.frontend')
@section('statusservice','active')
@section('content')
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text"  style="background-image: url('{{ asset('frontend/img/silder1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Services that we offer </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @if(count($service) > 0)
                            @foreach($service as $key=>$value)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <i class="{{$value->icons}} alignleft"></i>
                                        <h3>{{$value->title}}</h3>
                                        <p>{{$value->description}}</p>
                                    </div><!-- end icon-wrapper -->
                                </div><!-- end col -->
                            @endforeach
                        @endif



                    </div><!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Software Overview..!!!</h2>
                    </div>
                    <div class="section-body">
                      <ul>
                          <li>Features & Module</li>
                            <p>
                                Easily manage the money flowing in and out of your business. Manage your customers
                                and invoices, while keeping expenses in check. Record, monitor and reconcile your bank
                                accounts and transactions, and collaborate with your accountant in real-time.
                            </p>
                          <ol>
                              <li>Single Company Multiple Layers</li>
                              <li>Multi Windows System</li>
                              <li>Multi Branch System</li>
                              <li>Multi Business Unit System</li>
                              <li>Multi Fiscal Year System</li>
                              <li>Auto Branch Data Sync</li>
                              <li>Branch & Business Unit Wise Customer & Vendor Management System</li>
                              <li>Branch & Business Unit wise Business Year Management</li>
                          </ol>
                      </ul>
    <br>
                        <ul>
                            <li>General Accounts & Finances</li>
                            <p>
                                Manage your general ledger, journals, budgets and accounts receivable and payable.
                                Payment runs, real time financial numbers, drill down and full reports
                            </p>
                            <ol>
                                <li>Charts Of Accounts</li>
                                <li>Post-dated Cheque management</li>
                                <li>Provision Finance Voucher</li>
                                <li>Voucher Authorization & Approval</li>
                                <li>Journal Voucher Entry</li>
                                <li>Cash & Bank Voucher Entry</li>
                                <li>Cash Book & Bank Reconciliation</li>
                                <li>Receivable & Payables</li>
                                <li>Multiple Ledger categorization</li>
                                <li>Financial Year management</li>
                                <li>Multi-Tasking & Multi Layers for Reports View</li>
                                <li>Cheque Reconcile & Clearing Date with Reports</li>

                            </ol>
                        </ul>
<br>

                        <ul>
                            <li> Purchase & Sales Management</li>
                            <p>
                                Manage & control the entire purchase & sales process from first contact to closing the sale
                                from customer & vendor data management to after-sales support.
                            </p>
                            <ol>
                                <li> Purchase Indent & Sales Quotation</li>
                                <li> Purchase & Sales order</li>
                                <li>Goods In Transit</li>
                                <li>Purchase & Sales Invoice</li>
                                <li>Inter Branch Sales & Purchase</li>
                                <li>Purchase & Sales Return</li>
                                <li>Sales & Purchase Register list</li>
                                <li>Party Receipt & Payment</li>
                                <li>Customer & Vendor Credit & Cash Management</li>
                                <li>Customer & Vendor Analysis & Ageing</li>
                                <li>Customer & Vendor Outstanding</li>
                                <li>Provision Voucher Management</li>
                                <li>Approval & Authorized System</li>
                                <li>Multi-Tasking & Multi Layers for Reports View</li>
                            </ol>
                        </ul>

<br>
                        <ul>
                            <li>HR & Payroll</li>
                            <p>
                                Manages overall recruitment process, leave & payroll calculation overall taxation over
                                the business.
                            </p>
                            <ol>
                                <li>Employee Management</li>
                                <li>Payroll Management</li>
                                <li>Leave Management</li>
                                <li>Attendance Management</li>
                                <li>Taxation</li>
                                <li>Analytical Reports</li>
                            </ol>
                        </ul>
<br>

                        <ul>
                            <li>Assets & Inventory Management</li>
                            <p>
                                Maintain inventory across multiple warehouses and locations, and track and
                                record stock movements. Moving average, FIFO and standard costing methods. IT
                                manage serial and batch items. Multiple units of measure.

                            </p>
                            <ol>
                                <li>Item Purchasing & Management</li>
                                <li>Multiple Unit & Conversation</li>
                                <li>Inventory Tracking</li>
                                <li>Transfer Management</li>
                                <li>Stock Inquiries Analytical Reports</li>
                                <li>Rack System</li>
                            </ol>
                        </ul>

<br>
                        <ul>
                            <li>Production & Manufacturing</li>
                            <p>
                                Maintain the overall production process, its distribution and planning along with
                                its entire operation management.
                            </p>
                            <ol>
                                <li>Production Management</li>
                                <li>Supply chain Management</li>
                                <li>Transportation & Logistics</li>
                                <li>Transfer Management</li>
                                <li>Stock Inquiries</li>
                                <li>Analytical Reports</li>
                            </ol>
                        </ul>
<br>

                        <ul>
                            <li>CRM & Marketing</li>
                            <p>
                                Helps you engage with leads and customers, get insights about your business, build a
                                scalable sales process, and grow your business faster.

                            </p>
                            <ol>
                                <li> Customer Management</li>
                                <li>Lead Management</li>
                                <li>Support Tracking</li>
                                <li>Mass Email</li>
                                <li>Mass SMS</li>
                                <li>Marketing Campaign</li>
                                <li>Service Follow-ups</li>
                                <li>Contact Management</li>
                            </ol>
                        </ul>

<br>
                                </div>


                </div>
            </div>
        </div>
    </div>
@endsection
