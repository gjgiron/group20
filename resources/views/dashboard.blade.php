@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (!Auth::check())
                    <div class="card-header">Hello Guest!</div>
                @else
                    <div class="card-header">Hello User!</div>
                @endif
                <div class="card-header">{{ __('Dashboard') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
