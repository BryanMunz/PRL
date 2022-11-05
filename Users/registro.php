<?php
@include 'conexion.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conexion, $_POST['name']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $pass = mysqli_real_escape_string($conexion, $_POST['password']);
    $cpass = mysqli_real_escape_string($conexion, $_POST['cpassword']);

    $select = " SELECT * FROM usuarios WHERE correo = '$email' && clave = '$pass' ";

    $result = mysqli_query($conexion, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO usuarios(Usuario, Correo, clave) VALUES('$name','$email','$pass')";
            mysqli_query($conexion, $insert);
            header('location:IniciarSesion.php');
        }
    }
};
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./Recourses/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registro</title>
</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h3 class="mb-4 text-center">Registrate Ahora</h3>
            <hr>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error">' . $error . '</span>';
                };
            };
            ?>
            <hr>
            <input type="text" name="name" required placeholder="Ingresa tu Nombre">
            <input type="email" name="email" required placeholder="Ingresa tu Correo">
            <input type="password" name="password" required placeholder="Ingresa tu Contraseña">
            <input type="password" name="cpassword" required placeholder="Confirma tu Contraseña">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <hr>
            <p class="text-center">¿Ya tienes cuenta?</p>
            <a href="./login.php" style="display: flex;">Inicia Sesión</a>
        </form>

    </div>

</body>

</html>