@extends('template.admin')

@section('admin-content')

{{-- User, Seard, Add --}}

    <div class="container-fluid p-5">

        <div class="row">

            <div class="col-lg-10">
                <h1><i class="d-flex"></i>Users</h1>
            </div>

            <div class="col-lg-2 text-end">
                <div class="container-fluid">
                    <div class="row">


                        <a href="{{ route('users.create') }}" class="btn btn-dark float-end" type="submit">Add User</a>
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
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($u as $user)
            <tr>
                <th scope="row"><p>{{ $user->id }}</p></th>
                <td><p>{{ $user->name }}</p></td>
                <td><p>{{ $user->email }}</p></td>
                <td><p>{{ Str::ucfirst($user->role) }}</p></td>

                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-trash"></i></button>
                            <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-sm btn-light"><i class="bi bi-pencil-square"></i></a>
                            {{-- <a class="btn btn-light" href="{{ route('users.view', [$user->id]) }}"><i class="bi bi-eye"></button> --}}
                        </form>
                    </td>

            </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection

@section('script')
{{-- This repeats the animation from Intro --}}
<script>
function confirmDelete() {
        return confirm("Are you sure you want to delete this account?");
    }
</script>

@endsection

                {{-- <td>
                    <a href="{{ route('users.view',[$user->id]) }}" class="btn btn-sm btn-light"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('users.edit') }}" class="btn btn-sm btn-light"><i class="bi bi-pencil-square"></i></a>
                </td> --}}
