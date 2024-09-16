@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>NUOVO FUMETTO</h2>
        </div>

        <div>

            <form action="#" method="GET" class="comic-form">

                <input type="text" placeholder="Titolo Fumetto">
                <input type="textarea" placeholder="Descrizione">
                <input type="text" placeholder="Immagine Copertina">
                <input type="text" placeholder="Prezzo">
                <input type="text" placeholder="Serie">
                <input type="text" placeholder="Data d'uscita">
                <input type="text" placeholder="Tipo">

                <button type="submit">INVIA</button>
            </form>

        </div>

    </section>

@endsection
