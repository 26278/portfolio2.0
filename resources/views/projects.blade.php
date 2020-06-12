@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')
    <div class="modal-filter"></div>

    {{--<section class="main__grid">--}}


        <div class="container">
            <h2 class="title" id="title1">Mijn favoriete projecten</h2>
            <div class="project-section">

                @foreach ($topProjects as $modal)

                <div class="project">
                    <div class="logo-container">
                        <img src="../assets/images/{{$modal -> img}}" alt="" class="p-logo project-logo">
                    </div>
                    <h3 class="project-title p-title">{{$modal -> title}}</h3>
                    <p class="project-subtitle p-subtitle">{{$modal -> subtitle}}</p>
                    <p class="p-desc project-short-desc">{{$modal -> short}}</p>
                    <button class="readmore myBtn__multi">Lees meer</button>
                </div>

                <div class="modal-project modal__multi" id="modal-{{$modal->id}}">
                    <div class="modal-window">
                        <svg class="close-btn close__multi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>

                        <div class="modal-side">
                            <div class="logo-container">
                                <img src="../assets/images/{{$modal -> img}}" alt="" class="p-logo modal-project-logo">

                            </div>
                            <div class="modal-text">
                                <p class="p-subtitle">{{$modal -> specie}}</p>
                                <h3 class="modal-skills">Vaardigheden:</h3>
                                <p class="modal-skill">{{$modal -> skill1}}</p>
                                <p class="modal-skill">{{$modal -> skill2}}</p>
                                <p class="modal-skill">{{$modal -> skill3}}</p>
                                <h3 class="modal-skills">Programmeertalen:</h3>
                                <p class="modal-skill">{{$modal -> lang1}}</p>
                                <p class="modal-skill">{{$modal -> lang2}}</p>
                                <p class="modal-skill">{{$modal -> lang3}}</p>
                                <p class="modal-skill">{{$modal -> lang4}}</p>
                            </div>
                        </div>

                        <div class="modal-side">
                            <div class="modal-text">
                                <h3 class="modal-title p-title">{{$modal -> title}}</h3>
                                <p class="modal-subtitle p-subtitle">{{$modal -> subtitle}}</p>
                                <p class="modal-long-desc p-desc">{{$modal -> short}}<br><br>{{$modal -> long}}</p>
                            </div>
                            <a class="github" href="{{$modal -> url}}" target="_blank">
                                <svg class="" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"></path>
                                </svg>
                                Bekijk op GitHub
                            </a>

                            <img src="{{url('/assets/images/corner.png')}}" alt="" class="corner mobile">


                        </div>

                        <img src="{{url('/assets/images/corner.png')}}" alt="" class="corner desktop">


                    </div>

                </div>



            @endforeach

        </div>


        <h2 class="title" id="title2">Andere projecten</h2>
        <div class="project-section">

            @foreach ($otherProjects as $modal)

                <div class="project">
                    <div class="logo-container">
                        <img src="../assets/images/{{$modal -> img}}" alt="" class="p-logo project-logo">
                    </div>
                    <h3 class="project-title p-title">{{$modal -> title}}</h3>
                    <p class="project-subtitle p-subtitle">{{$modal -> subtitle}}</p>
                    <p class="p-desc project-short-desc">{{$modal -> short}}</p>
                    <button class="readmore myBtn__multi">Lees meer</button>
                </div>

                <div class="modal-project modal__multi" id="modal-{{$modal->id}}">
                    <div class="modal-window">
                        <svg class="close-btn close__multi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                        <div class="modal-side">
                            <div class="logo-container">
                                <img src="../assets/images/{{$modal -> img}}" alt="" class="p-logo modal-project-logo">
                            </div>
                            <div class="modal-text">
                                <p class="p-subtitle">{{$modal -> specie}}</p>
                                <h3 class="modal-skills">Vaardigheden:</h3>
                                <p class="modal-skill">{{$modal -> skill1}}</p>
                                <p class="modal-skill">{{$modal -> skill2}}</p>
                                <p class="modal-skill">{{$modal -> skill3}}</p>
                                <h3 class="modal-skills">Programmeertalen:</h3>
                                <p class="modal-skill">{{$modal -> lang1}}</p>
                                <p class="modal-skill">{{$modal -> lang2}}</p>
                                <p class="modal-skill">{{$modal -> lang3}}</p>
                                <p class="modal-skill">{{$modal -> lang4}}</p>
                            </div>
                        </div>

                        <div class="modal-side">
                            <div class="modal-text">
                                <h3 class="modal-title p-title">{{$modal -> title}}</h3>
                                <p class="modal-subtitle p-subtitle">{{$modal -> subtitle}}</p>
                                <p class="modal-long-desc p-desc">{{$modal -> short}}<br><br>{{$modal -> long}}</p>
                            </div>
                            <a class="github" href="{{$modal -> url}}" target="_blank">
                                <svg class="" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"></path>
                                </svg>
                                Bekijk op GitHub
                            </a>

                            <img src="{{url('/assets/images/corner.png')}}" alt="" class="corner mobile">


                        </div>

                        <img src="{{url('/assets/images/corner.png')}}" alt="" class="corner desktop">

                    </div>

                </div>

            @endforeach

        </div>
    </div>


    <!-- Trigger/Open The Modal -->
    {{--<div class="myBtn__multi grid__element" style="background-image: url('{{url('img/' . $modal->img)}}');">--}}
        {{--<div class="element__filter">--}}
            {{--<div id="dummy"></div>--}}
            {{--<div id="element">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- The Modal -->


    {{--</section>--}}



@endsection