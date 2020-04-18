@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Notifications</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--print_r($notifications)--}}
                    @foreach ($notifications as $notification)
                        <div class="card @if($notification['viewed']  == 0) {{"border-primary"}} @endif mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{$notification['name']}}</h5>
                                <p class="card-text">{{$notification['description']}}</p>
                                <p class="card-text">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <small class="text-muted">
                                                {{$ago = (new Carbon \Carbon($notification['created_at']))->diffForHumans(Carbon\Carbon::now(), true)}} ago
                                            </small>
                                        </div>
                                        <div class="col-sm-6 col-6 text-right">
                                            <small>
                                                @if ($notification['viewed']  == 0)
                                                    <form action="{{route('notification-viewed', $notification['_id'] )}}" method="GET" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-secondary btn-sm">
                                                            Mark as read
                                                        </button>
                                                    </form>
                                                @else
                                                    {{"Viewed"}}
                                                @endif
                                            </small>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
