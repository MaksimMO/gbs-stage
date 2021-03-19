@extends('layouts.app')

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
                <table cellpadding="7" cellspacing="1" border="1">
                    <thead>
                    <tr>
                        <th>Level</th>
                        <th>Ім'я</th>
                        <th>Телефон</th>
                        <th>Результат дзвінка</th>
                        <th>Коментар</th>
                        <th>Дата останніх змін</th>
                        <th>Змінити</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($leads as $lead)
                    <tr>
                        <td>{{ strtoupper($lead['level']) }}</td>
                        <td>{{ $lead['name'] }}</td>
                        <td>{{ $lead['phone_number'] }}</td>

                        @if ($lead['called_success'] == 0)
                        <td>Новий</td>
                        @elseif ($lead['called_success'] == 1)
                        <td>Не взяли трубку</td>
                        @elseif ($lead['called_success'] == 2)
                        <td>Завершений дзвінок</td>
                        @elseif ($lead['called_success'] == 3)
                        <td>Нерелевантні</td>
                        @endif

                        <td>{{ isset($lead['description']) ? $lead['description'] : "" }}</td>
                        <td>{{ $lead['updated_at'] }}</td>
                        <td><a href="{{ URL::to('update-data/'.$lead['id']) }}">Змінити</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
