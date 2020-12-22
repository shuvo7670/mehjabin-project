@extends('frontend.master')
@section('content')
      <div class="page-title-area">
         <div class="container">
            <div class="page-title-content">
              <div class="caption text-center">
                    <h2>Product Details</h2>
                </div>
            </div>
         </div>
      </div>
      <section class="products-details-area ptb-50">
         <div class="container">
            <div class="products-details-desc">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6">
                  	<img src="{{asset('uploads/products/'.$singleProduct->product_image)}}">
                  </div>
                  <div class="col-lg-6 col-md-6 mt-3">
                     <div class="product-content content-two">
                        <h3>{{$singleProduct->product_name}}</h3>
                        <div class="price">
							@if($singleProduct->old_price)<del class="mr-2">{{$singleProduct->old_price.'৳'}}</del> @endif {{$singleProduct->new_price.'৳'}}
                        </div>
                        <div>
                        	{!! $singleProduct->description !!}
                        </div class="products-info">
                        <ul class="products-info">
                        <div class="product-quantities">
                           <span>Quantities:</span>
                           <div class="input-counter">
                              <span class="minus-btn">
                              <i class='bx bx-minus'></i>
                              </span>
                              <input type="text" value="1">
                              <span class="plus-btn">
                              <i class='bx bx-plus'></i>
                              </span>
                           </div>
                        </div>
                        <div class="product-add-to-cart">
                           <button type="submit" class="default-btn">
                           <i class="flaticon-shopping-cart"></i>
                           Add to cart
                           <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="arrivals-products-area pt-50 pb-20">
         <div class="container">
            <div class="row">
            	 <div class="caption text-center">
                    <h2>Related Product</h2>
                </div>
                    @foreach($relatedProduct as $product)
                      <div class="col-lg-3 col-sm-6  no-margin product-item-holder hover mt-4">
                        <div class="product-item"  style="text-align:center">
                          <div class="image" style="height:280px;">
                              <a href="{{URL::to('product/'.$product->product_slug)}}">
                                <img alt="No Image" src="{{asset('uploads/products/'.$product->product_image)}}" style="width:100%;height:100%;">
                              </a>
                            </div>
                            <div class="body">
                              <div class="title" style="max-height:38px;overflow: hidden; font-size: 18px;">
                                <a href="{{URL::to('product/'.$product->product_slug)}}">{{$product->product_name}}</a>
                              </div>
                              <hr style="margin-bottom: 0 !important;">
                                <p style="text-align:center; font-size: 18px;">@if($product->old_price)<del class="mr-2">{{$product->old_price.'৳'}}</del> @endif {{$product->new_price.'৳'}}</p>
                              </div>
                            <div class="prices">
                              <div class="btn-group">
                                <a href="{{URL::to('product/'.$product->product_slug)}}" class="btn btn-info bg-custom">Details</a>
                                  <button class="btn btn-info bg-custom addCart" data-id="{{$product->id}}">Add to cart</button>
                              </div>
                            </div>
                        </div>
                        
                      </div>
                       @endforeach
            </div>
         </div>
      </section>
      @endsection
            @section('custom_scripts')
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script>

          jQuery(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
              jQuery('.addCart').click(function(){
                  var id = $(this).data('id');
                  if(id){
                      $.ajax({
                          url : '{{ url("add/cart/")}}/'+id,
                          type : 'get',
                          success: function(data){
                              swal({
                                    title: 'Success',
                                    text: 'Successfully Product Added To Cart!!',
                                    icon: 'success',
                                })
                          }

                      });
                  }
                  
              }); 


          });
      </script> 
      @endsection