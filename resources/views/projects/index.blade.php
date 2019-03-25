@extends('projects.layout')

@section('content')
    <div class="container">
        <h3>Projects</h3>
        <ul>
            @foreach ($projects as $project)
            <a href="/projects/{{ $project->id }}/edit">    
            <li>{{ $project->title }}</li>
            </a>
            @endforeach
        </ul>
    </div>
@endsection