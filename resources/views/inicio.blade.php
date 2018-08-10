@extends('layouts.master')

@section('contenido')

	<section class="probootstrap-intro" style="background-image: url(img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
      		<div class="row">
        		<div class="col-md-7 probootstrap-intro-text text-justify">
        			
<!-- BORRAR DESDE AQUÍ -->
        		<!-- 	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 455 181" style="enable-background:new 0 0 455 181;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#FFF;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;}
						</style>
							<g>
								<path class="st0" d="M101.2,140.4c-2.1,6.4-4.7,11-7.6,14s-10.3,5.5-22.2,7.7c-11.9,2.2-24.4,3.3-37.6,3.3
									c-20.8,0-31.2-7.1-31.2-21.3c0-4,1.1-11.5,3.3-22.6l19-95.9c1.1-5.5,1.7-9.5,1.7-11.9c0-2.2-0.8-4.3-2.3-6.2
									c8.7-3.3,14.7-4.9,18.1-4.9c4,0,6.1,2.3,6.1,6.9c0,1.2-1.1,6.9-3.2,17.2l-17,85.6c-2.5,12.3-3.7,20.9-3.7,25.7
									c0,8.1,9,12.2,27.1,12.2C67.5,150.3,84.1,147,101.2,140.4z"/>
								<path class="st0" d="M223.9,89.7c0.2,1.6,0.3,3,0.3,4.2c0,18.8-6.4,35.2-19.1,49.2c-12.8,14-27.7,21-44.8,21
									c-13.1,0-23.7-4.2-32-12.5c-8.2-8.4-12.4-19.2-12.4-32.6c0-15.2,5.3-28.3,16-39.5s23.2-16.7,37.6-16.7c2.2,0,4.6,0.3,7,0.9
									c-1.6-2.9-2.4-5.4-2.4-7.4c0-3.1,1.1-6.1,3.2-9c15.9,1.3,29.1,9.4,39.6,24.4c10.8,7.4,22.1,11,33.8,11c7.6,0,15.9-2.6,24.7-7.7
									l4.9,8.3c-10.4,7.2-21,10.8-31.8,10.8C241.3,94.2,233.1,92.7,223.9,89.7z M201.7,81.4c-5.4-1.6-10.4-4.2-14.9-7.8
									c-3.3-0.7-6.1-1.1-8.3-1.1c-11.1,0-20.9,5-29.4,14.9c-8.6,10-12.8,21.3-12.8,34.1c0,9.2,2.6,16.8,7.8,22.8c5.2,6,11.8,8.9,20,8.9
									c11,0,20.5-5.6,28.4-16.7c7.9-11.1,11.9-24.3,11.9-39.7C204.3,91.6,203.4,86.4,201.7,81.4z"/>
								<path class="st0" d="M311.4,127.3c2.2,4.9,3.3,9.7,3.3,14.2c0,10-4.2,18.6-12.5,26c-8.3,7.4-18.1,11.1-29.3,11.1
									c-6.6,0-12.2-1.7-16.8-5.1c-4.6-3.4-6.9-7.5-6.9-12.2c0-5.1,3.2-10.2,9.5-15.4c6.3-5.2,17-11.4,31.9-18.6l-7.8-12.6
									c-9.5-15.3-14.3-27.2-14.3-35.8c0-12.4,7.2-22.3,21.6-29.9c8.9,3.4,13.3,7.7,13.3,12.8c0,7.3-5.6,14.3-16.9,21l11.1,20.5l8.7,15.8
									c12.4-7.4,21.8-13.8,28.1-19.1c6.3-5.3,14.3-13.5,23.9-24.6l7.8,4.8C352.2,99,333.9,114.7,311.4,127.3z M294.8,136.1
									c-19.1,10.3-28.7,18.3-28.7,23.9c0,5.3,3.9,8,11.6,8c5.7,0,10.4-1.9,14-5.8c3.6-3.9,5.4-8.9,5.4-15
									C297.1,143.6,296.3,139.9,294.8,136.1z"/>
								<path class="st0" d="M413.2,123c1.8,3.2,2.6,6,2.6,8.4c0,6.4-5.4,13.4-16.2,21.1c-10.8,7.7-20.6,11.6-29.4,11.6
									c-7.8,0-14.2-3.5-19.1-10.4c-4.9-7-7.4-16-7.4-27c0-12.2,3.2-29.7,9.7-52.2l4.5-16.4h-16.5c-6.9,0-12.4,1-16.5,2.9
									c3.8-6.9,6.9-11.2,9.4-12.9c2.5-1.7,6.7-2.6,12.6-2.6h14.7l2-6.8c3-10.1,6.6-17,10.7-20.7c4.2-3.8,10.4-5.6,18.8-5.6
									c1,0,2.5,0.1,4.7,0.2c-5.1,6.5-10.4,17.5-15.8,32.9h51.6c9,0,16-1.2,20.7-3.5c-1.6,6.7-3.8,11-6.5,13.1c-2.7,2-7.7,3.1-15.1,3.1
									h-54.9c-0.7,2.1-1.1,3.7-1.5,4.8c-7.9,26.8-11.8,47.1-11.8,60.7c0,15.1,5.4,22.7,16.3,22.7c5.6,0,11.7-2.4,18.3-7.1
									C405.7,134.4,410.4,129,413.2,123z"/>
							</g>
						</svg> -->
<!-- BORRAR HASTA ACÁ -->

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
    	<section id="next-section" class="probootstrap-section">
	      	<div class="container">
      			<div class="row">
        			<div class="col-md-12 section-heading probootstrap-animate m10">
          				<h2 style="font-size: 2.1em; font-weight: 400;">Nuestros alumnos</h2>
        			</div>
      			</div>
      			<div class="row">
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
      							</div>	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
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
      							</div>	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
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
      							</div>	<p class="card-text">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>				      	
						    </div>
      					</div>
      				</div>
      			</div>
      			<!-- <div class="row">
			        <div class="col-md-3 probootstrap-animate testimonial">
			          	<div class="text-center">      
				            <div class="probootstrap-card-text">
				              	<div class="col-md-5">
				              		<div class="probootstrap-card-media">
				                		<img src="img/person_1.jpg" class="img-responsive" alt="">
				              		</div>
				            	</div>
				            	<div class="col-md-7">
				              		<h4 class="probootstrap-card-heading mb0">Jeremy Slater</h4>
				              		<p><small>Alumno CT 2 años</small></p>    
				            	</div>     
				              	<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
				            </div>                   
			          	</div>
			        </div>
			        <div class="col-md-3 probootstrap-animate testimonial">
			          	<div class="text-center">
			          		<div class="col-md-5">
			              		<div class="probootstrap-card-media">
			                		<img src="img/person_2.jpg" class="img-responsive" alt="">
			              		</div>
			            	</div>
			            	<div class="col-md-7">
			              		<h4 class="probootstrap-card-heading mb0">James Butterly</h4>
			              		<p><small>Alumno CT 2 años</small></p>   
			            	</div> 
			            	<div class="probootstrap-card-text">    
			              		<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
			            	</div>            	
			          	</div>
			        </div>
			        <div class="col-md-3 probootstrap-animate testimonial">
			          	<div class="text-center">
			          		<div class="col-md-5">
			              		<div class="probootstrap-card-media">
			                		<img src="img/person_3.jpg" class="img-responsive" alt="">
			              		</div>
			            	</div>
			            	<div class="col-md-7">
			              		<h4 class="probootstrap-card-heading mb0">James Smith</h4>
			              		<p><small>Alumno CT 2 años</small></p> 
			            	</div> 
			            	<div class="probootstrap-card-text">           
				            <p> "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean." </p>
			            	</div>            	
			          	</div>
			        </div>
			        <div class="col-md-3 probootstrap-animate testimonial">
			          	<div class="text-center">
			            	<div class="col-md-5">
			              		<div class="probootstrap-card-media">
			                		<img src="img/person_3.jpg" class="img-responsive" alt="">
			              		</div>
			            	</div>
			            	<div class="col-md-7">
			              		<h4 class="probootstrap-card-heading mb0">James Smith</h4>
			              		<p><small>Alumno CT 2 años</small></p> 
			            	</div>
			            	<div class="probootstrap-card-text">           
				     	       <p> "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean." </p>
			   		        </div> 
			          	</div>
			        </div>
      			</div> -->
    		</div>
    	</section>
    	<section class="probootstrap-section text-justify">
      		<div class="container">
        		<div class="row probootstrap-animate">
		          	<div class="col-md-12 probootstrap-relative">
		            	<h2 class="probootstrap-heading mt0 mb50" style="font-size: 2.1em; font-weight: 400;">Programas de entrenamiento y salud</h2>
		            	<ul class="probootstrap-owl-navigation absolute right hidden-xs">
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
	                  				<h3>Psicología</h3>
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
		            	<h2 class="probootstrap-heading mt0 mb50" style="font-size: 2.1em; font-weight: 400;">Área salud</h2>
		            	<ul class="probootstrap-owl-navigation absolute right hidden-xs">
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
                  					<h3>Psicología deportiva</h3>
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
		            	<h2 class="probootstrap-heading mt0 mb50" style="font-size: 2.1em; font-weight: 400;">Entrenamientos fitness</h2>
		            	<ul class="probootstrap-owl-navigation absolute right hidden-xs">
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
		            	<h2 class="probootstrap-heading mt0 mb50" style="font-size: 2.1em; font-weight: 400;">Entrenamientos deportivos</h2>
		            	<ul class="probootstrap-owl-navigation absolute right hidden-xs">
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