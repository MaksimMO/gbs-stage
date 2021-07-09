@extends('layouts.gbsadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 36px; text-align: center;">Список запитів</div>
            </div>
            <div class="mt-3">
                <table id="leads" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Level</th>
                        <th scope="col">Ім'я</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Email</th>
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
                        <td>{{ $lead['email'] }}</td>
                        <td data-order="{{ $lead['called_success'] }}"
                            @if ($lead['called_success'] == 0)
                                style="background-color:#fff;"
                            @elseif ($lead['called_success'] == 1)
                                style="background-color:yellow;"
                            @elseif ($lead['called_success'] == 2)
                                style="background-color:#A3F06C;"
                            @elseif ($lead['called_success'] == 3)
                                style="background-color:#FF4040;"
                            @endif
                        >
                            @if ($lead['called_success'] == 0)
                                Новий
                            @elseif ($lead['called_success'] == 1)
                                Не взяли трубку
                            @elseif ($lead['called_success'] == 2)
                                Успішний дзвінок
                            @elseif ($lead['called_success'] == 3)
                                Некоректний
                            @endif
                        </td>
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
