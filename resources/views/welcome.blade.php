@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to MyTaskList</h1>
                {!! link_to_route('login', 'Log in to Access!', null, ['class' => 'btn btn-lg btn-danger']) !!}
            </div>
        </div>
    @endif
@endsection