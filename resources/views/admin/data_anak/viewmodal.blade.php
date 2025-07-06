<!-- View Child Modal -->
<div class="modal fade" id="viewChildModal-{{ $anak->id }}" tabindex="-1" aria-labelledby="viewChildModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="viewChildModalLabel">Detail Anak</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="border-bottom pb-2 ch">Informasi Dasar</h5>
                            <div class="row mb-2">
                                <div class="col-sm-4 ct">Nama:</div>
                                <div class="col-sm-8 ct">{{ $anak->nama }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 ct">Umur:</div>
                                <div class="col-sm-8 ct">{{ $usia->find($anak->usia_id)->umur }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="border-bottom pb-2 ch">Pengukuran Terakhir</h5>
                            <div class="row mb-2">
                                <div class="col-sm-6 ct">Lingkar Kepala:</div>
                                <div class="col-sm-6 ct">{{ $anak->lk }} cm</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-6 ct">Berat Badan:</div>
                                <div class="col-sm-6 ct">{{ $anak->bb }} kg</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-6 ct">Tinggi Badan:</div>
                                <div class="col-sm-6 ct">{{ $anak->tb }} cm</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="border-bottom pb-2 ch">Perkembangan</h5>
                            <div class=" mb-2">
                                <div class="col-sm-4 ch">Motorik:</div>
                                <div class="col-sm-8">
                                    <span class="ct">{{ $motorik->find($anak->motorik_id)->keterangan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="border-bottom pb-2 ch">Komunikasi</h5>
                            <div class=" mb-2">
                                <div class="col-sm-4 ch">Bicara:</div>
                                <div class="col-sm-8">
                                    <span class="ct">{{ $bicara->find($anak->bicara_id)->keterangan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <h5 class="border-bottom pb-2 ch">Kategori</h5>
                    @if ($anak->ketegori)
                        <p class="text-muted ct">{{ $anak->ketegori }}</p>
                    @else
                        <p class="text-muted ct">Kategori belum ditentukan</p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>