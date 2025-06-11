<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>MC Aromas Admin Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/jpeg"
    href="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1743554383/ari6vwivcy0ndoeqpmmw.jpg">
  <!-- Estilos -->
  <link rel="stylesheet" href="build/css/app.css?v=<?php echo time(); ?>">
  <!-- JS -->
  <script src="build/js/usuarios.js?v=<?php echo time(); ?>" defer></script>
  <!-- FUENTE LEXEND-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet" />
  <!-- PDF-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.plugin.standard_fonts.min.js"></script>

</head>

<body>
  <aside class="sidebar">
    <nav>
      <img src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1743554383/ari6vwivcy0ndoeqpmmw.jpg" class="logo"
        alt="">
      <ul>
        <li><a href="index.php">Información</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="banners.php">Banners</a></li>
        <li><a href="pedidos.php">Pedidos</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="src/php/logout.php">
            <button id="logout-button">Cerrar Sesión</button>
          </a>
        </li>
      </ul>
    </nav>
  </aside>

  <main class="content">
    <h1>Usuarios del Sistema</h1>
    <table id="tablaUsuarios" class="table-usuarios">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </main>


</body>

</html>