@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Account</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">{{ __('User Info') }}</h1>

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" value="{{$user->name}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" value="{{$user->last_name}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" value="{{$user->email}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword">Password</label>
                              <input type="password" class="form-control" id="inputPassword" value="{{$user->password}}">
                              </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity" value="{{$address->city}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <input type="text" class="form-control" id="inputState" value="{{$address->state}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCountry">Country</label>
                                <input type="text" class="form-control" id="inputCountry" value="{{$address->country}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputStreet">Street</label>
                                <input type="text" class="form-control" id="inputStreet" value="{{$address->street}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputNumber">Number</label>
                                <input type="text" class="form-control" id="inputNumber" value="{{$address->number}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPIN">PIN</label>
                                <input type="number" class="form-control" id="inputPIN" value="{{$address->PIN}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Accept</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
