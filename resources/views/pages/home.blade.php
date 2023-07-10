@extends('component.navhome')

@section('content')
    <div class="container">

        {{-- Caraousel --}}
        <h4 style="font-size: 35px;" class="text-center text-light">Selamat Datang di Wisata Curug Bayan</h4>
        <div id="carouselExampleIndicators" class="carousel slide mb-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active bg-carousel d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('assets/images/curug-bayan.jpg') }}" class="bg-style" alt="...">

                </div>
                <div class="carousel-item bg-carousel">
                </div>
                <div class="carousel-item bg-carousel">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- Konten --}}
        <div class="row g-4 mb-3">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/curug.jpg') }}" class="content-img">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/curug-bayan.jpg') }}" class="content-img2">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/camping.jpg') }}" class="content-img3">
            </div>
        </div>

        {{-- Curug Bayan --}}
        <div class="card mb-3 mt-5
        " style="max-width: 100%;">
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/curug-bayan.jpg') }}" class="rounded-start"
                        style="width: 100%;" alt="Sejarah Bukit Tangkeban">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Wisata Alam Curug Bayan</h3>
                        <p class="card-text">
                            Curug Bayan merupakan salah satu pilihan wisata alam yang terdapat di Banyumas yang menawarkan
                            keindahan alam karena lokasinya yang terletak di lereng Gunung Slamet. Dengan lokasi yang
                            strategis tersebut membuat Curug Bayan menjadi salah satu tempat wisata yang populer dan banyak
                            diminati oleh wisatawan untuk melepas rasa lelah dari padatnya aktivitas sehari hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
