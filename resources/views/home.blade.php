@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')
    <div class="container">
        <div class="left">
            <p class="call" style="opacity: 0">Hallo!</p>
            <h2 class="title" style="opacity: 0">Ik ben Jochem de Wit,</h2>
            <p class="subtitle" style="opacity: 0">een Fullstack Developer in opleiding.</p>
            <hr class="line desktop" style="opacity: 0">
            <img src="/assets/images/me.jpeg" alt="Ik" class="mobile-image mobile" style="opacity: 0">
            <p class="story" style="opacity: 0">Motivatie, enthousiasme en nieuwsgierigheid zorgen ervoor dat ik elke dag nieuwe dingen leer op het Mediacollege Amsterdam binnen het vakgebied van een media developer.
                <br> <br>
                Op school en op mijn eerste half jaar stage heb ik veel geleerd over front-end development en UI/UX, maar ik zou graag meer willen leren over back-end en software development om aan de naam ‘fullstack’ developer te kunnen voldoen.
            </p>
            <div class="buttons" style="opacity: 0">
                <a href="{{url("/over-mij")}}" class="readmore-btn">Lees meer</a>
                <a href="{{url("/projecten")}}" class="projects-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"/></svg>
                    Bekijk projecten
                </a>
            </div>


        </div>
        <div class="right">
            <img src="/assets/images/me.jpeg" alt="Ik" class="desktop-img desktop" style="opacity: 0">
        </div>
    </div>
@endsection