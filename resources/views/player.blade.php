@extends('layouts.main')
@section('container')
    <div class="container mt4">
        @foreach ($pemain as $detil_pemain)
            
        <article>
            <h2><a href="/player/{{ $detil_pemain->no_punggung }}">{{ $detil_pemain->nama_pemain }}</a></h2>
            <p>{{ $detil_pemain->asal_pemain }}</p>
        </article>
        @endforeach
    </div>
@endsection