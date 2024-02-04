<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServiceController extends Controller
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
            'title'     => 'Manajemen Service',
            'service'      => Service::get(),
            'content'   => 'admin/service/index'
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
            'title'     => 'Tambah Service',
            'content'   => 'admin/service/add'
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
            'title'  =>  'required',
            'icon'  =>  'required',
            'desc'  =>  'required',
        ]); 



        // masukkin data ke db Service
        Service::create($data);
        Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/service');
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
            'title'     => 'Edit Service',
            'service'      => Service::find($id),
            'content'   => 'admin/service/add'
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
        $service = Service::find($id);
        $data = $request->validate([
            'title'  =>  'required',
            'icon'  =>  'required',
            'desc'  =>  'required',
        ]); 


        // if($request->password){
        //     $data['password']   = Hash::make($data['password']);
        // }else{
        //     $data['password']   = $service->password;
        // }
        $service->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/service');
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
        $service = Service::find($id);
        $service->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('admin/service');
    }
}
