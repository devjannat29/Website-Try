<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        $setting = Setting::first() ?? new Setting();
        return view('admin.pages.setting.setting', compact('setting'));
    }

    public function saveSetting(Request $request)
    {
        $setting = Setting::first() ?? new Setting();
        $setting->site_name = $request->site_name;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->gmail = $request->gmail;
        $setting->hotline = $request->hotline;
        $setting->hours = $request->hours;
        $setting->bteb_code = $request->bteb_code;
        $setting->bmet_license = $request->bmet_license;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/setting'), $filename);
            $setting->logo = 'upload/setting/' . $filename;
        }

        $setting->save();

        return back()->with('success', 'Training center contact details and global settings updated!');
    }
}
