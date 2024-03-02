@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">
    {{-- Top Cancel --}}
    <div class="row">
        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Update Chapters</h1>
        </div>
        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row  float-end">
                <a href="{{ route('publish.index') }}" class="btn btn-dark" type="submit">Back</a>
            </div>
        </div>
    </div>

    <hr>

    <form method="POST" action="{{ route('publish.update', $chapter->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="chapter_name" class="form-label">Chapter Name</label>
        <input type="text" class="form-control" id="chapter_name" name="chapter_name" value="{{ old('chapter_name', $chapter->chapter_name) }}">
        @error('chapter_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="chapter_image" class="form-label">Chapter Image</label>
        <input type="file" class="form-control" id="chapter_image" name="chapter_image">
        @error('chapter_image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Chapter</button>
</form>


</div>


@endsection
