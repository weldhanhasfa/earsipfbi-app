<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Jenis Document</h3>
        </div>
        <form action="{{ route('jenis.update', $jeni) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Jenis Document</label>
                    <input type="text" class="form-control @error('jenisDoc') is-invalid @enderror" name="jenisDoc" placeholder="Jenis Document" value="{{ $jeni->jenisDoc }}">

                    @error('jenisDoc')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" value="{{ $jeni->keterangan }}">
                
                    @error('jenisDoc')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <a href="{{ route('jenis.index') }}" class="btn btn-link">Cancel</a>
                    <input type="submit" value="Edit Data" class="btn btn-primary ms-auto">
                </div>
            </div>
        </form>
    </div>
    </div>
</x-templates.default>