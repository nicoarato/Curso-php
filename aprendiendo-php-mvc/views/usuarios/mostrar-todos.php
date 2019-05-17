<h1>Listado de Usuarios</h1>
<?php while ($usuario= $todos_los_usuarios->fetch_object()): ?>

    <p><?=$usuario->email;?> - <?=$usuario->fecha;?></p>


<?php endwhile; ?>