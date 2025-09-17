@extends('admin.master')
@section('content')
    <!-- Main Content -->
    {{-- <div class="content"> --}}
        <div class="container-fluid">
            <h1 class="mb-4">Data Anak (KNN)</h1>

            <div class="row mb-4 align-items-center g-2 g-md-3">
                <!-- Search Input -->
                <div class="col-lg-7 col-md-8 col-12">
                    <div class="input-group shadow-sm">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" id="search" class="form-control border-start-0 ps-0" placeholder="Cari nama atau kategori anak..."
                            style="box-shadow: none;">
                        <button class="btn btn-outline-secondary d-md-none" type="button" id="clearSearch">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
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
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                                <td>{{ $anak->nama }}</td>
                                <td>{{ $usia->find($anak->usia_id)->umur }}</td>
                                <td>{{ $anak->lk }}</td>
                                <td>{{ $anak->bb }}</td>
                                <td>{{ $anak->tb }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editChildModal-{{ $anak->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#viewChildModal-{{ $anak->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteChildModal-{{ $anak->id }}" data-id="{{ $anak->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('admin.data_anak.viewmodal')
                            @include('admin.data_knn.editmodal')
                            @include('admin.data_knn.deletemodal')
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
                <div class="d-flex justify-content-center mt-3">
                    <style>
                        .pagination-info {
                            display: none !important;
                        }
                    </style>
                    {{ $data->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        {{--
    </div> --}}



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

        /* Search Input Styling */
    .input-group {
        border-radius: 0.375rem;
        overflow: hidden;
    }

    .input-group-text {
        background-color: #f8f9fa !important;
        border-color: #dee2e6;
        border-right: none;
    }

    .form-control {
        border-left: none;
    }

    .form-control:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    /* Button Styling */
    .btn-success {
        background-color: #198754;
        border-color: #198754;
        transition: all 0.3s ease;
    }

    .btn-success:hover {
        background-color: #157347;
        border-color: #146c43;
        transform: translateY(-1px);
    }

    .btn-success:active {
        transform: translateY(0);
    }

    /* Clear search button */
    .btn-outline-secondary {
        border-left: none;
        border-color: #dee2e6;
        color: #6c757d;
    }

    /* Responsive adjustments */
    @media (min-width: 768px) {
        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        }
    }

    @media (max-width: 767.98px) {
        .input-group {
            margin-bottom: 0.5rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.95rem;
        }

        .g-2 {
            --bs-gutter-x: 0.5rem;
            --bs-gutter-y: 0.5rem;
        }
    }

    @media (max-width: 575.98px) {
        .container-fluid {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .input-group-text {
            padding: 0.5rem 0.75rem;
        }

        .form-control {
            font-size: 0.95rem;
            padding: 0.5rem 0.75rem;
        }

        .btn {
            padding: 0.6rem 1.2rem;
            font-size: 0.95rem;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem !important;
        }
    }

    /* Enhanced mobile experience */
    @media (max-width: 480px) {
        .input-group {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .btn-success {
            box-shadow: 0 2px 4px rgba(25, 135, 84, 0.2);
        }

        .form-control::placeholder {
            font-size: 0.9rem;
        }
    }

    /* Loading state for search */
    .input-group.loading .input-group-text {
        background-color: #e9ecef !important;
    }

    .input-group.loading .fas {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            const searchInput = document.getElementById('search');
            const clearButton = document.getElementById('clearSearch');
            const inputGroup = searchInput.closest('.input-group');

            // Clear search functionality
            if (clearButton) {
                clearButton.addEventListener('click', function () {
                    searchInput.value = '';
                    searchInput.focus();
                    // Trigger search event to reset results
                    searchInput.dispatchEvent(new Event('keyup'));
                });
            }

            // Show/hide clear button based on input
            searchInput.addEventListener('input', function () {
                if (clearButton) {
                    clearButton.style.display = this.value ? 'block' : 'none';
                }
            });

            // Add loading state during search (optional)
            let searchTimeout;
            searchInput.addEventListener('keyup', function () {
                inputGroup.classList.add('loading');

                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function () {
                    inputGroup.classList.remove('loading');
                }, 300);
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

         $(document).ready(function () {
                // === REALTIME SEARCH WITH DEBOUNCING ===
                let searchTimeout;
                $('#search').on('keyup', function () {
                    let keyword = $(this).val();

                    // Clear previous timeout
                    clearTimeout(searchTimeout);

                    // Set new timeout untuk debouncing (300ms delay)
                    searchTimeout = setTimeout(function () {
                        performSearch(keyword, 1); // Always start from page 1 for new search
                    }, 300);
                });

                // === HANDLE PAGINATION CLICKS ===
                $(document).on('click', '.pagination a', function (e) {
                    e.preventDefault();

                    let url = $(this).attr('href');
                    let keyword = $('#search').val();

                    if (url) {
                        // Extract page number from URL
                        let page = new URL(url).searchParams.get('page') || 1;
                        performSearch(keyword, page);
                    }
                });

                // === SEARCH FUNCTION ===
                function performSearch(keyword, page = 1) {
                    $.ajax({
                        url: "{{ route('knn.search') }}",
                        type: "GET",
                        data: {
                            keyword: keyword,
                            page: page
                        },
                        beforeSend: function () {
                            // Show loading state
                            $('tbody').html(`
                    <tr>
                        <td colspan="7" class="text-center py-4">
                            <div class="text-muted">
                                <i class="fas fa-spinner fa-spin fa-2x mb-3"></i>
                                <p class="mb-1">Mencari data...</p>
                            </div>
                        </td>
                    </tr>
                `);
                        },
                        success: function (response) {
                            let rows = '';
                            if (response.data.length > 0) {
                                $.each(response.data, function (index, anak) {
                                    // Calculate correct row number based on pagination
                                    let rowNumber = ((page - 1) * 10) + index + 1;

                                    rows += `
                            <tr>
                                <td>${rowNumber}</td>
                                <td>${anak.nama}</td>
                                <td>${anak.usia ? anak.usia.umur : '-'}</td>
                                <td>${anak.lk}</td>
                                <td>${anak.bb}</td>
                                <td>${anak.tb}</td>
                                <td>${anak.ketegori || '-'}</td>
                            </tr>
                        `;
                                });
                            } else {
                                rows = `
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-search fa-3x mb-3"></i>
                                    <p class="mb-1">Data tidak ditemukan</p>
                                    <p class="small">Coba gunakan kata kunci lain</p>
                                </div>
                            </td>
                        </tr>
                    `;
                            }

                            $('tbody').html(rows);
                            $('.d-flex.justify-content-center').html(response.pagination);

                            // Update URL without page reload
                            let newUrl = keyword ?
                                `{{ route('anak.search') }}?keyword=${encodeURIComponent(keyword)}&page=${page}` :
                                `{{ route('admin.dataanak') }}?page=${page}`;
                            window.history.pushState({}, '', newUrl);
                        },
                        error: function () {
                            $('tbody').html(`
                    <tr>
                        <td colspan="7" class="text-center py-4">
                            <div class="text-danger">
                                <i class="fas fa-exclamation-triangle fa-2x mb-3"></i>
                                <p class="mb-1">Terjadi kesalahan</p>
                                <p class="small">Silakan coba lagi</p>
                            </div>
                        </td>
                    </tr>
                `);
                        }
                    });
                }

                // === CLEAR SEARCH FUNCTIONALITY ===
                $('#clearSearch').click(function () {
                    $('#search').val('');
                    performSearch('', 1); // Reset to show all data
                });

                // === BACK BUTTON SUPPORT ===
                window.addEventListener('popstate', function (e) {
                    let urlParams = new URLSearchParams(window.location.search);
                    let keyword = urlParams.get('keyword') || '';
                    let page = urlParams.get('page') || 1;

                    $('#search').val(keyword);
                    performSearch(keyword, page);
                });
            });
            // === REALTIME SEARCH WITH DEBOUNCING ===
    </script>
@endsection