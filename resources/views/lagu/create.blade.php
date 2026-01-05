@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Lagu</h2>

    <form action="/lagu" method="POST">
        @csrf
        <input class="form-control mb-2" name="judul" placeholder="Judul Lagu">
        <input class="form-control mb-2" name="penyanyi" placeholder="Penyanyi">
        <input class="form-control mb-2" name="tahun" placeholder="Tahun">
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
