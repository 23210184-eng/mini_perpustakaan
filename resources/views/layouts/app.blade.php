<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini Perpus')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        nav {
            background: #1f2937;
            padding: 16px 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
            font-weight: bold;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 9px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-warning {
            background: #f59e0b;
            color: white;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }

        th, td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #e5e7eb;
        }

        form {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            min-height: 100px;
        }

        .alert {
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            background: #dcfce7;
            color: #166534;
        }

        .error {
            color: #dc2626;
            margin-top: -12px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .actions {
            display: flex;
            gap: 6px;
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('books.index') }}">📚 Mini Perpus</a>
    <a href="{{ route('books.index') }}">Buku</a>
    <a href="{{ route('categories.index') }}">Kategori</a>
</nav>

<div class="container">

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>
