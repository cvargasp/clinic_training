@extends('layouts.master')

@section('contenido')

  	<section class="probootstrap-intro probootstrap-intro-inner text-justify" style="background-image: url(img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
	    <div class="container">
	      	<div class="row">
	        	<div class="col-md-7 probootstrap-intro-text">
	          		<h1 class="probootstrap-animate" data-animate-effect="fadeIn">Contacto</h1>
	          		<div class="probootstrap-subtitle probootstrap-animate" data-animate-effect="fadeIn">
	            		<h2>Si estas interesado en alguno de nuestros servicios dejanos tus datos para ponernos en contacto.</h2>
	          		</div>
	        	</div>
	      	</div>
	    </div>
	   	<span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Bajar <i class="icon-chevron-down"></i></a></span>
  	</section>

  	<main>
    	<section id="next-section" class="probootstrap-section text-justify">
      		<div class="container">
        		<div class="col-md-6">
            		<form action="#" method="post" class="probootstrap-form">
	              		<div class="row">
	                		<div class="col-md-6">
	                  			<div class="form-group">
	                    			<label for="fname">Nombre</label>
	                    			<input type="text" class="form-control" id="fname" name="fname">
	                  			</div>
	                		</div>
	                		<div class="col-md-6">
	                  			<div class="form-group">
	                    			<label for="lname">Apellido</label>
	                    			<input type="text" class="form-control" id="lname" name="lname">
	                  			</div>
	                		</div>
	              		</div>
	              		<div class="form-group">
			                <label for="email">Email</label>
			                <input type="email" class="form-control" id="email" name="email">
	              		</div>
	              		<div class="row">
	                		<div class="col-md-6">
	                  			<div class="form-group">
				                    <label for="client">Tipo de Cliente</label>
	                    			<select class="form-control" id="client">
									    <option selected>Selecciona uno...</option>
									    <option value="1">Adulto</option>
									    <option value="2">Niño</option>
									    <option value="3">Empresa</option>
									</select>
	                  			</div>
	                		</div>
	                		<div class="col-md-6">
	                  			<div class="form-group">
	                    			<label for="location">Comuna</label>
	                    			<select class="form-control custom-select" id="location">
									    <option selected>Selecciona una...</option>
									    <option value="1">Las Condes</option>
									    <option value="2">La Reina</option>
									    <option value="3">Etc...</option>
									</select>
	                  			</div>
	                		</div>
	              		</div>      
			            <div class="form-group">
			            	<label for="message">Cuéntanos tus necesidades</label>
			                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
			            </div>
			            <div class="form-group">
			            	<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Enviar mensaje">
			           	</div>
		     		</form>
		      	</div>
          		<div class="col-md-5 col-md-push-1">
            		<h3 class="mt0">Contáctanos</h3>
            		<ul class="probootstrap-contact-info">
		              	<li><i class="icon-mail"></i><span> contacto@clinictraining.cl</span></li>
		              	<li><i class="icon-phone2"></i><span>	+569 5396 2405 </span></li>
		              	<li><i class="icon-phone2"></i><span> +569 8901 3029 </span></li>
            		</ul>
            		<h3 class="mt0">Área de cobertura</h3>           			
            		<p><b>Santiago Sector Oriente:</b> La Reina, Las Condes, Lo Barnechea, Ñuñoa, Peñalolen, Providencia y Vitacura. Pronto en Colina (sector Chicureo).</p>
 					<img style="border-radius: 2%; height: 100%; width: 100%;" src="img/mapa.jpg"> 					
 					<p><b>Próximamente en regiones</b></p>
 					<ul>
 						<li>Norte: La Serena / Coquimbo</li>
 						<li>Centro: Viña del Mar, Reñaca y Concón</li>
 						<li>Sur: Temuco</li>
 					</ul>
          		</div>
      		</div>
    	</section>
   	</main>

@stop