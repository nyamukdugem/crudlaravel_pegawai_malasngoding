<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai', compact(['pegawai']));
    }

    public function add()
    {
        return view('pegawai_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            // 'alamat' => 'required',
        ]);

        // versi rollo
        Pegawai::create($request->all());

        // versi malasngoding
        // Pegawai::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat
        // ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai_edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        
        return redirect('/pegawai');
        // return redirect()->back();
    }
}
