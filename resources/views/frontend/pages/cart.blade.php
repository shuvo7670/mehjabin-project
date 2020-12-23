@extends('frontend.master')

@section('content')
      <section class="cart-area ptb-50">
         <div class="container">
         	<div class="caption text-center mb-5">
                 <h2>Your Cart</h2>
             </div>
            <div class="row" id="cartData">
            	@include('frontend.pages.cart-data')
            </div>
         </div>
      </section>
@endsection
@section('custom_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	function cartUpdate(id)
	{
			var qty = $('#qty-'+id).val();
            var route = '{{ url("update/cart/")}}/'+id;
		    $.ajax({
                data : {"qty": qty},
                type : "GET",
                url  : route,
                success : function(){
					 $.get("{{route('pages.cartUpdate')}}",function(data){
                        $('#cartData').empty().html(data);
                    });
                },
                error: function(response) {
                 
                }
            });
	}
	function cartRemove(id)
	{
		   var route = '{{ url("remove/cart/")}}/'+id;
		    $.ajax({
                type : "GET",
                url  : route,
                success : function(){
					 $.get("{{route('pages.cartUpdate')}}",function(data){
                          swal({
                                title: 'Success',
                                text: 'Successfully Product Removed From Cart!!',
                                icon: 'success',
                            });
                        $('#cartData').empty().html(data);
                    });
                },
                error: function(response) {
                 
                }
            });
	}
</script>
@endsection