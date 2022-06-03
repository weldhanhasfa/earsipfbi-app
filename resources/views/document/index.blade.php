<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Document</h3>
          <div class="card-actions">
            <a href="/document/create" class="btn btn-primary">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Tambah Data
            </a>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Departement</th>
                            <th>No Document</th>
                            <th>Judul Document</th>
                            <th>Jenis Document</th>
                            <th>Pembuat</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>IT</td>
                            <td>01/IT/DCR</td>
                            <td>DCR</td>
                            <td>001</td>
                            <td>udin</td>
                            <td>file.odf</td>
                            <td>
                                <a href="/document/edit" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger" id="delete" data-id="#">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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