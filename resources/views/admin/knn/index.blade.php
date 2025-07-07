@extends('admin.master')
@section('content')
                                                <!-- Main Content -->

                                                <!-- Add Child Modal -->
                                                <div class="modal fade" id="addChildModal" tabindex="-1" aria-labelledby="addChildModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-success text-white">
                                                                <h5 class="modal-title" id="addChildModalLabel">Tambah Data Anak</h5>
                                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <form method="POST" action="{{ route('admin.prosesknn') }}">
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


                                                <div class="content">
                                                    <div class="container-fluid">
                                                        <h1 class="mb-4">Penentuan Klasifikasi KNN</h1>
                                                        @if(session('success'))
                                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                {{ session('success') }}
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        @endif

                                                        <div class="action-buttons mb-3">
                                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addChildModal">
                                                                <i class="fas fa-plus me-2"></i>Tambah Data
                                                            </button>
                                                        </div>

                                                        @php
    // Ambil data dari session jika ada
    $knnResults = session('knn_results');
    $newChild = $knnResults['newChild'] ?? null;
    $kValue = $knnResults['kValue'] ?? null;
    $distances = $knnResults['distances'] ?? [];
    $nearestNeighbors = $knnResults['nearestNeighbors'] ?? [];
    $votingResults = $knnResults['votingResults'] ?? [];
    $usia = $knnResults['usia'] ?? collect();
    $kemampuan = $knnResults['kemampuan'] ?? collect();
    $rekomendasi = $knnResults['rekomendasi'] ?? null;
                                                        @endphp


                                                        <!-- Accordion for KNN Process -->
                                                        <div class="accordion mb-4" id="knnAccordion">
                                                            <!-- Data Anak Accordion Item -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        1. Data Anak
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered table-hover">
                                                                                <thead class="table-light">
                                                                                    <tr>
                                                                                        <th>Nama</th>
                                                                                        <th>Usia</th>
                                                                                        <th>Lingkar Kepala</th>
                                                                                        <th>Berat Badan</th>
                                                                                        <th>Tinggi Badan</th>
                                                                                        <th>Motorik</th>
                                                                                        <th>Bicara</th>
                                                                                        {{-- <th>Kategori</th> --}}
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @if($newChild)
                                                                                        <tr>
                                                                                            <td>{{ $newChild->nama }}</td>
                                                                                            <td>{{ $usia->where('id', $newChild->usia_id)->first()->umur }}</td>
                                                                                            <td>{{ $newChild->lk }} cm</td>
                                                                                            <td>{{ $newChild->bb }} kg</td>
                                                                                            <td>{{ $newChild->tb }} cm</td>
                                                                                            <td>{{ $kemampuan->where('id', $newChild->motorik_id)->first()->keterangan }}
                                                                                            </td>
                                                                                            <td>{{ $kemampuan->where('id', $newChild->bicara_id)->first()->keterangan }}
                                                                                            </td>
                                                                                            {{-- <td><span
                                                                                                    class="badge bg-{{ $newChild->kategori == 'Normal' ? 'success' : ($newChild->kategori == 'Waspada' ? 'warning' : 'danger') }}">{{
                                                                                                    $newChild->kategori }}</span>
                                                                                            </td> --}}
                                                                                        </tr>
                                                                                    @else
                                                                                        <tr>
                                                                                            <td colspan="8" class="text-center">Belum ada data anak yang diproses</td>
                                                                                        </tr>
                                                                                    @endif
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Menentukan K Accordion Item -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        2. Menentukan Nilai K
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body">
                                                                        <p>Dalam kasus ini, kita menggunakan <strong>K = {{ $kValue ?? 0 }}</strong>
                                                                            ({{ $kValue ?? 0 }} tetangga terdekat) karena:</p>
                                                                        <ul>
                                                                            <li>Merupakan nilai yang umum digunakan untuk dataset dengan ukuran sedang</li>
                                                                            <li>Mengurangi efek noise dalam data</li>
                                                                            <li>Memberikan keseimbangan antara bias dan varians</li>
                                                                        </ul>
                                                                        @if($kValue)
                                                                            <div class="alert alert-info mt-3">
                                                                                Nilai K yang digunakan: <strong>{{ $kValue }}</strong>
                                                                        </div> @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Hitung Jarak Accordion Item -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        3. Hitung Jarak (Euclidean Distance)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body">
                                                                        <p>Rumus Euclidean Distance:</p>
                                                                        <p class="text-center">√[(x<sub>2</sub> - x<sub>1</sub>)<sup>2</sup> + (y<sub>2</sub> -
                                                                            y<sub>1</sub>)<sup>2</sup> + ... + (n<sub>2</sub> - n<sub>1</sub>)<sup>2</sup>]</p>

                                                                        @if(count($distances) > 0)
                                                                            <div class="table-responsive mt-3">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Nama Anak</th>
                                                                                            <th>Lingkar Kepala</th>
                                                                                            <th>Berat Badan</th>
                                                                                            <th>Tinggi Badan</th>
                                                                                            <th>Jarak Euclidean</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach($distances as $distance)
                                                                                            <tr>
                                                                                                <td>{{ $distance['anak']->nama }}</td>
                                                                                                <td>{{ $distance['anak']->lk }} cm</td>
                                                                                                <td>{{ $distance['anak']->bb }} kg</td>
                                                                                                <td>{{ $distance['anak']->tb }} cm</td>
                                                                                                <td>{{ number_format($distance['distance'], 2) }}</td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        @else
                                                                            <div class="alert alert-warning mt-3">
                                                                                Belum ada perhitungan jarak
                                                                        </div> @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Tetangga Terdekat Accordion Item -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingFour">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                        4. Pilih {{ $kValue ?? 5 }} Tetangga Terdekat
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body">
                                                                        @if(count($nearestNeighbors) > 0)
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Rank</th>
                                                                                            <th>Nama Anak</th>
                                                                                            <th>Jarak Euclidean</th>
                                                                                            <th>Kategori</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach($nearestNeighbors as $index => $neighbor)
                                                                                            <tr>
                                                                                                <td>{{ $index + 1 }}</td>
                                                                                                <td>{{ $neighbor['anak']->nama }}</td>
                                                                                                <td>{{ number_format($neighbor['distance'], 2) }}</td>
                                                                                                <td><span
                                                                                                        class="badge bg-{{ $neighbor['anak']->ketegori == 'Normal' ? 'success' : ($neighbor['anak']->ketegori == 'Risiko Sedang' ? 'warning' : 'danger') }}">{{ $neighbor['anak']->ketegori }}</span>
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        @else
                                                                            <div class="alert alert-warning">
                                                                                Belum ada data tetangga terdekat
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Voting Mayoritas Accordion Item -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingFive">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                        5. Voting Mayoritas
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body">
                                                                        @if(count($votingResults) > 0)
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5>Hasil Voting:</h5>
                                                                                    <ul class="list-group mb-4">
                                                                                        @foreach($votingResults as $category => $count)
                                                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                {{ $category }}
                                                                                                <span class="badge bg-primary rounded-pill">{{ $count }}</span>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h5>Kesimpulan:</h5>
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <h5 class="card-title">Hasil Klasifikasi</h5>
                                                                                            <p class="card-text">Berdasarkan perhitungan KNN dengan K={{ $kValue }}, anak
                                                                                                dikategorikan
                                                                                                sebagai:</p>
                                                                                            <div
                                                                                                class="alert alert-{{ $newChild->ketegori == 'Normal' ? 'success' : ($newChild->ketegori == 'Risiko Sedang' ? 'warning' : 'danger') }} mb-0">
                                                                                                <strong>{{ $newChild->ketegori }}</strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <div class="alert alert-warning">
                                                                                Belum ada hasil voting
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Rekomendasi -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingSix">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                        6. Rekomendasi
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body">
                                                                        <div>
                                                                            @if ($rekomendasi)
                                                                                <div class="d-flex gap-2">
                                                                                    <div>
                                                                                        <ul>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 1)->first()->rekomendasi1}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 1)->first()->rekomendasi2}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 1)->first()->rekomendasi3}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 2)->first()->rekomendasi1}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 2)->first()->rekomendasi2}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 2)->first()->rekomendasi3}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 3)->first()->rekomendasi1}}</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <ul>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 3)->first()->rekomendasi2}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 3)->first()->rekomendasi3}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 4)->first()->rekomendasi1}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 4)->first()->rekomendasi2}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 4)->first()->rekomendasi3}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 5)->first()->rekomendasi1}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 5)->first()->rekomendasi2}}</li>
                                                                                            <li>{{$rekomendasi->where('indikator_id', 5)->first()->rekomendasi3}}</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                                    <div class="alert alert-warning mt-3">
                                                                                        Belum ada rekomendasi
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Download -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingSeven">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                        7. Downlaod Laporan
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                                                    data-bs-parent="#knnAccordion">
                                                                    <div class="accordion-body d-flex justify-content-center">
                                                                        <a href="{{ route('generate.report') }}" class="btn btn-primary">
                                                                            <i class="fas fa-download me-2"></i>Download PDF
                                                                        </a>                                                          </div>
                                                                </div>
                                                            </div>

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

                                                    .accordion-button:not(.collapsed) {
                                                        background-color: #f8f9fa;
                                                        color: #0d6efd;
                                                        font-weight: 600;
                                                    }

                                                    .accordion-button:focus {
                                                        box-shadow: none;
                                                        border-color: rgba(0, 0, 0, .125);
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