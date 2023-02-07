@if($products->count() > 0 )
@foreach($products as $key => $data)
<style>
span.new-price {
    padding: 10px 10px;
    background: #e3e3e3;
    margin: 6px 0px;
    border-radius: 19px;
    font-size: 13px !important;
}
</style>
    <div class="list-items">
        <div class="tred-pro">
            <div class="tr-pro-img">
                <a href="{{ url('tutor-find/details/'.$data->id) }}">
                    <img class="img-fluid img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="pro-img1">
                    {{-- 
                    <img class="img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="">
                    <img class="img-fluid additional-image" src="image/pro/pro-img-01.jpg" alt="additional image">
                    --}}
                </a>
            </div>
            <div class="Pro-lable">
                <span class="p-text">Tutor</span>
            </div>
        </div>
        <div class="caption">
            <h3><a href="{{ url('tutor-find/details/'.$data->id) }}">{{ $data->name}}</a></h3>
            <p class="list-description">{{ $data->headline_for_tutor }}</p>
            <div class="rating">
                <i class="fa fa-star c-star"></i>
                <i class="fa fa-star c-star"></i>
                <i class="fa fa-star c-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="pro-price">
                <span class="new-price">£ {{ $data->expected_hourly_rate }} per hour</span>
            </div>
             @if($data->subject !=null)
                @php
                    $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', $data->id)->get();
                @endphp
               @foreach($subjectstutor as $sub)
               <a href="#" class="btn-sm btn-success">{{$sub->Subject->name}}</a>
                @endforeach
             @endif
            <div class="pro-icn">
            <a href="{{ url('tutor-find/details/'.$data->id) }}">view-profile</a>  
            </div>
        </div>
    </div>
@endforeach
@else
<p><span>Opps! Tutor Not Found</span></p>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script>
    $(document).ready(function(){
            $(".img_laz").lazyload({
            effect : "fadeIn"
        });
    })

</script>