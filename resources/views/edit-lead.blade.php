@extends('layouts.gbsadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome admin!') }}
                </div>
            </div>
            <div>
                <h1>Редагувати запит від {{ $lead['name'] }}</h1>

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
                    {{ Form::select('called_success', ['0' => 'Новий', '1' => 'Не взяли трубку', '2' => 'Завершений дзвінок', '3' => 'Нерелевантні'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Коментар') }}
                    {{ Form::textarea('description', $lead['description'], array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Зберегти', array('class' => 'btn btn-primary')) }}
                <a href="{{url()->previous()}}" class="btn btn-default">Відміна</a>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
