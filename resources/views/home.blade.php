@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="card-footer">
                    <a href="{{ route('country') }}" class="btn btn-info">Countries</a>
                </div>

                 <div class="card-footer">
                    <a href="{{ route('city') }}" class="btn btn-info">Cities</a>
                </div>

                <div class="card-footer">
                    <a href="{{ route('state') }}" class="btn btn-info">States</a>
                </div>

                <div class="card-footer">
                    <a href="{{ route('customer') }}" class="btn btn-info">Customers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
