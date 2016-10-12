@extends('layouts.master')

@section('body')        
        <!-- Main wrapper -->
        <div id="main-wrapper">

            <!-- Content -->
            <div id="content">

                <!-- Fullscreen slider -->
                <div id="fullscreen-slider" class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide overlay overlay-dark-25 white" style="background-image: url({{ URL::to('img/slides/1.jpg') }})">
                            <h1>Code, Compile, Compete</h1>
                        </div>

                        <!-- Slide -->
                        <!-- <div class="swiper-slide overlay overlay-dark-50 white" style="background-image: url(img/slides/2.jpg)">
                            <h1>Robust, clean, comfortable</h1>
                        </div> -->

                        <!-- Slide -->
                        <!-- <div class="swiper-slide overlay overlay-dark-25 white" style="background-image: url(img/slides/3.jpg)">
                            <h1>Showcase your work with Rayleigh</h1>
                        </div> -->

                        <!-- Slide -->
                        <!-- <div class="swiper-slide overlay overlay-grid-2 white">
                            <video src="img/slides/4.mp4" width="640" height="360" loop></video>
                            <h1>Video example</h1>
                        </div> -->

                    </div>
                </div>

            </div>
@endsection
