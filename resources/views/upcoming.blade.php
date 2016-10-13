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
                        <h1>Upcoming Events</h1>
                        <h2>Get ready for some awesome coding experiences.</h2>
                    </header>

                    

                </div>
            </div>

            <!-- Main content -->
            <div class="isotope isotope-3 row">
                    
                <!-- Portfolio item -->
                <article class="portfolio isotope-item col-4">
                    <a href="#the-lost-symbol" class="image" style="background-image: url({{URL::to('img/events/thelostsymbol1.jpg')}})"></a>
                    <div class="inner">
                        <header>
                            <h3>The Lost Symbol</h3>
                        </header>
                    </div>
                </article>
                
                <!-- Portfolio item -->
                
            </div>

            
        </div>

    </div>

    <!-- Collapsible sidebar -->


    <!-- Portfolio full -->
    <div id="the-lost-symbol" class="portfolio-full portfolio-full-slidedown">

        <!-- Portfolio description -->
        <div class="portfolio-description">
            <h3>The Lost Symbol</h3>
            <p align="justify" class="more">The police has hired detectives to find out how the magicians who claim themselves as, have been robbing different branches of bank and claim that they are helping the poor people. But police has found out only a mere portion of money robbed from these banks is being distributed to the poor. The detectives claimed that these magicians are not only the persons who are involved in this robbing but some other people who all are exchanging messages among themselves and thereby helping them to execute their plans of robbing the bank. But those communications are being done by hiding the messages in some form and they need to decipher those as soon as possible before it gets too late to save the government from facing the economic crisis. So the detectives are seeking the help of people who can think out of the box, who can find what they want us not to find and use their common sense which is not so common in a way that helps them stopping the robbery of the next target bank. Don’t think, trust your instinct and help them rather than just hoping.</p>
            <div class="icon-text">
                <i class="fa fa-calendar-o"></i>
                <p><a href="http://innovision.nitrkl.ac.in">Innovision 2016</a></p>
            </div>
            <!-- <div class="icon-text">
                <i class="fa fa-users"></i>
                <p>150+ participations</p>
            </div> -->
            <div class="icon-text">
                <i class="fa fa-phone"></i>
                <p>Dinesh | 7855013642</p>
                <i class="fa fa-phone"></i>
                <p>Srotaswini | 9778062000</p>
            </div>

            <div class="icon-text">
                <i class="fa fa-thumb-tack"></i>
                <p><a href="{{route('thelostsymbol')}}">Event Page</a></p>
            </div>
        </div>

        <!-- Portfolio image slider -->
        <div class="swiper swiper-container">

            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide" style="background-image: url({{URL::to('img/events/thelostsymbol1.jpg')}})">
                    
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
