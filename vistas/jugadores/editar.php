<div class="card">
    <div class="card-header">
        Edicion del jugador
    </div>
    <div class="card-body">
       <form action="" method="post">
       <div class="mb-3">
          <label for="id" class="form-label">ID:</label>
          <input type="number" value="<?php echo $jugador->id ?>"
            class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label"></label>
          <input type="text" value="<?php echo $jugador->nombre ?>"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="introduzca el nombre">
        </div>
        
        <div class="mb-3">
          <label for="nivel" class="form-label"></label>
          <input type="number" value="<?php echo $jugador->nivel ?>"
            class="form-control" name="nivel" id="nivel" aria-describedby="helpId" placeholder="introduzca el nivel">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar jugador">

       </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>