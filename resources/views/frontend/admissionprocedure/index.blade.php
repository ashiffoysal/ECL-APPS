@extends('layouts.frontend')
@section('title', 'Admission Procedure')
@section('content')
<script src="https://use.fontawesome.com/5f267863cb.js"></script>
     <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Admission Procedure</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Admission Procedure</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
    font-family: 'Poppins', sans-serif !important;
}
a:hover {
    text-decoration: none;
}


</style>
        <!-- Start Choose Area -->
        <section class="choose-area pt-100 pb-70">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="who-we-are-content">
                            <!-- <span>Admission Procedure</span> -->
                        </div>
                    </div>
                    <div class="col-lg-12 mydesign">
                        <div class="who-we-are-content">
                     
                            <div class="container my-5">
                                <section>
                                    <div class="text-center mb-5">
                                    <span>Admission Procedure</span>
                                        <h2 class="font-weight-bold display-4 ">How It Works?</h2>
                                    </div>
                                    <div class="col-12 col-md-12 mx-auto">
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    1
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>ENQUIRY</h4>
                                                      
                                                    <p class="font-weight-light my-3">Contact us to register your child or complete a <a style="color:red" href="{{url('/student/singup')}}">student registration</a> form online.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    2
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>FREE ASSESSMENT</h4>
                                                    <p class="font-weight-light my-3"> Book a free assessment according to your convenience to help us identify the best support that we can provide.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    3
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>DISCUSS</h4>
                                                    <p class="font-weight-light my-3">Discuss your child’s performance as well as any other queries that you may have and choose a suitable day and time for your chosen subject(s).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    4
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>ADMISSION</h4>
                                                    <p class="font-weight-light my-3">Make the necessary payment and start taking lessons!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->

@endsection