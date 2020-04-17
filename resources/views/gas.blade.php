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

                    {{--print_r($gas)--}}
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ __('Status: ') }} @if($gas['status'] == "on") {{"On"}} @else {{"Off"}} @endif</h5> <br>
                                    <form action="{{route('gas-power')}}" method="POST">
                                        {{ csrf_field() }}

                                        <div class="form-group row">
                                            <label for="mode" class="col-sm-4 col-form-label">Set</label>
                                            <div class="col-sm-8">
                                                <select name="status" class="form-control" required>
                                                    <option value="on" @if($gas['status'] == "on") {{"selected"}} @endif>on</option>
                                                    <option value="off" @if($gas['status'] == "off") {{"selected"}} @endif>off</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ __('Set Time: ') }} {{$gas['time']}}</h5> <br>
                                    <form action="{{route('gas-time')}}" method="POST">
                                        {{ csrf_field() }}

                                        <div class="form-group row">
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" value="{{$gas['time']}}" name="time" min="30" max="1440" required>
                                            </div>
                                            <label for="mode" class="col-sm-4 col-form-label">minutes</label>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
