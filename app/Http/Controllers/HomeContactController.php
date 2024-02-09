<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use RealRashid\SweetAlert\Facades\Alert;


class HomeContactController extends Controller
{
    //
    function index(){
        $data = [
            'content'   => 'home/contact/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function send(Request $request){
        $data = $request->validate([
            'name'  => 'required',
            'desc'  => 'required'
        ]);

        Pesan::create($data);
        Alert::success('Sukses', 'Pesan anda berhasil dikirim');
        return redirect('/contact');
    }
}
