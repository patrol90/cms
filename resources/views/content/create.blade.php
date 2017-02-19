@extends('layouts.app')

        <!-- Bootstrap шаблон... -->
@section('content')

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->

            <!-- Форма новой задачи -->
    <form action="/" method="POST" class="form-horizontal">
        {{ csrf_field() }}

                <!-- Имя задачи -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Новый блок</label>

            <div class="col-sm-6">
                <p>
                {{ Form::input('text', 'name', null, ['class' => 'form-control']) }}
                </p>
                <p>
                {{Form::textarea('body',null, ['class'=>'form-control'])}}
                </p>
            </div>
        </div>

        <!-- Кнопка добавления задачи -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                {{Form::submit('Отправить содержание',['class'=>'btn btn-default'])}}
            </div>
        </div>
    </form>
</div>

@endsection