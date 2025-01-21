@extends('layouts.app') <!-- Menggunakan layout dari app.blade.php -->

@section('content')
    <div class="container">
        <h1>User List</h1>
        <p>This is the user list page.</p>

        <!-- Misalnya jika Anda ingin menampilkan daftar pengguna dari database -->
        <ul>
            <li>User 1</li>
            <li>User 2</li>
            <li>User 3</li>
            <li>User 4</li>
            
        </ul>
        
    </div>
@endsection