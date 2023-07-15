<?php  
session_start();
require_once("bd/conex.php");
$db = new database();
$conectar= $db->conectar();
?>

<?php
if ((isset($_POST["agregar"])) && ($_POST["agregar"]=="formu")) 

  {
    $cedula=  $_POST['documento'];
    $nombre=  $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $tel=    $_POST['telefono'];
    $genero=  $_POST['genero'];
    $email=   $_POST['email'];
    $usuario=  $_POST['user'];
    $contraseña=  $_POST['password'];

    
    $clave_procesada=password_hash($contraseña,PASSWORD_BCRYPT,["cost"=>15]);

    $validar = $conectar->prepare("SELECT * FROM usuario WHERE Documento='$cedula' or  Usuario ='$usuario'"); 
    $validar->execute();
    $fila = $validar->fetchAll(PDO::FETCH_ASSOC);
    // $queryi=$conectar->prepare($validar);
    // $queryi->execute();
    // $fila1=$queryi->fetchAll(PDO::FETCH_ASSOC);

    if ($fila) {
      echo '<script> alert ("DOCUMENTO O USUARIO EXISTENTE // CAMBIELOS//");</script';
      echo '<script> windows.location="registro.php"</script>';
    } 
    
    else if ($cedula=="" || $nombre=="" || $apellido=="" || $tel=="" || $genero=="" ||$email==""||$usuario==""||$contraseña=="") 
    {
      echo '<script> alert (" EXISTEN DATOS VACIOS");</script>';
      echo '<script> windows.location="registro.php"</script>';
    } 
     
    else {
        $insertsql=$conectar->prepare("INSERT INTO usuario (Documento,Nombre,Apellido,Telefono,genero,Email,Usuario,Password) VALUES (?,?, ?,?, ?,?,?,?);");
        $insertsql->execute([$cedula,$nombre,$apellido,$tel,$genero,$email,$usuario,$contraseña]);
        echo '<script> alert ("Registro Exitoso, Gracias");</script>';
        echo '<script> windows.location="index.html"</script>';

    }
}
?>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="css_/login.css" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentra">
                <div id="login" >
                    <form method="post" id="loginform">
                      <div class="container">
                        <h1 style="color: aliceblue;
                                    text-align: center;">
                        Registro</h1>
                      </div>
                      <div class="input-field">
                        <label for="documento">Documento:</label>
                        <input type="text" id="documento" name="documento" placeholder="Ingresa tu documento" maxlength="10"/>
                      </div>
                      <div class="input-field">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre"/>
                      </div>
                      <div class="input-field">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido"/>
                      </div>
                      <div class="input-field">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" maxlength="10">
                      </div>
                      <div class="input-field">
                        <label for="genero">genero:</label>
                        <select id="genero" name="genero">
                          <option value="">Selecciona una opción</option>
                          <option value="Femenino">Femenino</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Otro">Otro</option>
                        </select>
                      </div>
                      <div class="input-field">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Ingresa tu email">
                      </div>
          
                      <div class="input-field">
                        <label for="user">Usuario:</label>
                        <input type="text" id="user" name="user" placeholder="Ingresa tu usuario">
                      </div>
                      <div class="input-field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
                      </div>
                      <br>
                      <button class="boton azul registro-btn" type="submit" title="Ingresar" name="validar">Registrarme</button>
                      <input type="hidden"  name="agregar"   value="formu">
                      <br>
                      <br>
                      <div style="text-align: center;">
                        <a href="index.html">volver</a>
                      </div>

                    </form>
                    
                </div>
            </div>
        </div>
        <div class="contenedor">

        </div>
    </body>
</html>