@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card-body">
            <article>
                <h4 class="mb-3">{{ $pemain->nama_pemain }}</h4><hr style="background-color: white">
                <p>{!! $pemain->ket_pemain !!}</p>
                <a href="/dashboard/pemain" class="btn btn-success">Kembali Ke Berita Utama</a>
                <a href="/dashboard/pemain/{{ $pemain->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="dashboard/pemain/{{ $pemain->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ?')">Hapus</button>
                  </form>
            </article>
        </div>
    </div>
@endsection