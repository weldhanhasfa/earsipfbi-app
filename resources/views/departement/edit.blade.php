<x-templates.default>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Departement</h3>
        </div>
        <form action="{{ route('departement.update', $departement )}}" method="POST">
            @method('PUT')
            @csrf
            
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Departement</label>
                    <input type="text" class="form-control @error('nameDepart') is-invalid @enderror" name="nameDepart" placeholder="Nama Departement" value="{{ $departement->nameDepart }}">
                    
                    @error('nameDepart')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Code Departement</label>
                    <input type="text" class="form-control @error('codeDepart') is-invalid @enderror" name="codeDepart" placeholder="Code Departement" value="{{ $departement->codeDepart }}">
                
                    @error('codeDepart')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <a href="{{ route('departement.index') }}" class="btn btn-link">Cancel</a>
                    <input type="submit" value="Edit Data" class="btn btn-primary ms-auto">
                </div>
            </div>
        </form>
    </div>
    </div>
  </x-templates.default>