<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // Backend Header View File
    public function headerCreate()
    {
        $all_settings = Setting::all();
        return view('backend.pages.settings.header.list',compact('all_settings'));
    }
    // Header Update

    public function headerUpdate(Request $request)
    {
        if($request->website_title){
            $headerSetting = Setting::findOrFail(1);
            $headerSetting->value = $request->website_title;
            $headerSetting->save();
        }
        if($request->website_email){
            $headerSetting = Setting::findOrFail(2);
            $headerSetting->value = $request->website_email;
            $headerSetting->save();
        }
        if($request->hotline){
            $headerSetting = Setting::findOrFail(3);
            $headerSetting->value = $request->hotline;
            $headerSetting->save();
        }
        if ($request->hasFile('website_logo')) {
            $headerSetting = Setting::findOrFail(4);
            // Delete Old Image
            unlink('uploads/logo/'.$headerSetting->value);
            // End Delete Old Image
            $image = $request->file('website_logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/logo/');
            $image->move($destinationPath, $name);
            $headerSetting->value = $name;
            $headerSetting->save();

        }
        return back()->with('message','Header Settings Updated Successfully');
    }
    // Foooter Area Start
    // Backend Header View File
    public function footerCreate()
    {
        $all_settings = Setting::all();
        return view('backend.pages.settings.footer.list',compact('all_settings'));
    }
    public function footerUpdate(Request $request)
    {
        if($request->footer_address){
            $headerSetting = Setting::findOrFail(5);
            $headerSetting->value = $request->footer_address;
            $headerSetting->save();
        }
        if($request->footer_phone){
            $headerSetting = Setting::findOrFail(6);
            $headerSetting->value = $request->footer_phone;
            $headerSetting->save();
        }
        if($request->footer_email){
            $headerSetting = Setting::findOrFail(7);
            $headerSetting->value = $request->footer_email;
            $headerSetting->save();
        }
        if($request->facebook_link){
            $headerSetting = Setting::findOrFail(8);
            $headerSetting->value = $request->facebook_link;
            $headerSetting->save();
        }
        if($request->twitter_link){
            $headerSetting = Setting::findOrFail(9);
            $headerSetting->value = $request->twitter_link;
            $headerSetting->save();
        }
        if($request->linkedin_link){
            $headerSetting = Setting::findOrFail(10);
            $headerSetting->value = $request->linkedin_link;
            $headerSetting->save();
        }
        if($request->whatsapp){
            $headerSetting = Setting::findOrFail(11);
            $headerSetting->value = $request->whatsapp;
            $headerSetting->save();
        }
        if($request->copywrite_text){
            $headerSetting = Setting::findOrFail(12);
            $headerSetting->value = $request->copywrite_text;
            $headerSetting->save();
        }
        return back()->with('message','Header Settings Updated Successfully');
    }
    // Footer Area End
}
