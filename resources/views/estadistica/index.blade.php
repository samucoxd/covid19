@extends('plantilla.plantilla')
@section('titulo','Estadistica Covid-19')
@section('contenido')

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio" style="margin-top: 50px">
            <div class="container">
                <!-- Portfolio Section Heading-->
                @foreach ($Estadisticas->latest_stat_by_country as $Estadistica)
                <h2 class="page-section-heading text-center text-uppercase text-secondary mt-4">Estadistica - {{ $Estadistica->record_date }}</h2>
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
                        <div class="card">
                            <img class="img-fluid" src="{!! asset('assets/covid/confirmed.png') !!}" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $Estadistica->total_cases }} - Confirmados</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <img class="img-fluid" src="{!! asset('assets/covid/recovered.png') !!}" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $Estadistica->total_recovered }} - Recuperados</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <img class="img-fluid" src="{!! asset('assets/covid/deaths.png') !!}" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $Estadistica->total_deaths }} - Decesos</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        