@extends('layouts.app')

@section('content')
    <div class="container">
        @if($userProfiles !== null)
            @foreach($userProfiles as $userProfile)
                <div class="panel panel-default">
                    <div class="panel-heading">User Login: {{ $userProfile->login }}</div>

                    <div class="panel-body">
                        <div class="">Email: {{ $userProfile->email }}</div>
                        <div class="">Created at: {{ $userProfile->created_at }}</div>
                        <div class="">Updated at: {{ $userProfile->updated_at }}</div>
                    </div>

                    <form method="GET" action="{{ url('edit_user') }}">
                        <input type="hidden" name="user_id" value="{{ $userProfile->id }}">
                        <button type="submit" class="btn btn-default pull-right">Edit</button>
                    </form>

                    <form method="GET" action="{{ url('delete_user') }}">
                        <input type="hidden" name="user_id" value="{{ $userProfile->id }}">
                        <button type="submit" class="btn btn-default pull-right">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif

        {{ $userProfiles->links() }}
    </div>

@endsection