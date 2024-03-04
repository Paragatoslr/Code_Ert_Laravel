@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">

    <div class="row">

        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Logs</h1>
        </div>

        <div class="col-lg-5 text-end">
            <div class="container-fluid">
                <div class="row">
                    {{-- <a href="{{ route('users.create') }}" class="col-3 btn btn-dark" type="submit">Add User</a> --}}
                </div>
            </div>
        </div>

    </div>
</div>

<hr> {{-- Line Break --}}
{{-- Table --}}

<div class="row mt-3 p-3">
    <table class="table rounded">
        <thead>
        <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($userLogs as $log)
            <tr>
                <td>{{ $log->user->id ?? 'N/A' }}</td>
                <td>{{ $log->user->name ?? 'Deleted User' }}</td>
                <td>{{ $log->action }}</td>
                <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <div class="row">
        <div class="container">
        {{ $userLogs->links() }}
        </div>
    </div>
</div>

@endsection
