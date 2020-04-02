@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">{{ __('Welcome') }}</h1>

                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <a href="{{ route('security') }}">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">{{ __('Security') }}</h5>
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn3.iconfinder.com%2Fdata%2Ficons%2Fgoogle-material-design-icons%2F48%2Fic_security_48px-512.png&f=1&nofb=1" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6">
                            <a href="{{ route('light') }}">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">{{ __('Light') }}</h5>
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg.icons8.com%2Fios%2F1600%2Flight-on.png&f=1&nofb=1" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6">
                            <a href="{{ route('fan') }}">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">{{ __('Fan') }}</h5>
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F79%2F79636.png&f=1&nofb=1" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6">
                            <a href="{{ route('gas') }}">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">{{ __('Gas') }}</h5>
                                    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ficons.iconarchive.com%2Ficons%2Ficons8%2Fandroid%2F512%2FIndustry-Gas-icon.png&f=1&nofb=1" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
