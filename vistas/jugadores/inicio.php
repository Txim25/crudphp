<a name="" id="" class="btn btn-link" href="?controlador=jugadores&accion=crear" role="button">Nuevo Jugador</a>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Nivell</th>
            <th>Accions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($jugadores as $jugador){?>
 <tr>
            <td><?php echo $jugador->id; ?></td>
            <td><?php echo $jugador->nombre; ?></td>
            <td><?php echo $jugador->nivel; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=jugadores&accion=editar&id=<?php echo $jugador->id; ?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=jugadores&accion=borrar&id=<?php echo $jugador->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                
            
               </td>
        </tr>
        <?php } ?>
       
    </tbody>
</table>
