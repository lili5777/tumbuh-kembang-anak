<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Kemampuan;
use App\Models\Usia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function dataanak()
    {
        $data = Anak::all();
        $usia = Usia::all();
        $motorik = Kemampuan::where('status', 'motorik')->get();
        $bicara = Kemampuan::where('status', 'bicara')->get();
        return view('admin.data_anak.index', compact('data', 'usia', 'motorik', 'bicara'));
    }
    public function getMotorik($usia_id)
    {
        $motorik = Kemampuan::where('status', 'motorik')
            ->where('usia_id', $usia_id)
            ->get();
        return response()->json($motorik);
    }

    public function getBicara($usia_id)
    {
        $bicara = Kemampuan::where('status', 'bicara')
            ->where('usia_id', $usia_id)
            ->get();
        return response()->json($bicara);
    }
    public function tambahdataanak(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'usia_id' => 'required|exists:usia,id',
            'tb' => 'required|numeric',
            'bb' => 'required|numeric',
            'lk' => 'required|numeric',
            'motorik_id' => 'required|exists:motorik,id',
            'bicara_id' => 'required|exists:bicara,id',
        ]);

        Anak::create($data);
        return redirect()->route('admin.dataanak')->with('success', 'Data anak berhasil ditambahkan.');
    }
}
