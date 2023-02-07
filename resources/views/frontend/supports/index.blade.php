@extends('layouts.frontend')
@section('title', 'Assessment')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ripon.css') }}">
   <style>
    h1, h2, h3, h4, h5, h6 {
    color: #102039;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    text-transform: capitalize;
    line-height: 1.2;
    margin-bottom: 0;
}
    .breadcrumb-section {
  padding: 100px 0;
  background-image: url("frontend/breadcrumb-bg.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .breadcrumb-section {
      padding: 80px 0; } }
  @media (max-width: 767.98px) {
    .breadcrumb-section {
      padding: 60px 0; } }
  .breadcrumb-section ul {
    margin-top: 10px; }
    .breadcrumb-section ul li {
      display: inline-block;
      text-transform: capitalize;
      font-size: 18px;
      margin: 0 2px; }
      @media (min-width: 768px) and (max-width: 991.98px) {
        .breadcrumb-section ul li {
          font-size: 16px; } }
      @media (max-width: 767.98px) {
        .breadcrumb-section ul li {
          font-size: 16px; } }
      .breadcrumb-section ul li a {
        color: #606060;
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in; }
        .breadcrumb-section ul li a:hover {
          color: #fe630e; }
</style>

    <section class="breadcrumb-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Supports and Help</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Supports and Help</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
 
      <section class="top_heading_content section_padding">
        <div class="container">
            <div class="logo_wrapper text-center">
                <h2 class="zh_heading">Exam Centre London</h2>
                <p style="color:black;font-size: 15px;margin-bottom: 13px;">Supports and Help</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="p_wrapper">
                        <p>This is Dummy data..........Tutors & Exams Coventry and Bolton are approved Exam Centre London International Programmes Examination centres. We accommodate their Distance Learning Programme’s assessments.<br>
                        You will need to complete Exam Centre London’s Examination Application Form and send it to us to complete the application process. Please refer to Tutors & Exams Fees List for entry fees.</p>
                        <p>Upon receipt of the application form we will issue you with an invoice which can be paid by bank transfer, cash or card payment. Please state at the time of returning the application form what your intended payment method will be, and we will send you a WorldPay link  if required. Please note we do not accept cheques. Your validation code will be issued once payment is received.</p>
                        <p>The above process needs to be completed by Exam Centre London’s deadline. More information about UoL entry deadlines and examinations can be viewed here.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p_wrapper">
                        <p>Joining instructions, including centre details and examination start times, will be forwarded to you on completion of booking. Please be aware that our examination start times differ to  Exam Centre London’s published start times.</p>
                        <p>Withdrawals and Refunds: If you wish to withdraw from a UoL exam that you have booked previously, please email your centre. Refunds will be issued up to 28 days prior to the examination date, less a £50 admin fee charge.</p><p>If you require any further information in the meantime, please do not hesitate to contact us.</p>
                    </div>
                    <div class="p_wrapper text-center d-inline-block">
                        
                        <a href="{{ url('/exam-list') }}" class=zh_btn>Exam Booking Now</a>
                    </div>

                </div>
            </div>
            <hr class="mt-4">
        </div>
    </section>
@endsection