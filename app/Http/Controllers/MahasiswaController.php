<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {

        $data = Mahasiswa::all();

       
        return view('Mahasiswa', compact('data'),[
            "title" => "Data Mahasiswa",
            
        ]);
    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa',[
            "title" => "Tambah Mahasiswa",
        ]);
    }

    public function insertdata(Request $request)
    {

        /// insert data ke database
        $data = Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan!');

    }
}