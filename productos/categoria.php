<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/categoria.css">
   
    <link rel="stylesheet" href="../css/objeto.css">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


     <!--header - menu-->
     <header>

<div class="header-content">
    <div class="logo">
        <h1>Mini Market Rosa <b>Online</b> </h1>
    </div>
    <div class="menu">

        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="categoria.php">Categoria</a></li>
                <li><a href="contactenos.php">Contactenos</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>

    </div>
</div>

</header>
                        



<!--Contenido-->

<?php

	require ('../conexion.php');

	$con = new Conexion();

	$categorias = $con ->getCategorias();




?>
    

<div class="tienda">
        <td class="cuerpo-productos">

		<?php
			foreach ($categorias as $categoria){
				echo $categoria['nombre'];

				echo '<div class="categoria">';
				echo '<a href="">';   
				
				echo '<img src="../img/articulo-2.jpg" width="200px" height="163px">'.$categoria['imagen'].;
				echo '<p>'.$categoria['nombre'].'</p>';
				echo '</a>';
				echo '</div>';

			}


		?>
					<div class="categoria">
					    <a href="">
					
					       <img src="../img/articulo-2.jpg" width="200px" height="163px">
					      <p>Mas reciente</p>
						</a>

					</div>
					<div class="categoria">
					<a href="">
					
					<img src="../img/articulo-2.jpg" width="200px" height="163px">
						<p>Mas reciente</p></a>

					</div>
					<div class="categoria">
						<a href=""><img src="../img/articulo-2.jpg" width="200px">
						<p>Agua</p></a>

					</div>
					<div class="categoria">
					<a href=""><img src="../img/articulo-3.jpg" width="200px" height="163px">
						<p>Dulces</p></a>

					</div>
					<div class="categoria">
						<a href=""><img src="../img/articulo-4.jpg" width="200px" height="163">
						<p>Sin Alcohol</p></a>

					</div>
					<div class="categoria">
						<a href=""><img src="../img/articulo-5.jpg" width="200px" height="163">
						<p>Vino</p></a>

					</div>
					<div class="categoria">
						<a href=""><img src="../img/articulo-7.jpg" width="200px" height="163">
						<p>Nuevo</p></a>

                    </div>
                    <div class="categoria">
						<a href=""><img src="../img/articulo-7.jpg" width="200px" height="163">
							<p>Alcoholicas</p></a>

						</div>
				</td>
      </div>
    
</body>
</html>