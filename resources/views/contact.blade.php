@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')
<div class="container">
    <div class="title-header">
        <h2 class="title">Contact</h2>
    </div>
    <div class="businesscard" style="opacity: 0;">
        <div class="personal-data">
            <h2 class="name">Jochem de Wit</h2>
            <p class="status">Fullstack Developer in opleiding.</p>
            <div class="icon-data">
                <svg class="icon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.47 40.34"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M28.24,28.24l-7-6.12-20,17.12a4,4,0,0,0,2.78,1.1H52.41a4.06,4.06,0,0,0,2.78-1.1l-20-17.12Z"/><path d="M55.2,1.1A4.06,4.06,0,0,0,52.41,0H4.06A4.07,4.07,0,0,0,1.28,1.1l27,23.1Z"/><polygon points="0 3.54 0 37.05 19.5 20.49 0 3.54"/><polygon points="36.98 20.49 56.47 37.05 56.47 3.53 36.98 20.49"/></g></g></svg>
                <p class="data">jochem@jochemdewit.nl</p>
            </div>
            <div class="icon-data">
                <svg class="icon2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="48px" height="48px"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                <p class="data">Mediacollege Amsterdam,<br>
                   Contactweg 36,<br>
                    1014 AN Amsterdam.</p>
            </div>
        </div>
        <img src="/assets/images/corner.png" alt="corner" class="corner">
    </div>
</div>
@endsection