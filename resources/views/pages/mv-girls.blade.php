@extends('app')

@section('content')
@include('includes.breadcrumb')
    <mv-stars :persons='{!! json_encode($persons) !!}'></mv-stars>
@endsection