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
                <h1>Edit {{ $lead['name'] }}</h1>

                {{ Form::open(['url' => "/update-data/".$lead['id'], 'method' => 'put']) }}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', $lead['name'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('phone_number', 'Phone') }}
                    {{ Form::text('phone_number', $lead['phone_number'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('level', 'Level') }}
                    {{ Form::text('level', $lead['level'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('called_success', 'Call success') }}
                    {{ Form::select('called_success', ['0' => 'No', '1' => 'Yes', '2' => 'Not Relevant'], array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Comment') }}
                    {{ Form::textarea('description', $lead['description'], array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
