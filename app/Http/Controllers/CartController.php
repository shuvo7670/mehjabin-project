<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class CartController extends Controller
{
    public function addToCart(Request $request,$id){

	   	$single_product=DB::table('products')->where('id',$id)->first();
		 	$data=array();
		   	$data['id']=$single_product->id;
		   	$data['name']=$single_product->product_name;
		   	$data['price']=$single_product->new_price;
		   	$data['qty']=1;
		   	$data['weight'] = 1;
		   	Cart::add($data);
	 }

	 // Show Cart Page
	 public function showCartPage()
	 {
	 	$carts = Cart::content();
	 	$cartSubTotal = Cart::subtotal();
	 	return view('frontend.pages.cart',compact('carts','cartSubTotal'));
	 }

	 public function updateCart(Request $request,$rowId)
	 {
		Cart::update($rowId,$request->qty);
	 }
	 public function cartUpdate()
	 {
	 	$carts = Cart::content();
	 	$cartSubTotal = Cart::subtotal();
	 	return view('frontend.pages.cart-data',compact('carts','cartSubTotal'));
	 }
	 public function removeCart(Request $Request,$rowId)
	 {
	 	Cart::remove($rowId);
	 }
}
