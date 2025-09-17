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
                            <div class="mb-2">
                                <label for="childName-{{ $anak->id }}" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="childName-{{ $anak->id }}" name="nama"
                                    required placeholder="Masukkan nama lengkap anak" value="{{ $anak->nama }}">
                            </div>
                            <div class="mb-2">
                                <select class="form-select" id="usia_id-{{ $anak->id }}" name="usia_id" required>
                                    <option value="" disabled>Pilih usia</option>
                                    @foreach ($usia as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $anak->usia_id ? 'selected' : '' }}>
                                            {{ $item->umur }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" id="gender-{{ $anak->id }}" name="gender" required>
                                    <option value="" disabled>Pilih jenis kelamin</option>
                                    <option value="L" {{ $anak->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $anak->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Pengukuran Fisik</label>
                                <div class="d-grid gap-2">
                                    <div class="col-12">
                                        <input type="number" step="0.1" class="form-control"
                                            placeholder="Lingkar Kepala (cm)" id="lk-{{ $anak->id }}" name="lk" required
                                            value="{{ $anak->lk }}">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" step="0.1" class="form-control"
                                            placeholder="Berat Badan (kg)" id="bb-{{ $anak->id }}" name="bb" required
                                            value="{{ $anak->bb }}">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" step="0.1" class="form-control"
                                            placeholder="Tinggi Badan (cm)" id="tb-{{ $anak->id }}" name="tb" required
                                            value="{{ $anak->tb }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="motorik_id-{{ $anak->id }}" class="form-label">Kemampuan Motorik</label>
                                <select class="form-select" id="motorik_id-{{ $anak->id }}" name="motorik_id" required>
                                    <option value="" disabled>Pilih Motorik</option>
                                    <!-- Options will be loaded dynamically -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bicara_id-{{ $anak->id }}" class="form-label">Kelancaran Bicara</label>
                                <select class="form-select" id="bicara_id-{{ $anak->id }}" name="bicara_id" required>
                                    <option value="" disabled>Pilih Bicara</option>
                                    <!-- Options will be loaded dynamically -->
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

<!-- PENTING: Script ini harus diletakkan setelah jQuery dimuat -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof $ !== 'undefined') {
            initEditModal{{ $anak->id }}();
        } else {
            // Jika jQuery belum dimuat, tunggu sebentar
            setTimeout(function () {
                if (typeof $ !== 'undefined') {
                    initEditModal{{ $anak->id }}();
                }
            }, 100);
        }
    });

    function initEditModal{{ $anak->id }}() {
        const anakId = {{ $anak->id }};
        const currentData = {
            usia_id: {{ $anak->usia_id ?? 'null' }},
            motorik_id: {{ $anak->motorik_id ?? 'null' }},
            bicara_id: {{ $anak->bicara_id ?? 'null' }}
    };

        console.log('Initializing edit modal for ID:', anakId, 'with data:', currentData);

        // Event ketika modal dibuka
        $('#editChildModal-' + anakId).on('shown.bs.modal', function () {
            console.log('Modal shown for ID:', anakId);
            loadDataForEdit(currentData.usia_id, anakId, true);
        });

        // Event ketika usia berubah
        $('#usia_id-' + anakId).on('change', function () {
            const newUsiaId = $(this).val();
            console.log('Usia changed to:', newUsiaId);
            loadDataForEdit(newUsiaId, anakId, false);
        });

        function loadDataForEdit(usiaId, anakId, isInitialLoad) {
            console.log('Loading data for usia:', usiaId, 'isInitialLoad:', isInitialLoad);

            if (!usiaId) {
                console.log('No usia ID provided');
                return;
            }

            const motorikSelect = $('#motorik_id-' + anakId);
            const bicaraSelect = $('#bicara_id-' + anakId);

            // Set loading state
            motorikSelect.html('<option value="" disabled selected>Memuat...</option>');
            bicaraSelect.html('<option value="" disabled selected>Memuat...</option>');

            // Load Motorik Data
            $.ajax({
                url: '/get-motorik/' + usiaId,
                type: 'GET',
                dataType: 'json',
                timeout: 10000, // 10 detik timeout
                success: function (motorikData) {
                    console.log('Motorik data for usia ' + usiaId + ':', motorikData);

                    motorikSelect.empty();
                    motorikSelect.append('<option value="" disabled>Pilih Kemampuan Motorik</option>');

                    if (motorikData && motorikData.length > 0) {
                        $.each(motorikData, function (index, item) {
                            const isSelected = (isInitialLoad && item.id == currentData.motorik_id) ? 'selected' : '';
                            motorikSelect.append(`<option value="${item.id}" ${isSelected}>${item.keterangan}</option>`);
                        });
                    } else {
                        motorikSelect.append('<option value="" disabled>Tidak ada data motorik untuk usia ini</option>');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error loading motorik data:', {
                        status: status,
                        error: error,
                        responseText: xhr.responseText
                    });
                    motorikSelect.html('<option value="" disabled selected>Error: ' + error + '</option>');
                }
            });

            // Load Bicara Data
            $.ajax({
                url: '/get-bicara/' + usiaId,
                type: 'GET',
                dataType: 'json',
                timeout: 10000, // 10 detik timeout
                success: function (bicaraData) {
                    console.log('Bicara data for usia ' + usiaId + ':', bicaraData);

                    bicaraSelect.empty();
                    bicaraSelect.append('<option value="" disabled>Pilih Kelancaran Bicara</option>');

                    if (bicaraData && bicaraData.length > 0) {
                        $.each(bicaraData, function (index, item) {
                            const isSelected = (isInitialLoad && item.id == currentData.bicara_id) ? 'selected' : '';
                            bicaraSelect.append(`<option value="${item.id}" ${isSelected}>${item.keterangan}</option>`);
                        });
                    } else {
                        bicaraSelect.append('<option value="" disabled>Tidak ada data bicara untuk usia ini</option>');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error loading bicara data:', {
                        status: status,
                        error: error,
                        responseText: xhr.responseText
                    });
                    bicaraSelect.html('<option value="" disabled selected>Error: ' + error + '</option>');
                }
            });
        }
    }
</script>