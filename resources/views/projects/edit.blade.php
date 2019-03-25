@extends('projects.layout')

@section('content')
    <div class="container">
    <form action="/projects/{{ $project->id }}" method="post">
    @csrf
    @method('patch')
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $project->title }}">
        <label for="description">Description</label>
        <input type="text" name="Description" value="{{ $project->description }}">
        <button class="btn" type="submit">Submit</button>
    
    </form>
    <form action="/projects/{{ $project->id }}" method="post">
        @csrf
        @method('delete')
        <button class="btn red" type="submit">Delete</button>
    </form>    
    </div>    

@endsection