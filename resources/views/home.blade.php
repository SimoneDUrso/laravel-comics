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
            <div class="col-2 d-flex">
                <div class="d-flex justify-content-center align-items-center">
                    <img src=" {{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Immagini">
                    <span class="ms-2"><a class="text-decoration-none text-white"> DIGITAL COMICS </a></span>
                </div>
            </div>
            <div class="col-2 d-flex">
                <div class="d-flex justify-content-center align-items-center">
                    <img src=" {{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Immagini">
                    <span class="ms-2"><a class="text-decoration-none text-white"> DC MERCHANDISE </a></span>
                </div>
            </div>
            <div class="col-2 d-flex">
                <div class="d-flex justify-content-center align-items-center">
                    <img src=" {{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Immagini">
                    <span class="ms-2"><a class="text-decoration-none text-white"> SUBSCRIPTIONS </a></span>
                </div>
            </div>
            <div class="col-2 d-flex">
                <div class="d-flex justify-content-center align-items-center">
                    <img src=" {{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span class="ms-2"><a class="text-decoration-none text-white"> COMICS SHOP LOCATOR </a></span>
                </div>
            </div>
            <div class="col-2 d-flex">
                <div class="d-flex justify-content-center align-items-center">
                    <img src=" {{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span class="ms-2"><a class="text-decoration-none text-white"> DC POWER VISA </a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image bg-dark">

        <div class="container pt-5">
            <div class="row">
                <div class="col-12 d-flex p-0">
                    <div class="d-flex">
                        <div class="me-4">
                            <h4 class="text-white">DC COMICS</h4>
                            <ul class="list-unstyled">
                                <li><a class="text-decoration-none" href="#">Characters</a></li>
                                <li><a class="text-decoration-none" href="#">Comics</a></li>
                                <li><a class="text-decoration-none" href="#">Movies</a></li>
                                <li><a class="text-decoration-none" href="#">TV</a></li>
                                <li><a class="text-decoration-none" href="#">Games</a></li>
                                <li><a class="text-decoration-none" href="#">Videos</a></li>
                                <li><a class="text-decoration-none" href="#">News</a></li>
                            </ul>

                            <h4 class="text-white">SHOP</h4>
                            <ul class="list-unstyled">
                                <li><a class="text-decoration-none" href="#">Shop DC</a></li>
                                <li><a class="text-decoration-none" href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </div>

                        <div class="mx-4">
                            <h4 class="text-white">DC</h4>

                            <ul class="list-unstyled">
                                <li><a class="text-decoration-none" href="#">Terms Of Use</a></li>
                                <li><a class="text-decoration-none" href="#">Privacy policy (New)</a></li>
                                <li><a class="text-decoration-none" href="#">Ad Choices</a></li>
                                <li><a class="text-decoration-none" href="#">Advertising</a></li>
                                <li><a class="text-decoration-none" href="#">Jobs</a></li>
                                <li><a class="text-decoration-none" href="#">Subscriptions</a></li>
                                <li><a class="text-decoration-none" href="#">Talent Workshops</a></li>
                                <li><a class="text-decoration-none" href="#">CPSC Certificates</a></li>
                                <li><a class="text-decoration-none" href="#">Ratings</a></li>
                                <li><a class="text-decoration-none" href="#">Shop Help</a></li>
                                <li><a class="text-decoration-none" href="#">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="mx-4">
                            <h4 class="text-white">SITES</h4>
                            <ul class="list-unstyled">
                                <li><a class="text-decoration-none" href="#">DC</a></li>
                                <li><a class="text-decoration-none" href="#">MAD Magazine</a></li>
                                <li><a class="text-decoration-none" href="#">DC Kids</a></li>
                                <li><a class="text-decoration-none" href="#">DC Universe</a></li>
                                <li><a class="text-decoration-none" href="#">DC Power Visa</a></li>
                            </ul>
                        </div>

                        <div class="dc-logo-bg position-relative">
                            <img class="position-absolute img-fluid"
                                src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
