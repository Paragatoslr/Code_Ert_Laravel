@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">
    <div class="row">

        <div class="col-lg-7">
            <h1><i class="d-flex"></i>View Users</h1>
        </div>

        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row  float-end">
                <a href="{{ route('users.index') }}" class="btn btn-dark" type="submit">Back</a>
            </div>
        </div>

    </div>
</div>

<hr>

<form class="row mt-3">
    @csrf
    <div class="col-6 mx-auto py-5">
        <div class="mb-3">
            <h6 class="fw-bold">Basic Information</h6>
        </div>
        <div class="mb-3">
            <label for="first_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="" disabled>
            <span class="text-danger w-100"></span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="" disabled>
            <span class="text-danger w-100"></span>
        </div>
        <button class="btn btn-dark" type="submit">Save</button>
    </div>

</form>
</div>

@endsection
