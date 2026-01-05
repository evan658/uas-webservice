@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Lagu</h2>

    <form action="/lagu/{{ $lagu->id }}" method="POST">
        @csrf
        @method('PUT')

        <input class="form-control mb-2" name="judul" value="{{ $lagu->judul }}">
        <input class="form-control mb-2" name="penyanyi" value="{{ $lagu->penyanyi }}">
        <input class="form-control mb-2" name="tahun" value="{{ $lagu->tahun }}">

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
