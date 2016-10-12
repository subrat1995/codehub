@extends('layouts.master')

@section('body')
<!-- Main wrapper -->
<div id="main-wrapper">

    <!-- Content -->
    <div id="content" class="isotope-container">

        <!-- Fluid container -->
        <div class="container-fluid">
            
            <!-- Page heading -->
            <div id="heading" class="row">
                <div class="filter col-12">

                    <header>
                        <h1>Past Events</h1>
                        <h2>Events we have conducted since our inception.</h2>
                    </header>

                    

                </div>
            </div>

            <!-- Main content -->
            <div class="isotope isotope-3 row">
                    
                <!-- Portfolio item -->
                <article class="portfolio isotope-item col-4">
                    <a href="#android-workshop" class="image" style="background-image: url({{URL::to('img/events/android1.jpg')}})"></a>
                    <div class="inner">
                        <header>
                            <h3>Android Workshop</h3>
                        </header>
                    </div>
                </article>

                <article class="portfolio isotope-item col-4">
                    <a href="#code-rush" class="image" style="background-image: url({{URL::to('img/events/coderush1.jpg')}})"></a>
                    <div class="inner">
                        <header>
                            <h3>Code Rush</h3>
                        </header>
                    </div>
                </article>
                
                <!-- Portfolio item -->
                
            </div>

            
        </div>

    </div>

    <!-- Collapsible sidebar -->


    <!-- Portfolio full -->
    <div id="android-workshop" class="portfolio-full portfolio-full-slidedown">

        <!-- Portfolio description -->
        <div class="portfolio-description">
            <h3>Android Workshop</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
            <div class="icon-text">
                <i class="fa fa-calendar-o"></i>
                <p>Innovision 2015</p>
            </div>
            <div class="icon-text">
                <i class="fa fa-users"></i>
                <p>150+ participations</p>
            </div>
            <!-- <div class="icon-text">
                <i class="fa fa-thumb-tack"></i>
                <p><a href="#">Stay tuned</a></p>
            </div> -->
        </div>

        <!-- Portfolio image slider -->
        <div class="swiper swiper-container">

            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide" style="background-image: url({{URL::to('img/events/android1.jpg')}})">
                    
                </div>

                <!-- Slide -->
                <!-- <div class="swiper-slide" style="background-image: url(img/portfolio-images/10.jpg)"></div> -->

                <!-- Slide -->
                <!-- <div class="swiper-slide" style="background-image: url(img/portfolio-images/11.jpg)"></div> -->

            </div>

            <!-- Slider navigation arrows -->
            <!-- <a class="nav-arrow nav-left" href="#"></a>
            <a class="nav-arrow nav-right" href="#"></a> -->

        </div>
       
    </div>
    <!-- Portfolio full -->
    <div id="code-rush" class="portfolio-full portfolio-full-slidedown">

        <!-- Portfolio description -->
        <div class="portfolio-description">
            <h3>Code Rush</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
            <div class="icon-text">
                <i class="fa fa-calendar-o"></i>
                <p>Tech Day 2015</p>
            </div>
            <div class="icon-text">
                <i class="fa fa-users"></i>
                <p>10+ groups</p>
            </div>
            <!-- <div class="icon-text">
                <i class="fa fa-thumb-tack"></i>
                <p><a href="#">Stay tuned</a></p>
            </div> -->
        </div>

        <!-- Portfolio image slider -->
        <div class="swiper swiper-container">

            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide" style="background-image: url({{URL::to('img/events/coderush1.jpg')}})">
                    
                </div>

                <!-- Slide -->
                <!-- <div class="swiper-slide" style="background-image: url(img/portfolio-images/10.jpg)"></div> -->

                <!-- Slide -->
                <!-- <div class="swiper-slide" style="background-image: url(img/portfolio-images/11.jpg)"></div> -->

            </div>

            <!-- Slider navigation arrows -->
            <!-- <a class="nav-arrow nav-left" href="#"></a>
            <a class="nav-arrow nav-right" href="#"></a> -->

        </div>
       
    </div>
</div>

@endsection
