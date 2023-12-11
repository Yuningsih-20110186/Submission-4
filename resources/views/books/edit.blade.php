@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Buku</h2>

        <!-- Form untuk mengedit buku -->
        <form method="post" action="{{ route('books.update', $buku->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
            </div>

            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" required>
            </div>

            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit:</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
            </div>

            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
