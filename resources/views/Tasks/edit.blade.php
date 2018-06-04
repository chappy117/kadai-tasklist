@extends('layouts.app')

@section('content')
 <h1>id: {{ $task->id }} のタスク編集ページ</h1>
 
          <div class="row">
               <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
          
        {!! Form::model($task, ['route' => ['Tasks.update', $task->id], 'method' => 'put']) !!}

           <div class='font-group'>
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content',null,['class' => 'font-control']) !!}
           </div>
           
           <div class ='font-group'>
                {!! Form::label('status','ステータス:')!!}
                {!! Form::text('status',null,['class'=> 'font-control']) !!}
            </div>
        
            {!! Form::submit('更新') !!}

       {!! Form::close() !!}
            </div>
      </div>
    
@endsection

   