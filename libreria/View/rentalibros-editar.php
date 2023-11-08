<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->id_libro : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=rentalibros">rentalibros</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->id_libro : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=rentalibros&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>ID del libro</label>
        <input type="text" name="id_libro" value="<?php echo $alm->id_libro; ?>" class="form-control" placeholder="Ingrese el ID del libro" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>nombre del libro</label>
        <input type="text" name="nombre_libro" value="<?php echo $alm->nombre_libro; ?>" class="form-control" placeholder="Ingrese el nombre del libro" />
    </div>
    
    <div class="form-group">
        <label>Genero</label>
        <input type="text" name="genero" value="<?php echo $alm->genero; ?>" class="form-control" placeholder="Ingrese  el genero" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Autor del libro</label>
        <input type="text" name="autor_libro" value="<?php echo $alm->autor_libro; ?>" class="form-control" placeholder="Ingrese el genero" />
    </div>
    
    <div class="form-group">
        <label>Codigo de fabrica</label>
        <input type="text" name="codigo_fabrica" value="<?php echo $alm->codigo_fabrica; ?>" class="form-control" placeholder="Ingrese elcodigo de fabrica" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Editorial</label>
        <input type="text" name="editorial" value="<?php echo $alm->editorial; ?>" class="form-control" placeholder="Ingrese la editorial" />
    </div>
    
    <div class="form-group">
        <label>fecha de venta-renta</label>
        <input type="date" name="fecha_venta_renta" value="<?php echo $alm->fecha_venta_renta; ?>" class="form-control" placeholder="" />
    </div>
    
    <div class="form-group">
        <label>precio</label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese su precio" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
