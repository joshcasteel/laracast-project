@extends('projects.layout')

@section('content')
    <div class="container">
    <form action="/projects" method="post">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
        <label for="description">Description</label>
        <input type="text" name="description" value="{{ old('title') }}" required>
        <button class="btn" type="submit">Submit</button>
    </form>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="card-panel red lighten-3">{{ $error }}</li>
            @endforeach
        </ul>
    </div>    

@endsection