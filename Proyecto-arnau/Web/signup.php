
<!DOCTYPE html> 
<html> 
<head>
	<!-- Responsive -->	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,
	maximum-scale=1.20">
	<title>FitFusion Gym</title>

	<!-- CSS -->	
	<link rel="stylesheet" href="CSS/EstiloInicio.css" type="text/css"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16"  href="images/favicon.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	
<div class="b-example-divider"></div>

  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
			<img class="ManIni" src="images/logo.png">
          <li><a href="index.html" class="nav-link px-2 text-white">Home</a></li>
          <li class="nav-item dropdown">
            <a href="contacto.html" class="nav-link px-2 text-white dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Nuestras actividades</a>
            <ul class="dropdown-menu" style="background-color: #313844;">
                <li><a href="boxeo.html" class="dropdown-item">Boxeo</a></li>
                <li><a href="kickboxing.html" class="dropdown-item">Kick Boxing</a></li>
                <li><a href="muaythai.html" class="dropdown-item">Muay Thai</a></li>
                <li><a href="jiujitsu.html" class="dropdown-item">Jiu Jitsu</a></li>
                <li><a href="taekwondo.html" class="dropdown-item">Taekwondo</a></li>
                <li><a href="mma.html" class="dropdown-item">MMA</a></li>
            </ul>
        </li>
			<li><a href="tienda.html" class="nav-link px-2 text-white">Tienda</a></li>
          <li><a href="contacto.html" class="nav-link px-2 text-white">Contacto</a></li>
          <li><a href="trabajaconnosotros.html" class="nav-link px-2 text-white">Trabaja con nosotros</a></li>  
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            <a href="login.html"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
            <a href="signup.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
          </div>          
      </div>
    </div>
  </header>
<main>
    <h1>Sign-up</h1>
       <div>
      <form method= "POST">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" required>
        </div>
        <div>
          <label for="correo">Correo Electrónico:</label>
          <input type="email" id="correo" name="correo" required>
        </div>
      
        <div>
          <label for="contrasena">Contraseña:</label>
          <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <div>
          <input type="submit" name="registrarse" value="Enviar">
        </div>
      </form>
      <?php 
      include ("registro.php");
      ?>
	<footer class="py-5 footer">
        <div class="row">
          <img id="imgfooter" src="images/logo.png">
          <div class="col-6 col-md-2 mb-3 carrer" style="margin-top: 15px;">
          <p >C/ d'Eduard Maristany, 71, 08912 Badalona, Barcelona</p>
          </div>
          <div class="col-6 col-md-2 mb-3 horarios">
            <h5>Horarios</h5>
            <p>Lunes a Viernes</p>
            <p>10:00 a 20:00</p>
            <p>Sabados y domingos</p>
            <p>10:00 a 13:00</p>
          </div>
          <div class="col-6 col-md-2 mb-3" style="margin-left: -55px;">
              <h5>Politicas</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aviso Legal</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Condiciones de uso</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Datos Personales</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politica de cookies</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politica de privacidad</a></li>
              </ul>
            </div>
        </div>
      </footer>
      </main>
  </body> 

  </html>
  
