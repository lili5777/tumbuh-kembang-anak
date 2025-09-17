<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laporan Hasil Klasifikasi KNN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 14px;
        }

        .section {
            /* margin-bottom: 20px; */
            page-break-inside: avoid;
        }

        .section-title {
            background-color: #f2f2f2;
            padding: 5px 10px;
            font-weight: bold;
            border-left: 4px solid #333;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            font-size: 12px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        .badge {
            padding: 3px 6px;
            border-radius: 3px;
            font-weight: bold;
            font-size: 12px;
        }

        .badge-normal {
            background-color: #28a745;
            color: white;
        }

        .badge-warning {
            background-color: #ffc107;
            color: black;
        }

        .badge-danger {
            background-color: #dc3545;
            color: white;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .rekomendasi-list {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Laporan Hasil Klasifikasi KNN</h1>
        <p>Tanggal: {{ now()->format('d F Y H:i') }}</p>
    </div>

    <!-- Data Anak Section -->
    <div class="section">
        <div class="section-title">1. Data Anak</div>
        @if($newChild)
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Lingkar Kepala</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Motorik</th>
                        <th>Bicara</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $newChild->nama }}</td>
                        <td>{{ $usia->where('id', $newChild->usia_id)->first()->umur ?? '-' }}</td>
                        <td>{{ $newChild->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $newChild->lk }} cm</td>
                        <td>{{ $newChild->bb }} kg</td>
                        <td>{{ $newChild->tb }} cm</td>
                        <td>{{ $kemampuan->where('id', $newChild->motorik_id)->first()->keterangan ?? '-' }}</td>
                        <td>{{ $kemampuan->where('id', $newChild->bicara_id)->first()->keterangan ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>Belum ada data anak yang diproses</p>
        @endif
    </div>


    <!-- Voting Results Section -->
    <div >
        @if(count($votingResults) > 0)
            <div>
                <p>Berdasarkan perhitungan KNN dengan K={{ $kValue }}, anak Dikategorikan sebagai: <b>{{ $newChild->ketegori }}</b></p>
                {{-- @if($newChild)
                    <div style="padding: 10px; background-color: 
                                @if($newChild->ketegori == 'Normal') #28a745 
                                @elseif($newChild->ketegori == 'Risiko Sedang') #ffc107 
                                @else #dc3545 @endif;
                                color: @if($newChild->ketegori == 'Normal') white 
                                @elseif($newChild->ketegori == 'Risiko Sedang') black 
                                @else white @endif;
                                font-weight: bold; display: inline-block;">
                        {{ $newChild->ketegori }}
                    </div>
                @endif --}}
            </div>
        @else
            <p>Belum ada hasil voting</p>
        @endif
    </div>

    <!-- Recommendations Section -->
    <div class="section">
        <div class="section-title">2. Rekomendasi</div>
        @if ($rekomendasi)
            <div>
                <h4>Rekomendasi berdasarkan hasil klasifikasi:</h4>
                <ul class="rekomendasi-list">
                    @foreach([1, 2, 3, 4, 5] as $indikatorId)
                        @php
        $rek = $rekomendasi->where('indikator_id', $indikatorId)->first();
                        @endphp
                        @if($rek)
                            @if($rek->rekomendasi1)
                            <li>{{ $rek->rekomendasi1 }}</li>@endif
                            @if($rek->rekomendasi2)
                            <li>{{ $rek->rekomendasi2 }}</li>@endif
                            @if($rek->rekomendasi3)
                            <li>{{ $rek->rekomendasi3 }}</li>@endif
                        @endif
                    @endforeach
                </ul>
            </div>
        @else
            <p>Belum ada rekomendasi</p>
        @endif
    </div>

    <div class="footer">
        <p>Dokumen ini dibuat secara otomatis oleh Sistem Klasifikasi KNN</p>
    </div>
</body>

</html>