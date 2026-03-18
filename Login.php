<head>
<link rel="stylesheet" href="estilos.css">

</head>
    
<form action="login_proceso.php" method="POST">

  <h2>Iniciar Sesión</h2>
  
  <!-- Campo para el usuario o correo -->
  <div>
    <label for="username">Email:</label>
    <input type="text" id="username" name="email" required>
  </div>

  <!-- Campo para la contraseña -->
  <div>
    <label for="password">password:</label>
    <input type="password" id="password" name="pass" required>
  </div>

  <!-- Botón de envío -->
  <button type="submit">Entrar</button>
</form>
