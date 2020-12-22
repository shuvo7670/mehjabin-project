<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function showProductDetails($slug)
    {
    	$singleProduct = Product::where('product_slug',$slug)->first();
    	$relatedProduct = Product::where('category_id',$singleProduct->category_id)
    								->where('id','!=',$singleProduct->id)
    								->latest()
    								->get();
    	return view('frontend.pages.single-product',compact('singleProduct','relatedProduct'));
    }

    // Show Essential Page

    public function showAboutUsPage()
    {
    	return "Hello World";
    }
    public function showContactUsPage()
    {
    	return "Hello World";
    }
    public function showReturnPolicyPage()
    {
    	return "Hello World";
    }
    public function showTermsOfServicesPage()
    {
    	return "Hello World";
    }
}
