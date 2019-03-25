@extends('projects.layout')

@section('content')
    
    <div class="container">
        <h3 class="title">{{ $project->title }}</h3>
        <h5 class="content">{{ $project->description }}</h5>
        <form action="/projects/{ $project->id }/edit" method="get">
        <button type="submit" class="btn">Edit</button>
        </form>
    </div>
    <br/>
    @if ($project->tasks->count())
        @foreach ($project->tasks as $task)
             <div class="container">
                <form action="/tasks/{{ $task->id }}" method="post">
                @csrf
                @method('patch')
                <p>
                    <label>
                        <input type="checkbox" name="completed" onChange="this.form.submit() {{ $task->completed ? 'checked' : '' }}"/>
                        <span>{{ $task->description }}</span>
                    </label>
                </p>                               
                </form>
            </div>
            <ul>
                    @foreach ($errors->all() as $error)
                        <li class="card-panel red lighten-3">{{ $error }}</li>
                    @endforeach
            </ul>
        @endforeach
    @endif
@endsection