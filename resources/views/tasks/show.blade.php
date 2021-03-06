@extends('layouts.app')

@section('content')

    
     <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    
            <h1>id = {{ $task->id }} のTo do詳細ページ</h1>
    
            <table class="table table-striped">
                <tr>
                    <th>id</th>
                    <td>{{ $task->id }}</td>
                </tr>
                <tr>
                    <th>進捗状況</th>
                    <td>{{ $task->status }}</td>
                </tr>
                <tr>
                    <th>To do</th>
                    <td>{{ $task->content }}</td>
                </tr>
            </table>
        
            {!! link_to_route('tasks.edit', ' 編集', ['id' => $task->id], ['class' => 'btn btn-default glyphicon glyphicon-edit']) !!}
            
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
    
        </div>
    </div>
    
@endsection