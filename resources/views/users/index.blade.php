@extends('layouts.app') <!-- Menggunakan layout dari app.blade.php -->

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title"> Data user</h4>
                <a href="{{route('users.create')}}" class="btn btn-success text-capitalize"> Tambah data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $index => $user); --}}
                        <tr>
                            <td>no</td>
                            <td>usep</td>
                            <td>usep@gmail.com</td>
                            <td>opsi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection