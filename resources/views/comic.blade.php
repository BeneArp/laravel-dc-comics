{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@php
    $menu = config('menues.homeNav');
@endphp

@section('content')

    <section id="main">

        <div class="label top">
            <h2>CURRENT SERIES</h2>
        </div>

        <div class="container">

            @foreach ( $comics as $comic )

                <div class="card">

                    <div class="cover">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>

                    <span>{{ $comic['type'] }}</span>

                </div>

            @endforeach

        </div>

        <div class="label center">
            <h4>LOAD MORE</h4>
        </div>

    </section>

    <section id="main-nav">

        <div class="container">

            @foreach ($menu as $item)

                <div>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                        <span>{{$item['text']}}</span>
                    </a>
                </div>

            @endforeach

        </div>

    </section>

@endsection


@section('titlePage')
    home
@endsection
