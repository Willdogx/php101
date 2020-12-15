<?php

require __DIR__ . '/usuarios.php';

require __DIR__ . '/generalFunctions.php';

if (isLoggedIn() == false) {
    redirectTo('/php101'); //use this function in the other files
}

$userRequested = $_GET['userId'];

$user = fetchUsers($userRequested);

require __DIR__ . '/header.php';

?>
<div class="container">    
    <form action="modifyUser.php" method="POST">
        <input
            type="hidden"
            class="form-control"
            name="userId"
            value="<?= $user['id'] ?>"
        >
        <label for="username"> Usuario </label>
        <input
            type="text"
            class="form-control"
            name="username"
            id="username"
            aria-describedby="emailHelp"
            value="<?= $user['username'] ?>"
        >
        
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?= $user['email'] ?>">

        <label for="password"> Contraseña </label>
        <input type="text" class="form-control" name="password" id="password" aria-describedby="emailHelp" value="<?= $user['password'] ?>">
        
        <button type="submit" class="btn btn-outline-info">Enviar</button>          
    </form>
</div>

<?php

require __DIR__ . '/footer.php';

