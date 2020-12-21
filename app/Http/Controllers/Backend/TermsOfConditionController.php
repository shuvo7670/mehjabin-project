<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsOfCondition;
class TermsOfConditionController extends Controller
{
    public function create()
    {
    	$termsOfCondition = TermsOfCondition::findOrFail(1);
    	return view('backend.pages.pages.terms-of-condition',compact('termsOfCondition'));
    }
    public function update(Request $request)
    {
    	try {
    		$termsOfCondition = TermsOfCondition::findOrFail(1);
    		$termsOfCondition->text = $request->text;
    		 if ($request->hasFile('terms_of_condition_thumbnail')) {
    		 	// Delete Old Image
                 unlink('uploads/thumbnails/'.$termsOfCondition->thumbnail_image);
                // End Delete Old Image
                $image = $request->file('terms_of_condition_thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/thumbnails/');
                $image->move($destinationPath, $name);
                $termsOfCondition->thumbnail_image = $name;
            }
         $termsOfCondition->save();
         return back()->with('success','Terms & Condition Update successfully');
    	} catch (Exception $e) {
    		
    	}
    }
}
