@foreach( $tasks as $task)

    <li>
       <a href="tasks/{{$task->id}}"> {{$task->task}}</a>
    </li>

@endforeach