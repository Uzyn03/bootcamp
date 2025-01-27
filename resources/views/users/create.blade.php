@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-capitalize">form User</h4>
        </div>
        <div class="card-body">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password"
                    class="form-control">
                    @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">password confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control">
                    @error('password_confirmation')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group my-2">
                <button type="submit" class="btn btn-primary text-uppercase">simpan</button>
                </div>
            </form>


        </div>
    </div>
</div>

@endsection
