<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReturnPolicy;
class ReturnPolicyController extends Controller
{
    public function create()
    {
    	$returnPolicy = ReturnPolicy::findOrFail(1);
    	return view('backend.pages.pages.return-policy',compact('returnPolicy'));
    }
    public function update(Request $request)
    {
    	try {
    		$returnPolicy = ReturnPolicy::findOrFail(1);
    		$returnPolicy->text = $request->text;
    		 if ($request->hasFile('return_policy_thumbnail')) {
    		 	// Delete Old Image
                unlink('uploads/thumbnails/'.$returnPolicy->thumbnail_image);
                // End Delete Old Image
                $image = $request->file('return_policy_thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/thumbnails/');
                $image->move($destinationPath, $name);
                $returnPolicy->thumbnail_image = $name;
            }
         $returnPolicy->save();
         return back()->with('success','Return Policy Info Update successfully');
    	} catch (Exception $e) {
    		
    	}
    }
}
