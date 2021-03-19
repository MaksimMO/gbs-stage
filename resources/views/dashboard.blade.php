@extends('layouts.gbsadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 36px; text-align: center;">Список запитів</div>

            </div>
            <div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Level</th>
                        <th scope="col">Ім'я</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Результат дзвінка</th>
                        <th scope="col">Коментар</th>
                        <th scope="col">Дата останніх змін</th>
                        <th scope="col">Дія</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($leads as $lead)
                    <tr>
                        <th scope="row">{{ strtoupper($lead['level']) }}</th>
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
