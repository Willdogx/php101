<?php

require __DIR__ . '/header.php';

$error = false;
if (empty($_SESSION['error']) == false) {
    $error = true;
    unset($_SESSION['error']);
}

$userError = false;
if (empty($_SESSION['userError']) == false) {
    $userError = true;
    unset($_SESSION['userError']);
}

$passwordError = false;
if (empty($_SESSION['passwordError']) == false) {
    $passwordError = true;
    unset($_SESSION['passwordError']);
}

?>
<div class="container">
    <?php if ($error == true): ?>
        <p class="text-danger">
            El nombre de usuario y la contraseña que ingresaste no coinciden con nuestros registros. Por favor, revisa e inténtalo de nuevo.
        </p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp">
            <?php if ($userError == true): ?>
                <small class="form-text text-danger">El campo usuario no puede estar vacío</small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            <?php if ($passwordError == true): ?>
                <small class="form-text text-danger">El campo contraseña no puede estar vacío</small>
            <?php endif; ?>
        </div>
        <div class="form-group form-check">
        </div>
        <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
        <button type="submit" class="btn btn-outline-info" onclick="document.location='loginForm.php'">Acceder</button>

        <br>
        <br>
        <label>¿Aún no tienes una cuenta? Regístrate haciendo click <a href="registerForm.php">aquí</a>.</label><br /><br /><br /><br />
    </form>
</div>

<?php
require __DIR__ . '/footer.php';
