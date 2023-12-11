@extends('layouts.app')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
@endif

<div class="container mt-4">
    <h1>Daftar Buku</h1>

    <!-- Search Form -->
    <form action="{{ route('books.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari judul buku...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($buku as $buku)
                <tr>
                    <th scope="buku">{{ $no++ }}</th>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        <a href="{{ route('books.show', ['id' => $buku->id]) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('books.edit', ['id' => $buku->id]) }}" class="btn btn-success">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('books.delete', ['id' => $buku->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('books.create') }}" class="btn btn-primary mt-3">Tambah Buku</a>
</div>
@endsection
