<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Order;
class CheckoutController extends Controller
{
    public function showCheckoutPage()
    {
    	$carts = Cart::content();
	 	$cartSubTotal = Cart::subtotal();
    	return view('frontend.pages.checkout',compact('carts','cartSubTotal'));
    }

    // Confirm Order
    public function confirmOrder(Request $request)
    {
    	$product_name = " ";
    	  foreach (Cart::content() as $item) {
           	$product_name .= "Product Name : ".$item->name."-qty--".$item->qty." ";
           }
        $cartSubTotal = Cart::subtotal();
        // Validation
        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);
        // Data Store To Database
        try {
           $order = new Order();
           $order->customer_name = $request->customer_name;
           $order->customer_phone = $request->customer_phone;
           $order->customer_address = $request->customer_address;
           $order->product_info = $product_name;
           $order->total_amount = $cartSubTotal;
           $order->save();
           return back();
           Cart::destroy();

        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }
}
