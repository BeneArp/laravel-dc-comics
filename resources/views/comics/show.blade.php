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

        <div class="edit">
            <a class="button" href="{{route('comics.edit', $comic)}}">MODIFICA</a>

            <form action="#" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare il fumetto {{$comic->title}}?')">
                @csrf

                @method('DELETE')

                <button class="button delate-button">ELIMINA</button>
            </form>
        </div>


    </section>

@endsection

