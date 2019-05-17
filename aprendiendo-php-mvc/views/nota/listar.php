<h1>Listado de Notas</h1>
<?php while ($nota= $notas->fetch_object()): ?>

    <p><?=$nota->titulo;?> - <?=$nota->fecha;?></p>


<?php endwhile; ?>