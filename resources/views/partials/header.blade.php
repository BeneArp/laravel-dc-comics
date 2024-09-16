@php
    $headerMenues = config('menues.nav')
@endphp

<header>

    <div class="container">
        <img src="/img/dc-logo.png" alt="Logo DC">

        <ul class="header-menu">

            <a href="{{route('home')}}">HOME</a>
            <a href="{{route('comics.index')}}">COMICS</a>
            <a href="{{route('comics.create')}}">NEW COMIC</a>

        </ul>
    </div>

</header>
