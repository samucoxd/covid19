@extends('plantilla.plantilla')
@section('titulo','Contacto')
@section('contenido')


<!-- Contact Section-->
<section class="page-section" id="contact" style="margin-top: 50px">
            <div class="container">
            @if ( session('mensaje') )

                <div class="container">
                    <div class="alert alert-success alert-dissmissible fade show" role="alert">
                        {{ session('mensaje') }}
                        <button class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            
            @endif
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mt-4">Contactanos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form method="POST" action="{{ route('contacto.store') }}" >
                        @csrf
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nombre</label>
                                    <input name="nombre" class="form-control" type="text" placeholder="Nombre" required="required" />
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Correo</label>
                                    <input name="correo" class="form-control"  type="email" placeholder="Email Address" required="required" />
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input name="telefono" type="tel" placeholder="Phone Number" required="required"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea name="mensaje" class="form-control" rows="5" placeholder="Message" required="required" ></textarea>
                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <button class="btn btn-primary btn-xl" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>