@extends('layouts/app')
@section('content')

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Manage registrations</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('registrations.index') }}">Registrations</a></li>
            <li class="breadcrumb-item">Manage</li>
        </ul>
    </div>

    @if(!empty($registration->unregistered_at))
    <form method="POST" action="{{ route('register') }}" class="tile">
        @csrf
            <button class="btn btn-primary ml-2" type="submit">Register</button>
    </form>
    @else
    <form method="POST" action="{{ route('unregister') }}" class="tile">
        @csrf
        @method('PATCH')
            <button class="btn btn-primary ml-2" type="submit">Unregister</button>
    </form>
    @endif
</main>

@endsection
