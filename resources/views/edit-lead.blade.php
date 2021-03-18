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
                <h1>Edit {{ $lead['name'] }}</h1>

                {{ Form::open(['url' => '/update-data/{id}', 'method' => 'put']) }}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('phone', 'Phone') }}
                    {{ Form::phone('phone', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('phone', 'Call success') }}
                    {{ Form::checkbox('called', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Comment') }}
                    {{ Form::text('description', null, array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
