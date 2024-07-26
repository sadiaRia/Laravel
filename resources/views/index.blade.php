<h1>
List of Task<br/>
</h1>

<div>
    <!-- @if(count($tasks)) -->
    @forelse ($tasks as $task )
    <a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a><br/>
    @empty
      <div>no task</div>
    @endforelse
    <!-- @else
    <div>no task</div> -->
    <!-- @endif  -->
</div>