<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
class ContactUsController extends Controller
{
    public function create()
    {
    	$contactUs = ContactUs::findOrFail(1);
    	return view('backend.pages.pages.contact-us',compact('contactUs'));
    }
    public function update(Request $request)
    {
    	try {
    		$contactUs = ContactUs::findOrFail(1);
    		$contactUs->text = $request->text;
    		 if ($request->hasFile('contactus_thumbnail')) {
    		 	// Delete Old Image
                unlink('uploads/thumbnails/'.$contactUs->thumbnail_image);
                // End Delete Old Image
                $image = $request->file('contactus_thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/thumbnails/');
                $image->move($destinationPath, $name);
                $contactUs->thumbnail_image = $name;
            }
         $contactUs->save();
         return back()->with('success','Contact Us Info Update successfully');
    	} catch (Exception $e) {
    		
    	}
    }
}
