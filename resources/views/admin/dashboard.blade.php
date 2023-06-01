@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
    </div>
    <div class="container-fluid d-flex">
        <!--box right-->
        <div class="w-50 p-2">
            <!--First row top-left -->
            <div class="row justify-content-start">
                <div class="col-12 col-sm-6 col-md-4 ">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 ">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 ">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
            <!--First row bottom-left -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>
                        <p>row 2</p>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--box right-->
        <div class="w-50 p-2">
            <div class="row flex-column justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>
                        <p>row 2</p>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>
                        <p>row 2</p>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
