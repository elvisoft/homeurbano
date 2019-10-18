<!DOCTYPE html>

<html>
    <head>
      <meta charset="UTF-8">       
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">	     

	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  
  <link rel="stylesheet" type="text/css" src="css/style.css" />  

	<style>
* {
  box-sizing: border-box;
}

body {
  background-image: url("img/homeurbano.jpg");
  background-repeat:repeat-y;
background-position:center;
margin: 0px;
background-color: #FFFFFF;
border: 1px none #000000;
}

p {
    color: white;
    text-shadow: 5px 5px 5px black;
}
h1 {
  color: white;
  text-shadow: 5px 5px 5px black;
}
/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}


.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

      <title>homeurbano: Alquile habitaciones. Anuncie Gratis!</title>
    </head>
    <body>  

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">homeurbano: Alquile habitaciones. Anuncie Gratis!</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Ultimos anuncios</a></li>
        <button type="button" class="btn btn-default navbar-btn">Sign in</button>
        <button type="button" class="btn btn-default navbar-btn">Publicar Gratis</button>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mas Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>      
      </div>          

      </div>
  <!-- Navbar content -->
    </nav>
                       

<div class="container">
	

  <h1 class="display-4">Tu hogar donde vayas</h1>
  <h1 class="lead">Departamentos amueblados por meses</h1>
  <hr class="my-4">
  <p>Realizar busqueda</p>
  <div class="row">
    	<div class="col-xs-3">
    		<div class="autocomplete">
	    		<div class="input-group">
	      		<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
	      		<input id="placehome" type="text" class="form-control" name="lugar" placeholder="¿Donde queres vivir?">
	    		</div>
    		</div>

    	</div>

    	<div class="col-xs-2">
    		<div class="input-group">
      		<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      		<input id="search_checkin" type="text" class="form-control" name="fecha" placeholder="Fecha Inicio">
    		</div>

    	</div>

    	<div class="col-xs-2">
    		<div class="input-group">
      		<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      		<input id="search_checkout" type="text" class="form-control" name="fecha" placeholder="Fecha Fin">
    		</div>

    	</div>

    	<div class="col-xs-3">
    		<div class="input-group">
      		<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
      		<input id="departamento" type="lugar" class="form-control" name="lugar" placeholder="Departamento o Casa">
    		</div>

    	</div>
    	<div class="col-xs-2">
    		<p class="lead">
    		<a class="btn btn-primary btn-lg" href="#" role="button">Buscar</a>
  			</p>
    	</div>

    </div>
         

</div>


<link rel="stylesheet" type="text/css" src="css/style.css" />         
<script type="text/javascript" src="js/script.js"></script>       

                
    </body>
</html>
