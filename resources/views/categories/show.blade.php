@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')

    <div class="header">
        <h1>Detail Kategori</h1>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <table>
        <tr>
            <th width="200">ID</th>
            <td>{{ $category->id }}</td>
        </tr>

        <tr>
            <th>Nama Kategori</th>
            <td>{{ $category->name }}</td>
        </tr>

        <tr>
            <th>Deskripsi</th>
            <td>{{ $category->description ?? '-' }}</td>
        </tr>

        <tr>
            <th>Jumlah Buku</th>
            <td>{{ $category->books->count() }}</td>
        </tr>
    </table>

@endsection
