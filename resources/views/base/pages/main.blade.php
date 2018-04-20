@extends('app')

@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md gradient-text">
                    {{ $title }}
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs" target="_blank" title="Laravel Documentation">Documentation</a>
                    <a href="https://vuejs.org/" target="_blank" title="VueJS Framework ">VueJS</a>
                    <a href="https://scotch.io/tutorials/aesthetic-sass-1-architecture-and-style-organization" target="_blank" title="Aesthetic Sass">Sass</a>
                    <a href="https://projects.invisionapp.com/d/main#/projects/prototypes/11566151" target="_blank" title="MV Prototypes">MV Prototypes</a>
                    <a href="{{ url('/home') }}" title="Sample Templates">Sample Templates</a>
                </div>
            </div>
        </div>
    </div>
@endsection