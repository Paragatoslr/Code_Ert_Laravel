@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">
    {{-- Top Cancel --}}
    <div class="row">
        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Edit Chapters</h1>
        </div>
        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row  float-end">
                <a href="{{ route('publish.index') }}" class="btn btn-dark" type="submit">Back</a>
            </div>
        </div>
    </div>

    <hr>

    <div class="col-6 mx-auto vh-50">
        <div class="mb-3 " >
            <label for="profile_image" class="form-label">Chapter</label>
            <input type="file" class="form-control" id="profile_image" name="profile_image" value="{{ old('profile_image') }}">
            <span class="text-danger w-100"></span>
        </div>
        <div class="mb-3">
            {{-- <label for="first_name" class="form-label">Chapter Name</label> --}}
            <input type="text" placeholder="Chapter Name" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
            <span class="text-danger w-100"></span>
        </div>
        <div class="text-center btn-block">
            <a href="" class="btn btn-dark" type="submit">Upcate Changes</a>
        </div>
    </div>

</div>


@endsection
