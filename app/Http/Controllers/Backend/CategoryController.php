<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
class CategoryController extends Controller
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
        $categories = Category::where('status',1)->get();
        return view('backend.pages.category.list',compact('categories'));
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
            'category_name' => 'required',
            'category_slug' => 'nullable',
        ]);
        // Data Store To Database
        try {
           $category = new Category();
           $category->category_name = $request->category_name;
           $category->category_slug = $this->make_slug($request->category_name);
           $category->save();
           return back('message','Successfully Category Added!!');

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
    public function edit($id)
    {
        //
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
            $category = Category::findOrFail($request->category_id);
            $category->category_name = $request->category_name;
            $category->category_slug = $this->make_slug($request->category_name);
            $category->save();
            return back('message','Successfully Category Updated!!');


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
        $changeProductCategoryID = Product::where('category_id',$request->category_id)->get();
        $changeProductCategoryID->category_id = 'uncategorized';
        foreach($changeProductCategoryID as $result){
            $result->category_id = 1;
            $result->save();
        }
        $category = Category::findOrFail($request->category_id);
        $category->delete();
        return back()->with('message','Successfully Category Deleted!!!');

    }
}
