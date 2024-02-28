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
                    <form class="d-flex col-9" role="search" method="GET" action="">
                        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

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

        <tr>
            <th scope="row"><p>1</p></th>
            <td><p>Leo R. Paragatos</p></td>
            <td><p>paragatosleo@gmail.com</p></td>
            <td><p>04:31 PM, 28/02/24</p></td>
            {{-- <td>
                <a href="{{ route('users.view') }}" class="btn btn-sm btn-light"><i class="bi bi-eye"></i></a>
                <a href="{{ route('users.edit') }}" class="btn btn-sm btn-light"><i class="bi bi-pencil-square"></i></a>
            </td> --}}
        </tr>

        </tbody>
    </table>
</div>

@endsection
