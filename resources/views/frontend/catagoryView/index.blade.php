@extends('layouts.frontend')
@section('content')
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <a href="{{url('/')}}"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a  href="{{url('category'.'/'.$category->slug.'/'.$category->id)}}">{{$category->name}}</a>
          </div>
       </div>
    </div>
 </section>
 <section class="shop-list section-padding">
    <div class="container">
       <div class="row">
          <div class="col-md-3">
              <div class="shop-filters">
                 <div id="accordion">
                    <div class="card">
                       <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                             <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             SubCategory <span class="mdi mdi-chevron-down float-right"></span>
                             </button>
                          </h5>
                       </div>

                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body card-shop-filters">
                             @foreach($category->subcategory as $key => $subcategory)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input common_selector subcategory" name="subcategory" id="{{ $subcategory->id }}" value="{{$subcategory->id}}">
                                    <label class="custom-control-label" for="{{ $subcategory->id }}">{{$subcategory->name}} 
                                        <span class="badge badge-warning"></span>
                                    </label>
                                </div>
                             @endforeach
                          </div>    
                       </div>
                    </div>
                    <input type="hidden" name="catagory" id="catagory" value="{{$category->id}}">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Brand <span class="mdi mdi-chevron-down float-right"></span>
                              </button>
                           </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body card-shop-filters">
                              @foreach($brands as $key => $brand)
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" name="brand" class="custom-control-input common_selector brand" id="b-{{$brand->id}}" value="{{$brand->id}}">
                                 <label class="custom-control-label" for="b-{{$brand->id}}">{{$brand->brand}}
                                     {{-- <span class="badge badge-warning">50% OFF</span></label> --}}
                              </div>
                              @endforeach
                           </div>
                        </div>
                    </div>
                    <div class="card">
                       <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             Price <span class="mdi mdi-chevron-down float-right"></span>
                             </button>
                          </h5>
                       </div>
                       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body card-shop-filters">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input common_selector price"  name="price" id="p-1" value="1">
                                <label class="custom-control-label" for="p-1">৳10 to ৳100</label>
                             </div>
                             <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input common_selector price"  name="price" id="p-2" value="2">
                                <label class="custom-control-label" for="p-2">৳101 to ৳500</label>
                             </div>
                             <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input common_selector price"  name="price" id="p-3" value="3">
                                <label class="custom-control-label" for="p-3">৳501 to ৳1000</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input common_selector price"  name="price" id="p-4" value="4">
                                <label class="custom-control-label" for="p-4">৳501 to ৳1000</label>
                            </div>
                          </div>
                          
                       </div>
                    </div>
               
                 </div>
              </div>
              <div class="left-ad mt-4">
                 {{-- <img class="img-fluid" src="{{asset('frontend/assets')}}/img/shop.jpg" alt=""> --}}
              </div>
           </div>
          <div class="col-md-9">
             {{-- <a href="#"><img class="img-fluid mb-3" src="{{asset('frontend/assets')}}/img/shop.jpg" alt=""></a> --}}
             <div class="shop-head">
                <a href="{{url('/')}}"><span class="mdi mdi-home"></span> Home</a> <span class="mdi mdi-chevron-right"></span> <a href="{{url('category'.'/'.$category->slug.'/'.$category->id)}}">{{$category->name}}</a>
                 {{-- <span class="mdi mdi-chevron-right"></span> <a href="#">Fruits</a> --}}
                <div class="btn-group float-right mt-2">
                   <select  class="dropdown-menu dropdown-menu-right common_selector" name="sortBy" id="sortBy">
                    <option class="dropdown-item"  selected value="">Select</option>
                    <option class="dropdown-item" value="1">Price (Low to High)</option>
                    <option class="dropdown-item" value="2">Price (High to Low)</option>
                    <option class="dropdown-item" value="3">Name (A to Z)</option>
                   </select>
                </div>
                <h5 class="mb-3">{{$category->name}}</h5>
             </div>
             
             <div class="row" id="defultData">
                @foreach($allproducts as $key => $products)
                <div class="col-md-4 pmb-3">
                    <form id="cartsection-{{ $products->id }}">
                        <div class="product">
                            <input type="hidden" name="id" value="{{$products->id}}">
                            <input type="hidden" name="name" value="{{$products->product_name}}">
                            <input type="hidden" name="product_sku" value="{{$products->product_sku}}">
                            <input type="hidden" name="image" value="{{$products->image}}">
                            <input type="hidden" name="price" value="{{$products->product_price}}">
                            <input type="hidden" name="product_quantity" value="1">
                            @if($products->color_id != 'null')
                            @php $colorData  = json_decode($products->color_id)  @endphp
                            @foreach ($colorData as $key => $color)
                                @foreach($mainColor as $mcolor)
                                    @if($mcolor->id==$color)
                                        @if($key==0)
                                            <input type="hidden" name="color"  value="{{$mcolor->color_name}}">
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                            @endif
                            
                            @if($products->product_size != 'null')
                                @foreach (explode(',',$products->product_size) as $dkey => $size) 
                                @if($dkey == 0)     
                                {{-- {{dd($size);}}                     --}}
                                    <input type="hidden" name="size" value="{{$size}}">
                                @endif  
                                @endforeach
                            @endif
                            <a href="{{url('products'.'/'.$products->product_slug.'/'.$products->id)}}">
                                <div class="product-header">
                                {{-- <span class="badge badge-success">50% OFF</span> --}}
                                <img class="img-fluid" src="{{asset('uploads/product/'.$products->image)}}" alt="">
                                <span class="veg text-success mdi mdi-circle"></span>
                                </div>
                                <div class="product-body">
                                <a href="{{url('products'.'/'.$products->product_slug.'/'.$products->id)}}">{{Str::limit( $products->product_name,20)}}</a>
                                <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{$products->product_measurement}}</h6>

                                </div>
                                <div class="product-footer">
                                <p class="offer-price mb-0">৳{{$products->product_price}} 
                                    {{-- <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span> --}}
                                </p>
                                <button type="button" id="{{$products->id}}" class="btn btn-secondary btn-sm" onclick="addtocart(this)"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
                @endforeach
             </div>
             <div  class="row" id="filterData"></div>
             
             
             <nav>
                <ul class="pagination justify-content-center">
                  {{$allproducts -> links()}}
                   {{-- <li class="page-item disabled">
                      <span class="page-link">Previous</span>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item active">
                      <span class="page-link">
                      2
                      <span class="sr-only">(current)</span>
                      </span>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                   </li> --}}
                </ul>
             </nav>
          </div>
       </div>
    </div>
 </section>
 <section class="product-items-slider section-padding bg-white border-top">
    <div class="container">
       <div class="section-header">
          <h5 class="heading-design-h5">Best Selling Products
             <a class="float-right text-secondary" href="shop.html">View All</a>
          </h5>
       </div>
       <div class="owl-carousel owl-carousel-featured">
           @foreach ($bestSellingProduct as $products)
          <div class="item">
            <form id="cartsection-{{ $products->id }}">
             <div class="product">
                <input type="hidden" name="id" value="{{$products->id}}">
                <input type="hidden" name="name" value="{{$products->product_name}}">
                <input type="hidden" name="product_sku" value="{{$products->product_sku}}">
                <input type="hidden" name="image" value="{{$products->image}}">
                <input type="hidden" name="price" value="{{$products->product_price}}">
                <input type="hidden" name="product_quantity" value="1">
                @if($products->color_id != 'null')
                @php $colorData  = json_decode($products->color_id)  @endphp
                @foreach ($colorData as $key => $color)
                    @foreach($mainColor as $mcolor)
                        @if($mcolor->id==$color)
                            @if($key==0)
                                <input type="hidden" name="color"  value="{{$mcolor->color_name}}">
                            @endif
                        @endif
                    @endforeach
                @endforeach
                @endif
                
                @if($products->product_size != 'null')
                @foreach (explode(',',$products->product_size) as $dkey => $size) 
                @if($dkey == 0)     
                    <input type="hidden" name="size" value="{{$size}}">
                @endif  
                @endforeach
                @endif
                <a href="{{url('products'.'/'.$products->product_slug.'/'.$products->id)}}">
                   <div class="product-header">
                      {{-- <span class="badge badge-success">50% OFF</span> --}}
                      <img class="img-fluid" src="{{asset('uploads/product/'.$products->image)}}" alt="">
                      <span class="veg text-success mdi mdi-circle"></span>
                   </div>
                   <div class="product-body">
                    <a href="{{url('products'.'/'.$products->product_slug.'/'.$products->id)}}">{{Str::limit( $products->product_name,20)}}</a>
                    <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{$products->product_measurement}}</h6>
                   </div>
                   <div class="product-footer">
                    <p class="offer-price mb-0">৳{{$products->product_price}} 
                        {{-- <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span> --}}
                    </p>
                    <button type="button" id="{{$products->id}}" class="btn btn-secondary btn-sm" onclick="addtocart(this)"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                    </div>
                </>
             </div>
            </form>
          </div>
          @endforeach
       </div>
    </div>
 </section>
 <script>
    function addtocart(el){
        var id = el.id;
        var str = $( "#cartsection-"+id+"" ).serialize();
        $.ajax({
            url : '{{url('/addtocart')}}',
            type : 'get',
            data : $( "#cartsection-"+id+"" ).serialize(),
            success: function(data) {
                if(data.success){
                cartupload();
                cartquantity();
               
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    title: ''+ data.success +'',
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                }else{
                cartupload();
                cartquantity();
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Add to cart failed',
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                }       
            }
        })
    }
</script>
<script>
    $(document).ready(function(){   
        //get_sort();
        function filter_data()
        {   
            var catagory = $('#catagory').val();
            var brand = get_filter('brand');
            var subcategory = get_filter('subcategory');
            var price = get_filter('price');
            var sortingval = get_sort();
            // console.log(sortingval);
           $.ajax({
                url : '{{url('/filterproduct')}}',
                type : 'get',
                data : {catagory:catagory,brand:brand,subcategory:subcategory,price:price,sortingval:sortingval},
                success: function(data) {
                    $('#defultData').hide();
                    $('#filterData').html(data);
                }
            })
        }
    
        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }
        
        $('.common_selector').click(function(){
            filter_data();
        });
       
        $('.common_selector').on('change' ,function(){
            get_sort();
            filter_data();
            
        });

        function get_sort()
        {
            //alert('ok');
            var sortBy = [];
            $.each($("#sortBy option:selected"), function(){            
                sortBy.push($(this).val());
            });
            return sortBy;
        }
    });
</script>    
@endsection