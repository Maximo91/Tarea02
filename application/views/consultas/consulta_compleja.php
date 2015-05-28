<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>APP WEB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  </head>
  <body>
    <header> 
      <div class="container">
        <h1>APP WEB</h1>
      </div>
    </header>

    <div class="container">
    <table>
      <tr>
        <th>Titulo</th>
        <th>Cumpleaños</th>
        <th>Salario</th>
        <th>Numero_Dept</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha_Contrato</th>
      </tr>
      <tbody>
        <?php 
        foreach($Personas as $persona){ ?>
          <tr>
            <td><?php echo $persona->title ?></td>
            <td><?php echo $persona->birth_date ?></td>
            <td><?php echo $persona->salary ?></td>
            <td><?php echo $persona->first_name ?></td>
            <td><?php echo $persona->last_name ?></td>
            <td><?php echo $persona->hire_date ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </body>
</html>


<style type="text/css">
header{
background: #009001;
}

body{
  background: #E6E6E6;
}


</style>


