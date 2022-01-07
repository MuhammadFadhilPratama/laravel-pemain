@extends('dashboard.layouts.main')
@section('container')

    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0">Halaman Pemain</h1>
            </div>
        </div>
    </div>
        <div class="card-body">
          @if (session()->has('sukses'))
          <div class="alert alert-succes" role="alert">
              {{ session('sukses') }}
          </div>
          @endif
          <a href="/dashboard/pemain/create" class="btn btn-primary mb-3">Tambah Pemain</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemain</th>
              <th>Asal Pemain</th>
              <th>No Punggung</th>
              <th>Ket Pemain</th>
              <th>Posisi</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pemain as $pemain)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pemain->nama_pemain }}</td>
              <td>{{ $pemain->asal_pemain }}</td>
              <td>{{ $pemain->no_punggung }}</td>
              <td>{{ $pemain->ket_pemain }}</td>
              <td>{{ $pemain->posisi->posisi }}</td>
              <td>
                <a href="/dashboard/pemain/{{ $pemain->id }}" class="btn btn-info"><i class="far fa-eye nav-icon"></i></a>
                <a href="/dashboard/pemain/{{ $pemain->id }}/edit" class="btn btn-warning"><i class="far fa-edit nav-icon"></i></a>
                <form action="/dashboard/pemain/{{ $pemain->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf 
                <button class="btn btn-danger" onclick="return confirm('Kamu Yakin Mau Menghapus Data Ini ?')"><i class="nav-icon fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection