@extends('layouts.frontend')
@section('title', 'Payment')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
        padding: 30px !important;
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

    .card {
       
        border: 0px solid rgba(0,0,0,.125) !important;
       
    }
</style>
 
        <section class="teacher-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 row " style="padding:30px 20px">
                        <h3>Make a payment </h3>
                        <p>Pay for your lessons here. In the case the tutor does not accept to take the lessons, we will refund your full payment. For more information, please refer to our <a target="__blanck" style="color: red;" href="{{url('/terms-conditions')}}">terms and conditions</a></p>
                    </div>
                    <div class="col-lg-8 col-md-12 row">
                        <div class="col-md-12">
                               <form
                                    role="form"
                                    action="{{ route('stripe.post') }}"
                                    method="post"
                                    class="require-validation"
                                    data-cc-on-file="false"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                    id="payment-form">
                                    @csrf
                             <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                                                @if($diffInweek < 5)
                                                    <div class="form-check" id="total_paid_id">
                                                      <input class="form-check-input total_paid" type="radio" name="paid" id="flexRadioDefault1" onclick="getpayment(this)" value="total_paid_offer">
                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                        Total Paid (if You pay Total Amount,You get 15% offer)
                                                      </label>
                                                    </div>
                                                @elseif($diffInweek < 8)
                                                <div class="form-check" id="first_one_month_payment_id">
                                                  <input class="form-check-input" type="radio" name="paid" id="flexRadioDefault2"  value="first_month_paid" onclick="getpayment(this)">
                                                  <label class="form-check-label" for="flexRadioDefault2">
                                                    First One Month Payment
                                                  </label>
                                                </div>
                                                <div class="form-check" id="total_paid_id">
                                                  <input class="form-check-input total_paid" type="radio" name="paid" id="flexRadioDefault1" onclick="getpayment(this)" value="total_paid_offer">
                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                    Total Paid (if You pay Total Amount,You get 15% offer)
                                                  </label>
                                                </div>
                                                @elseif($diffInweek >= 8)
                                                <div class="form-check" id="total_paid_id">
                                                  <input class="form-check-input total_paid" type="radio" name="paid" id="flexRadioDefault1" value="total_paid_offer" onclick="getpayment(this)">
                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                    Total Paid (if You pay Total Amount,You get 15% offer)
                                                  </label>
                                                </div>
                                                <div class="form-check" id="moiety_paid_id">
                                                  <input class="form-check-input" type="radio" name="paid" id="flexRadioDefault3" value="half_paid_offer" onclick="getpayment(this)">
                                                  <label class="form-check-label" for="flexRadioDefault3">
                                                    Moiety Paid (if You pay Moiety/Half Amount,You get 10% offer)
                                                  </label>
                                                </div>
                                                <div class="form-check" id="first_one_month_payment_id">
                                                  <input class="form-check-input" type="radio" name="paid" id="flexRadioDefault2"  value="first_month_paid" onclick="getpayment(this)">
                                                  <label class="form-check-label" for="flexRadioDefault2">
                                                    First One Month Payment
                                                  </label>
                                                </div>
                                                @endif
                                               


                                            </div>
                                            @error('paid')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                                                <div class="col-md-6">
                                                    <p>Total Amount:<span>@if($data->lessons_type=='ONCE A WEEK')
                                                        {{ $diffInweek * $data->hourly_rate }}  £
                                                        @elseif($data->lessons_type=='TWICE A WEEK')
                                                        {{  2*$diffInweek * $data->hourly_rate }}  £
                                                        @elseif($data->lessons_type=='THRICE A WEEK')
                                                        {{  3*$diffInweek * $data->hourly_rate }}  £
                                                        @endif </span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Pay Amount:<span id="pay_amount_text"></span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Due Amount:<span id="due_amount_text"></span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Discount Amount:<span id="discount_amount_text"></span></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">

                                                @if (Session::has('success'))
                                                <div class="alert alert-success text-center">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                    <p>{{ Session::get('success') }}</p>
                                                </div>
                                                @endif
                                             
                                                    <div class='form-group form-row row'>

                                                <input type="hidden" name="total_weeks" id="total_weeks" value=" @if($data->lessons_type=='ONCE A WEEK')
                                                        {{ $diffInweek }}
                                                        @elseif($data->lessons_type=='TWICE A WEEK')
                                                        {{  $diffInweek }}
                                                        @elseif($data->lessons_type=='THRICE A WEEK')
                                                        {{  $diffInweek }}
                                                        @endif">

                                                         <input type="hidden" name="total_hours" id="total_hours" value="

                                                         @if($data->lessons_type=='ONCE A WEEK')
                                                        {{ $diffInweek }}
                                                        @elseif($data->lessons_type=='TWICE A WEEK')
                                                        {{  2*$diffInweek }}
                                                        @elseif($data->lessons_type=='THRICE A WEEK')
                                                        {{  3*$diffInweek }}
                                                        @endif">

                                                        <input type="hidden" name="total_amount" id="total_amount" value="@if($data->lessons_type=='ONCE A WEEK')
                                                        {{ $diffInweek * $data->hourly_rate }}
                                                        @elseif($data->lessons_type=='TWICE A WEEK')
                                                        {{  2*$diffInweek * $data->hourly_rate }}
                                                        @elseif($data->lessons_type=='THRICE A WEEK')
                                                        {{  3*$diffInweek * $data->hourly_rate }}
                                                        @endif">

                                                        <input type="hidden" name="hourly_rate" id="hourly_rate" value="{{$data->hourly_rate}}">

                                                        <input type="hidden" name="lessons_type" id="lessons_type" value="{{$data->lessons_type}}">

                                                        <input type="hidden" name="discount_amount" id="discount_amount">
                                                        <input type="hidden" name="due_amount" id="due_amount" value="">
                                                        <input type="hidden" name="due_week" id="due_week" value="">
                                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="order_id" value="{{ $data->order_id }}">
                                                        <input type="hidden" name="amount" id="amount" value="">
                                                     

                                                    <div class='col-xs-12 form-group required mt-2'>
                                                        <label class='control-label'>Name on Card</label> 
                                                        <input class='form-control' size='4' type='text'>
                                                    </div>
                                                    </div>
                                                    <div class='form-group form-row row mt-2'>
                                                        <div class='col-xs-12 form-group card required'>
                                                            <label class='control-label'>Card Number</label> <input
                                                                autocomplete='off' class='form-control card-number' size='20'
                                                                type='text'>
                                                        </div>
                                                    </div>
                                                    <div class='form-group form-row row mt-2'>
                                                        <div class='col-xs-12 col-md-4 form-group cvc required mt-2'>
                                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required mt-2'>
                                                            <label class='control-label'>Expiration Month</label> <input
                                                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                                                type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required mt-2'>
                                                            <label class='control-label'>Expiration Year</label> <input
                                                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                                type='text'>
                                                        </div>
                                                    </div>
                                                    {{--
                                                    <div class='form-group form-row row'>
                                                    <div class='col-md-12 error form-group hide'>
                                                        <div class='alert-danger alert'>Please correct the errors and try
                                                            again.
                                                        </div>
                                                    </div>
                                                    </div>
                                                        --}}
                                                        
                                                    <br>
                                                    <div class="form-group form-row row mt-5">
                                                        <div class="col-xs-12">
                                                              {{--
                                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ( {{ $data->total_hour * $data->hourly_rate }} £)</button>
                                                           --}}

                                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                                        </div>
                                                    </div>
                                               
                                               <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                             </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="teacher-details-information">
                            <h3>Your Checkout Details</h3>
                            
                            <img class="asifimage" src="{{ asset('/'.$user->photo) }}">
                            <ul>
                                <li>
                                    <span>Tutor Name: {{ $user->name }}</span>
                                </li>
                                <li>
                                    <span>Tutor Type:</span>
                                    <span class="btn-sm btn-danger" style="margin:0px 5px;color:#fff">{{ $data->tutor_for }}</span>
                                </li>
                                <li>
                                    <span>Tutor Hourly Rate: {{ $data->hourly_rate }} £</span>
                                </li>
                                <li>
                                    <span>Subject:</span>
                                    <a href="">{{ $data->subject }}</a>
                                </li>
                                <li>
                                    <span>Level:</span>
                                    <a href="">{{ $data->level }}</a>
                                </li>
                                <li>
                                    <span>Start Date:</span>
                                    {{ $data->pick_date }}
                                </li>
                                <li>
                                    <span>End Date:</span>
                                    {{ $data->end_date }}
                                </li>
                                <li>
                                    <span>Time:</span>
                                    {{ $data->pick_time }}
                                </li>
                                <li>
                                    <span>Total Weeks:</span>
                                     {{ $diffInweek }} Weeks
                                </li>
                                 <li>
                                    <span>Lessons Type:</span>
                                    {{$data->lessons_type}}
                                     
                                </li>
                                <li>
                                    <span>Total Hours:</span>
                                    @if($data->lessons_type=='ONCE A WEEK')
                                    {{ $diffInweek}} Hours
                                    @elseif($data->lessons_type=='TWICE A WEEK')
                                    {{  2*$diffInweek}} Hours
                                    @elseif($data->lessons_type=='THRICE A WEEK')
                                    {{  3*$diffInweek }} Hours 
                                    @endif
                                     
                                </li>
                             
                                <li>
                                    <span>Total Amount:</span>
                                    @if($data->lessons_type=='ONCE A WEEK')
                                    {{ $diffInweek * $data->hourly_rate }}  £
                                    @elseif($data->lessons_type=='TWICE A WEEK')
                                    {{  2*$diffInweek * $data->hourly_rate }}  £
                                    @elseif($data->lessons_type=='THRICE A WEEK')
                                    {{  3*$diffInweek * $data->hourly_rate }}  £
                                    @endif
                                </li>

                                 
                                
                            </ul>
                        </div>
                         
                    </div>
                </div>
            </div>
        </section>


      <script>
        function getpayment(el){

            var total_hours=$("#total_hours").val();
            var total_amount=$("#total_amount").val();
            $("#due_amount").empty();


            if(el.value=='total_paid_offer'){
                
                var discount_amount = Math.round(total_amount - total_amount*0.15,2) ;
                var onlydiscount=Math.round(total_amount*0.15,2);
                $("#due_amount").val('0');
                $("#due_week").val('0');
                $("#amount").val(discount_amount);

                 $("#discount_amount_text").html(onlydiscount+ "£");
                  $("#discount_amount").val(onlydiscount);
                $("#due_amount_text").html('0' + "£");
                $("#pay_amount_text").html(discount_amount + "£");
                                                

            }else if(el.value=='half_paid_offer'){

                var half_discount_amount =Math.round( total_amount - total_amount*0.10,2) ;
                var onlydiscount=Math.round(total_amount*0.10,2);
                var due_amount=half_discount_amount/2;

                $("#due_amount").val(due_amount);
                
                $("#amount").val(due_amount);
                $("#discount_amount_text").html(onlydiscount+ "£");
                $("#discount_amount").val(onlydiscount);
                $("#due_amount_text").html(due_amount + "£");
                $("#pay_amount_text").html(due_amount + "£");

                

            }else if(el.value=='first_month_paid'){
                
                 var total_weeks=$("#total_weeks").val();
                 var lessons_type=$("#lessons_type").val();
                 var hourly_rate=$("#hourly_rate").val();

                 if(lessons_type=='ONCE A WEEK'){

                    var mainamount=hourly_rate * 4;

                    $("#amount").val(mainamount);
                    $("#due_amount_text").html(total_amount - mainamount + "£");
                    $("#due_amount").val(total_amount - mainamount);
                    $("#pay_amount_text").html(mainamount + "£");
                    $("#discount_amount_text").html('0'+ "£");

                 }
                  if(lessons_type=='TWICE A WEEK'){

                      var mainamount=hourly_rate * 8;

                    $("#amount").val(mainamount);
                    $("#due_amount_text").html(total_amount - mainamount + "£");
                    $("#due_amount").val(total_amount - mainamount);
                    $("#pay_amount_text").html(mainamount + "£");
                    $("#discount_amount_text").html('0'+ "£");
                    
                 }
                  if(lessons_type=='THRICE A WEEK'){

                    var mainamount=hourly_rate * 12;

                    $("#amount").val(mainamount);
                    $("#due_amount_text").html(total_amount - mainamount + "£");
                    $("#due_amount").val(total_amount - mainamount);
                    $("#pay_amount_text").html(mainamount + "£");
                    $("#discount_amount_text").html('0'+ "£");
                    
                 }
               
            }
        }
    </script>  





   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
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