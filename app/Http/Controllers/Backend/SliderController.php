<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::all();
        return view('backend.pages.slider.list',compact('sliders'));
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
            'slider_image' => 'required',
            'product_link' => 'nullable',
        ]);
        // Data Store To Database
        try {
           $slider = new Slider();
            if ($request->hasFile('slider_image')) {
                $image = $request->file('slider_image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/sliders/');
                $image->move($destinationPath, $name);
                $slider->slider_image = $name;
                $slider->product_link = $request->product_link;
                $slider->save();
                return back()->with('message','Slider Added successfully');
            }
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
        // Validation
        $request->validate([
            'slider_image' => 'nullable|image',
            'product_link' => 'nullable',
        ]);
        // Data Store To Database
        try {
           $slider = Slider::findOrFail($request->slider_id);
            if ($request->hasFile('slider_image')) {
                // Delete Old Image
                unlink('uploads/sliders/'.$slider->slider_image);
                // End Delete Old Image
                $image = $request->file('slider_image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/sliders/');
                $image->move($destinationPath, $name);
                $slider->slider_image = $name;
                $slider->product_link = $request->product_link;
                $slider->save();
                return back()->with('message','Slider Updated successfully');
            }else{
                $slider->product_link = $request->product_link;
                $slider->save();
                return back()->with('message','Slider Updated successfully');
            }
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
        $slider = Slider::findOrFail($request->slider_id);
        unlink('uploads/sliders/'.$slider->slider_image);
        $slider->delete();
        return back()->with('message','Successfully Slider Deleted!!!');

    }
}
