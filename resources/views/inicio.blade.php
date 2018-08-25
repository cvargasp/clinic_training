@extends('layouts.master')

@section('contenido')

	<section class="probootstrap-intro" style="background-image: url(img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
      		<div class="row">
        		<div class="col-md-7 probootstrap-intro-text text-justify">
          			<h1 class="probootstrap-animate" data-animate-effect="fadeIn"><span>Tus metas,</span> Nuestros desafíos</h1>
          			<div class="probootstrap-subtitle probootstrap-animate" data-animate-effect="fadeIn">
            			<h2></h2>
          			</div>
        		</div>
      		</div>
    	</div>
    	<span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Comencemos <i class="icon-chevron-down"></i></a></span>
  	</section>

  	<main>
  		<section class="we-offer-area section-gap services" id="offer">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center probootstrap-animate">
						<h2 class="mb-10">Nuestros Alumnos</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="card-deck">
			  	<div class="card probootstrap-animate">
			  		<div class="card-body">
      					<div class="row">
      						<div class="col-md-5">
      							<img src="img/person_1.jpg" class="img-responsive circle-photo" alt="">
      						</div>
      						<div class="col-md-7">
      							<h4 class="testimonial-name">Jeremy Slater</h4>
					 			<p class="card-text"><small class="text-muted">Alumno CT 2 años</small></p>      									
      						</div>
      					</div>						      	
					   	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
					</div>
			  	</div>
			  	<div class="card probootstrap-animate">
			  		<div class="card-body">
      					<div class="row">
      						<div class="col-md-5">
      							<img src="img/person_1.jpg" class="img-responsive circle-photo" alt="">
      						</div>
      						<div class="col-md-7">
      							<h4 class="testimonial-name">Jeremy Slater</h4>
					 			<p class="card-text"><small class="text-muted">Alumno CT 2 años</small></p>      									
      						</div>
      					</div>						      	
					   	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
					</div>
			  	</div>
			  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
			  	<div class="w-100 p-2 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
			  	<div class="card probootstrap-animate">
			  		<div class="card-body">
      					<div class="row">
      						<div class="col-md-5">
      							<img src="img/person_1.jpg" class="img-responsive circle-photo" alt="">
      						</div>
      						<div class="col-md-7">
      							<h4 class="testimonial-name">Jeremy Slater</h4>
					 			<p class="card-text"><small class="text-muted">Alumno CT 2 años</small></p>      									
      						</div>
      					</div>						      	
					   	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
					</div>
			  	</div>
			  	<div class="card probootstrap-animate">
			  		<div class="card-body">
      					<div class="row">
      						<div class="col-md-5">
      							<img src="img/person_1.jpg" class="img-responsive circle-photo" alt="">
      						</div>
      						<div class="col-md-7">
      							<h4 class="testimonial-name">Jeremy Slater</h4>
					 			<p class="card-text"><small class="text-muted">Alumno CT 2 años</small></p>      									
      						</div>
      					</div>						      	
					   	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
					</div>
			  	</div>
			</div>						
		</div>	
	</section>
    	<section class="probootstrap-section text-justify">
      		<div class="container">
        		<div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<h2 class="probootstrap-heading mt0" style="font-size: 2.1em; font-weight: 400;">Programas de entrenamiento y salud</h2>
		            	<ul class="probootstrap-owl-navigation absolute right">
		              		<li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-left"></i></a></li>
		              		<li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-right"></i></a></li>
		            	</ul>
		          	</div>
		        </div>
		        <div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<div class="owl-carousel owl-carousel-carousel">
		            		<div class="item">
				               	<div class="probootstrap-program">
				               		<a href="{{ route('servicios')}}#program"><img src="img/kinesiologia.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
					               	<h3>Kinesiología</h3>
					               	<p></p>
				               	</div>
				           	</div>
				          	<div class="item">
		                		<div class="probootstrap-program">
		               				<a href="{{ route('servicios')}}#program"><img src="img/nutricion.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
		              				<h3>Nutrición</h3>
		              				<p></p>
               					</div>
            				</div>
	              			<div class="item">
	                			<div class="probootstrap-program">
	                  				<a href="{{ route('servicios')}}#program"><img src="img/psicologia.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
	                  				<h3>Coaching deportivo</h3>
	                  				<p></p>
	                			</div>
	              			</div>
	              			<div class="item">
	                			<div class="probootstrap-program">
	                  				<a href="{{ route('servicios')}}#program"><img src="img/entrenamientos-fitness.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
	                  				<h3>Entrenamientos fitness</h3>
	                			</div>
	              			</div>
	              			<div class="item">
	                			<div class="probootstrap-program">
	                  				<a href="{{ route('servicios')}}#program"><img src="img/entrenamientos-deportivos.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
	                  				<h3>Entrenamientos deportivos</h3>
	                			</div>
	              			</div>
            			</div>
          			</div>
        		</div>
        		<div class="row carousel-description probootstrap-animate">
        			<div class="col-md-12 probootstrap-relative">
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        		</div>
        		</div>
        		<div class="row probootstrap-animate probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<h2 class="probootstrap-heading mt0" style="font-size: 2.1em; font-weight: 400;">Área salud</h2>
		            	<ul class="probootstrap-owl-navigation absolute right">
		              		<li><a href="#" class="probootstrap-owl-prev2"><i class="icon-chevron-left"></i></a></li>
		              		<li><a href="#" class="probootstrap-owl-next2"><i class="icon-chevron-right"></i></a></li>
		            	</ul>
		          	</div>
		        </div>
		        <div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<div class="owl-carousel owl-carousel-carousel2">
		              		<div class="item">
				               	<div class="probootstrap-program">
				               		<a href="{{ route('servicios')}}#health"><img src="img/kinesiologia-deportiva.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
				                	<h3>Kinesiología deportiva</h3>
				                	<p></p>
			                	</div>
			              	</div>
			          		<div class="item">
		               			<div class="probootstrap-program">
		               				<a href="{{ route('servicios')}}#health"><img src="img/nutricion-deportiva.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
		               				<h3>Nutrición deportiva</h3>
		               				<p></p>
               					</div>
            				</div>         
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#health"><img src="img/psicologia-deportiva.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Coaching deportivo</h3>
                  					<p></p>
                				</div>
              				</div>
            			</div>
          			</div>
        		</div>
        		<div class="row carousel-description probootstrap-animate">
        			<div class="col-md-12 probootstrap-relative">
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        		</div>
        		</div>
        		<div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<h2 class="probootstrap-heading mt0" style="font-size: 2.1em; font-weight: 400;">Entrenamientos fitness</h2>
		            	<ul class="probootstrap-owl-navigation absolute right">
		              		<li><a href="#" class="probootstrap-owl-prev3"><i class="icon-chevron-left"></i></a></li>
		              		<li><a href="#" class="probootstrap-owl-next3"><i class="icon-chevron-right"></i></a></li>
		            	</ul>
		          	</div>
		        </div>
		        <div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<div class="owl-carousel owl-carousel-carousel3">
		              		<div class="item">
				               	<div class="probootstrap-program">
				               		<a href="{{ route('servicios')}}#fitness"><img src="img/boxeo.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
					               	<h3>Boxeo</h3>
					               	<p></p>
				               	</div>
				           	</div>
				          		<div class="item">
		                			<div class="probootstrap-program">
		                  				<a href="{{ route('servicios')}}#fitness"><img src="img/calistenia.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
		                  				<h3>Calistenia</h3>
		                  				<p></p>
                					</div>
              					</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#fitness"><img src="img/trx.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Cuerda suspensión</h3>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#fitness"><img src="img/danza.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Danza</h3>
                  					<p></p>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#fitness"><img src="img/muay-thai.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Muay Thai</h3>
                  					<p></p>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#fitness"><img src="img/pilates.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                 			 		<h3>Pilates</h3>
                 			 		<p></p>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#fitness"><img src="img/yoga.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Yoga</h3>
                  					<p></p>
                				</div>
              				</div>
            			</div>
          			</div>
        		</div>
        		<div class="row carousel-description probootstrap-animate">
        			<div class="col-md-12 probootstrap-relative">
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        		</div>
        		</div>
        		<div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<h2 class="probootstrap-heading mt0" style="font-size: 2.1em; font-weight: 400;">Entrenamientos deportivos</h2>
		            	<ul class="probootstrap-owl-navigation absolute right">
		              		<li><a href="#" class="probootstrap-owl-prev4"><i class="icon-chevron-left"></i></a></li>
		              		<li><a href="#" class="probootstrap-owl-next4"><i class="icon-chevron-right"></i></a></li>
		            	</ul>
		          	</div>
		        </div>
		        <div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<div class="owl-carousel owl-carousel-carousel4">
		              		<div class="item">
				               	<div class="probootstrap-program">
				               		<a href="{{ route('servicios')}}#sport"><img src="img/futbol.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
					               	<h3>Fútbol</h3>
				               	</div>
				           	</div>
				        	<div class="item">
		                		<div class="probootstrap-program">
		                  			<a href="{{ route('servicios')}}#sport"><img src="img/hockey.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
		                  			<h3>Hockey</h3>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#sport"><img src="img/natacion.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Natación</h3>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#sport"><img src="img/patinaje.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Patinaje</h3>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#sport"><img src="img/tenis.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                  					<h3>Tenis</h3>
                				</div>
              				</div>
              				<div class="item">
                				<div class="probootstrap-program">
                  					<a href="{{ route('servicios')}}#sport"><img src="img/otros.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive img-rounded"></a>
                 			 		<h3>Otros</h3>
                				</div>
              				</div>
            			</div>
          			</div>
        		</div>
        		<div class="row carousel-description probootstrap-animate">
        			<div class="col-md-12 probootstrap-relative">
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        		</div>
        		</div>
      		</div>
    	</section>
  	</main>

@stop