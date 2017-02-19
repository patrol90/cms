@extends('layouts.app')

        <!-- Bootstrap шаблон... -->
@section('content')

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->

            <!-- Форма новой задачи -->
    {!! Form::open(['method' => 'PATCH', 'action' => ['ContentController@update', $page->id]]) !!}
        {{ csrf_field() }}

                <!-- Имя задачи -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Обновить блок</label>

            <div class="col-sm-6">
                <p>
                {{ Form::input('text', 'name', $page->name, ['class' => 'form-control']) }}
                </p>
                <p>
                {{Form::textarea('body',$page->body, ['class'=>'form-control'])}}
                </p>
            </div>
        </div>

        <!-- Кнопка добавления задачи -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                {{Form::submit('Отправить содержание',['class'=>'btn btn-default'])}}
            </div>
        </div>
   {{Form::close()}}
</div>

@endsection