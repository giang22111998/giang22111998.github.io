<?php

namespace App\Http\Controllers;

use App\setting;
use App\Vendor;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();

        return view('backend.setting.index', ['setting' => $setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 1. step 1 validate

        // 2. update dữ liệu
        $setting = Setting::findorFail($id);
        $setting->company = $request->input('company');
        $setting->phone = $request->input('phone');
        $setting->hotline = $request->input('hotline');
        $setting->address = $request->input('address');
        $setting->address2 = $request->input('address2');
        $setting->tax = $request->input('tax');
        $setting->facebook = $request->input('facebook');
        $setting->email = $request->input('email');
        $setting->introduce = $request->input('introduce');
        $setting->description = $request->input('description');

        if ($request->hasFile('new_image')) {
            // xóa file cũ
            // @unlink(public_path($setting->image));
            // get file mới
            $file = $request->file('new_image');
            // đặt tên cho file
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/setting/';
            // upload file
            $file->move($path_upload,$filename);

            $setting->image = $path_upload.$filename;
        }

        $setting->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.setting.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
