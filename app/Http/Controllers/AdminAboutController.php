<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutController extends Controller
{
    //
    public function index()
    {
        //
        $data =[
            'title'     => 'Manajemen About',
            'about'      => About::first(),
            'content'   => 'admin/about/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
        //
        $about = About::first();
        $data = $request->validate([
            'name'  =>  'required',
            'desc' =>  'required',
            // 'cover' =>  'required',
        ]);
        
        

        //uploud gambar
        if($request->hasFile('cover')){

            if($about->cover != null){
                unlink($about->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . "_" . $cover->getClientOriginalName();


            $storage = 'uplouds/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
        }else{
            $data['cover'] = $about->cover;
        }


        // masukkin data ke db about
        $about->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/about');
}

};
