<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_/login.css">
</head>
<body>
     <!-- barra de navegación -->
<div class="container">
    <div class="navbar">
    <ul>
        <li class="hh"><a href="index.php">Home</a></li>
        <li class="hh"><a href="#">Partidos</a></li>
        <li class="hh"><a href="#">Pociciones</a></li>
        <li class="hh"><a href="equipos.php">Equipos</a></li>
        <li class="hh"><a href="regitrodepo.php">Registro</a></li>
    </ul>
    </div>
</div>
<div id="img" style="text-align: center;
                    margin: 30px;
                    font-size:xx-large;">
<img  class="log" src="img/Captura.PNG"  alt="">
<h4>REGISTRO DE JUGADORES</h4>
</div>

<!-- registro de deportistas -->
<div class="card-body">
  <form class="form-container">
   
    <div class="row">
      
      <div class="form-element">
        <label for="OficioPrefactura">Documento:</label>
        <input type="text" id="OficioPrefactura" name="OficioPrefactura" readonly />
      </div>
      <div class="form-element">
        <label for="NumRegistro">Nombre completo:</label>
        <input type="text" id="NumRegistro" name="NumRegistro" readonly />
      </div>
      <div class="form-element">
        <label for="FecDocumento">Fecha de registro:</label>
        <input type="date" id="FecDocumento" name="FecDocumento" max="@DateTime.Now.ToString("yyyy-MM-dd")" />
      </div>
    </div>
    <div class="row">
    <div class="form-element">
        <label for="FecDocumento">Fecha de nacimiento:</label>
        <input type="date" id="FecDocumento" name="FecDocumento" max="@DateTime.Now.ToString("yyyy-MM-dd")" />
      </div>
      <div class="form-element">
        <label for="NumOficio">Equipo:</label>
        <input type="text" id="NumOficio" name="NumOficio" readonly required onkeyup="this.value = this.value.replace(/[^0-9\/]/g, '')" />
      </div>
      <div class="form-element">
        <label for="OrdenCompra">Pocición:</label>
        <input type="number" id="OrdenCompra" name="OrdenCompra" readonly onkeyup="this.value = this.value.replace(/[^0-9]/g, '')" />
      </div>
    </div>
    <div class="row">
    <div class="form-element">
        <label for="OrdenCompra">Código de OC:</label>
        <select id="Codigo" name="Codigo" >
          <option value="" selected="">Código</option>
          <option value="OI">OI</option>
          <option value="SE">SE</option>
          <option value="CM">CM</option>
          <option value="AG">AG</option>
          <option value="OI">OI</option>
        </select>
      </div>
    </div>
  </form>

  <div class="button-container">
    <button type="button" class="" id="Guardar" name="Guardar" href = " ">Guardar</button>
  </div>
</div>
</div>
</form>
</body>
</html>
