@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h2>Detail Buku</h2>

        <div class="card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Judul Buku:</strong> {{ $buku->judul }}</li>
                    <li class="list-group-item"><strong>Pengarang:</strong> {{ $buku->pengarang }}</li>
                    <li class="list-group-item"><strong>Penerbit:</strong> {{ $buku->penerbit }}</li>
                    <li class="list-group-item"><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
