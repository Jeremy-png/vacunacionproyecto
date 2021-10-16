<!DOCTYPE html>
<html>
<title>Sistema de Vacunación</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card" style="color: white !important; background-color: #009929 !important">
    <a href="" class="w3-bar-item w3-button"><b>Sistema de Vacunación</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="login.php" class="w3-bar-item w3-button">Iniciar Sesión</a>
      <a href="" class="w3-bar-item w3-button">Contacto</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="assets/home-bg.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-hide-small w3-text-light-grey">COVID</span> <span class="w3-padding w3-black w3-opacity-min"><b>19</b></span> </h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Vacunas</h1>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Astra/Zeneca</div> 
        <img src="assets/astrazeneca.webp" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Moderna</div>
        <img src="assets/moderna.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pfizer</div>
        <img src="assets/pfizer.webp" alt="House" style="width:100%">
      </div>
    </div>
  </div>
    <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a style="background-color: #005d16 !important; color: white;" href="registro_vacuna.php" class="w3-bar-item w3-button">REGISTRARSE PARA VACUNACION DEL COVID-19</a>      
    </div>
  </div>


  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contacto</h3>
    <p>Contáctanos para mayor información.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Correo" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Asunto" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Mensaje" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Proyecto Bases de Datos y Aplicaciones Web</p>
</footer>

</body>
</html>
