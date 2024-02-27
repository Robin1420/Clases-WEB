<?php
session_start();

// Definir un array con los usuarios y contraseñas
$usuarios = array(
    array("usuario" => "a", "contraseña" => "A"),
    array("usuario" => "b", "contraseña" => "B"),
    // Agrega más usuarios si es necesario
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de usuario y contraseña del formulario
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Verificar las credenciales en el array de usuarios
    foreach ($usuarios as $usuario) {
        if ($input_username == $usuario['usuario'] && $input_password == $usuario['contraseña']) {
            // Inicio de sesión exitoso, redirecciona al usuario a la página de inicio
            $_SESSION['username'] = $input_username;
            header("Location: inicio.php");
            exit();
        }
    }
    // Credenciales incorrectas, muestra un mensaje de error
    $error = "Nombre de usuario o contraseña incorrectos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f2f2f2;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    text-align: center;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 8px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 3px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}


</style>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <?php if(isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form action="index.php" method="POST">
            <div class="input-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
