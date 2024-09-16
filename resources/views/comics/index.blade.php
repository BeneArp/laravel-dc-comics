{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

{{-- @php
    $menu = config('menues.homeNav');
@endphp --}}

@section('content')

    <section id="main">

        <div class="label top">
            <h2>CURRENT SERIES</h2>
        </div>

        <div class="container">

            @foreach ( $comics as $comic )

                <div class="card">

                    <div class="cover">
                         <a href="{{route('comics.show', $comic->id)}}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a>
                    </div>

                    <span>{{ $comic['type'] }}</span>

                </div>

            @endforeach

        </div>

        <div class="label center">
            <h4>LOAD MORE</h4>
        </div>

    </section>

@endsection


