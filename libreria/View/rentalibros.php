<h4>LIBRERIAG</h4>
<h1 class="page-header">Libros</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=rentalibros&a=Crud">Agregar renta libros</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Id del libro</th>
            <th>Nombre del libro</th>
            <th>Genero</th>
            <th >Autor del libro</th>
            <th >Codigo de fabrica</th>
            <th >Editorial</th>
            <th >Fecha de venta o renta</th>
            <th >Precio</th>
            <th ></th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_libro; ?></td>
            <td><?php echo $r->nombre_libro; ?></td>
            <td><?php echo $r->genero; ?></td>
            <td><?php echo $r->autor_libro; ?></td>
            <td><?php echo $r->codigo_fabrica; ?></td>
            <td><?php echo $r->editorial; ?></td>
            <td><?php echo $r->fecha_venta_renta; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td>
            <i class="glyphicon glyphicon-edit"><a href="?c=rentalibros&a=Crud&id=<?php echo $r->id; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=rentalibros&a=Eliminar&id=<?php echo $r->id; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
