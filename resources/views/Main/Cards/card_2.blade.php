@extends('layouts.main')

@section('title', 'Golden-Zombi')

@section('content')

    <div class="container">

        <div class="row mt-4">
            @for($i = 0; $i < 10; $i++)
                <div class="col-3 mt-1" style="display: inline-flex;">
                    <!-- Page Content  -->
                    <div id="content me-2">

                        <div class="card shadow-sm" style="width: 250px; border-radius: 10px;">

                            <img src="{{ asset('Images/beatiful-1.jpg') }}"
                                 class="card-img-top rounded-top"
                                 alt="beautiful-1"
                                 style="height: 250px; width: 248px; object-fit: cover;">

                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the
                                    card's content.</p>
                                <a href="#" class="btn btn-block" style="background-color: #814f1e; color: white">Go
                                    somewhere</a>
                            </div>

                        </div>


                    </div>
                </div>
            @endfor
        </div>
    </div>

@endsection()
