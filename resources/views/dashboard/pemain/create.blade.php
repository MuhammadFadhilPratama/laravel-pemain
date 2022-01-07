@extends('dashboard.layouts.main')
@section('container')
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Pemain</h3>
            </div>
            <form method="POST" action="/dashboard/pemain">
            @csrf
            <div class="card-body">
                <div class="form-grup">
                    <label for="nama_pemain">Nama Pemain</label>
                    <input type="text" class="form-control @error ('nama_pemain') is-invalid @enderror"
                    id="nama_pemain" name="nama_pemain" placeholder="Nama Pemain">
                    @error('nama_pemain')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="form-grup mt-3">
                <label for="asal_pemain">Asal Pemain</label>
                <input type="text" class="form-control @error ('asal_pemain') is-invalid @enderror"
                id="asal_pemain" name="asal_pemain" placeholder="Asal Pemain">
                @error('asal_pemain')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-grup">
                    <label for="no_punggung">No Punggung</label>
                    <input type="text" class="form-control @error ('no_punggung') is-invalid @enderror"
                    id="no_punggung" name="no_punggung" placeholder="No Punggung">
                    @error('no_punggung')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>        
                <div class="form-group mt-3">
                    <label for="posisi">Posisi</label>
                    <select class="custom-select rounded-0" id="posisi_id" name="posisi_id">
                        @foreach ($posisis as $posisi)
                        <option value="{{ $posisi->id }}">{{ $posisi->posisi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-grup mt-3">
                    <label for="ket_pemain">Ket Pemain</label>
                    <input type="text" class="form-control @error ('ket_pemain') is-invalid @enderror"
                    id="ket_pemain" name="ket_pemain" placeholder="Ket Pemain">
                    @error('ket_pemain')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection 