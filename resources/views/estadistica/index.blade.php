@extends('plantilla.plantilla')
@section('titulo','Estadistica Covid-19')
@section('contenido')

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio" style="margin-top: 150px">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mt-4">Estadistica - {{ $Estadisticas->lastUpdate }}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                            <h1>{{ $Estadisticas->confirmed->value }} - Confirmados</h1>
                           <!-- <img class="img-fluid" src="{!! asset('assets/img/portfolio/cabin.png') !!}" alt="" /> --> 
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h1>{{ $Estadisticas->recovered->value }} - Recuperados</h1>
                           <!--  <img class="img-fluid" src="{!! asset('assets/img/portfolio/cake.png') !!}" alt="" />--> 
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h1>{{ $Estadisticas->deaths->value }} - Muertos</h1>
                            <!-- <img class="img-fluid" src="{!! asset('assets/img/portfolio/circus.png') !!}" alt="" />--> 
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <img class="img-fluid" src="{!! asset('assets/img/portfolio/game.png') !!}" alt="" />
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                            <img class="img-fluid" src="{!! asset('assets/img/portfolio/safe.png') !!}" alt="" />
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                            <img class="img-fluid" src="{!! asset('assets/img/portfolio/submarine.png') !!}" alt="" />
                    </div>
                </div>
            </div>
        </section>
        