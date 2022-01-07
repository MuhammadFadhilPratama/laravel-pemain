@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        <article>
            <h2 class="mb-5">{{ $pemain_detil->nama_pemain }}</h2>

            <p> {{ $pemain_detil->nama_pemain }} dalam posisi {{ $pemain_detil->posisi->posisi }}</p>
            {!! $pemain_detil->ket_pemain !!}
            <p><a href="/player">Kembali ke Player</a></p>
        </article>
    </div>
    
@endsection