@extends('layouts.main')

@section('title', 'Карты')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('Disayn-card/style.css')}}"/>

    <div class="row" style="display: flex; justify-content: center; height: 50%; margin-top: 100px;" >

        <div class="card me-2" style="width: 30%; margin: 10px;">
            <div class="card-image" style="height: 230px; width: 99%;"></div>
            <div class="card-text">
                <span class="date">4 days ago</span>
                <h2>Post One</h2>
                <p>Lorem ipsum dolor sit demoise amet consectetur, Ducimusele, repudiandae temporibus omnis illum
                    maxime
                    quod
                    deserunt eligendi dolor</p>
            </div>
        </div>

        <div class="card rgb me-2" style="width: 30%; margin: 10px;">
            <div class="card-image card2" style="height: 250px; width: 99%; "></div>
            <div class="card-text card2">
                <span class="date">1 week ago</span>
                <h2>Post Two</h2>
                <p>Adipisicing elit. Ducimus, repudiandae corrupti tialeno des ameto temporibus omnis provident
                    illum
                    maxime
                    quod.
                    Lorem ipsum dolor</p>
            </div>
        </div>
        <div class="card me-2" style="width: 30%; margin: 10px;">
            <div class="card-image card3" style="height: 250px; width: 99%;"></div>
            <div class="card-text card3">
                <span class="date">3 week ago</span>
                <h2>Post Three</h2>
                <p>Repudiandae repudiandae de corrupti amet temporibus omnis si provident illum maxime. Ducimus,
                    lorem
                    ipsum
                    dolor
                    adipisicing elit</p>
            </div>
        </div>
    </div>


    <script src="{{asset('Disayn-card/vanilla.js')}}"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            glare: true,
            reverse: true,
            "max-glare": 0.15
        });
    </script>

@endsection
