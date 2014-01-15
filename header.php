    <a href="index.php"></a>
      <nav>
      	
        <ul class="main">
<?php if (isset($_SESSION['codUsuario']) && !empty($_SESSION['codUsuario'])) { ?>
          <li><a href="?section=libros">LIBROS</a></li>
          <li><a href="?section=servicios">SERVICIOS</a></li>
          <li><a href="?section=agregarusuario&page=agregarusuario">AGREAGR USUARIOS</a></li>
          <li><a href="logout.php">SALIR</a></li>
<?php } ?>
        </ul>
        
  
      </nav>
