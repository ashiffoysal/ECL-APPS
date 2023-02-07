@extends('layouts.frontend')
@section('title', 'Assessment')
@section('content')
<style>
    .apply-form {
    background-color: #ffffff;
    -webkit-box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
     box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
    padding: 50px;
}
.apply-form form .form-group .form-control {
    height: 50px !important;
    color: #1b0238 !important;
    -webkit-box-shadow: unset !important;
    box-shadow: unset !important;
    border: 1px solid #d7d2d2 !important;;
    background-color: transparent !important;;
    -webkit-transition: 0.5s !important;;
    transition: 0.5s !important;;
    border-radius: 7px !important;;
    padding: 0 0 0 15px !important;;
    font-weight: 400 !important;;
}
.h1, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
   
    font-family: "Poppins", sans-serif !important;
    font-weight: bold !important;
}

.form-label {
    font-size: 16px;
    font-weight: 600;
}
</style>
<link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
<script src="https://use.fontawesome.com/5f267863cb.js"></script>
     <!-- Start Page Banner -->
     <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style="color:#fff !important;">Assessment</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>ASSESSMENT FORM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Apply Area -->
        <section class="apply-area ptb-100">
            <div class="container">
                <div class="apply-form">
                    <form action="{{ url('/assesment') }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h4>Branch</h4>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Select Branch</label>
                                        <select name="branch" class="form-control" id="">
                                            <option value="FOREST GATE">FOREST GATE</option>
                                            <option value="ILFORD LANE">ILFORD LANE</option>
                                        </select>
                                        @error('postcode')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="content">
                                    <h4>Student Details</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">First Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="first_name[]" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Last Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control"  name="last_name[]" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="mt-5">
                                               <a onclick="deleterow(this)"  style="color:red"> <i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="subject[]" placeholder="Enter Subject example:  Math , English ,Science">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Year<span style="color:red">*</span></label>
                                                <select name="year[]"  class="form-control">
                                                    <option value="11 PLUS">11 PLUS</option>
                                                    <option value="GCSE">GCSE</option>
                                                    <option value="A-LEVEL">A-LEVEL</option>
                                                    <option value="YEAR 6 SATs">YEAR 6 SATs</option>
                                                    <option value="YEAR 1">YEAR 1</option>
                                                    <option value="YEAR 2">YEAR 2</option>
                                                    <option value="YEAR 3">YEAR 3</option>
                                                    <option value="YEAR 4">YEAR 4</option>
                                                    <option value="YEAR 5">YEAR 5</option>
                                                    <option value="YEAR 6">YEAR 6</option>
                                                    <option value="YEAR 7">YEAR 7</option>
                                                    <option value="YEAR 8">YEAR 8</option>
                                                    <option value="YEAR 9">YEAR 9</option>
                                                    <option value="YEAR 10">YEAR 10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                       
                                    </div>
                                </div>
                                <div class="morestudent" id="morestudent">

                                </div>
                                <div class="row">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2 text-end">
                                        <button type="button" onclick="morestudent()" class="btn btn-sm btn-warning">Add More Child</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h5>Parent Details</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Parent/Guardian Name<span style="color:red">*</span></label>
                                                <input type="text" name="parent_name" class="form-control" placeholder="Parent/Guardian Name">
                                                @error('parent_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                                @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                <input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
                                                @error('mobile')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Parent/Guardian Relation<span style="color:red">*</span></label>
                                                <input type="text" name="parent_relation" class="form-control" placeholder="Parent/Guardian Relation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Address<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-5">
                                <div class="content">
                                    <h5>CHOOSE A TIME FOR YOUR CHILD'S ASSESSMENT</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Assesment Time<span style="color:red">*</span></label>
                                                <select name="assesment_date_time" id="" class="form-control">
                                                    <option value="2pm-4pm">2pm-4pm</option>
                                                    <option value="4pm-6pm">4pm-6pm</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date<span style="color:red">*</span></label>
                                                <input type="date" name="date" class="form-control" placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Notes</label>
                                                <textarea class="form-control" name="write_details" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="default-btn" style="border-radius:24px">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
        <!-- End Apply Area -->
<script>
function deleterow(em) {

$(em).closest(".row").remove();

}
</script>
<script>
    var i=1;
    function morestudent(){
        $("#morestudent").append('<div class="row"><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">First Name<span style="color:red">*</span></label><input type="text" name="first_name[]" class="form-control" placeholder=" First Name"></div></div></div> <div class="col-md-5"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Last Name<span style="color:red">*</span></label><input type="text" name="last_name[]" class="form-control" placeholder="Last Name"></div></div></div><div class="col-md-1"><div class="form-group"><div class="mt-5"><a onclick="deleterow(this)"  style="color:red"> <i class="fa fa-trash"></i></a></div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label><input name="subject[]" type="text" class="form-control" placeholder="Enter Subject example: Math , English , Science"></div></div></div><div class="col-md-5"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Year<span style="color:red">*</span></label><select name="year[]" class="form-control"><option value="11 PLUS">11 PLUS</option> <option value="GCSE">GCSE</option><option value="A-LEVEL">A-LEVEL</option><option value="YEAR 6 SATs">YEAR 6 SATs</option><option value="YEAR 1">YEAR 1</option> <option value="YEAR 2">YEAR 2</option><option value="YEAR 3">YEAR 3</option><option value="YEAR 4">YEAR 4</option> <option value="YEAR 5">YEAR 5</option><option value="YEAR 6">YEAR 6</option> <option value="YEAR 7">YEAR 7</option><option value="YEAR 8">YEAR 8</option><option value="YEAR 9">YEAR 9</option><option value="YEAR 10">YEAR 10</option> </select></div></div></div></div>')
    }
</script>

@endsection