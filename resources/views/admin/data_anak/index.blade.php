@extends('admin.master')
@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="mb-4">Data Anak</h1>

            <div class="action-buttons">
                <button class="btn btn-add">Tambah Data</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur (bulan)</th>
                        <th>Lingkaran Kepala (cm)</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>Kemampuan Motorik</th>
                        <th>Kelancaran Bicara</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi Santoso</td>
                        <td>24</td>
                        <td>48</td>
                        <td>12.5</td>
                        <td>85</td>
                        <td>Baik</td>
                        <td>Cukup</td>
                        <td>
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ani Wijaya</td>
                        <td>18</td>
                        <td>46</td>
                        <td>10.2</td>
                        <td>78</td>
                        <td>Sangat Baik</td>
                        <td>Baik</td>
                        <td>
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Citra Dewi</td>
                        <td>30</td>
                        <td>49</td>
                        <td>14.0</td>
                        <td>90</td>
                        <td>Baik</td>
                        <td>Sangat Baik</td>
                        <td>
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                </table>

        </div>
    </div>

    <style>
       

        h1 {
            /* text-align: center; */
            color: #333;
        }

        .action-buttons {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-add {
            background-color: #4CAF50;
            color: white;
        }

        .btn-edit {
            background-color: #2196F3;
            color: white;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
@endsection