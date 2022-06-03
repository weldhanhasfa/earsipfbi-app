<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Terbitan</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Document</label>
                <input class="form-control" list="datalistOptions" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="Aruba"></option>
                    <option value="Afghanistan"></option>
                </datalist>
            </div>
            <div>
                <label class="form-label">Tanggal</label>
            </div>
            <div class="input-icon mb-3">
                <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                </span>
                <input class="form-control" placeholder="Select a date" id="datepicker-icon-prepend" value="2020-06-20">
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex">
              <a href="/terbitan" class="btn btn-link">Cancel</a>
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