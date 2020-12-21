<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
class AboutUsController extends Controller
{
    public function create()
    {
    	$aboutUs = AboutUs::findOrFail(1);
    	return view('backend.pages.pages.about-us',compact('aboutUs'));
    }
    public function update(Request $request)
    {
    	try {
    		$aboutUs = AboutUs::findOrFail(1);
    		$aboutUs->text = $request->text;
    		 if ($request->hasFile('aboutus_thumbnail')) {
    		 	// Delete Old Image
                unlink('uploads/thumbnails/'.$aboutUs->thumbnail_image);
                // End Delete Old Image
                $image = $request->file('aboutus_thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/thumbnails/');
                $image->move($destinationPath, $name);
                $aboutUs->thumbnail_image = $name;
            }
         $aboutUs->save();
         return back()->with('success','About Us Info Update successfully');
    	} catch (Exception $e) {
    		
    	}
    }
}
