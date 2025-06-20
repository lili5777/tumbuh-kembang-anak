<!-- Edit Child Modal -->
<div class="modal fade" id="editChildModal-{{ $anak->id }}" tabindex="-1" aria-labelledby="editChildModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editChildModalLabel">Edit Data Anak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.editdataanak', $anak->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <input type="hidden" name="id" value="{{ $anak->id }}"> --}}
                            <div class="mb-3">
                                <label for="childName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="childName" name="nama" required placeholder="Masukkan nama lengkap anak" value="{{ $anak->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="usia_id" class="form-label">Usia</label>
                                <select class="form-select" id="usia_id-{{ $anak->id }}" name="usia_id" required >
                                    <option value="" selected disabled>Pilih usia</option>
                                    @foreach ($usia as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $anak->usia_id ? 'selected' : '' }}>{{ $item->umur }}</option>
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
                                            placeholder="Lingkar Kepala (cm)" id="lk" name="lk" required value="{{ $anak->lk }}">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" step="0.1" class="form-control"
                                            placeholder="Berat Badan (kg)" id="bb" name="bb" required value="{{ $anak->bb }}">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" step="0.1" class="form-control"
                                            placeholder="Tinggi Badan (cm)" id="tb" name="tb" required value="{{ $anak->tb }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="motorik_id" class="form-label">Kemampuan Motorik</label>
                                <select class="form-select" id="motorik_id-{{ $anak->id }}" name="motorik_id" required data-current="{{ $anak->motorik_id }}">
                                    <option value="" disabled>Pilih Motorik</option>
                                    {{-- @foreach ($motorik->where('usia_id', $anak->usia_id) as $mtr)
                                        <option value="{{ $mtr->id }}" {{ $mtr->id == $anak->motorik_id ? 'selected' : '' }}>
                                            {{ $mtr->keterangan }}
                                        </option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bicara_id" class="form-label">Kelancaran Bicara</label>
                                <select class="form-select" id="bicara_id-{{ $anak->id }}" name="bicara_id" required data-current="{{ $anak->bicara_id }}">
                                    <option value="" disabled>Pilih Bicara</option>
                                    {{-- @foreach ($bicara->where('usia_id', $anak->usia_id) as $mtr)
                                        <option value="{{ $mtr->id }}" {{ $mtr->id == $anak->bicara_id ? 'selected' : '' }}>
                                            {{ $mtr->keterangan }}
                                        </option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-1"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    // Di bagian atas script, sebelum event handler
        const currentBicaraId = {{ $anak->bicara_id ?? 'null' }};
        const currentMotorikId = {{ $anak->motorik_id ?? 'null' }};
    $(document).ready(function () {
      


        $('#editChildModal-{{ $anak->id }}').on('shown.bs.modal', function () {
            $('#usia_id-{{ $anak->id }}').trigger('change');
        });

        // Saat usia BERUBAH, update motorik & bicara
        $('#usia_id-{{ $anak->id }}').change(function () {
            var usiaId = $(this).val();
            var motorikSelect = $('#motorik_id-{{ $anak->id }}');
            var bicaraSelect = $('#bicara_id-{{ $anak->id }}');

            if (usiaId) {
                // Kosongkan opsi sebelumnya
                $('#motorik_id-{{ $anak->id }}, #bicara_id-{{ $anak->id }}').empty().append('<option value="" selected disabled>Memuat data...</option>');
                // Ambil data motorik
                $.get('/get-motorik/' + usiaId, function (data) {
                    motorikSelect.empty().append('<option value="" disabled>Pilih Motorik</option>');
                    $.each(data, function (key, value) {
                        
                        motorikSelect.append(`<option value="${value.id}">${value.keterangan}</option>`);
                    });
                });

                // Ambil data bicara
                // const currentBicaraId = {{ $anak->bicara_id ?? 'null' }};
                $.get('/get-bicara/' + usiaId, function (data) {
                    bicaraSelect.empty().append('<option value="" disabled>Pilih Bicara</option>');
                    $.each(data, function (key, value) {
                        bicaraSelect.append(`<option value="${value.id}" ${value.id == currentBicaraId ? 'selected' : ''}>${value.keterangan}</option>`);
                    });
                });
            }
        });


    });
</script> --}}
<script>
    $(document).ready(function () {
        // Simpan nilai awal
        const anakId = {{ $anak->id }};
        const currentData = {
            usia_id: {{ $anak->usia_id ?? 'null' }},
            motorik_id: {{ $anak->motorik_id ?? 'null' }},
            bicara_id: {{ $anak->bicara_id ?? 'null' }}
        };

        // Saat modal edit dibuka
        $('#editChildModal-' + anakId).on('shown.bs.modal', function () {
            loadKemampuan(currentData.usia_id, anakId);
        });

        // Saat usia diubah
        $('#usia_id-' + anakId).change(function () {
            const newUsiaId = $(this).val();
            loadKemampuan(newUsiaId, anakId);
        });

        // Fungsi untuk memuat motorik dan bicara
        function loadKemampuan(usiaId, anakId) {
            if (!usiaId) return;

            const motorikSelect = $('#motorik_id-' + anakId);
            const bicaraSelect = $('#bicara_id-' + anakId);

            // Set loading state
            motorikSelect.html('<option value="" disabled selected>Memuat...</option>');
            bicaraSelect.html('<option value="" disabled selected>Memuat...</option>');

            // Load motorik
            $.get('/get-motorik/' + usiaId, function (data) {
                motorikSelect.empty().append('<option value="" disabled>Pilih Motorik</option>');
                data.forEach(item => {
                    const selected = item.id == currentData.motorik_id ? 'selected' : '';
                    motorikSelect.append(`<option value="${item.id}" ${selected}>${item.keterangan}</option>`);
                });
            });

            // Load bicara
            $.get('/get-bicara/' + usiaId, function (data) {
                bicaraSelect.empty().append('<option value="" disabled>Pilih Bicara</option>');
                data.forEach(item => {
                    const selected = item.id == currentData.bicara_id ? 'selected' : '';
                    bicaraSelect.append(`<option value="${item.id}" ${selected}>${item.keterangan}</option>`);
                });
            });
        }
    });
</script>