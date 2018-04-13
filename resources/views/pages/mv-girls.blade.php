@extends('app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>
    <div class="container">
    <h1 class="gradient-text">{{ $title }}</h1>
        <div class="flex-center position-ref full-height">
            <ul>

                @foreach($persons as $person)
                    <li>
                        <img alt={{ $person->name }} src={{ $person->url }} />
                        <h4>{{ $person->name }}</h4>
                    </li>
                @endforeach
            </ul>

         </div>
    </div>
@endsection

<script>
const data = {
    persons: {!! json_encode($persons) !!}

}

</script>