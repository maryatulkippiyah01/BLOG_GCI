<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('Register');
    }

    public function Register(Request $request)
    {
        $nama_depan = $request->input('nama_depan');
        $nama_belakang = $request->input('nama_belakang');
        $tgl_lahir = $request->input('tgl_lahir');
        $jenis_kelamin = $request->input('jenis_kelamin');


        // Proses registrasi dan penyimpanan data

        // Redirect ke halaman welcome dengan menyertakan data nama depan dan nama belakang
        return redirect('/Welcome')
        ->with('nama_depan', $nama_depan)
        ->with('nama_belakang', $nama_belakang)
        ->with('tgl_lahir', $tgl_lahir)
        ->with('jenis_kelamin', $jenis_kelamin);
    }

    public function Welcome(Request $request)
    {
        $nama_depan = $request->session()->get('nama_depan');
        $nama_belakang = $request->session()->get('nama_belakang');
        $tgl_lahir = $request->session()->get('tgl_lahir');
        $jenis_kelamin = $request->session()->get('jenis_kelamin');


        return view('Welcome', [
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
        ]);
    }
}

