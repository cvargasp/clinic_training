@extends('layouts.master')

@section('contenido')

	<section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
	    <div class="container">
	      	<div class="row">
	        	<div class="col-md-7 probootstrap-intro-text text-justify">
	          		<h1 class="probootstrap-animate" data-animate-effect="fadeIn">Servicios</h1>
	          		<div class="probootstrap-subtitle probootstrap-animate" data-animate-effect="fadeIn">
	            		<h2></h2>
	          		</div>
	        	</div>
	      	</div>
	    </div>
	   	<span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Bajar <i class="icon-chevron-down"></i></a></span>
  	</section>
  	<section class="probootstrap-section">
  		<div class="container">
  			<ul class="nav nav-pills mb-3 justify-content-md-center select-btn flex-column flex-sm-row" id="myTab" role="tablist">
			  	<li class="nav-item type-service" role="presentation">
			    	<a class="nav-link flex-sm-fill text-sm-center" id="home-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="true">Programas de entrenamiento y salud</a>
			  	</li>
			  	<li class="nav-item type-service" role="presentation">
			    	<a class="nav-link flex-sm-fill text-sm-center" id="profile-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="false">Área salud</a>
			  	</li>
			  	<li class="nav-item type-service" role="presentation">
			    	<a class="nav-link flex-sm-fill text-sm-center" id="contact-tab" data-toggle="tab" href="#fitness" role="tab" aria-controls="fitness" aria-selected="false">Entrenamientos fitness</a>
			  	</li>
			  	<li class="nav-item type-service" role="presentation">
			    	<a class="nav-link flex-sm-fill text-sm-center" id="sport-tab" data-toggle="tab" href="#sport" role="tab" aria-controls="sport" aria-selected="false">Entrenamientos deportivos</a>
			  	</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="program" role="tabpanel" aria-labelledby="program-tab">
					<div class="row">
        				<div class="col-md-12 section-heading probootstrap-animate text-justify">
          					<h2 class="mb30"> Programas de entrenamiento y salud </h2>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/kinesiologia.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Kinesiología</h4>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center d-md-none">
							<img src="img/nutricion.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Nutrición</h4>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/nutricion.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40 d-none d-md-block">
						</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/psicologia.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Psicología</h4>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center d-md-none">
							<img src="img/entrenamientos-fitness.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Entrenamientos fitness</h4>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/entrenamientos-fitness.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40 d-none d-md-block">
						</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/entrenamientos-deportivos.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Entrenamientos deportivos</h4>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
      			</div>
				<div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
					<div class="row">
        				<div class="col-md-12 section-heading probootstrap-animate text-justify">
          					<h2 class="mb30"> Área salud </h2>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
					<div class="row">
						<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/kinesiologia-deportiva.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Kinesiología deportiva</h4>
          					<p>Equipo multidisciplinario enfocado en el bienestar de nuestros alumnos.
							Nos preocupamos de forma personalizada e integral de la prevención y tratamiento de lesiones para lograr un reintegro deportivo óptimo y así mejorar la calidad y estilo de vida de nuestros deportistas.</p> 

							<p>Servicios Kinesiológicos</p>
							<ol>
								<li>Evaluación kinésica</li>
								<li>Reeducación postural</li>
								<li>Fisioterapia</li>
								<li>Aplicación Ktape</li>
								<li>Masoterapia descontracturante</li>
								<li>Biosteopraxia</li>
								<li>Fitswing</li>
							</ol>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center d-md-none">
							<img src="img/nutricion-deportiva.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Nutrición deportiva </h4>
          					<p>Una buena nutrición es una de las CLAVES PARA EL ÉXITO tanto deportivo, como para llevar un estilo de vida saludable, sentirnos bien, con energía, prevenir enfermedades, etc.</p>
							<p>Los nutrientes que obtenemos de los alimentos nos proveen de energía, nos ayudan a regular procesos metabólicos, estructurales, como nos sentimos anímicamente, nos influye en el rendimiento laboral, en la energía que tenemos para hacer nuestras actividades, en cómo está tu composición corporal, etc.</p>
							<p>Una mala nutrición nos podría llevar a cualquier deficiencia nutricional y provocar una disminución tanto en la capacidad física como mental. Por ejemplo: La falta de hierro disminuye la capacidad del músculo para consumir oxígeno y así producir energía; O No consumir carbohidratos previo a una competencia influye directamente en el rendimiento que tengas; y así muchos ejemplos más.</p>
							<p>Es por eso que nuestra orientación nutricional va enfocada a lograr un estilo de vida saludable a través de la alimentación, evitando una mala nutrición para obtener lo mejor de ti.</p>

							<p class="font-weight-bold">POR ESO TE INVITAMOS A TENGAS UNA COMPLETA ORIENTACIÓN NUTRICIONAL CON NOSOTROS Y ASÍ PUEDAS SACAR TU MÁXIMO POTENCIAL A TRAVÉS DEL DEPORTE Y UNA BUENA ALIMENTACION!</p>
        				</div>
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/nutricion-deportiva.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40 d-none d-md-block">
						</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4 d-flex flex-row align-items-center">
							<img src="img/psicologia-deportiva.jpg" alt="" class="img-responsive img-rounded probootstrap-animate mt40">
						</div>
        				<div class="col-md-8 section-heading probootstrap-animate text-justify">
          					<h4 class="mb30"> Psicología y coaching deportivo</h4>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
      			</div>
				<div class="tab-pane fade" id="fitness" role="tabpanel" aria-labelledby="fitness-tab">
	        		<div class="row">
        				<div class="col-md-12 section-heading probootstrap-animate text-justify">
          					<h2 class="mb30"> Entrenamientos fitness </h2>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
        			<!-- <div class="row">
 						<div class="container">
						   	<div class="d-flex flex-row">
						      	<div class="d-flex flex-column">
						      		<div class="grid">
										<figure class="effect-zoe">
											<img src="img/img_1.jpg" alt="img25"/>
											<figcaption>
												<h4 class="mb0 mt0">Futbol</h4>
											</figcaption>			
										</figure>
									</div>
		         					<div class="grid">
										<figure class="effect-zoe">
											<img src="img/img_1.jpg" alt="img25"/>
											<figcaption>
												<h4 class="mb0 mt0">Futbol</h4>
											</figcaption>			
										</figure>
									</div>
									<div class="grid">
										<figure class="effect-zoe">
											<img src="img/img_1.jpg" alt="img25"/>
											<figcaption>
												<h4 class="mb0 mt0">Futbol</h4>
											</figcaption>			
										</figure>
									</div>
		      					</div>
		      					<div class="d-flex flex-column">
						         	<div class="grid">
										<figure class="effect-zoe">
											<img src="img/img_1.jpg" alt="img25"/>
											<figcaption>
												<h4 class="mb0 mt0">Futbol</h4>
											</figcaption>			
										</figure>
									</div>
									<div class="grid">
										<figure class="effect-zoe">
											<img src="img/img_1.jpg" alt="img25"/>
											<figcaption>
												<h4 class="mb0 mt0">Futbol</h4>
											</figcaption>			
										</figure>
									</div>
		      					</div>
		      					<div class="d-flex flex-column">
		         					<img src="img/img_1.jpg" class="img-fluid">
		         					<img src="img/img_1.jpg" class="img-fluid">
		      					</div>
						      	<div class="d-flex flex-column">
						         	<img src="img/img_1.jpg" class="img-fluid">
						         	<img src="img/img_1.jpg" class="img-fluid">
						      	</div>
						   	</div>
						</div>     				
        			</div> -->
        			<div class="row">
      					<div class="col-md-12">
      					<div class="card-deck card-deck-sport mb30 justify-content-md-center text-center">
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/boxeo.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Boxeo </h4>
						    	</div>
						  	</div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/calistenia.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Calistenia </h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/trx.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Cuerda suspensión</h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/danza.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Danza </h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
						  	<div class="w-100 p-2 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/muay-thai.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Muay Thai </h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/pilates.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Pilates </h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
						  	<div class="w-100 p-2 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/yoga.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Yoga </h4>
						    	</div>
						  	</div>						  	
						</div>
      				</div>
      				</div>
      			</div>
      			<div class="tab-pane fade" id="sport" role="tabpanel" aria-labelledby="sport-tab">
	        		<div class="row">
        				<div class="col-md-12 section-heading probootstrap-animate text-justify">
          					<h2 class="mb30"> Entrenamientos deportivos </h2>
          					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
        			</div>
        			<div class="row">
      					<div class="col-md-12">
      					<div class="card-deck card-deck-sport mb30 justify-content-md-center text-center">
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/futbol.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Fútbol </h4>
						    	</div>
						  	</div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/hockey.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Hockey </h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/natacion.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Natación</h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/patinaje.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Patinaje </h4>
						    	</div>
						  	</div>
						  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
						  	<div class="w-100 p-2 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/tenis.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Tenis </h4>
						    	</div>
						  	</div>
						  	<div class="card card-sport personal probootstrap-animate">
						    	<img class="card-img-top" src="img/otros.jpg" alt="Card image cap">
						    	<div class="card-body">
						      		<h4 class="probootstrap-card-heading mb0"> Otros </h4>
						    	</div>
						  	</div>					  	
						</div>
      				</div>
      				</div>
      			</div>
			</div>
  		</div>
  	</section>
  	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  	<script>
	  	$(function(){
		  var hash = window.location.hash;
		  hash && $('ul.nav a[href="' + hash + '"]').tab('show');

		  $('.nav-pills a').click(function (e) {
		    $(this).tab('show');
		    var scrollmem = $('body').scrollTop();
		    window.location.hash = this.hash;
		    $('html,body').scrollTop(scrollmem);
		  });
		});
	</script>
@stop