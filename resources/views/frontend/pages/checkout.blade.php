@extends('frontend.master')

@section('content')
      <section class="cart-area ptb-50">
         <div class="container">
         	<div class="caption text-center mb-5">
                 <h2>Delivery Information</h2>
             </div>
            <div class="row">
            	 <div class="col-lg-8 col-md-12">
                @include('backend.partials._flash')
                <form action="{{route('order.confirm')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="custom_name">Customer Name</label>
                    <input name="customer_name"  type="text" class="form-control" id="custom_name" placeholder="Enter Name">
                  </div>                  
                  <div class="form-group">
                    <label for="customer_phone">Customer Phone</label>
                    <input name="customer_phone"  type="text" class="form-control" id="customer_phone" placeholder="Enter Phone">
                  </div>                  
                  <div class="form-group">
                    <label for="customer_address">Customer Address</label>
                    <input name="customer_address" type="text" class="form-control" id="customer_address" placeholder="Enter Address">
                  </div>
              
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="cart-totals">
                     <h3>Payment Info</h3>
                     <ul>
                        <li>Subtotal <span>{{$cartSubTotal}}  ৳</span></li>
                        <li>Shipping <span>Free</span></li>
                        <li>Total <span>{{$cartSubTotal}}  ৳</span></li>
                        <li>Payable Total <span>{{$cartSubTotal}}  ৳</span></li>
                     </ul>
                     <button type="submit" class="default-btn">
                     Order Now
                     <span></span>
                     </button>
                  </div>
               </div>
                 </form>
            </div>
         </div>
      </section>
@endsection
@section('custom_scripts')

@endsection