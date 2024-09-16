@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>{{$comic->title}}</h2>
        </div>

        <div class="container">

            <div class="comic-details">

                <div class="comic_cover">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>

                <span>Serie: {{$comic->series}} || Data d'uscita: {{$comic->sale_date}}</span>
                <p>{{$comic->description}}</p>
                <span class="label">Prezzo: {{$comic->price}}</span>

            </div>

        </div>

    </section>

@endsection

