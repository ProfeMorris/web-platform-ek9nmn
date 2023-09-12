<?php
  include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Asignaturas</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />
    <script type="module" src="script.js"></script>
  </head>
  <body>
    <nav>
      <a href="/index.php">Alumnos</a>
      <a href="/docentes.html">Docentes</a>
      <a href="/" aria-current="page"">Asignaturas</a>
      <a href="/alumnos_asignaturas.html">Alumnos_Asignaturas</a>
    </nav>
    <main>
      <form>
        <h1>FORMULARIO ASIGNATURA</h1>
          <div>
            <div>
              <label>NOMBRE</label>
              <input type="text" name="nombre">
            </div>
            <div>
              <input type="submit" name="enviar">
            </div>
          </div>
      </form>  
    </main>
  </body>
</html>