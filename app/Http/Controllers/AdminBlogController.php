<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBlogController extends Controller
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
            'title'     => 'Manajemen Blog',
            'blog'      => Blog::with('kategori')->get(),
            'content'   => 'admin/blog/index'
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
            'title'     => 'Tambah Blog',
            'kategori'  => Kategori::get(),
            'content'   => 'admin/blog/add'
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



        $data = $request->validate([
            'title'  =>  'required',
            'body' =>  'required',
            'kategori_id' =>  'required',
            'cover'  =>  'required',
        ]);
        


        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $file_name = time() . "_" . $cover->getClientOriginalName();


            $storage = 'uplouds/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
        }else{
            $data['cover'] = null;
        }


        // masukkin data ke db blog
        Blog::create($data);
        Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/posts/blog');
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
        $data =[
            'title'     => 'Edit blog',
            'blog'      => Blog::find($id),
            'content'   => 'admin/blog/show'
        ];
        return view('admin.layouts.wrapper', $data);
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
            'title'     => 'Edit blog',
            'blog'      => Blog::find($id),
            'kategori'  => Kategori::get(),
            'content'   => 'admin/blog/add'
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
        $blog = Blog::find($id);
        $data = $request->validate([
            'title'  =>  'required',
            'body' =>  'required',
            'kategori_id' =>  'required',
            // 'cover'  =>  'required',
        ]);
        
        //uploud cover
        if($request->hasFile('cover')){

            if($blog->cover != null){
                unlink($blog->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . "_" . $cover->getClientOriginalName();


            $storage = 'uplouds/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
        }else{
            $data['cover'] = $blog->cover;
        }


        // masukkin data ke db blog
        $blog->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/posts/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blog = Blog::find($id);

        if($blog->cover != null){
            unlink($blog->cover);
        }
        $blog->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('admin/posts/blog');
    }
}
