
@extends('layouts.app')

@section('content')

   
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
     <table class="table table-bordered">
        <tr>
           <th>タスク</th>
           <td>{{ $task->content }}</td>
        </tr>
        
        <tr>
           <th>ステータス</th>
           <td>{{ $task->status }}</td>>
   {!! link_to_route('Tasks.edit', 'このタスクを編集', ['id' => $task->id],['class' => 'btn btn-default']) !!}


   {!! Form::model($task, ['route' => ['Tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
@endsection