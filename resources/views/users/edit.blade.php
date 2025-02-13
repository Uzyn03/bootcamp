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
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control @error('name') border-danger @enderror">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
                    @error('email')
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
