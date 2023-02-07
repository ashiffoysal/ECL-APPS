@extends('layouts.frontend')
@section('title', 'Exam Fees')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">



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
  padding: 40px 0;
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
    <style>
div.dataTables_wrapper div.dataTables_length select {

  height: 33px;
}
div.dataTables_wrapper div.dataTables_filter input {

    height: 25px;
}
li.paginate_button {
    padding: 10px !important;
}
div.dataTables_wrapper div.dataTables_info {
    white-space: nowrap;
    padding: 20px 30px 0px 10px!important;
}
div#example_length {
    padding: 20px 11px 0px 30px !important;
}



div#exampleIGCSE_length{
    padding: 20px 11px 0px 30px !important;
}


div#exampleALEVEL_length{
    padding: 20px 11px 0px 30px !important;
}
div#exampleASLEVEL_length{
    padding: 20px 11px 0px 30px !important;
}
div#exampleAAT_length{
    padding: 20px 11px 0px 30px !important;
}
div#exampleACCA_length{
    padding: 20px 11px 0px 30px !important;
}
div#exampleFUNCTIONAL_length{
    padding: 20px 11px 0px 30px !important;
}
.modal-content {
    border-radius: 20px !important;
}

.modal-header {
    background: #3ec7b0 !important;
}
.modal-title {
    color:#fff !important;
}
</style>
    <!--<section class="breadcrumb-section text-center" >-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <h2>Exam Fees</h2>-->
    <!--                <ul>-->
    <!--                    <li><a href="">home</a></li>-->
    <!--                    <li>/</li>-->
    <!--                    <li>Exam Fees</li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section class="zh_center_content section_padding" style="padding-top: 20px; background-color: #fff !important;">
        <div class="container">
            <div class="text-center">
                <h2 class="zh_heading">Exam Fees Details</h2>
                <div class="p_wrapper">
                    <p> Exam Centre London has carefully compiled this price list, providing you with the best value for
money. See below for our exam prices for the range of qualifications we provide throughout the
year!
<br>
Can’t find your subject below? Speak to a member of staff today and see if we can help!</p>
                </div>
                <div class="p_wrapper with_space">
                    <a href="{{ url('/exam-list') }}" class="zh_btn">Book Your Exam Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq Section -->

        <section class="featured-section" style="padding: 10px 0px;">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #ff6868 !important;">
                        <h6 style="color: white;">FUNCTIONAL SKILLS EXAM FEES</h6>
                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdropFUNCTIONAL"style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                        {{-- 
                        <a target="__blank" href="{{ asset('uploads/subjectprice/FUNCTIONAL-SKILLS-EXAM-FEES.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                        --}}
                    </div>
                </div>
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #39e7a1 !important;">
                        <h6 style="color: white;">AAT EXAM FEES</h6>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdropAAT"style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                        {{-- 
                        <a target="__blank" href="{{ asset('uploads/subjectprice/AAT-Exam-Fees.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                         --}}
                    </div>
                </div>
                   <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #9072c5 !important;">
                        <h6 style="color: white;">ACCA EXAM FEES</h6>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdropACCA"style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                        {{--
                        <a target="__blank" href="{{ asset('uploads/subjectprice/ACCA-Exam-Fees.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                        --}}
                    </div>
                </div>
                   <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #39dae7 !important;">
                        <h6 style="color: white;">GCSE EXAM FEES</h6>
                        
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop"style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                       
                       {{--
                        <a target="__blank" href="{{ asset('uploads/subjectprice/GCSE-Exam-Fees.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                         --}}
                    </div>
                </div>
                   <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #e74e39 !important;">
                        <h6 style="color: white;">IGCSE EXAM FEES</h6>
                        <button type="button" data-toggle="modal" data-target="#staticBackdropIGCSE" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                        {{-- 
                        <a target="__blank" href="{{ asset('uploads/subjectprice/IGCSE-Exam-Fees.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                        --}}
                    </div>
                </div>
                   <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #259568  !important;">
                        <h6 style="color: white;">A LEVEL EXAM FEES</h6>
                         <button type="button" data-toggle="modal" data-target="#staticBackdropALEVEL" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                        {{--
                        <a target="__blank" href="{{ asset('uploads/subjectprice/A-LEVEL-Exam-Fees.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                        --}}
                    </div>
                </div>
                 <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #952525  !important">
                        <h6 style="color: white;">AS LEVEL EXAM FEES</h6>
                         <button type="button" data-toggle="modal" data-target="#staticBackdropASLEVEL" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</button>
                         {{--
                        <a target="__blank" href="{{ asset('uploads/subjectprice/as-levels-subject-fees.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                        --}}
                    </div>
                </div>
                <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box" style="background-color: #6a4485  !important">
                        <h6 style="color: white;">POST RESULTS SERVICE & OTHER FEES</h6>
                        <a target="__blank" href="{{ asset('frontend/PostResultsServices/PostResultsServicesOtherFeesUpdate.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Click Here</a>
                    </div>
                </div>
                
                
                
                
                   


                
             
                
                
                <!-- Feature Block -->
              
                
            </div>
        </div>
    </section>
            <section class="zh_faq_area section_padding">
        <div class="container">
            {{-- 
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="zh_faq_right_content md_right_content">
                        <h5 class="zh_sub_heading">Exam Fees</h5>
                        <!-- <h2 class="zh_heading">Over 10 Years in <span>Distant <br>Skill</span> Development</h2> -->
                        <ul class="accordion">
                            <li>
                                <a>FUNCTIONAL SKILLS EXAMS</a>
                                <p><a target="__blank" href="" style="font-size:12px !important;color:red !important;">Click Here</a></p>
                            </li>
                            <li>
                                <a>GCSE EXAMS</a>
                                <p><a target="__blank" href="" style="font-size:12px !important;color:red !important;">Click Here</a></p>
                            </li>
                            <li>
                                <a>IGCSE EXAMS</a>
                                <p><a target="__blank" href="" style="font-size:12px !important;color:red !important;">Click Here</a></p>
                            </li>
                            <li>
                                <a>A LEVEL EXAMS</a>
                                 <p><a target="__blank" href="" style="font-size:12px !important;color:red !important;">Click Here</a></p>
                            </li>
                            <li>
                                <a>ACCA EXAMS</a>
                              <p><a target="__blank" href="" style="font-size:12px !important;color:red !important;">Click Here</a></p>
                            </li>
                            <li>
                                <a>AAT EXAMS</a>
                                <p><a target="__blank" href="" style="font-size:12px !important;color:red !important;">Click Here</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            --}}
            <!-- Counter -->
            <div class="zh_counter_area">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">2.1</span>k</h6>
                            <h3>STUDENT ENROLLED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">2</span>k</h6>
                            <h3>EXAM COMPLETED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">100</span>%</h6>
                            <h3>SATISFACTION RATE</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">64</span>+</h6>
                            <h3>TEACHERS</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">GCSE EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','GCSE')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="example" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Exam Board</th>
                                            <th class="min-w-140px">Subject</th>
                                            
                                            <th class="min-w-140px">Unit Code</th>
                                            <th class="min-w-140px">Fees</th>
                                            <th class="min-w-140px">Late Fees</th>
                                            <th class="min-w-140px">High Late Fees</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                 {{ $data->exam_board }}
                                            </td>
                                           
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                             <td>
                                             {{ $data->unit_code }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                           
                                            <td>
                                               £ {{ $data->late_fees }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->high_late_fees }}
                                            </td>
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--gcse end-->
<div class="modal fade" id="staticBackdropIGCSE" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">IGCSE EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','IGCSE')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="exampleIGCSE" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Exam Board</th>
                                            <th class="min-w-140px">Subject</th>
                                            
                                            <th class="min-w-140px">Unit Code</th>
                                            <th class="min-w-140px">Fees</th>
                                            <th class="min-w-140px">Late Fees</th>
                                            <th class="min-w-140px">High Late Fees</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                 {{ $data->exam_board }}
                                            </td>
                                           
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                             <td>
                                             {{ $data->unit_code }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                           
                                            <td>
                                               £ {{ $data->late_fees }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->high_late_fees }}
                                            </td>
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropALEVEL" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">A LEVELs EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','A Level')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="exampleALEVEL" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Exam Board</th>
                                            <th class="min-w-140px">Subject</th>
                                            
                                            <th class="min-w-140px">Unit Code</th>
                                            <th class="min-w-140px">Fees</th>
                                            <th class="min-w-140px">Late Fees</th>
                                            <th class="min-w-140px">High Late Fees</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                 {{ $data->exam_board }}
                                            </td>
                                           
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                             <td>
                                             {{ $data->unit_code }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                           
                                            <td>
                                               £ {{ $data->late_fees }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->high_late_fees }}
                                            </td>
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--gcse end-->
<div class="modal fade" id="staticBackdropAAT" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">AAT EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','AAT')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="exampleAAT" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            
                                            <th class="min-w-140px">Subject</th>
                                            
                                         
                                            <th class="min-w-140px">Fees</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                          
                                           
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                            
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                           
                                            
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropACCA" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ACCA EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','ACCA')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="exampleACCA" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            
                                            <th class="min-w-140px">Subject</th>
                                            
                                            <th class="min-w-140px">Unit Code</th>
                                            <th class="min-w-140px">Fees</th>
                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                             <td>
                                             {{ $data->unit_code }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                           
                                           
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="staticBackdropASLEVEL" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">AS LEVELs EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','AS Level')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="exampleASLEVEL" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Exam Board</th>
                                            <th class="min-w-140px">Subject</th>
                                            
                                            <th class="min-w-140px">Unit Code</th>
                                            <th class="min-w-140px">Fees</th>
                                            <th class="min-w-140px">Late Fees</th>
                                            <th class="min-w-140px">High Late Fees</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                 {{ $data->exam_board }}
                                            </td>
                                           
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                             <td>
                                             {{ $data->unit_code }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                           
                                            <td>
                                               £ {{ $data->late_fees }}
                                            </td>
                                           
                                            <td>
                                                £ {{ $data->high_late_fees }}
                                            </td>
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropFUNCTIONAL" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">FUNCTIONAL SKILLS EXAM FEES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @php
            $alldata=App\Models\Subject::where('is_deleted',0)->where('exam_type','Functional Skills')->get();
          @endphp  
        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="exampleFUNCTIONAL" class="data-table" style="width:100%; font-size:14px" >
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Subject</th>
                                        
                                            <th class="min-w-140px">Fees</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($alldata as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                           
                                           
                                            <td>
                                                {{ $data->subject_name }}
                                            </td>
                                         
                                           
                                            <td>
                                                £ {{ $data->exam_fees }}
                                            </td>
                                            
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@section("myjs")
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#example tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#example").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#example tfoot tr");
			$("#example thead").append(footer);
		}
	});

	// Apply the search
	$("#example thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#exampleIGCSE tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#exampleIGCSE").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#exampleIGCSE tfoot tr");
			$("#exampleIGCSE thead").append(footer);
		}
	});

	// Apply the search
	$("#exampleIGCSE thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#exampleALEVEL tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#exampleALEVEL").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#exampleALEVEL tfoot tr");
			$("#exampleALEVEL thead").append(footer);
		}
	});

	// Apply the search
	$("#exampleALEVEL thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#exampleASLEVEL tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#exampleASLEVEL").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#exampleASLEVEL tfoot tr");
			$("#exampleASLEVEL thead").append(footer);
		}
	});

	// Apply the search
	$("#exampleASLEVEL thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#exampleAAT tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#exampleAAT").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#exampleAAT tfoot tr");
			$("#exampleAAT thead").append(footer);
		}
	});

	// Apply the search
	$("#exampleAAT thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#exampleACCA tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#exampleACCA").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#exampleACCA tfoot tr");
			$("#exampleACCA thead").append(footer);
		}
	});

	// Apply the search
	$("#exampleACCA thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
<script>
$(document).ready(function () {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title = "Exam Fees | Exam Centre London";
	// Create search inputs in footer
	$("#exampleFUNCTIONAL tfoot th").each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});
	// DataTable initialisation
	var table = $("#exampleFUNCTIONAL").DataTable({
		dom: '<"dt-buttons"Bf><"clear">lirtp',
		paging: true,
		autoWidth: true,
		buttons: [
			
		
		],
		initComplete: function (settings, json) {
			var footer = $("#exampleFUNCTIONAL tfoot tr");
			$("#exampleFUNCTIONAL thead").append(footer);
		}
	});

	// Apply the search
	$("#exampleFUNCTIONAL thead").on("keyup", "input", function () {
		table.column($(this).parent().index()).search(this.value).draw();
	});
});

</script>
@endsection
@endsection