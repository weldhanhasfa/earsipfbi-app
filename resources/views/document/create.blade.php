<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Document</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Departement</label>
                <input class="form-control" list="datalistOptions" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="Aruba"></option>
                    <option value="Afghanistan"></option>
                </datalist>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomer Document</label>
                <input type="text" class="form-control" name="noDucument" placeholder="Nomer Document">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Document</label>
                <input class="form-control" list="datalistOptions" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="Aruba"></option>
                    <option value="Afghanistan"></option>
                </datalist>
            </div>
            <div class="mb-3">
                <label class="form-label">Judul Document</label>
                <input type="text" class="form-control" name="judulDoc" placeholder="Judul Document">
            </div>
            <div class="mb-3">
                <label class="form-label">Create By</label>
                <input type="text" class="form-control" name="createBy" placeholder="Create By">
            </div>
            <div class="mb-3">
                <div class="form-label">Custom File Input</div>
                <input type="file" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex">
              <a href="/document" class="btn btn-link">Cancel</a>
              <a href="#" class="btn btn-primary ms-auto">Tambah Data</a>
            </div>
        </div>
    </div>
    </div>

    @push('extra-styles')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
    @endpush

    {{-- @push('extra-scripts')
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
        <script>
            $(function() {
                $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('departement.index') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                    ]
                });
            });
            </script>
    @endpush --}}
  </x-templates.default>