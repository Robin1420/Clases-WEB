<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    // Si no está autenticado, redireccionarlo al formulario de inicio de sesión
    header("Location: index.php");
    exit();
}

// Si el usuario está autenticado, mostrar contenido de inicio
?>






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="estiloinicio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Este es el contenido protegido de la página de inicio.</p>
    <p><a href="cerrar.php">Cerrar sesión</a></p>


    <div class="container rounded mt-5 bg-white p-md-5">
    <div class="h2 font-weight-bold">Meetings</div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>                    
                    <th scope="col">Dato</th>                    
                    <th scope="col">Hora</th>                    
                    <th scope="col">Acciones</th>                    
                </tr>
            </thead>
            <tbody>
                <tr class="bg-blue">            
                    <td class="pt-2">
                        <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt=""> 
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Emilia Kollette</div>
                    </td>                
                    <td class="pt-3 mt-1">25 Sep 2020</td>
                    <td class="pt-3">11:00 AM</td>
                    <td class="pt-3"><button>Eliminar</button><button>Editar</button></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
                <tr id="spacing-row">
                    <td></td>
                </tr>
                <tr class="bg-blue">
                    <td class="pt-2">
                        <img src="https://images.pexels.com/photos/3765114/pexels-photo-3765114.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-circle" alt=""> 
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Anny Adams</div>
                    </td>
                    <td class="pt-3">26 Sep 2020</td>
                    <td class="pt-3">11:00 AM</td>
                    <td class="pt-3"><button>Eliminar</button><button>Editar</button></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
                <tr id="spacing-row">
                    <td></td>
                </tr>
                <tr class="bg-blue">
                    <td class="pt-2">
                        <img src="https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt=""> 
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Arnold Linn</div>
                    </td>
                    <td class="pt-3">26 Sep 2020</td>
                    <td class="pt-3">02:00 PM</td>
                    <td class="pt-3"><button>Eliminar</button><button>Editar</button></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
                <tr id="spacing-row">
                    <td></td>
                </tr>
                <tr class="bg-blue">
                    <td class="pt-2">
                        <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt=""> 
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Josh Limosel</div>
                    </td>
                    <td class="pt-3">26 Sep 2020</td>
                    <td class="pt-3">04:00 PM</td>
                    <td class="pt-3"><button>Eliminar</button><button>Editar</button></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
