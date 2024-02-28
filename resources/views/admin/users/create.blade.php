@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">
    {{-- Top Cancel --}}
    <div class="row">
        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Add Users</h1>
        </div>

        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row  float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-dark" type="submit">Cancel</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
    {{-- forms --}}

    <form action="" class="row mt-3" method="POST" enctype="multipart/form-data">
        <div class="col-6 mx-auto py-5">

            <div class="mb-3">
                <label for="first_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                <span class="text-danger w-100"></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                <span class="text-danger w-100"></span>
            </div>
        {{-- </div>

        <div class="col-6"> --}}



            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" >
                <span class="text-danger w-100"></span>

            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                <span class="text-danger w-100"></span>
            </div>

            <button class="btn btn-dark" type="submit">Save</button>

        </div>
    </form>


</div>

@endsection
