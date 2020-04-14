@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lights</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-schedule-tab" data-toggle="tab" href="#nav-schedule" role="tab" aria-controls="nav-schedule" aria-selected="true">Schedule</a>
                            <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">Control</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-schedule" role="tabpanel" aria-labelledby="nav-schelude-tab">
                            <br>
                            <table class="table table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Day</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($data as $day)
                                    <tr>
                                        <td>{{$day['day']}}</td>
                                        <td>{{$day['start_time']}}</td>
                                        <td>{{$day['end_time']}}</td>
                                        <td>
                                            <a href="{{ url('/light/'.$day['day'].'/edit') }}">Edit</a>
                                            <form method="post" action="{{ url('/light/'.$day['day']) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                            <br>
                            <table class="table table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($lights as $light)
                                    <tr>
                                        <td>{{$light['name']}}</td>
                                        <td>{{$light['status']}}</td>
                                        <td>
                                            <a href="{{ url('/light/'.$light['_id'].'/edit') }}">Edit</a>
                                            <form method="post" action="{{ url('/light/'.$light['_id']) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
