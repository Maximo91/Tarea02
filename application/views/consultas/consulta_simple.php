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
            <th>Numero</th>
            <th>|</th>
            <th>Nombre</th>
          </tr>
          <tbody>
            <?php
            foreach($departmento as $department){ ?>
              <tr>
                <td><?php echo $department->dept_no ?></td>
                <th>|</th>
                <td><?php echo $department->dept_name ?></td>
              </tr>
            <?php }?>
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
