@extends('layouts.admin')
@section('content')

<div>
    <h1>All Courses</h1>
    @foreach($courses as $course)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $course -> courseName }}</h5>
                    <p>{{ $course-> courseID}}</p>
                    <p>{{ $course-> description}}</p>
                    <a href="{{ route('courses.edit', $course-> id)}}">
                        Edit
                    </a>
                    <a href="{{ route('courses.trash', $course-> id)}}">
                        Delete
                    </a>
                </div>
            </div>
        </div>
        @endforeach
</div>

@endsection