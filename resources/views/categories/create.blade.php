@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')

    <div class="header">
        <h1>Tambah Kategori</h1>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <form action="{{ route('categories.store') }}" method="POST">

        @csrf

        <label>Nama Kategori</label>
        <input type="text" name="name" value="{{ old('name') }}">

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Deskripsi</label>
        <textarea name="description">{{ old('description') }}</textarea>

        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>

@endsection
