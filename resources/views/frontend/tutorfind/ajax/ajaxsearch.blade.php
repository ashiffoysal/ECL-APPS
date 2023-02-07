
<style type="text/css">
.img_laz{width:100%;border:1px solid #e1e1e1;}

</style>
@if($data->count() > 0)
@foreach($data as $key => $datas)
        <section class="quote-area" style="padding:20px 0px">
            <div class="container">
          
                <div class="row">
                    <div class="quote-item">
                        <div class="asif-tutor col-lg-12 row">
                            <div class="col-md-2">
                                <a href="{{ url('tutor-find/details/'.$datas->id) }}">
                                <img class="img_laz" data-original="{{ asset('/'.$datas->photo) }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">
                               <h4>{{$datas->name}}</h4>
                               <p>{{ $datas->headline_for_tutor }}</p>
                               @if($datas->subject !=null)
                               @foreach(json_decode($datas->subject) as $sub)
                               <a href="#" class="btn-sm btn-success">{{$sub}}</a>
                                @endforeach
                                @endif
                               <br>
                               <p style="color:red">£{{ $datas->expected_hourly_rate }}/hours</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="{{ url('tutor-find/details/'.$datas->id) }}" class="btn-sm btn-warning">View Profile</a>
                                <br>
                                <br>
                                <span><i class="fa fa-star"></i> 8 reviews</span>
                                <br>
                                <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 537 completed lessons</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
         @endforeach


         <section class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-6 col-md-6">
                       
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    <script>
    $(document).ready(function(){
            $(".img_laz").lazyload({
            effect : "fadeIn"
        });
    })

    </script>
@else
<section class="quote-area" style="padding:20px 0px">
            <div class="container">
          
                <div class="row">
                    <div class="quote-item">
                        <div class="asif-tutor col-lg-12 row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-6">

                               <h4>No Tutor Found !</h4>
                              
                            
                            </div>
                            <div class="col-md-4 text-end">
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
@endif