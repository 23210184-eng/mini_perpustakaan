@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <div class="header">
        <h1>Daftar Buku</h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary">
            + Tambah Buku
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->category->name }}</td>

                    <td>
                        <div class="actions">

                            <a href="{{ route('books.show', $book) }}" class="btn btn-secondary">
                                Detail
                            </a>

                            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('books.destroy', $book) }}" method="POST"
                                style="padding:0; box-shadow:none;">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus buku ini?')">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="7" style="text-align:center;">
                        Belum ada buku.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
