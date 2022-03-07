@extends('vendor.installer.layout')

@section('content')
    <div class="card light-green darken-3">
        <div class="card-content white-text">
            <p class="card-title center-align">{{ trans('installer.end.title') }}</p>
            <div class="card-action center-align">
                <a class="btn waves-effect waves-light grey darken-3" href="{{ url(config('installer.login-url')) }}">
                    {{ trans('installer.end.button') }}
                </a>
            </div>
        </div>
    </div>
@endsection
