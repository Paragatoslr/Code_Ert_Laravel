@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">
    <div class="row">
        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Edit Users</h1>
        </div>

        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row  float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-dark" type="submit">Back</a>
                </div>
            </div>
        </div>
    </div>

    <hr> {{-- Line break --}}

    <form action="{{ route('users.update', $user->id) }}" class="row mt-3" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT method for update -->
        <div class="col-6 mx-auto py-5">

            <div class="mb-3">
                <label for="first_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="first_name" name="name" value="{{ $user->name }}">
                <span class="text-danger w-100">{{ $errors->first('name') }}</span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                <span class="text-danger w-100">{{ $errors->first('email') }}</span>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                </select>
                <span class="text-danger w-100">{{ $errors->first('role') }}</span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <span class="text-danger w-100">{{ $errors->first('password') }}</span>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation">
                <span class="text-danger w-100">{{ $errors->first('password_confirmation') }}</span>
            </div>

            <button class="btn btn-dark" type="submit">Save</button>
        </div>
    </form>
</div>

@endsection
