<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>APP WEB</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<script src="https://code.jquery.com/jquery-latest.js"></script>
	
</head>
<body>
	
<header> 
	<div class="container">
		<h1>APP WEB</h1>
	</div>
</header>
<div class="container">
	<section class="main row">
		<article class="col-xs-12 col-sm-8 col-md-9 ">
			<h1>Menu</h1>
			<p>
				Las consultas a ingresar estan por defecto, solamente se debe clickear el boton de ENVIAR.
			</p>
		</article>
		<aside class="col-xs-12 col-sm-4 col-md-3 ">
			<h1>Intregrantes</h1>
			<h5>Maximo Martinez</h5>
			<h5>Vitoria Ara</h5>
		</aside>
	</section>			
	<div class="row">
		<div class="col-md-12" id="Columna01">
			<h2>Consulta 01</h2>
				<textarea rows="5" cols="100" readonly> 
					SELECT DE.emp_no FROM departments AS D, dept_emp AS DE WHERE DE.dept_no = 'd008' and D.dept_no = 'd008' 
				</textarea> 
				<button class="btn btn-lg btn-success"  onclick="window.open('http://localhost/appweb/index.php/controlador/consulta_simple');">ENVIAR</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="Columna02">
			<h2>Consulta 02</h2>
				<textarea rows="5" cols="100" readonly> 
					SELECT de.emp_no,d.dept_no FROM departments as d, dept_emp as de WHERE d.dept_no = "d008" and de.dept_no = "d008"
				</textarea> 
				<button class="btn btn-lg btn-success"  onclick="window.open('http://localhost/appweb/index.php/controlador/consulta_media')">ENVIAR</button>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="Columna03">	
			<h2>Consulta 03</h2>	
				<textarea rows="13" cols="100" readonly> 
				SELECT title,birth_date,salary, first_name,last_name,hire_date FROM 
                departments as d , dept_emp as de , employees as e , titles as t , salaries as s WHERE 
                d.dept_no = de.dept_no and
                de.emp_no = e.emp_no and 
                e.emp_no = s.emp_no and 
                e.emp_no = t.emp_no and 
                s.emp_no = t.emp_no and 
                s.emp_no = de.emp_no and
                t.emp_no = de.emp_no and
                d.dept_no = "d008" 
				</textarea>
				<button class="btn btn-lg btn-success"  onclick="window.open('http://localhost/appweb/index.php/controlador/consulta_compleja')">ENVIAR</button>
		</div>	
	</div>
</div>


<br><br><br><br><br><br><br><br><br><br><br>

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


