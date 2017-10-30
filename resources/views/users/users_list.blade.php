@extends('layouts.app')

@section('content')
    <div class="container">
        @if($data !== null)
            @foreach($data as $item)
                <div class="panel panel-default">
                    <div class="panel-heading">User Login: {{ $item->login }}</div>

                    <div class="panel-body">
                        <div class="">Email: {{ $item->email }}</div>
                        <div class="">Created at: {{ $item->created_at }}</div>
                        <div class="">Updated at: {{ $item->updated_at }}</div>
                    </div>

                    <form method="GET" action="{{ url('edit_user') }}">
                        <input type="hidden" name="user_id" value="{{ $item->id }}">
                        <button type="submit" class="btn btn-default pull-right">Edit</button>
                    </form>

                    <form method="POST" action="{{ url('delete_user') }}">
                        <input type="hidden" value="{{ $item->id }}">
                        <button type="submit" class="btn btn-default pull-right">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endsection