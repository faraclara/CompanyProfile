<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
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
            'title'     => 'Manajemen User',
            'user'      => User::get(),
            'content'   => 'admin/user/index'
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
            'title'     => 'Tambah User',
            'content'   => 'admin/user/add'
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
            'name'  =>  'required',
            'email' =>  'required|unique:users',
            'password'  =>  'required',
            're_password'   =>  'required|same:password',
        ]); 

        $data['password']   = Hash::make($data['password']);

        // masukkin data ke db user
        User::create($data);
        return redirect('/admin/user');
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
            'title'     => 'Edit User',
            'user'      => User::find($id),
            'content'   => 'admin/user/add'
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
        $user = User::find($id);
        $data = $request->validate([
            'name'  =>  'required',
            'email' =>  'required|unique:users,email,' . $user->id,
            // 'password'  =>  'required',
            're_password'   =>  'same:password',
        ]); 


        if($request->password){
            $data['password']   = Hash::make($data['password']);
        }else{
            $data['password']   = $user->password;
        }
        $user->update($data);
        return redirect('/admin/user');
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
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user');
    }
}
