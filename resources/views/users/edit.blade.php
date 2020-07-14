@extends('layouts/app')
@section('content')

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Edit user</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item">Edit</li>
        </ul>
    </div>
    <form method="POST" action="{{ route('users.update', $user->id) }}" class="tile">
        @csrf
        @method('PATCH')
        <div class="tile-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') ?? $user->name }}">
                        @error('name')<p class="invalid-feedback">{{ $errors->first('name') }}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ old('email') ?? $user->email }}">
                        @error('email')<p>{{ $errors->first('email') }}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input class="form-control" type="password" name="password" value="{{ old('password') ?? $user->password }}">
                        @error('password')<p>{{ $errors->first('password') }}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Repeat password</label>
                        <input class="form-control" type="password" name='repeat' value="{{ old('password') ?? $user->password }}">
                        @error('prepeat')<p>{{ $errors->first('repeat') }}</p>@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="tile-footer">
            <a class="btn btn-secondary" href="{{route('users.index')}}">Cancel</a>
            <button class="btn btn-primary pull-right ml-2" type="submit">Save</button>
        </div>
    </form>
    <form method='POST' action="{{ route('users.destroy', $user->id) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger pull-right ml-2" type="submit">Delete user</button>
    </form>
</main>

@endsection
