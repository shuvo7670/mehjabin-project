<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    static function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = DB::table('products')
                        ->join('categories','products.category_id','categories.id')
                        ->select('products.*','categories.category_name')
                        ->get();
        $categories = Category::where('status',1)->get();
        return view('backend.pages.product.list',compact('products','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'old_price' => 'nullable',
            'new_price' => 'required',
            'category_id' => 'required',
            'product_image' => 'required|image',
        ]);
        try {
            $product = new Product();
                if ($request->hasFile('product_image')) {
                    $image = $request->file('product_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/products/');
                    $image->move($destinationPath, $name);
                    $product->product_image = $name;
                }
            $product->product_name = $request->product_name;
            $product->product_slug = $this->make_slug($request->product_name);
            $product->description = $request->description;
            $product->old_price = $request->old_price;
            $product->new_price = $request->new_price;
            $product->category_id = $request->category_id;
            $product->save();
            return back()->with('success','Product Added successfully');
        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Product::where('id',$request->product_id)->first();
        $categories = Category::where('status',1)->get();
        return view('backend.pages.product.modals.product_edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $product = Product::findOrFail($request->product_id);
                if ($request->hasFile('product_image')) {
                    // Delete Old Image
                    unlink('uploads/products/'.$product->product_image);
                    // End Delete Old Image
                    $image = $request->file('product_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/products/');
                    $image->move($destinationPath, $name);
                    $product->product_image = $name;
                }
            $product->product_name = $request->product_name;
            $product->product_slug = $this->make_slug($request->product_name);
            $product->description = $request->description;
            $product->old_price = $request->old_price;
            $product->new_price = $request->new_price;
            $product->category_id = $request->category_id;
            $product->save();
            return back()->with('message','Product Updated successfully');
        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        unlink('uploads/products/'.$product->product_image);
        $product->delete();
        return back()->with('message','Successfully Product Deleted!!');

    }
}
