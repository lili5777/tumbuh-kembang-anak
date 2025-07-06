@extends('admin.master')
@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="mb-4">Data Anak</h1>

            <div class="action-buttonsmb-3">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addChildModal">
                    <i class="fas fa-plus me-2"></i>Tambah Data
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur (bulan)</th>
                            <th>Lingkar Kepala</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $index => $anak)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $anak->nama }}</td>
                                <td>{{ $usia->find($anak->usia_id)->umur }}</td>
                                <td>{{ $anak->lk }}</td>
                                <td>{{ $anak->bb }}</td>
                                <td>{{ $anak->tb }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#viewChildModal-{{ $anak->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                            data-bs-target="#editChildModal-{{ $anak->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteChildModal-{{ $anak->id }}" data-id="{{ $anak->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('admin.data_anak.viewmodal')
                            @include('admin.data_anak.editmodal')
                            @include('admin.data_anak.deletemodal')
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <div class="text-muted">
                                        <i class="fas fa-inbox fa-3x mb-3"></i>
                                        <p class="mb-1">Belum ada data anak</p>
                                        <p class="small">Klik tombol "Tambah Data" untuk menambahkan data anak baru</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Child Modal -->
    <div class="modal fade" id="addChildModal" tabindex="-1" aria-labelledby="addChildModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addChildModalLabel">Tambah Data Anak</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('admin.tambahdataanak') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="childName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="childName" name="nama" required
                                        placeholder="Masukan Nama">
                                </div>
                                <div class="mb-3">
                                    <label for="usia_id" class="form-label">Usia</label>
                                    <select class="form-select" id="usia_id" name="usia_id" required>
                                        <option value="" selected disabled>Pilih usia</option>
                                        @foreach ($usia as $item)
                                            <option value="{{ $item->id }}">{{ $item->umur }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pengukuran Fisik</label>
                                    <div class="d-grid gap-2">
                                        <div class="col-12">
                                            <input type="number" step="0.1" class="form-control"
                                                placeholder="Lingkar Kepala (cm)" id="lk" name="lk" required>
                                        </div>
                                        <div class="col-12">
                                            <input type="number" step="0.1" class="form-control"
                                                placeholder="Berat Badan (kg)" id="bb" name="bb" required>
                                        </div>
                                        <div class="col-12">
                                            <input type="number" step="0.1" class="form-control"
                                                placeholder="Tinggi Badan (cm)" id="tb" name="tb" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="motorik_id" class="form-label">Kemampuan Motorik</label>
                                    <select class="form-select" id="motorik_id" name="motorik_id" required disabled>
                                        <option value="" selected disabled>Pilih usia terlebih dahulu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="bicara_id" class="form-label">Kelancaran Bicara</label>
                                    <select class="form-select" id="bicara_id" name="bicara_id" required disabled>
                                        <option value="" selected disabled>Pilih usia terlebih dahulu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save me-1"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5.3.7 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .ct {
            font-size: 14px;
        }

        .ch {
            font-size: 16px;
            font-weight: 500;
        }

        .content {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        h1 {
            color: #2c3e50;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 2px solid #dee2e6;
        }

        .table {
            margin-top: 20px;
        }

        .table th {
            background-color: #f1f5f9;
            font-weight: 600;
            color: #334155;
        }

        .btn-group .btn {
            margin-right: 5px;
        }

        .btn-group .btn:last-child {
            margin-right: 0;
        }

        .badge {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }

        .modal-header {
            border-bottom: none;
            padding-bottom: 0;
        }

        .modal-title {
            font-weight: 600;
        }

        .form-label {
            font-weight: 500;
        }

        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .table-responsive {
            overflow-x: auto;
        }

        @media (max-width: 768px) {
            .btn-group {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .btn-group .btn {
                margin-right: 0;
                width: 100%;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // === SCRIPT UNTUK ADD MODAL ===
            // Inisialisasi - disable motorik dan bicara
            $('#motorik_id, #bicara_id').prop('disabled', true);

            // Ketika usia dipilih di add modal
            $('#usia_id').change(function () {
                var usiaId = $(this).val();

                if (usiaId) {
                    // Enable select motorik dan bicara
                    $('#motorik_id, #bicara_id').prop('disabled', false);

                    // Kosongkan opsi sebelumnya
                    $('#motorik_id, #bicara_id').empty().append('<option value="" selected disabled>Memuat data...</option>');

                    // Ambil data motorik berdasarkan usia_id
                    $.get('/get-motorik/' + usiaId, function (data) {
                        $('#motorik_id').empty();
                        if (data.length > 0) {
                            $('#motorik_id').append('<option value="" selected disabled>Pilih Kemampuan Motorik</option>');
                            $.each(data, function (key, value) {
                                $('#motorik_id').append('<option value="' + value.id + '">' + value.keterangan + '</option>');
                            });
                        } else {
                            $('#motorik_id').append('<option value="" selected disabled>Tidak ada data motorik</option>');
                        }
                    });

                    // Ambil data bicara berdasarkan usia_id
                    $.get('/get-bicara/' + usiaId, function (data) {
                        $('#bicara_id').empty();
                        if (data.length > 0) {
                            $('#bicara_id').append('<option value="" selected disabled>Pilih Kelancaran Bicara</option>');
                            $.each(data, function (key, value) {
                                $('#bicara_id').append('<option value="' + value.id + '">' + value.keterangan + '</option>');
                            });
                        } else {
                            $('#bicara_id').append('<option value="" selected disabled>Tidak ada data bicara</option>');
                        }
                    });
                } else {
                    // Jika usia tidak dipilih, disable kembali
                    $('#motorik_id, #bicara_id').prop('disabled', true)
                        .empty()
                        .append('<option value="" selected disabled>Pilih usia terlebih dahulu</option>');
                }
            });

            // === SCRIPT UNTUK EDIT MODAL ===
            // Script untuk setiap modal edit akan di-handle oleh file editmodal.blade.php
            // karena setiap modal memiliki ID unik berdasarkan $anak->id
        });
    </script>
@endsection