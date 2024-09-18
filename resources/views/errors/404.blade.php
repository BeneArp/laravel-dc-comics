@extends('layouts.main')


@section('content')

    <section id="page-not-found">

        <div class="signal">
            <img src="/img/Batman-logo.png" alt="">
        </div>

        <div class="error-message hidden">
            <h1>404 | Page not Found</h1>
        </div>

        <img src="/img/senzanome4.png" alt="gotham">
        <img class="batman serious" src="/img/senzanome1.png" alt="batman">
        <img class="batman dumb hidden" src="/img/senzanome3.png" alt="batman">
    </section>

    <script>
        const segnale = document.querySelector('.signal');
        const messaggio = document.querySelector('.error-message')
        const batprimo = document.querySelector('.serious')
        const batsecondo = document.querySelector('.dumb')
        setTimeout(() => {
            segnale.classList.add("hidden");
            batprimo.classList.add("hidden");
            messaggio.classList.add('active');
            batsecondo.classList.add('active');
        }, "1000");
    </script>

@endsection
