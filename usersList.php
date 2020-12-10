<?php

require __DIR__ . '/usuarios.php';

$users = fetchUsers();

require __DIR__ . '/header.php';
?>

<div class="container">
        <div class="table-responsive-md">
            <table class="table">
                <!-- <table> -->
                <!-- <tr> -->
                <tr class="table-info">
                    <th>Nombre</th>
                </tr>
                <?php foreach ($users as $registeredUser) : ?>
                    <tr>
                        <td><?php echo $registeredUser['username']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
</div>

<?php
require __DIR__ . '/footer.php';
