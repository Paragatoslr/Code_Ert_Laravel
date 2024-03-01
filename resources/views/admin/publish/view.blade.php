@extends('template.admin')

@section('admin-content')

<h6>Publish</h6>

<div class="container-fluid p-5">
    {{-- Top Cancel --}}
    <div class="row">
        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Upload Chapters</h1>
        </div>

        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row  float-end">
                    <a href="{{ route('publish.index') }}" class="btn btn-dark" type="submit">back</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    {{ $chapter->chapter_name }}

    <div class="container-fluid py-5 d-flex justify-content-center align-items-center">
        <img src="{{ asset('chapters/'. $chapter->chapter_image) }}" alt="">
    </div>
</div>

@endsection


