@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>NUOVO FUMETTO</h2>
        </div>

        <div>

            <form action="{{route('comics.store')}}" method="POST" class="comic-form">
                @csrf

                <input type="text" placeholder="Titolo Fumetto" id="title" name="title">
                <textarea type="textarea" placeholder="Descrizione" cols="60" rows="8" id="description" name="description"></textarea>
                <input type="text" placeholder="Immagine Copertina" id="thumb" name="thumb">
                <input type="text" placeholder="Prezzo" id="price" name="price">
                <input type="text" placeholder="Serie" id="series" name="series">
                <input type="text" placeholder="Data d'uscita" id="sale_date" name="sale_date">
                <input type="text" placeholder="Tipo" id="type" name="type">

                <button type="submit">INVIA</button>
            </form>

        </div>

    </section>

@endsection
