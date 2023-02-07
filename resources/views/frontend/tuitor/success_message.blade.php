@extends('layouts.frontend')
@section('content')
<style>
h4.success {
    font-size: 38px;
    padding: 17px 0px;
}
.detailssuccess {
    font-size: 19px;
   
    font-weight: 600;
    padding: 12px 0px;
    
}
</style>
   		<div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style="color:#fff !important;">Tutor Applycation</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>APPLYCATION SUCCESS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 		<section class="how_its_work ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="success">Registration Success !!</h4>
                        <p class="detailssuccess">Please Check Your Email And Verify Your Account</p>
                    </div>
                    <div class="col-md-12 text-center">
     					<div class="banner-btn">
                            <a href="{{url('/')}}" class="default-btn">
                                Back Home
                            </a>
                            <a href="{{ url('/login') }}" class="optional-btn">
                                Login
                            </a>
     					</div>
                     </div>
                 </div>
            </div>
        </section>

@endsection