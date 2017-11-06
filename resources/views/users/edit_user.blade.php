@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <a class="btn btn-primary" href="{{ url('/create_shipping_address') }}">Create new shipping address</a>
        </div>

        @if($userAddresses !== null)
            @foreach($userAddresses as $userAddress)
                <div class="panel panel-default">
                    <div class="panel-heading">Addresses</div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="login" value="{{ $userAddress->first_name }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="login" value="{{ $userAddress->last_name }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="gender" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option>Not indicated</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="zip" class="col-md-4 control-label">Zip</label>

                                <div class="col-md-6">
                                    <input id="zip" type="text" class="form-control" name="login" value="{{ $userAddress->zip }}" required autofocus>

                                    @if ($errors->has('zip'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('zip') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="country" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="login" value="{{ $userAddress->country }}" required autofocus>

                                    @if ($errors->has('country'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="login" value="{{ $userAddress->city }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="street" class="col-md-4 control-label">Street</label>

                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control" name="login" value="{{ $userAddress->street }}" required autofocus>

                                    @if ($errors->has('street'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="house_number" class="col-md-4 control-label">House number</label>

                                <div class="col-md-6">
                                    <input id="house_number" type="text" class="form-control" name="login" value="{{ $userAddress->house_number }}" required autofocus>

                                    @if ($errors->has('house_number'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('house_number') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="extra_information" class="col-md-4 control-label">Extra information</label>

                                <div class="col-md-6">
                                    <input id="extra_information" type="text" class="form-control" name="login" value="{{ $userAddress->extra_information }}" required autofocus>

                                    @if ($errors->has('extra_information'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('extra_information') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="pull-right">
                                    <div id="created_at" class="bg-info">Created at: {{ $userAddress->created_at }}</div>
                                    <div id="updated_at" class="bg-info">Last updated: {{ $userAddress->updated_at }}</div>
                                </div>
                            </div>

                            <input type="hidden" name="user_id" value="{{ $userAddress->user_id }}">
                        </form>
                    </div>
                </div>
            @endforeach

        {{ $userAddresses->links() }}
        @endif

    </div>
@endsection
