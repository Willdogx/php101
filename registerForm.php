<?php
if (isset($_POST['errors'])){
    $errors = $_POST['errors'];
}
$errors = [
    'username',
    'email',
    'password'
];

require __DIR__ . '/header.php';

?>
<div class="container">    
    <form action="register.php" method="POST">
        <label for="username"> Usuario </label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
        <?php if (in_array('username', $errors)): ?>
            <span class="input-error-message">Falta completar este campo</span>
        <?php endif; ?>
        <br>
        <br>    
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        <?php if (in_array('email', $errors)): ?>
            <span class="input-error-message">Falta completar este campo</span>
        <?php endif; ?>
        <br>
        <br>
        <label for="password"> Contraseña </label>
        <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
        <?php if (in_array('password', $errors)): ?>
            <span class="input-error-message">Falta completar este campo</span>
        <?php endif; ?>
        <br>
        <br>
        <button type="submit" class="btn btn-outline-info">Enviar</button>                
    </form>
</div>

<?php require __DIR__ . '/footer.php';

