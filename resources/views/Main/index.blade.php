@extends('layouts.main')

@section('title', 'Golden-Zombi')

@section('content')

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

        <div class="card shadow-sm" style="width: 280px; border-radius: 10px;">

            <img src="{{ asset('Images/beatiful-1.jpg') }}"
                 class="card-img-top rounded-top"
                 alt="beautiful-1"
                 style="height: 250px; width: 278px; object-fit: cover;">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-block" style="background-color: #814f1e; color: white">Go somewhere</a>
            </div>

        </div>


    </div>

@endsection()
