<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Kemampuan;
use App\Models\Rekomendasi;
use App\Models\Usia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    //
    public function index()
    {
        $normalCount = Anak::where('ketegori', 'Normal')->count();
        $sedangCount = Anak::where('ketegori', 'Risiko Sedang')->count();
        $beratCount = Anak::where('ketegori', 'Risiko Berat')->count();
        return view('admin.index', compact('normalCount', 'sedangCount', 'beratCount'));
    }

    public function dataanak()
    {
        $data = Anak::orderBy('created_at', 'desc')->paginate(10);
        // $data=Anak::paginate(15);
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
            'usia_id' => 'required|exists:usias,id',
            'tb' => 'required|numeric',
            'bb' => 'required|numeric',
            'lk' => 'required|numeric',
            'motorik_id' => 'required|exists:kemampuans,id',
            'bicara_id' => 'required|exists:kemampuans,id',
        ]);

       $kategori = $this->proseskategori($data['usia_id'], $data['lk'], $data['bb'], $data['tb'], $data['motorik_id'], $data['bicara_id']);
        
        $anak= new Anak();
        $anak->fill($data);
        $anak->ketegori = $kategori;
        $anak->save();
       

        return redirect()->route('admin.dataanak')->with('success', 'Data anak berhasil ditambahkan.');
    }

    private function proseskategori($usia_id, $lk, $bb, $tb, $motorik_id, $bicara_id){
        // Inisialisasi level risiko (default: Normal)
        $lk_risk = 'N';      // Lingkar Kepala
        $bb_risk = 'N';      // Berat Badan
        $tb_risk = 'N';      // Tinggi Badan
        $motorik_risk = 'N'; // Motorik
        $bicara_risk = 'N';  // Bicara

        switch ($usia_id) {
            case 1:
                // Lingkar kepala
                if ($lk >= 32 && $lk <= 33) $lk_risk = 'S';
                elseif ($lk < 32) $lk_risk = 'B';
                
                // Berat badan
                if ($bb >= 2.3 && $bb <= 2.5) $bb_risk = 'S';
                elseif ($bb < 2.3) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 44 && $tb <= 45) $tb_risk = 'S';
                elseif ($tb < 44) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 2) ? 'S' : (($motorik_id == 3) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 5) ? 'S' : (($bicara_id == 6) ? 'B' : 'N');

                break;

            case 2:
                // Lingkar kepala
                if ($lk >= 37 && $lk <= 38) $lk_risk = 'S';
                elseif ($lk < 37) $lk_risk = 'B';

                // Berat badan
                if ($bb >= 4.8 && $bb <= 5.2) $bb_risk = 'S';
                elseif ($bb < 4.8) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 55 && $tb <= 57) $tb_risk = 'S';
                elseif ($tb < 55) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 8) ? 'S' : (($motorik_id == 9) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 11) ? 'S' : (($bicara_id == 12) ? 'B' : 'N');

                break;

            case 3:
                // Lingkar kepala
                if ($lk >= 39 && $lk <= 40) $lk_risk = 'S';
                elseif ($lk < 39) $lk_risk = 'B';

                // Berat badan
                if ($bb >= 5.8 && $bb <= 6.4) $bb_risk = 'S';
                elseif ($bb < 5.8) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 61 && $tb <= 63) $tb_risk = 'S';
                elseif ($tb < 61) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 14) ? 'S' : (($motorik_id == 15) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 17) ? 'S' : (($bicara_id == 18) ? 'B' : 'N');

                break;

            case 4:
                // Lingkar kepala
                if ($lk >= 41 && $lk <= 42) $lk_risk = 'S';
                elseif ($lk < 41) $lk_risk = 'B';

                // Berat badan
                if ($bb >= 6.5 && $bb <= 6.9) $bb_risk = 'S';
                elseif ($bb < 6.5) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 65 && $tb <= 67) $tb_risk = 'S';
                elseif ($tb < 65) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 20) ? 'S' : (($motorik_id == 21) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 23) ? 'S' : (($bicara_id == 24) ? 'B' : 'N');

                break;

            case 5:
                // Lingkar kepala
                if ($lk >= 43 && $lk <= 44) $lk_risk = 'S';
                elseif ($lk < 43) $lk_risk = 'B';

                // Berat badan
                if ($bb >= 8.0 && $bb <= 8.9) $bb_risk = 'S';
                elseif ($bb < 8.0) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 70 && $tb <= 73) $tb_risk = 'S';
                elseif ($tb < 70) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 26) ? 'S' : (($motorik_id == 27) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 29) ? 'S' : (($bicara_id == 30) ? 'B' : 'N');

                break;

            case 6:
                // Lingkar kepala
                if ($lk >= 45 && $lk <= 46) $lk_risk = 'S';
                elseif ($lk < 45) $lk_risk = 'B';

                // Berat badan
                if ($bb >= 10.0 && $bb <= 10.9) $bb_risk = 'S';
                elseif ($bb < 10.0) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 78 && $tb <= 81) $tb_risk = 'S';
                elseif ($tb < 78) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 32) ? 'S' : (($motorik_id == 33) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 35) ? 'S' : (($bicara_id == 36) ? 'B' : 'N');

                break;

            case 7:
                // Lingkar kepala
                if ($lk >= 47 && $lk <= 48) $lk_risk = 'S';
                elseif ($lk < 47) $lk_risk = 'B';

                // Berat badan
                if ($bb >= 12.5 && $bb <= 13.9) $bb_risk = 'S';
                elseif ($bb < 12.5) $bb_risk = 'B';

                // Tinggi badan
                if ($tb >= 88 && $tb <= 91) $tb_risk = 'S';
                elseif ($tb < 88) $tb_risk = 'B';

                $motorik_risk = ($motorik_id == 38) ? 'S' : (($motorik_id == 39) ? 'B' : 'N');
                $bicara_risk = ($bicara_id == 41) ? 'S' : (($bicara_id == 42) ? 'B' : 'N');

                break;
        }

        // Gabungkan semua risiko
        $risks = [$lk_risk, $bb_risk, $tb_risk, $motorik_risk, $bicara_risk];

        // Tentukan risiko akhir
        if (in_array('B', $risks)) {
            return "Risiko Berat";
        } elseif (in_array('S', $risks)) {
            return "Risiko Sedang";
        } else {
            return "Normal";
        }
    }

    public function editdataanak(Request $request, $id)
    {
        $anak = Anak::findOrFail($id);
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'usia_id' => 'required|exists:usias,id',
            'tb' => 'required|numeric',
            'bb' => 'required|numeric',
            'lk' => 'required|numeric',
            'motorik_id' => 'required|exists:kemampuans,id',
            'bicara_id' => 'required|exists:kemampuans,id',
        ]);

        
        $kategori = $this->proseskategori($data['usia_id'], $data['lk'], $data['bb'], $data['tb'], $data['motorik_id'], $data['bicara_id']);
        

        $anak->update($data);
        $anak2 = Anak::findOrFail($id);
        $anak2->ketegori = $kategori;
        $anak2->save();

        return redirect()->route('admin.dataanak')->with('success', 'Data anak berhasil diperbarui.');
    }

    public function hapusdataanak($id)
    {
        $anak = Anak::findOrFail($id);
        $anak->delete();
        return redirect()->route('admin.dataanak')->with('success', 'Data anak berhasil dihapus.');
    }

    // knn
    public function dataknn()
    {
        $data = Anak::all();
        $usia = Usia::all();
        $motorik = Kemampuan::where('status', 'motorik')->get();
        $bicara = Kemampuan::where('status', 'bicara')->get();
        
        return view('admin.knn.index', compact('data', 'usia', 'motorik', 'bicara'));
    }

    public function prosesknn(Request $request)
    {
       $request->validate([
            'nama' => 'required|string|max:255',
            'usia_id' => 'required|exists:usias,id',
            'tb' => 'required|numeric',
            'bb' => 'required|numeric',
            'lk' => 'required|numeric',
            'motorik_id' => 'required|exists:kemampuans,id',
            'bicara_id' => 'required|exists:kemampuans,id',
        ]);


        $newChild= new Anak();
        $newChild->nama = $request->nama;
        $newChild->usia_id = $request->usia_id;
        $newChild->lk = $request->lk;
        $newChild->bb = $request->bb;
        $newChild->tb = $request->tb;
        $newChild->motorik_id = $request->motorik_id;
        $newChild->bicara_id = $request->bicara_id;
        $newChild->save();
        $motorikIdnew = $newChild->motorik_id;
        if (in_array($motorikIdnew, [1, 7, 13, 19, 25, 31, 37])) {
            $motorikIdnew = 1;
        } elseif (in_array($motorikIdnew, [2, 8, 14, 20, 26, 32, 38])) {
            $motorikIdnew= 2;
        } elseif (in_array($motorikIdnew, [3, 9, 15, 21, 27, 33, 39])) {
            $motorikIdnew = 3;
        } else {
            $motorikIdnew = 0;
        }

        // Kategorisasi bicara
        $bicaraIdnew = $newChild->bicara_id;
        if (in_array($bicaraIdnew, [4, 10, 16, 22, 28, 34, 40])) {
            $bicaraIdnew = 1;
        } elseif (in_array($bicaraIdnew, [5, 11, 17, 23, 29, 35, 41])) {
            $bicaraIdnew = 2;
        } elseif (in_array($bicaraIdnew, [6, 12, 18, 24, 30, 36, 42])) {
            $bicaraIdnew = 3;
        } else {
            $bicaraIdnew = 0;
        }


        $allChildren = Anak::where('id', '!=', $newChild->id)
            ->where('usia_id', $request->usia_id)
            ->get()
            ->map(function ($anak) {
                // Kategorisasi motorik
                $motorikId = $anak->motorik_id;
                if (in_array($motorikId, [1, 7, 13, 19, 25, 31, 37])) {
                    $anak->motorik_category = 1;
                } elseif (in_array($motorikId, [2, 8, 14, 20, 26, 32, 38])) {
                    $anak->motorik_category = 2;
                } elseif (in_array($motorikId, [3, 9, 15, 21, 27, 33, 39])) {
                    $anak->motorik_category = 3;
                } else {
                    $anak->motorik_category = 0;
                }

                // Kategorisasi bicara
                $bicaraId = $anak->bicara_id;
                if (in_array($bicaraId, [4,10,16,22,28,34,40])) {
                    $anak->bicara_category = 1;
                } elseif (in_array($bicaraId, [5,11,17,23,29,35,41])) {
                    $anak->bicara_category = 2;
                } elseif (in_array($bicaraId, [6,12,18,24,30,36,42])) {
                    $anak->bicara_category = 3;
                } else {
                    $anak->bicara_category = 0;
                }

                return $anak;
            });
        
        $distances = [];
        foreach ($allChildren as $child) {
            $distance = sqrt(
                pow($newChild->tb - $child->tb, 2) +
                pow($newChild->bb - $child->bb, 2) +
                pow($newChild->lk - $child->lk, 2) +
                pow($motorikIdnew - $child->motorik_category, 2) +
                pow($bicaraIdnew - $child->bicara_category, 2)
            );
            // dd($child);
            // dd($newChild->tb ,"-", $child->tb, $newChild->bb, "-", $child->bb, $newChild->lk, "-", $child->lk, $motorikIdnew, "-", $child->motorik_category, $bicaraIdnew, "-", $child->bicara_category );
            $distances[] = [
                'anak' => $child,
                'distance' => $distance
            ];
        }
        

        usort($distances, function ($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        // dd($distances);

        $nearestNeighbors = array_slice($distances, 0, 5);
        // return json_encode($nearestNeighbors);

        // Hitung voting mayoritas
        $votingResults = [];
        foreach ($nearestNeighbors as $neighbor) {
            $category = $neighbor['anak']->ketegori;
            if (!isset($votingResults[$category])) {
                $votingResults[$category] = 0;
            }
            $votingResults[$category]++;
        }

        // Tentukan kategori berdasarkan voting mayoritas
        arsort($votingResults);
        $finalCategory = key($votingResults);
        $newChild->ketegori = $finalCategory;
        $newChild->update();
        

        $rekomendasi=Rekomendasi::where('usia_id',$newChild->usia_id)->where('kategori',$newChild->ketegori)->get();
        // dd($rekomendasi);

        $usia=Usia::all();
        $kemampuan= Kemampuan::all();
        session([
            'knn_results' => [
                'newChild' => $newChild,
                'kValue' => 5,
                'distances' => $distances,
                'nearestNeighbors' => $nearestNeighbors,
                'votingResults' => $votingResults,
                'usia' => $usia,
                'kemampuan' => $kemampuan,
                'rekomendasi'=>$rekomendasi,
            ]
        ]);

        return back()->with('success', 'Data berhasil diproses dengan algoritma KNN. Hasil klasifikasi: ' . $finalCategory);
        
    }

    public function generateReport()
    {
        // Get all the KNN results from session
        $knnResults = session('knn_results');

        if (!$knnResults) {
            return redirect()->back()->with('error', 'Tidak ada data hasil KNN yang tersedia');
        }

        $data = [
            'newChild' => $knnResults['newChild'] ?? null,
            'kValue' => $knnResults['kValue'] ?? null,
            'distances' => $knnResults['distances'] ?? [],
            'nearestNeighbors' => $knnResults['nearestNeighbors'] ?? [],
            'votingResults' => $knnResults['votingResults'] ?? [],
            'usia' => $knnResults['usia'] ?? collect(),
            'kemampuan' => $knnResults['kemampuan'] ?? collect(),
            'rekomendasi' => $knnResults['rekomendasi'] ?? null,
        ];

        $pdf = Pdf::loadView('admin.report', $data);
        return $pdf->download('laporan-knn-' . now()->format('YmdHis') . '.pdf');
    }
}
