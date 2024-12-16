@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Trashed Courses
        </h1>
        <hr>
        <a href="{{ route('courses.index') }}">Back to List</a>
        <hr>
    </div>
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course -> courseName }}</h5>
                        <a href="{{ route('courses.restore', $course-> id)}}">
                            Restore
                        </a>
                        <a href="{{ route('courses.destroy', $course-> id)}}">
                            Delete Permenantly
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection