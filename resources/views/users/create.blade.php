@extends('layouts/app')
@section('content')

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Create user</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item">Create</li>
        </ul>
    </div>
    <form method="POST" action="{{ route('users.store') }}" class="tile">
        @csrf
        <div class="tile-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        @error('name')<p class="invalid-feedback">{{ $errors->first('name') }}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                        @error('email')<p>{{ $errors->first('email') }}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                        @error('password')<p>{{ $errors->first('password') }}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Repeat password</label>
                        <input class="form-control" type="password" name='repeat' value="{{ old('password') }}">
                        @error('repeat')<p>{{ $errors->first('repeat') }}</p>@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="tile-footer">
            <a class="btn btn-secondary" href="{{route('users.index')}}">Cancel</a>
            <button class="btn btn-primary ml-2" type="submit">Save</button>
            <a class="btn btn-danger ml-2" href="{{route('users.create')}}">Delete</a>
        </div>
    </form>
</main>

@endsection
