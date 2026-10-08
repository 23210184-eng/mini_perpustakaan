@extends('layouts.app')

@section('title', 'Kategori')

@section('content')

    <div class="header">
        <h1>Daftar Kategori</h1>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            + Tambah Kategori
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th width="60">ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description ?? '-' }}</td>

                    <td>
                        <div class="actions">

                            <a href="{{ route('categories.show', $category) }}" class="btn btn-secondary">
                                Detail
                            </a>

                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                style="padding:0; box-shadow:none;">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Hapus kategori ini?')">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center;">
                        Belum ada kategori.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
