@extends('layouts.appIntranet')

@section('titulo', '')

@section('contenido')

<div class="row">

	<!-- Carousel -->
	<div class="col-12">
		<div class="card shadow mb-4">

			<!-- Card Body -->
			<div class="card-body">

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="{{ asset('imgs/homeIntranet/carousel/localizador.jpg') }}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="{{ asset('imgs/homeIntranet/carousel/localizador.jpg') }}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="{{ asset('imgs/homeIntranet/carousel/localizador.jpg') }}" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</button>
				</div>
				
			</div>

		</div>
	</div>

	<!-- Anuncios -->	
	<div class="col-12">
		<div class="card shadow mb-4">

			<!-- Card Body -->
			<div class="card-body">
				<div><img src="{{ asset('imgs/homeIntranet/anuncios/anuncio2.jpg') }}"></div>
			</div>
			
		</div>
	</div>

	<!-- Servicios Frecuentes -->
	<div class="col-12">
		<div class="card shadow mb-4">
			
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-black-100">Servicios Frecuentes</h6>                
            </div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="gridServiciosFrecuentes">
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/agendaElectronica.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/expedienteClinico.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/mesaServiciosTics.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/tableroControl.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/buzonServiciosGenerales.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/directorioTelefonico.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/movilizacionComunitaria.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/nominas.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/siie.jpg') }}"></div>
					<div class="celdaServiciosFrecuentes"><img class="imgServiciosFrecuentes" src="{{ asset('imgs/homeIntranet/servicioFrecuente/correoElectronico.jpg') }}"></div>
				</div>
			</div>
			
		</div>
	</div>	

	<!-- Avisos -->
	<div class="col-12">
		<div class="card shadow mb-4">

			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-black-100">Avisos</h6>                
            </div>

			<!-- Card Body -->
			<div class="card-body">
				
					<!--Carousel Wrapper-->
					<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
					
						<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
							<li data-target="#multi-item-example" data-slide-to="1"></li>
							<li data-target="#multi-item-example" data-slide-to="2"></li>
						</ol>					
						<!--/.Indicators-->

						<!--Slides-->
						<div class="carousel-inner" >

							<!--First slide-->
							<div class="carousel-item active">

								<div class="row">
									<div class="col-md-4">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso1.jpg') }}" alt="Card image cap">									
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso2.jpg') }}" alt="Card image cap">									
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso3.jpg') }}" alt="Card image cap">									
										</div>
									</div>
								</div>

							</div>
							<!--/.First slide-->

							<!--Second slide-->
							<div class="carousel-item">

								<div class="row">
									<div class="col-md-4">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso1.jpg') }}" alt="Card image cap">									
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso2.jpg') }}" alt="Card image cap">									
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso3.jpg') }}" alt="Card image cap">									
										</div>
									</div>
								</div>

							</div>
							<!--/.Second slide-->

							<!--Third slide-->
							<div class="carousel-item">

								<div class="row">
									<div class="col-md-4">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso1.jpg') }}" alt="Card image cap">									
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso2.jpg') }}" alt="Card image cap">									
										</div>
									</div>

									<div class="col-md-4 clearfix d-none d-md-block">
										<div class="mb-2">
											<img class="card-img-top" src="{{ asset('imgs/homeIntranet/avisosFuncionPublica/aviso3.jpg') }}" alt="Card image cap">									
										</div>
									</div>
								</div>

							</div>
							<!--/.Third slide-->

						</div>
						<!--/.Slides-->

						<!--Controls-->
						<button class="carousel-control-prev" type="button" data-target="#multi-item-example" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-target="#multi-item-example" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</button>					
						<!--/.Controls-->

					</div>
					<!--/.Carousel Wrapper-->

			</div>
			
		</div>
	</div>

	<!-- Redes Sociales -->
	<div class="col-12">
		<div class="card shadow mb-4">

			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-black-100">Redes Sociales</h6>                
            </div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="gridRedesSociales">
					<div class="celdaRedesSociales"><img class="imgRedesSociales" src="{{ asset('imgs/homeIntranet/redesSociales/facebook.jpg') }}"></div>
					<div class="celdaRedesSociales"><img class="imgRedesSociales" src="{{ asset('imgs/homeIntranet/redesSociales/twitter.jpg') }}"></div>
					<div class="celdaRedesSociales"><img class="imgRedesSociales" src="{{ asset('imgs/homeIntranet/redesSociales/youtube.jpg') }}"></div>
					<div class="celdaRedesSociales"><img class="imgRedesSociales" src="{{ asset('imgs/homeIntranet/redesSociales/instagram.jpg') }}"></div>
					<div class="celdaRedesSociales"><img class="imgRedesSociales" src="{{ asset('imgs/homeIntranet/redesSociales/tiktok.jpg') }}"></div>					
				</div>	
			</div>
			
		</div>
	</div>
	
</div>

@endsection