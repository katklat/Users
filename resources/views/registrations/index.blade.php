@extends('layouts/app')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>All Registrations</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item">All Registrations</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Registered at</th>
                                            <th>Unregistered at</th>
                                            <th>Time registered (hhh:mm:ss)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($registrations as $registration)
                                        <tr>
                                            <td>{{$registration->user_id}}</td>
                                            <td>{{$registration->registered_at}}</td>
                                            <td>{{$registration->unregistered_at}}</td>
                                            <td>{{$registration->time_registered}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
