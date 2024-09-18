@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>Modifica {{$comic->title}}</h2>
        </div>

        <div>

            <form  action="{{ route('comics.update', $comic) }}" class="comic-form" method="POST">
                @csrf

                @method('PUT')

                <input type="text" placeholder="Titolo Fumetto" id="title" name="title" class="@error('title') invalid @enderror" value="{{old('title', $comic->title)}}">
                @error('title')
                    <div class="error">{{$message}}</div>
                @enderror

                <textarea type="textarea" placeholder="Descrizione" cols="60" rows="8" id="description" name="description" class="@error('description') invalid @enderror">{{old('description', $comic->description)}}</textarea>
                @error('description')
                    <div class="error">{{$message}}</div>
                @enderror

                <input type="text" placeholder="Immagine Copertina" id="thumb" name="thumb" class="@error('thumb') invalid @enderror" value="{{old('thumb', $comic->thumb)}}">
                @error('thumb')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Prezzo" id="price" name="price" class="@error('price') invalid @enderror" value="{{old('price', $comic->price)}}">
                @error('price')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Serie" id="series" name="series" value="{{old('series', $comic->series)}}" class="@error('series') invalid @enderror">
                @error('series')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Data d'uscita" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}" class="@error('sale_date') invalid @enderror">
                @error('sale_date')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Tipo" id="type" name="type" value="{{old('type', $comic->type)}}" class="@error('type') invalid @enderror">
                @error('type')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <button type="submit">INVIA</button>
            </form>

        </div>

    </section>

@endsection
