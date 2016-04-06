@extends('admin/admin')

@section('title')
slide
@stop

@section('content')

<div class="col-md-3">
	
</div>
<div class="col-md-6">
	
  <div id="myCarousel" class="carousel slide"> 
  	<ol class="carousel-indicators"> 
  		<li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
  		<li data-target="#myCarousel" data-slide-to="1"></li> 
  		<li data-target="#myCarousel" data-slide-to="2"></li> 
      	<li data-target="#myCarousel" data-slide-to="3"></li> 
  	</ol> <!-- Carousel items --> 
  	<div class="carousel-inner"> 
 	 	<div class="item active"> 
  			<img src="/prod/public/assets/images/1.jpg" alt="First slide"> 
  				<div class="carousel-caption">Universidad</div>
  		</div>
    	<div class="item">
    		<img src="/prod/public/assets/images/2.jpg" alt="Second slide"> 
  			<div class="carousel-caption">Infraestructura</div> 
  		</div> 
  		<div class="item"> 
  			<img src="/prod/public/assets/images/3.jpg" alt="Third slide"> 
  			<div class="carousel-caption">Automotores</div> 
  		</div> 
      	<div class="item">
      		 <img src="/prod/public/assets/images/4.jpg" alt="Room slide"> 
   			   <div class="carousel-caption">Vehiculos</div> 
   		</div> 
  	</div> <!-- Carousel nav --> 
  		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> 
  		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> 
  </div>	
</div>
@stop

