@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Security</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-schedule-tab" data-toggle="tab" href="#nav-schedule" role="tab" aria-controls="nav-schedule" aria-selected="true">Schedule</a>
                            <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">Video</a>
                            <a class="nav-item nav-link" id="nav-door-tab" data-toggle="tab" href="#nav-door" role="tab" aria-controls="nav-door" aria-selected="false">Door</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-schedule" role="tabpanel" aria-labelledby="nav-schelude-tab">

                            {{$schedules}}

                            {{--<table class="table table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Day</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($schedules->$schedule_settings as $day)
                                    <tr>
                                        <td>{{$day->Nombre}}</td>
                                        <td>{{$day->ApellidoPaterno}}</td>
                                        <td>{{$day->ApellidoMaterno}}</td>
                                        <td>{{$day->Correo}}</td>
                                        <td>
                                            <a href="{{ url('/security/'.$day->day.'/edit') }}">Edit</a>
                                            <form method="post" action="{{ url('/security/'.$day->day) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>--}}
                        </div>
                        <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                            Video
                        </div>
                        <div class="tab-pane fade" id="nav-door" role="tabpanel" aria-labelledby="nav-door-tab">
                            Door
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
