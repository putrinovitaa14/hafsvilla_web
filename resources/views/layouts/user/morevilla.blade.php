@extends('layouts.user.user')

@section('content')
    <main>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotel</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @include('layouts.user.navbar')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('assetp/img/hero/h1_hero.jpg') }}">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top Villa in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">villa & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('assetp/img/hero/h1_hero.jpg') }}">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top villa in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">villa & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('assetp/img/hero/h1_hero.jpg') }}">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Nyaman dan Berkualitas</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">villa & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Booking Room Start-->
        <div class="booking-area">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <form action="">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">

                                <!-- select in date -->
                                <div class="single-select-box mb-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span> Check In Date:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <input id="datepicker1" placeholder="10/12/2020" />
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span>Check OutDate:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <input id="datepicker2" placeholder="12/12/2020" />
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <div class="boking-tittle">
                                        <span>Nama Villa</span>
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1" placeholder="Nama Villa">
                                                    <option value="">De Firen </option>
                                                    <option value="">Rose Garden </option>
                                                    <option value="">Grand Sofia </option>
                                                    <option value="">Villa Marbelice</option>
                                                    <option value="">Homestay</option>
                                                    <option value="">Cempaka</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                {{-- <div class="single-select-box mb-30">
                                    <div class="boking-tittle">
                                        <span>Fasilitas:</span>
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select id="paket" name="paket[]" class="form-control" multiple="multiple">

                                                    <option value=""></option>

                                                    <option value="Web Master">Web Master</option>

                                                    <option value="Web Programming">Web Programming</option>

                                                    <option value="Web Design">Web Design</option>

                                                    <option value="Digital Marketing">Digital Marketing</option>

                                                    <option value="Coding For Kids">Coding For Kids</option>

                                                    <option value="Grafic Desain">Grafic Desain</option>

                                                    <option value="Motion Grafic">Motion Grafic</option>

                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                                <!-- Single Select Box -->
                                {{-- <div class="single-select-box mb-30">
                                    <div class="boking-tittle">
                                        <span>Rooms:</span>
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select3">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                                <!-- Single Select Box -->
                                <div class="single-select-box pt-45 mb-30">
                                    <a href="#" class="btn select-btn">Book Now</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Room End-->



        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Villa</h3>
                            </div>
                            <h3 class="archivment-back">Our Villa</h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    @foreach ($villas as $villa)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <!-- Single Room -->
                            <div class="single-room mb-50">
                                <div class="room-img">
                                    <a href="rooms.html"><img src="{{ asset($villa->image[0]->foto) }}"
                                            alt="" width="100px" height="300px"></a>
                                </div>
                                <div class="room-caption">
                                    <h3><a href="rooms.html">{{ $villa->nama_villa }}</a></h3>
                                    <div class="per-night">
                                        <span><u>Rp. </u>{{ $villa->harga }} <span>/ par night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="/home" class="btn view-btn1">Back<i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="{{ asset('assetp/img/logo/testimonial.png') }}" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="{{ asset('assetp/img/logo/testimonial.png') }}" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('assetp/img/gallery/gallery1.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('assetp/img/gallery/gallery2.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('assetp/img/gallery/gallery3.jpg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>
    {{-- @include('layouts.user.footer') --}}

@endsection
