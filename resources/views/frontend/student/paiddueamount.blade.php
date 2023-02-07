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
                    <div class="col-lg-10 col-md-12 row " style="padding:30px 20px">
                        <h3>Please Pay Due Amount !!</h3>
                        <p>we have  return payment-Policy</p>
                    </div>
                    <div class="col-lg-10 col-md-12 row">
                        <div class="col-md-12">
                        	 <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                                                
                                                <div class="col-md-6">
                                                	@if($data->due_amount !=null)
													<p>Due Amount:<span id="pay_amount_text">{{ $data->due_amount }} £</span></p>
                                                	@else
                                                    <p>Due Amount:<span id="pay_amount_text">0 £</span></p>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            @if($data->due_amount !=null)
                               <form
                                    role="form"
                                    action="{{ url('/student/due_amount/paid/'.$data->order_id) }}"
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

                                                @if (Session::has('success'))
                                                <div class="alert alert-success text-center">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                    <p>{{ Session::get('success') }}</p>
                                                </div>
                                                @endif
                                             
                                                    <div class='form-group form-row row'>
                                                         
                                                     <input type="hidden" name="amount" id="amount" value="{{ $data->due_amount }}">

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

                                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now( {{ $data->due_amount }} £)</button>
                                                        </div>
                                                    </div>
                                               
                                               <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                             </form>
                             @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

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