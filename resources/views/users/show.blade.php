@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
           
            @if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'Tasks.store']) !!}
                      <div class="form-group">
                          <p>コンテンツ</p>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '1']) !!}
                        　<p>ステータス</p>
                        　{!! Form::textarea('status',old('status'),['class'=>'form-control','rows'=>1]) !!}
                       <br></br>
                       {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($tasks) > 0)
                @include('Tasks.tasks', ['tasks' => $tasks])
            @endif
        </div>
    </div>
@endsection