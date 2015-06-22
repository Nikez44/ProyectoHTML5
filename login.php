<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/login.css"/>
</head>
<body>

<?php include 'partials/_header.html' ?>

    <center>
        <div class="LoginDiv">
            <h1>INGRESA</h1><br>
            <center>
                <form class="login-form">
                    <input type="text" id="user" placeholder="Nombre de usuario"><br>
                    <input type="password" id="password" placeholder="Contraseña"><br>

                    <input id="check" type="checkbox"><label for="check">Recuerdame</label><br>

                    <button type="submit">Ingresar</button>
                    <button type="button">Registrase</button>
                </form>
            </center>
        </div>
    </center>

<?php include 'partials/_footer.html' ?>
</body>
</html>