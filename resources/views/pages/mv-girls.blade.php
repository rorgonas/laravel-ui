@extends('app')

@section('content')
    <mv-stars :persons='{!! json_encode($persons) !!}'></mv-stars>
@endsection