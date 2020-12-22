@extends('frontend.master')
@section('content')
    @include('frontend.partials._category_slider')
  <div id="products-tab mt-4" class="wow fadeInUp animated" style="margin-top: 20px !important; visibility: visible; animation-name: fadeInUp;">
    <div class="container">
      <div class="tab-holder">
          <!-- Tab panes -->
          <div class="tab-content" style="display: grid;display:flow-root;">
            <div class="tab-pane active">
              <div class="product-grid-holder">
                <div class="row">
                    <div class="caption text-center">
                        <h2>All Product</h2>
                    </div>
                    @foreach($products as $product)
                      <div class="col-lg-3 col-sm-6  no-margin product-item-holder hover">
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
          </div>
        </div>
      </div>
    </div>
  </div>
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