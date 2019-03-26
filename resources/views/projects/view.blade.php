@extends('projects.layout')

@section('content')
    
    <div class="container card-panel">
        <h3 class="title">{{ $project->title }}</h3>
        <h5 class="content">{{ $project->description }}</h5>
        <form action="/projects/{ $project->id }/edit" method="get">
        <button type="submit" class="btn">Edit</button>
        </form>
    </div>
    <br/>
    @if ($project->tasks->count())
        <div class="container card-panel">
            <h5>Tasks:</h5> 
            @foreach ($project->tasks as $task)
                <form action="/completed-tasks/{{ $task->id }}" method="post">
                @csrf
                @if ($task->completed())
                    @method('delete')
                @endif
                <p>
                    <label>
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}/>
                        <span>{{ $task->description }}</span>
                    </label>
                </p>                               
                </form>
            @endforeach
        </div>
    @endif
    
    <div class="container card-panel">
        <h5>Create new task</h5>
        <form action="/projects/{{ $project->id }}/tasks" method="post">
            @csrf
            <input type="text" name="description">
            <button type="submit" class="btn">Create</button>
        </form>
    </div>
@endsection