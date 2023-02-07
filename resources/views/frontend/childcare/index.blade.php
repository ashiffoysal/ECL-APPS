@extends('layouts.frontend')
@section('title', 'Child-Care')
@section('content')
<style>
    .overview-content {

    padding: 50px 50px;
    max-width: 100%;
    margin-left: auto;
    border-radius: 15px;
    margin: 10px 0px;
}
</style>
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Child Care</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Child Care</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="who-we-are ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center" style="padding:20px 0px"><img src="{{ asset('uploads/ofsted-registered-logo.png') }}" alt=""><br></div>
                    <div class="col-lg-12">
                        <div class="who-we-are-content">
                            
                            <!-- <span style="font-size:20px">CHILD CARE CENTRE</span> -->
                            <h3>CHILD CARE CENTRE</h3>
                            <p>Besides offering quality education by our Ofsted registered tutors, Merit Tutors is also an Ofsted Registered Childcare centre. This is ideal for you if you are based in East London, because we are situated in Forest Gate in the borough of Newham.
Are you a single parent or a parent in full-time work/education in East London? Our Ofsted Registered Childcare services will enable you to leave your child in our safe care while you are able to continue your work/study life. Furthermore, we are aware and sensitive of the fact that you may need urgent childcare. That is why there is no limit of availability of our services. We are open all year round to ensure your child is in a safe and caring place whilst you are busy with your own demands.
In addition to this, you may be provided with extra funds to improve the quality of you and your child’s life. If you have any concerns, feel free to give us a call or visit us. We look forward to hearing from you.
</p>

                           
                            <div class="who-we-are-btn">
                                <a href="{{ url('/assesment') }}" class="default-btn">Free Assessment</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-6">
                        <div class="who-we-are-image-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/who-we-are/who-we-are-3.png" alt="image">
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="overview-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <div class="overview-content">
                            <h3>At Merit Tutors Centre</h3>
                            <ul>
                                <li>We have met basic standards designed to safeguard children</li>
                                <li>Our premises, equipment and care provision is safe and suitable</li>
                                <li>Local authorities offer us support and can pass on our details to those seeking childcare</li>
                                <li>All staff with unsupervised access to children have undergone a Disclosure and Barring Service (DBS) (previously called the Criminal Records Bureau (CRB) check)</li>
                                <li>At least one staff member has had First Aid training</li>
                                <li>At least one staff member has had appropriate training regarding the Common Core Skills</li>
                                <li>We can accept Childcare Vouchers</li>
                                <li>Parents may be eligible for help with fees under the Working Tax Credit arrangements</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="overview-content">
                            <h3>Child Care Vouchers</h3>
                            <p>We are pleased to announce that parents with children at Merit Tutors can take advantage of savings on fees through Childcare Vouchers and Working Tax Credit.
                                Parents can also now effectively increase the number of hours of tuition that their child undertakes for the same amount of money allowing them to give their child that extra boost that keeps them at the top of the class</p>

                            
                        </div>
                    </div>
                </div>
               
            </div>
        </section>


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
                                    <div class=" mb-5">
                                    <div class="col-12 col-md-12 mx-auto">
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;">
                                                    
                                                </div>
                                                <div class="px-3  pb-3">
                                                    <h4>Help with Fees via Childcare Vouchers</h4>
                                                    <p class="font-weight-light my-3">Childcare Vouchers are a form of ‘employer supported childcare,’ a popular scheme which an increasing number of employers are adopting. This scheme works via salary sacrifice where an employer pays the employee partially in the form of Childcare Vouchers up to a value of £243 per month. These Vouchers are both tax and National Insurance free, thus greater in value than the cash equivalent, and can be used to pay for approved services. As Merit Tutors is a registered childcare provider, these Vouchers can be used here.
                                                        It may be possible for you to save up to £933 per year as a basic rate taxpayer and up to £623 (£1,225 if you joined the scheme on 5th April 2011 or before) per year as a higher rate taxpayer* by using these Vouchers. Moreover, both parents can receive Childcare Vouchers from their respective employer to use towards the tuition fees and therefore double the saving. The only requirement for you to take advantage of this scheme is that your child is aged 15 or under and that your employer is signed up to be part of it.</p>
                                                        
                                                        * correct as of 6th April 2011<br>
                                                        ​<p>
                                                        There are a wide range of these schemes currently running operated by a variety of different providers. <a style="color:red" href="https://content.edenred.co.uk/ccv/edenred-childcare-vouchers.html">www.childcarevouchers.co.uk</a> 
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;">
                                                    
                                                </div>
                                                <div class="px-3  pb-3">
                                                    <h4>Help With Fees via Working Tax Credit</h4>
                                                    <p class="font-weight-light my-3">At Merit Tutors, parents may be able to get up to 70% of their fees reimbursed! This means our services can become accessible to those who might not have previously been able to afford it, and guarantees parents can give their children the best education possible without worrying about the financial implications.
For you to be eligible for receive the Childcare Element of Working Tax Credit should you enrol your child at Merit Tutors, you need to be working 16 hours or more a week. If you are part of a couple, you both need to be working 16 hours or more a week. You can only claim childcare costs for any child up to the Saturday following 1st September after their 15th birthday.

</p>
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


        <div class="pricing-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Pricing Detrails</span>
                    <h2>The maximum amount of help you may receive is as follows*</h2>
                </div>

                <div class="pricing-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                                Number of children
                            </th>
                            <th>
                            Weekly limit on costs
                            </th>
                            <th>
                            Percentage of costs you can get help with
                            </th>
                            <th>Maximum tax credits for childcare</th>
                           
                          </tr>
                        </thead>
    
                        <tbody>
                            <tr>
                                <th>One child</th>
                                <td>£175</td>
                                <td>70%</td>
                                <td>£175 x 70% = £122.50</td>
                                
                            </tr>
                            <tr>
                                <th>Two or more children</th>
                                <td>£300</td>
                                <td>70%</td>
                                <td>£300 x 70% = £210</td>
                            </tr>

                           
                        </tbody>
                    </table>

                    <div class="table-title">
                       <p>For further information, guidance and to ensure that you have the very latest information, please see  <a style="color:red" href="https://www.gov.uk/government/organisations/hm-revenue-customs">http://www.hmrc.gov.uk</a> 

​.You may find leaflet WTC5 (Working Tax Credit – Help with the costs of childcare, 6th April 2011: A guide explaining help with the costs of childcare for parents) particularly helpful. Click the following link to view <a style="color:red" href="https://www.gov.uk/government/organisations/hm-revenue-customs">http://www.hmrc.gov.uk/leaflets/wtc5.pdf</a> 
</p>
                    </div>
                </div>
            </div>
        </div>

@endsection