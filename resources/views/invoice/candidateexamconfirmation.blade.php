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
                               
                                 <div class="col-sm-12">
                                    <div class="">
                                        <h6 class="">STATEMENT OF ENTRY (June 2023 EXAMINATION)</h6>
                                        <p style="margin:25px 0px !important;line-height:1px !important;font-weight:700 !important; font-size:16px !important;"> CENTRE No: 13289</p>
                                        
                                        <p style="margin:25px 0px !important;line-height:1px !important;font-weight:700 !important; font-size:16px !important;">CAND NO: {{ $data->Candidate_number }}</p>
                                        
                                             <p style="margin:25px 0px !important;line-height:1px !important;font-weight:700 !important; font-size:16px !important;">CENTRE NAME: MERIT TUTORS</p>
                                              <p style="margin:25px 0px !important;line-height:1px !important;font-weight:700 !important; font-size:16px !important;">UCI: {{ $data->uci_number }}</p>
                                               <p style="margin:25px 0px !important;line-height:1px !important;font-weight:700 !important; font-size:16px !important;">ULN: {{ $data->uln_number }}</p>
                                    </div>
                                </div>
                            <table class="table mb-0 table-striped invoice-table" style="border:none important;">
                                    <thead>
                                    <tr class="tr">
                                        <td>      
                                        <div class="" style="line-height:0px !important">
                                        <h4 class="inv-title-1" style="color:red">CANDIDATE NAME</h4>
                                        <h2 class="name" style="margin:15px 0px !important; line-height:1px !important">{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</h2>
                                    </div></td>
                                        <td class="text-center">
                                    <div class="">
                                        <div class="">
                                            <h4 class="inv-title-1" style="padding-top:5px">DATE OF BIRTH</h4>
                                            <h2 class="name">	{{$data->	date_of_birth}}</h2>
                                      
                                        </div>
                                    </div>
                                    </td>
                                        <td class="text-center">
                                    <div class="">
                                        <div class="">
                                            <h4 class="inv-title-1" style="padding-top:5px">Gender</h4>
                                            <h2 class="name">	{{$data->	gender}}</h2>
                                      
                                        </div>
                                    </div>
                                    </td>
                                      
                                       
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
                                       
                                        
                                        <th class="text-center">Exam Board</th>
                                        <th class="text-center">Subject</th>
                                        <th class="text-end">Exam Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
								                                  @php
								                                    $alllist=App\Models\GcseExamConfirmation::where('booking_id',$data->booking_id)->where('is_deleted',0)->get();
								                                  @endphp
								                                  @foreach($alllist as $list)
								                                  <tr class="tr2">
								                                      <td>{{$list->exam_board}}</td>
								                                      <td>{{$list->exam_subject}}</td>
								                                      
								                                      <td>
								                                          
								                       
								                                 <table class="table mb-0 table-striped invoice-table" style="border:none">
								                                     <tr class="class="table-success"">
								                                         <th>Syllabus</th>
								                                         <th>Paper Title</th>
								                                         <th>Date</th>
								                                         <th>Time</th>
								                                     </tr>
								                                              @foreach(json_decode($list->exam_details) as $details)
							                                        <tr>
							                                           
							                                           <td>{{ $details->syllabus }}</td>
							                                           <td>{{ $details->paper_title }}</td>
							                                           <td> @if($details->exam_date =='')
							                                         @else
							                                               {{ \Carbon\Carbon::parse($details->exam_date)->format('d/m/Y') ?? ''}}
							                                               @endif</td>
							                                           
							                                          
							                                           <td>{{ $details->exam_time ?? '' }}  </td>
							                                          
							                                        
							                                        </tr> 
							                                        @endforeach
							                                         </table>
								                                          
								                                      </td>
								                                    
								                                      
								                                  </tr>
								                                  @endforeach
								                                  
								                        
								                                
								                              </tbody>
                                    
                                    
                                    
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom" style="margin-left:0px !important; padding-left:0px !important">
                            <div class="row" style="margin-left:0px !important; padding-left:0px !important">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-left:40px !important; padding-left:0px !important">
                                    
                                    <span style="font-size:16px Important; font-weight:700;">IMPORTANT NOTE:</span><br>
                                    <p style="font-size:14px Important; color:red !important">
                                    Please note that this statement of entry has been auto generated by Merit Tutors to confirm your
                                    exam booking. Although precise caution has been taken to ensure accuracy, there may be minor
                                    inaccuracies. We will soon update you with the statement of entry generated by the exam board
                                    which you will be able to retrieve from your portal. However, please note that there may be some
                                    delays in receiving the AQA statement of entry.</p>
                                    
                                    
                                    <p>Keep this Statement of Entry in a safe place until results are published.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-lg-9 col-md-11 col-sm-12">
                                    <div class="contact-info">
                                        <a href="tel:+ 0208 616 2526"><i class="fa fa-phone"></i> 0208 616 2526</a>
                                        <a href="info@examcentrelondon.co.uk"><i class="fa fa-envelope"></i> info@examcentrelondon.co.uk</a>
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
