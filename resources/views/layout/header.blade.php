<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen Mata Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Manajemen Materi Kuliah</h1>
        @if (Auth::check())
            <div style="text-align: center;margin-bottom: 10px" >
                <p style="margin-bottom: 10px">Anda login sebagai: <strong>{{ Auth::user()->name }}</strong></p>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="tombol" type="submit">Logout</button>
                </form>
            </div>
        @endif
        <div class="nav">
            <ul>
                <li><a href="/dosen">Dosen</a></li>
                <li><a href="/ruangan">Ruangan</a></li>
                <li><a href="/matkul">Mata Kuliah</a></li>
            </ul>
        </div>