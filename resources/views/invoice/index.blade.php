<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>ECL - Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <base href="{{ url('/') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    
    
    <link type="text/css" rel="stylesheet" href="https://examcentrelondon.co.uk/backend/invoice/assets/fonts/font-awesome/css/font-awesome.min.css">



    <!-- Google fonts -->
   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link type="text/css" rel="stylesheet" href="https://examcentrelondon.co.uk/backend/invoice/assets/css/style.css">
</head>
<body>
 <style>
     .col-sm-6 {
    flex: 0 0 auto;
    width: 50% !important;
}
.invoice-1 .invoice-id {
    border-radius: 75px 0 0 75px;
    z-index: 0;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
}
.invoice-1 .contact-info {
    padding: 30px 50px;
    border-radius: 0 40px 40px 0;
    background-image: linear-gradient(to bottom, #f3f3f3, #ffffff);
}
.col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
}
.row {

    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) * -.5);
    margin-left: calc(var(--bs-gutter-x) * -.5);
}
.invoice-1 .invoice-contact::after {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 30%;
    height: 30px;
    border-radius: 15px 0 0 15px;
    z-index: 0;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
}

.invoice-content .invo-addr-1 {
    font-size: 13px;
}
.invoice-content .invo-addr-1 {
    font-size: 14px;
    margin-bottom: 20px;
    line-height: 25px;
}

    </style>

    

<!-- Invoice 1 start -->
<div class="invoice-1 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                         
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <td>
                                    
                                    <div class="col-sm-6">
                                        <div class="invoice-logo" style="padding-top:10px!important">
                                            <!-- logo started -->
                                            <div class="logo" tyle="padding-bottom:10px!important">
                                                <img src="{{ asset('/uploads/logo/logo_1662996021.png') }}" alt="logo">
                                                <style>
                                                    .invoice-1 .invoice-logo img {
                                                            height: 50px;
                                                        }
    
                                                        .invoice-1 .name {
                                                            font-size: 14px !important;
    
                                                        }
                                                        .invoice-content .invo-addr-1 {
                                                            font-size: 13px;
                                                        }                                                    }
                                                 </style>
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                     
                                        
                                    </div>
                                    </td>
                                    <td>
                                    
                                </div>
                                  
                                    </td>
                                   
                                    </tr>
                                </table>
                                
                                </div>
                              
                                
                                
                            </div>
                        </div>
                        <div class="invoice-top" style="margin-top:10px;padding-top:1px;">
                            <div class="row">
                                <div class="col-lg-12" style="margin: 5px 0px; width:100%">
                                    @if($data->is_paid_verify==1)
                                     <span class="btn-sm btn-success">Paid</span><br>
                                     @elseif($data->is_paid_verify==0)
                                      <span class="btn-sm btn-danger" >Unpaid</span><br>
                                     @endif
                                </div>
                                 <div class="col-sm-12">
                                    <div class="">
                                        <h6 class="">Invoice</h6>
                                        <p style="margin:15px 0px !important;line-height:1px !important"> Booking-ID: {{ $data->booking_id }}</p>
                                        <p style="margin:15px 0px !important;line-height:1px !important">Booking Date: {{ $data->created_at->format('d-M-Y') }}</p>
                                    </div>
                                </div>
                            <table class="table mb-0 table-striped invoice-table" style="border:none important;">
                                    <thead>
                                    <tr class="tr">
                                        <td>      
                                        <div class="" style="line-height:0px !important">
                                        <h4 class="inv-title-1" style="color:red">Invoice To</h4>
                                        <h2 class="name" style="margin:15px 0px !important; line-height:1px !important">{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</h2>
                                        <span class="invo-addr-1" style="padding:1px !important;margin:15px 0px !important;line-height:10px !important">
                                            {{ $data->main_exam_type }} Candidate <br/>
                                            {{ $data->email }} <br/>
                                            {{ $data->address_line_1 }}  {{ $data->address_line_2 }} 
                                        </span>
                                    </div></td>
                                        <td class="text-center">
                                    <div class="">
                                        <div class="">
                                            <h4 class="inv-title-1" style="padding-top:5px">Invoice From</h4>
                                            <h2 class="name">Exam Centre London</h2>
                                            <p class="invo-addr-1" style="padding:1px !important;margin:15px 0px !important;line-height:10px !important">
                                               Forest Gate
                                               54 Upton Lane<br>
                                               London E7 9LN<br>
                                                Phone: 0208 616 2526 
                                               <br/>
                                            </p>
                                        </div>
                                    </div></td>
                                       
                                    </tr>
                                    </thead>
                            </table>
                           
                                       
                            
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="text-center">Exam Type</th>
                                        <th class="text-center">Subject</th>
                                       
                                        <th class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                @foreach(json_decode($data->exam_information) as $yes => $exam)
                                    <tr class="tr2">
                                        <td>{{ ++$yes }}</td>
                                        <td class="text-center">{{ $data->main_exam_type }}</td>
                                        
                                                 @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-center">{{$subject->subject_name ?? ''}}</td>
                                        
                                        <td class="text-end">£{{ $exam->fees }}</td>
                                    </tr>
                                    @endforeach
           
                                     
                                  
                             
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Discount</td>
                                        <td class="text-end">£{{ $data->discount_amount }}</td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                       
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color">£ {{ $data->total_amount }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom" style="margin-left:0px !important; padding-left:0px !important">
                            <div class="row" style="margin-left:0px !important; padding-left:0px !important">
                                <div class="col-lg-6 col-md-4 col-sm-5" style="margin-left:0px !important; padding-left:0px !important">
                                     @if($data->is_paid_verify==1)
                                    <div class="mb-30 payment-method" style="margin-left:0px !important; padding-left:50px !important">
                                        <h3 class="inv-title-1">Payment Method</h3>
                                        <ul class="payment-method-list-1 text-14">
                                            <li><strong>Payment Method:</strong> {{ $data->payment_option }}</li>
                                            <li><strong>Transacton Id:</strong>{{ $data->transection_id }}</li>
                                        </ul>
                                    </div>
                                    @endif
                                    @if($data->is_paid_verify==0)
                                    <div class="" style="margin-left:0px !important; padding-left:40px !important">
                                        <h3 class="inv-title-1">ECL Account Details:</h3>
                                        <ul class="payment-method-list-1 text-14" style="list-style:none">
                                            <li><strong>Account Name: EDU SERVICE LIMITED</strong>  </li>
                                            
                                            <li><strong>Account Number: 18901601</strong> </li>
                                            
                                            <li><strong>Sort Code: 04-06-05</strong></li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                
                                    @endif
                                    
                                    
                                </div>
                                 @if($data->is_paid_verify==0)
                                <div class="col-md-12">
                                        <div class="mb-30" style="margin-left:0px !important; padding-left:30px !important">
                                        <p styel="padding-left:40px !important"><span style="color:red">Payment Terms:</span> All payment must be cleared within 3 working days.</p>
                                        </div>
                                    
                                </div>
                                 @endif
                            </div>
                        </div>
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-lg-9 col-md-11 col-sm-12">
                                    <div class="contact-info">
                                        <a href="tel:+ 0208 616 2526"><i class="fa fa-phone"></i> 0208 616 2526</a>
                                        <a href="info@examcentrelondon.co.uk"><i class="fa fa-envelope"></i>info@examcentrelondon.co.uk</a>
                                        <a href="" class="mr-0 d-none-580"><i class="fa fa-map-marker"></i> 54 Upton Lane, London E7 9LN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 1 end -->

<script src="https://examcentrelondon.co.uk/backend/invoice/assets/js/jquery.min.js"></script>
<script src="https://examcentrelondon.co.uk/backend/invoice/assets/js/jspdf.min.js"></script>
<script src="https://examcentrelondon.co.uk/backend/invoice/assets/js/html2canvas.js"></script>
<script src="https://examcentrelondon.co.uk/backend/invoice/assets/js/app.js"></script>
</body>
</html>
