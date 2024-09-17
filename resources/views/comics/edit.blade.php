@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>Modifica {{$comic->title}}</h2>
        </div>

        <div>

            <form action="{{route('comics.update', $comic)}}" class="comic-form">
                @csrf

                @method("PUT")

                <input type="text" placeholder="Titolo Fumetto" id="title" name="title" value="{{$comic->title}}">
                <textarea type="textarea" placeholder="Descrizione" cols="60" rows="8" id="description" name="description">{{$comic->description}}</textarea>
                <input type="text" placeholder="Immagine Copertina" id="thumb" name="thumb" value="{{$comic->thumb}}">
                <input type="text" placeholder="Prezzo" id="price" name="price" value="{{$comic->price}}">
                <input type="text" placeholder="Serie" id="series" name="series" value="{{$comic->series}}">
                <input type="text" placeholder="Data d'uscita" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                <input type="text" placeholder="Tipo" id="type" name="type" value="{{$comic->type}}">

                <button type="submit">INVIA</button>
            </form>

        </div>

    </section>

@endsection
