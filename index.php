<?php
/**
 * Created by PhpStorm.
 * User: EdisonValdez
 * Date: 4/30/15
 * Time: 9:52 PM
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo de Twitter Bootstrap</title>
    <!-- Se incluyen las hojas de estilo de bootstrap -->

   <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <h1>Search here</h1>
      <label>Ejemplo de un formulario sencillo de búsqueda.</label>

      <!-- Formulario de búsqueda con un campo de entrada (input) y un botón -->
      <form class="well form-search">
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn btn-primary">Buscar</button>
      </form>

      <h2>Results</h2>

      <!-- Tabla con celdas de color de fondo alternantes y con marco -->
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Título</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem ipsum dolor sit amet</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Consetetur sadipscing elitr</td>
          </tr>
          <tr>
            <td>3</td>
            <td>At vero eos et accusam</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="span4">
        <div class="row-fluid">
          <div class="4">...</div>
          <div class="4">...</div>
          <div class="4">...</div>
        </div>
      </div>
      <div class="span8">...</div>
    </div>

    <div class="row">
      <div class="span4">...</div>
      <div class="span8">...</div>
    </div>
    <!-- JavaScript se situa al final del documento para que la página cargue mas rápido -->
    <!-- Optional: Incluir la librería de jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <!-- Optional: Incorporar los plug-ins de JavaScript de Bootstrap -->
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.js"></script>
  </body>
</html>
