@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

    <div class="header">
        <h1>Detail Buku</h1>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <table>
        <tr>
            <th width="200">ID</th>
            <td>{{ $book->id }}</td>
        </tr>

        <tr>
            <th>Judul Buku</th>
            <td>{{ $book->title }}</td>
        </tr>

        <tr>
            <th>Penulis</th>
            <td>{{ $book->author }}</td>
        </tr>

        <tr>
            <th>Tahun Terbit</th>
            <td>{{ $book->published_year }}</td>
        </tr>

        <tr>
            <th>Stok</th>
            <td>{{ $book->stock }}</td>
        </tr>

        <tr>
            <th>Kategori</th>
            <td>{{ $book->category->name }}</td>
        </tr>
    </table>

@endsection
