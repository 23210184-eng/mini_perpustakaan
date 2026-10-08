@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')

    <div class="header">
        <h1>Edit Buku</h1>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <form action="{{ route('books.update', $book) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Kategori</label>

        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Judul Buku</label>
        <input type="text" name="title" value="{{ old('title', $book->title) }}">

        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Penulis</label>
        <input type="text" name="author" value="{{ old('author', $book->author) }}">

        @error('author')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Tahun Terbit</label>
        <input type="number" name="published_year" value="{{ old('published_year', $book->published_year) }}">

        @error('published_year')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Stok</label>
        <input type="number" name="stock" min="0" value="{{ old('stock', $book->stock) }}">

        @error('stock')
            <div class="error">{{ $message }}</div>
        @enderror


        <button type="submit" class="btn btn-primary">
            Update Buku
        </button>

    </form>

@endsection
