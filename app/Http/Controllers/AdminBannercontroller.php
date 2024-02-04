<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannercontroller extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data =[
            'title'     => 'Manajemen Banner',
            'banner'      => Banner::get(),
            'content'   => 'admin/banner/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data =[
            'title'     => 'Tambah Banner',
            'content'   => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
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
        // dd($request->all());
        //validasi data
        $data = $request->validate([
            'headline'  =>  'required',
            'desc' =>  'required',
            // 'urutan'  =>  'required',
            'gambar'  =>  'required',
        ]);
        
        
        $data['urutan'] = 0;
        //uploud gambar
        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time() . "_" . $gambar->getClientOriginalName();


            $storage = 'uplouds/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
        }else{
            $data['gambar'] = null;
        }


        // masukkin data ke db banner
        banner::create($data);
        Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/banner');
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
        $data =[
            'title'     => 'Edit banner',
            'banner'      => Banner::find($id),
            'content'   => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $banner = Banner::find($id);
        $data = $request->validate([
            'headline'  =>  'required',
            'desc' =>  'required',
            // 'urutan'  =>  'required',
            // 'gambar'  =>  'required',
        ]);
        
        
        $data['urutan'] = 0;
        //uploud gambar
        if($request->hasFile('gambar')){

            if($banner->gambar != null){
                unlink($banner->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . "_" . $gambar->getClientOriginalName();


            $storage = 'uplouds/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
        }else{
            $data['gambar'] = $banner->gambar;
        }


        // masukkin data ke db banner
        $banner->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $banner = banner::find($id);

        if($banner->gambar != null){
            unlink($banner->gambar);
        }
        $banner->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('admin/banner');
    }
}
