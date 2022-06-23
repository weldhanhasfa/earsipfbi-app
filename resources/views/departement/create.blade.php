<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Departement</h3>
        </div>
        <form action="{{ route('departement.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Departement</label>
                    <input type="text" class="form-control" name="nameDepart" placeholder="Nama Departement">
                </div>
                <div class="mb-3">
                    <label class="form-label">Code Departement</label>
                    <input type="text" class="form-control" name="codeDepart" placeholder="Code Departement">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <a href="{{ route('departement.index') }}" class="btn btn-link">Cancel</a>
                    <input type="submit" value="Tambah Data" class="btn btn-primary ms-auto">
                </div>
            </div>
        </form>
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