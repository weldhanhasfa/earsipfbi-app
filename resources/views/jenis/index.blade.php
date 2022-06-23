<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Jenis Document</h3>
          <div class="card-actions">
            <a href=" {{ route('jenis.create') }} " class="btn btn-primary">
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
                            <th>Jenis Document</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="modal modal-blur fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-title">Are you sure?</div>
                        <div>If you proceed, you will lose all your personal data.</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="confirmDelete">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('extra-styles')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
    @endpush

    @push('extra-scripts')
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
        <script>
            $(function() {
                $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('jenis.index') !!}',
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false
                        },
                        { data: 'jenisDoc', name: 'JenisDoc' },
                        { data: 'keterangan', name: 'keterangan' },
                        { data: 'action', name: 'action' }
                    ]
                });
            });

            $('#datatable').on('click', 'a#delete', function(e){
                e.preventDefault()
                var id = $(this).data('id')
                $('#confirmDelete').attr('data-id', id)
                $('#deleteModal').modal('show')
            })

            $('#confirmDelete').click(function(e) {
                e.preventDefault()
                var id = $(this).data('id')

                $.ajax({
                    type: 'DELETE',
                    url: 'jenis/' + id,
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.href = ''
                        }
                    },
                })
            })
            </script>
    @endpush
    <x-slot name="title">Jenis Document Pages</x-slot>
  </x-templates.default>