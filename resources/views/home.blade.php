@extends('layouts.app')

@section('content')
    <div class="container-full bg-jumbo">
        <div class="row">
            <div class="col-12">
                <div class="btn-current-series">
                    <button class="btn btn-primary fs-5 fw-bold">CURRENT SERIES</button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark py-5">
        <div class="container bg-dark mt-5">
            <div class="row">
                @foreach ($films as $film)
                    <div class="col-2 text-white">
                        <img class="img-fluid" src=" {{ $film['thumb'] }} " alt="">
                        <h3> {{ $film['series'] }} </h3>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn px-5 btn-primary color-white"> LOAD MORE</button>
            </div>
        </div>
    </div>

    <div class="container-full bg-primary blue-section">
        <div class="row justify-content-center align-items-center">
            <div class="col-2" v-for="nav, index in navMain">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="nav.image" alt="Immagini">
                    <span class="ms-2"><a class="text-decoration-none text-white"> PROVA </a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
