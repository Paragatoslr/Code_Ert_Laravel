@extends('template.admin')

@section('admin-content')

<h6>Publish</h6>


{{ $chapter->chapter_name }}

<img src="{{ asset('chapters/'. $chapter->chapter_image) }}" alt="">
@endsection
