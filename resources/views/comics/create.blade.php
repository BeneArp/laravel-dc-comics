@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>NUOVO FUMETTO</h2>
        </div>

        <div>

            <form action="{{route('comics.store')}}" method="POST" class="comic-form">
                @csrf

                <input class="@error('title') invalid @enderror" type="text" placeholder="Titolo Fumetto" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="error">{{$message}}</div>
                @enderror

                <textarea type="textarea" placeholder="Descrizione" cols="60" rows="8" id="description" name="description" class="@error('description') invalid @enderror">{{old('description')}}</textarea>
                @error('description')
                    <div class="error">{{$message}}</div>
                @enderror

                <input type="text" placeholder="Immagine Copertina" id="thumb" name="thumb" class="@error('thumb') invalid @enderror" value="{{old('thumb')}}">
                @error('thumb')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Prezzo" id="price" name="price" class="@error('price') invalid @enderror" value="{{old('price')}}">
                @error('price')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Serie" id="series" name="series" class="@error('series') invalid @enderror" value="{{old('series')}}">
                @error('series')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Data d'uscita" id="sale_date" name="sale_date" class="@error('sale_date') invalid @enderror" value="{{old('sale_date')}}">
                @error('sale_date')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <input type="text" placeholder="Tipo" id="type" name="type" class="@error('type') invalid @enderror" value="{{old('type')}}">
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
