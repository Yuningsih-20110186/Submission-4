@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Tambah Buku Baru</h2>

        <!-- Form untuk menambah buku -->
        <form method="post" action="{{ route('books.store') }}">
            @csrf

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection
