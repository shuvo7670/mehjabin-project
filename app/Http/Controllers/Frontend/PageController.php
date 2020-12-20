<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shoeCategoryProductPage()
    {
        return view('frontend.pages.category-product');
    }
}
