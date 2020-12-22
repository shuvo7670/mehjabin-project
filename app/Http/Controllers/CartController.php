<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class CartController extends Controller
{
    public function single_product_cart(Request $request,$id){

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
	 	return view('frontend.pages.cart');
	 }
}
