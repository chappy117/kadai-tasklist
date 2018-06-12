@extends('layouts.app')

@section('content')

  <h1>タスク一覧</h1>

    @if (count($task) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>コンテンツ</th>
                    <th>ステータス</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                  <tr>    
                    <td>{!! link_to_route('Tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    @endif

{!! link_to_route('Tasks.create', '新規タスクの投稿',null,['class' =>'btn btn-primary']) !!}
   
@endsection