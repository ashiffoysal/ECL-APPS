@extends('layouts.frontend')
@section('title', 'Make Payment')
@section('content')
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.course-detail-section .info-column .inner-column {
  
    margin-top: 0px !important;

}
.donate-page-section .donate-column .inner-column {
    position: relative;
    padding: 20px 35px 20px;
    background-color: #e2efef;
}
.donate-page-section {
    position: relative;
    padding: 40px 0px 70px;
}
</style>



<style>
.main-menu .navigation {
  
    margin: 0px 100px !important; 
}
    .main-header.header-style-four .nav-outer {
     padding-left: 0px !important; 
}
.main-header .nav-outer {
   
    float: left  !important; 
    padding-left: 120px  !important; 
}

.pull-right {
     float: none !important; 
}
</style>
<style>
    .checked {
      color: orange;
    }
    </style>


    <style>
    .pricing-table .table tbody tr th {

        font-size: 14px;
    }
    .pricing-table .table thead th {

        font-size: 14px;
      
    }
    .teacher-details-information {
     
        border-top: 3px solid #02ff6a;
     
    }
    .teacher-details-information h3::before {

        background-color: #02ff6a;
    }
    .pricing-table .table tbody tr td {
        border: 1px solid #f0f0f0;
        font-weight: 400;
        color: #6b6b84;
        overflow-x: auto;
        font-family: "Roboto", sans-serif;
        padding: 22px 25px;
        font-size: 16px;
    }


    blockquote, .blockquote {
        background-color: #fafafa;
        padding: 25px !important;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        border-left: 3px solid #02ff6a;
        border-right: 3px solid #02ff6a;
        border-radius: 5px;
    }
    img.asifimage {
        height: 80px;
        margin: 10px 0px;
        padding: 10px 10px;
        border: 1px solid;
        border-radius: 14%;
    }
    .card{
       
        border: 0px solid rgba(0,0,0,.125) !important;
       
    }
   .course-detail-section .info-column .level-list li {
   
   padding-left: 15px !important; 
    
}


.form-group label {
    position: relative;
    color: #06142d;
    font-size: 18px;
    display: block;
    font-weight: 600;
    margin-bottom: 20px;
}
/**/
.myback{
	    border: 1px solid #f0f5f3;
    border-radius: 10px;
    padding: 28px;
    background: #f0f5f3;
    margin: 5px;
}
.mybackk{
	  
    border-radius: 10px;
    padding: 2px;
   
}
.alert-success.new {
  background: none;
  border: none;
  border-left: 4px solid green;
  border-radius: 0;
  background: #fff;
  box-shadow: 1px 1px 4px rgba(0, 0, 0, .2);
}

.alert-success.new2 {
  background: #f4f7fa;
  border: none;
  border-left: 4px solid #45D298;
  border-radius: 0;
  box-shadow: 1px 1px 4px rgba(0, 0, 0, .2);
}

.alert-success.new2.p-4 {
  padding: 0.75rem 0.75rem !important;
}

.alert-success.new2 .fa {
  color: #45D298;
  display:table-cell;
  text-align: center;
  vertical-align: middle;
  font-size: 40px;
}

.alert-success .alert-body {
  padding-left: 0.75rem;
  display: table-cell;
  color: rgba(0,0,0,0.5);
}

.alert-success .alert-header {
    font-weight: 500;
    color: #d24580;
  padding: 0;
  margin: 0;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
    font-size: 12px;
}
.contact-page-section {
    
    padding: 20px 0px 70px;
}
.cource-detail-banner-section {
   
     padding-bottom: 1px; 
   
}

.custom_radio{
   margin: 20px;
}
.custom_radio input[type="radio"]{
  display: none;
}
.custom_radio input[type="radio"] + label{
  position: relative;
  display: inline-block;
  padding-left: 1.5em;
  margin-right: 2em;
  cursor: pointer;
  line-height: 1em;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.custom_radio input[type="radio"] + label:before,
.custom_radio input[type="radio"] + label:after{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 1em;
  height: 1em;
  text-align: center;
  color: white;
  font-family: Times;
  border-radius: 50%;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.custom_radio input[type="radio"] + label:before {
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  box-shadow: inset 0 0 0 0.2em white, inset 0 0 0 1em white;
}
.custom_radio input[type="radio"] + label:hover:before {
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  box-shadow: inset 0 0 0 0.3em white, inset 0 0 0 1em #c6c6c6;
}
.custom_radio input[type="radio"]:checked + label:before {
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  box-shadow: inset 0 0 0 0.2em white, inset 0 0 0 1em #4CAF50;
}
.contact-page-section .info-column ul li {
   
    margin-bottom: 3px !important;
}
</style>
      <section class="cource-detail-banner-section">
		<div class="pattern-layer-one" style="background-image: url(frontend/images/icons/icon-5.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(frontend/images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(frontend/images/icons/icon-4.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(frontend/images/icons/icon-8.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="#">Ucas Mock Exam-Booking</a></li>
				<li>Make Payment</li>
			</ul>
			<div class="content-box">
				<ul class="course-info">
				
				
				</ul>
				
			</div>
		</div>
	</section>
	
	
	  <section class="contact-page-section">
        <!-- <div class="pattern-layer-three" style="background-image: url(frontend/images/icons/icon-8.png)"></div> -->
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                    	 <div class="alert alert-success new2 p-4">
								       <i class="fa fa-info-circle" aria-hidden="true"></i>
								       <span class="alert-body">
								         <h6 class="alert-header">Payment Alert</h6>
								         <p class="mb-0" style="color:black !important">You must pay within 3 working days.</p>
								       </span>
								    </div>
                        <div class="sec-title-two">
                            <div class="title" style="color: white;">Total Amount £ {{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount - $data->discount_amount}}</div>
                        </div>
                        <h6>Booking Details: </h6>
                        
                        <ul>
                      
						    
						    @if($data->application_support=='yes')
						    <li>Application Support and verifying Documents : £100</li>
						    @endif
						    
						    @if($data->review_personal_statement=='yes')
						    <li>Review Personal Statement: £50</li>
						    @endif
    					     @if($data->exam_subject_details !=null)
    						     @foreach(json_decode($data->exam_subject_details) as $mysub)
    						    <li> {{ $mysub->subject }}: £70</li>
    						    @endforeach
    					    @endif
						    
                        </ul>
                        
                        
                        <ul>
                            {{--
						    <li>Discount Amount: £ {{ $data->discount_amount }}</li>
						    --}}
                        </ul>

                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Payment Section</h2>
                        <div class="contact-form">
                            <div class="form-group">
                                <div class="custom_radio">
								  <input type="radio" value="card_new_payment" onclick="myamountnew(this)" name="featured" checked id="featured-1"><label for="featured-1">Card Payment</label>
								  <br>
								  <input type="radio"  value="bank_new_payment" onclick="myamountnew(this)" name="featured" id="featured-2"><label  for="featured-2">Bank Payment</label>
								  <br>
								  
								</div>
                            </div>
                             <div class="form-group" id="bank_new_payment" style="display:none;">
	                            <form method="post" action="{{ url('make-payment/bankpayment/ucas-booking/') }}" enctype="multipart/form-data">
										@csrf
										<div class="row clearfix">
											
											<div class="form-group select-amount col-lg-12 col-md-12 col-sm-12 clearfix">
											<label style="font-size:10px">ECL Account Details:</label>
											<span>Account Name: EDU SERVICE LIMITED <br>Account Number: 18901601 <br> Sort Code: 04-06-05</span>
											</div>
											<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<label class="margin">Transaction Details</label>
											</div>
											<!-- Form Group -->
											<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<level>Reference </level>
												<input type="text" name="transection_id"  placeholder="Enter Reference" required="Reference Number" style="margin-top: 10px;">

										<input type="hidden" name="booking_id" value="{{ $data->ucas_booking_id }}">

											</div>
											<!-- Form Group -->
											<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<level >Transaction Screenshot</level><br>
												<input type="file" name="file" style="margin-top: 10px;" accept=".png, .jpg, .jpeg">
												<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											</div>
											<!-- Form Group -->
											<input type="hidden" name="amount" value="{{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount - $data->discount_amount}}">
						                    
											
										</div>
	                                
	                                <div class="form-group">
	                                    <button class="theme-btn btn-style-nine" type="submit" name="submit-form">Upload Now</button>
	                                </div>
	                            </form>
                        	</div>
                        	<div class="form-group" id="card_new_payment" >
                        	    	<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<label class="margin">Transection Details</label>
									<span>Click Pay Now! &amp; Complete your Payment </span>
									<div class="cards"><img class="mycardcl" src="https://examcentrelondon.co.uk/frontend/images/icons/cards.png" alt="" height="30px">
									</div>
								</div>
								<style>
								    .mycardcl {
									    height: 80px;
									}
								</style>


							<form action="{{url('make-payment/onlinepayment/ucas-booking')}}" method="POST">
	    					@csrf
								  <input type="hidden" name="amount" id="main_amount" value="{{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount - $data->discount_amount}}">
	                              <input type="hidden" name="myamount" id="myamount" value="{{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount - $data->discount_amount}}">
	                              <input type="hidden" name="cu_booking_id" id="cu_booking_id" value="{{ $data->ucas_booking_id }}">
	                              <input type="hidden" name="booking_id" value="{{ $data->ucas_booking_id }}">
	                              <input type="hidden" name="main_id" id="cu_main_id" value="{{ $data->id }}">
	                              <input type="hidden" name="user_id" id="cu_user_id" value="{{ Auth::user()->id }}">
								  <button class="theme-btn btn-style-five" type="submit" id="checkout-live-button">Click here to pay with card ( £ {{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount - $data->discount_amount}} )</button>
							</form>
                        	    
                        	    
	            
                        	</div>



                        </div>
                            
                    </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>


	<!-- End Course Detail Section -->
@section('myjs')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
        	
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
@endsection
<script>
	function tabbutton(el){
		var id=el.id;
		if(id==999){
			$(this).addClass("active-btn");
			$("#888").removeClass("active-btn");

			$("#prod-monthly").show();
			$("#prod-onetime").hide();

		
		}else if(id==888){

			$(this).addClass("active-btn");
			$("#999").removeClass("active-btn");

			

			$("#prod-monthly").hide();
			$("#prod-onetime").show();
		}
		
	}
</script>




<script>
	function addcupon(){
		var cupon_code=$("#cupon_code").val();
		var booking_id=$("#cu_booking_id").val();
		var main_id=$("#cu_main_id").val();
		var user_id=$("#cu_user_id").val();
		var myamount=$("#myamount").val();
		
		if(cupon_code==''){
			$("#error_coupon").show();
			$("#success_coupon").hide();
			$("#warning_coupon").hide();
			$("#wrong_coupon").hide();
		}else{
			
		
             $.ajax({
                 url: "{{  url('/add/coupon/insert') }}",
                 type:"GET",
                 data:{
                 	"cupon_code":cupon_code,
                 	"booking_id":booking_id,
                 	"main_id":main_id,
                 	"user_id":user_id,
                 },
                 success:function(data) {
                 		
                 	console.log(data);
                 		
                   if(data=="already_used"){
						$("#error_coupon").hide();
						$("#success_coupon").hide();
						$("#wrong_coupon").hide();
						$("#warning_coupon").show();
                        
                	}
                	else if(data=="success"){
						$("#error_coupon").hide();
						$("#success_coupon").show();
						$("#warning_coupon").hide();
						$("#wrong_coupon").hide();

						location.reload();
                        
                	}

                	else if(data=="cupon_not_found"){

						$("#error_coupon").hide();
						$("#success_coupon").hide();
						$("#warning_coupon").hide();
						$("#wrong_coupon").show();

                        
                	}
                }
             });
           }
			       


		}
	
</script>

<script>
	function myamountnew(el){
		
		var val=el.value;

		if(val=="bank_new_payment"){
			$("#bank_new_payment").show();
			$("#card_new_payment").hide();
		}
		if(val=="card_new_payment"){
			$("#bank_new_payment").hide();
			$("#card_new_payment").show();
		}
	}
</script>
@endsection