@extends('template.admin')

@section('admin-content')

<div class="container-fluid p-5">
    {{-- Top Cancel --}}
    <div class="row">
        <div class="col-lg-7">
            <h1><i class="d-flex"></i>Upload Chapters</h1>
        </div>
    </div>

    <form class="col-6 mx-auto" action="{{ route('publish.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="chapter_image" class="form-label">Chapter</label>
            <input type="file" class="form-control" id="chapter_image" name="chapter_image" value="">
            <span class="text-danger w-100">{{ $errors->first('chapter_image') }}</span>
        </div>
        <div class="mb-3">
            <input type="text" placeholder="Chapter Name" class="form-control" id="chapter_name" name="chapter_name" value="">
            <span class="text-danger w-100">{{ $errors->first('chapter_name') }}</span>
        </div>
        <div class="text-center btn-block">
            <button class="btn btn-dark" type="submit">Upload</button>
        </div>
    </form>

    <hr>

    <div class="row mt-3 p-3">
        <table class="table rounded">
            <thead>
                <tr class="table-dark">
                    <th></th>
                    <th scope="col">#</th>
                    <th scope="col">Chapter</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col"></th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $chapters as $c )
                <tr>
                    <th></th>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->chapter_name }}</td>
                    <td>{{ $c->created_at }}</td>
                    {{-- <td><button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Read</button></td> --}}

                    <td>
                        <td>
                            <form action="{{ route('publish.destroy', $c->id) }}" method="POST" onsubmit="return confirmDelete();">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-trash"></i></button>
                                <a href="{{ route('publish.edit', $c->id) }}" class="btn btn-sm btn-light"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-light" href="{{ route('publish.view', [$c->id]) }}"><i class="bi bi-eye"></i>
                            </form>
                        </td>
                    <td>

                        {{-- <a href="" class="btn btn-sm btn-light" class="btn btn-sm btn-light" onclick="return confirmDelete();"><i class="bi bi-trash"></i></a>
                        <a href="{{route('publish.edit')}}" class="btn btn-sm btn-light"><i class="bi bi-pencil-square "></i></a> --}}
                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>

</div>

</div>

@endsection


@section('script')
{{-- This repeats the animation from Intro --}}
<script>
function confirmDelete() {
        return confirm("Are you sure you want to delete this item?");
    }
</script>

@endsection
