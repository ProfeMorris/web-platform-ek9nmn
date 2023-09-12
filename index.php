<?php
  include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alumnos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <!--
      Need a visual blank slate?
      Remove all code in `styles.css`!
    -->
    <link rel="stylesheet" href="styles.css" />
    <script type="module" src="script.js"></script>
  </head>
  <body>
    <nav>
      <a href="/" aria-current="page">Alumnos</a>
      <a href="/docentes.html">Docentes</a>
      <a href="/asignaturas.php">Asignaturas</a>
      <a href="/alumnos_asignaturas.html">Alumnos_Asignaturas</a>
    </nav>
    <main>
      <form >
        <h1>FORMULARIO ALUMNOS</h1>
        <div>
          <div>
            <label>NOMBRE</label>
            <input type="text" name="nombre">
          </div>
          <div>
            <label>DNI:</label>
            <input type="text" name="dni">
          </div>
          <div>
            <label>Correo electrónico:</label>
            <input type="email" name="correo">
          </div>
          <div>
            <label>Teléfono:</label>
            <input type="text" name="telefono">
          </div>
          <div>
            <input type="submit" name="enviar">
          </div>
        </div>
      </form>
    </main>
  </body>
</html>
