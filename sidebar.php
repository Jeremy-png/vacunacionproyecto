<?php
    include "database.php";     
    include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<title>Sistema de Vacunación</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body {
  font-size:16px;
}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

#tabla {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabla td, #tabla th {
    border: 1px solid #ddd;
    padding: 5px;
}


#tabla tr:nth-child(even){background-color: white !important;}

#tabla tr:hover {background-color: #ddd;}

#tabla th {
  padding-top: 3px;
  padding-bottom: 3px;
  text-align: left;
  background-color: #005d16 !important;
  color: white;
  font-size: 13px;
}

#tabla td {
    font-size: 12px;
}
.table-container {
  max-width: 1500px !important;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Sistema de<br>Control de Vacunación</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="parametrizacion.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Parametrización</a> 
    <a href="tabla_usuarios.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Administración de Usuarios</a> 
    <a href="agregar_usuario.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Agregar Usuario</a> 
    <a href="tabla_vacunas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Usuarios Externos</a> 
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out"></i>  Salir</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

</body>
</html>
