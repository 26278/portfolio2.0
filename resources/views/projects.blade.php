@extends('layout.master')
@section('stylesheets')
@endsection
@section('main')
    <div class="modal-filter"></div>

    {{--<section class="main__grid">--}}


        <div class="container">
            <h2 class="title">Mijn favoriete projecten</h2>
            <div class="project-section">

                @foreach ($modals as $modal)

                <div class="project">
                    <img src="../assets/images/{{$modal -> img}}" alt="" class="p-logo project-logo">
                    <h3 class="project-title p-title">{{$modal -> title}}</h3>
                    <p class="project-subtitle p-subtitle">{{$modal -> subtitle}}</p>
                    <p class="project-short-desc p-desc">{{$modal -> short}}</p>
                    <button class="readmore myBtn__multi">Lees meer</button>
                </div>

                <div class="modal-project modal__multi" id="modal-{{$modal->id}}">
                    <div class="modal-window">
                        <svg class="close-btn close__multi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>

                        <div class="modal-side">
                            <img src="../assets/images/{{$modal -> img}}" alt="" class="p-logo modal-project-logo">
                            <div class="modal-text">
                                <p class="p-subtitle">{{$modal -> specie}}</p>
                                <h3 class="modal-skills">Vaardigheden:</h3>
                                <p class="modal-skill">{{$modal -> skill1}}</p>
                                <p class="modal-skill">{{$modal -> skill2}}</p>
                                <p class="modal-skill">{{$modal -> skill3}}</p>
                                <h3 class="modal-skills">Vaardigheden:</h3>
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
                                <p class="modal-long-desc p-desc">{{$modal -> long}}</p>
                            </div>
                        </div>

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