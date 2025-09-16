<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteChildModal-{{ $anak->id }}" tabindex="-1" aria-labelledby="deleteChildModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteChildModalLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data anak berikut?</p>
                <div class="alert alert-danger">
                    <strong>{{ $anak->nama }}</strong><br>
                    {{ $usia->find($anak->usia_id)->umur }}<br>
                    Terakhir diperbarui: {{ $anak->updated_at->format('d F Y') }}
                </div>
                <p class="text-danger fw-bold">Data yang dihapus tidak dapat dikembalikan.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form method="POST" action="{{route('admin.hapusdataknnn', $anak->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash-alt me-1"></i> Hapus Permanen
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>