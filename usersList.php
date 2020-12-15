<?php

require __DIR__ . '/usuarios.php';

$users = fetchUsers();

require __DIR__ . '/header.php';
?>

<div class="container">
    <div class="table-responsive-md">
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th>Nombre</th>
                    <?php if ($loggedUser == true): ?>
                        <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $registeredUser): ?>
                    <tr>
                        <td><?php echo $registeredUser['username']; ?></td>
                        <?php if ($loggedUser == true): ?>
                            <td>
                                <a href="modifyUserForm.php?userId=<?= $registeredUser['id'] ?>" class="btn btn-primary" role="button">Modificar</a>
                                <?php if ($registeredUser['id'] != $_SESSION['userId']): ?>
                                    <a href="deleteUser.php?userId=<?= $registeredUser['id'] ?>" class="btn btn-primary" role="button">Borrar</a>
                                <?php endif; ?>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require __DIR__ . '/footer.php';
