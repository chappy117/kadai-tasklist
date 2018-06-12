<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($task->content)) !!}</p>
                <p>{!! nl2br(e($task->status)) !!}</p>
                </div>
            @if(Auth::user()->id==$task->user_id)
            {!! link_to_route('Tasks.edit','Edit',['id'=>$task->id],['class'=>'btn btn-success btn-sm']) !!}
            
            {!! Form::open(['route'=>['Tasks.destroy',$task->id],'method'=>'delete']) !!}
                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}