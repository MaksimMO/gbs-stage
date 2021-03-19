@extends('layouts.gbsadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Редагувати запит від {{ $lead['name'] }}</h1>
                </div>

            </div>
            <div>

                {{ Form::open(['url' => "/update-data/".$lead['id'], 'method' => 'put']) }}

                <div class="form-group">
                    {{ Form::label('name', 'Ім\'я') }}
                    {{ Form::text('name', $lead['name'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('phone_number', 'Телефон') }}
                    {{ Form::text('phone_number', $lead['phone_number'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('level', 'Level') }}
                    {{ Form::text('level', $lead['level'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('called_success', 'Результат дзвінка') }}
                    {{ Form::select('called_success', ['0' => 'Новий', '1' => 'Не взяли трубку', '2' => 'Успішний дзвінок', '3' => 'Некоректний'], $lead['called_success'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Коментар') }}
                    {{ Form::textarea('description', $lead['description'], ['class' => 'form-control', 'rows' => 5, 'cols' => 50]) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Зберегти', array('class' => 'btn btn-primary')) }}
                    <a href="{{url()->previous()}}" class="btn btn-danger">Відміна</a>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
