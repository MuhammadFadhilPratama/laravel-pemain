@extends('layouts.main')
@section('container')
        <h1>Halaman Owner</h1>
        <h5>Nama : {{ $nama }}</h5>
        <h5>Email : {{ $email }}</h5>
        <img src="img/{{ $img }}" alt="{{ $nama }}" width="400">
@endsection