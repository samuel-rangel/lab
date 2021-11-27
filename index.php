<?php
include('connection.php');
?>
<html>
     <head>
          <script src="index.js"></script>
          <h1>Aplicacion con base de datos</h1>
     </head>
     <body>
          <div>
               <h3>Insertar datos</h3>
               <form method="POST" action="endpoint.php">
                    <input name="data" type="text" placeholder="datos a insertar...">
                    <button type="submit">Guardar</button>
               </form>
          </div>
          <div>
               <h3>Datos</h3>
               <table id="tb">
                    <th>
                         <td>Id</td>
                         <td>Texto</td>
                    </th>
                    <?php
                    getData();
                    ?>
               </table>
          </div>
     </body>
</html>
