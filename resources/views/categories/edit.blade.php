@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')

    <div class="header">
        <h1>Edit Kategori</h1>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <form action="{{ route('categories.update', $category) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Nama Kategori</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}">

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Deskripsi</label>
        <textarea name="description">{{ old('description', $category->description) }}</textarea>

        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

@endsection
