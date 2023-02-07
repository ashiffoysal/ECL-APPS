 @extends('layouts.frontend')
@section('title', 'Exam ')
@section('content')
<style>
.professional-section.style-two {
    padding-top: 100px;
}

.sec-title .title {
    
    font-size: 20px;
  
}
</style>

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

    <section class="breadcrumb-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Exam Tips</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li>/</li>
                        <li>Exam Tips</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="professional-section style-two">

        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-three" style="background-image:url(frontend/images/background/pattern-16.png)"></div>
                        <div class="sec-title">
                            <div class="title">HELPFUL PRE-EXAM STUDY TIPS</div>
                            <h5 style="margin-top: 30px;color: black;">It can be daunting to face an exam.  Here at Exam Centre London, we aim to make the whole process of assessment simple and stress-free.  Practical tips to help you navigate study, revision and assessments will be covered when you work with us. </h5> <br> <h5 style="color: black;">
Helpful strategies usually focus on pacing yourself carefully.  Exam Centre London will work with you to develop revision plans that allow you to break down the tasks of revision.  
</h5>
                        </div>
                        <br>
                        <p style="color: red; font-size: 20px; font-weight: 700;">WHILST REVISING</p>
                        <p>Condense information down so you can remember it more easily.</p>
                        <p>Rework your learning by making notes, spidergrams, or bullet points.</p>
                        <p>Use BBC Bitiesize</p>
                        <p>Practice old exam papers</p>
                        <p>Give your brain time to absorb and reflect on your learning – so, from time to time, take a walk in a park so your brain will have time and space to think.</p>
                        <p> Watch a documentary on the topic.</p>
                        <p>Don’t stay up all night before an exam your brain will be exhausted and tired when it needs to be alert and thinking.</p>
                        <div class="btn-box">
                            <a href="{{ url('/exam-list') }}" class="theme-btn btn-style-nine"><span class="txt">Book Your Exam Now</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
<style>
.contact-banner-section {
   
    background-color: #c7aaed;
}
</style>
@endsection
