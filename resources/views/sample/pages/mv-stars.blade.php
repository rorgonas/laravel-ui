@extends('sample')

@section('content')
    <h2>{{$title}}</h2>
    <mv-stars :persons='{!! json_encode($persons) !!}'></mv-stars>
@endsection