@extends('frontend.master')
@section('content')
    @include('frontend.partials._category_slider')
    <section class="offer-products-area pt-50 pb-20">
        <div class="container">
            <div class="section-title">
               <h2>Special Offer</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 text-center product-list">
                   <div class="single-bestsellers-products">
                      <div class="bestsellers-products-image">
                         <a href="products-details.html"><img src="{{asset('frontend/assets/img/bestsellers-products/bestsellers-products-1.jpg')}}" alt="image"></a>
                         <div class="tag">New</div>
                      </div>
                      <div class="bestsellers-products-content">
                         <h3>
                            <a href="products-details.html">Action Camera</a>
                         </h3>
                         <p class="price det-cart-btn">$150.00</p>
                         <div class="">
                             <a href="" class="btn btn-info bg-custom">Details</a>
                            <button class="btn btn-info bg-custom">Add To Cart</button>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
        </div>
    </section>
@endsection
