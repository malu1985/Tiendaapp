<h1 class="page-header">
    <?php echo $producto->id_producto != null ? $producto->nombre : 'Nuevo Producto'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active"><?php echo $producto->id_producto != null ? $producto->nombre : 'Nuevo Producto'; ?></li>
</ol>

<form id="frm-alumno" action="?c=producto&a=Guardaruser" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_producto" value="<?php echo $producto->id_producto; ?>" />
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $producto->nombre; ?>" class="form-control" placeholder="Ingrese el nombre" required>
    </div>
    
    <div class="form-group">
        <label>precio</label>
        <input type="number" name="precio" value="<?php echo $producto->precio; ?>" class="form-control" placeholder="Ingrese el precio" required>
    </div>
    
    <div class="form-group">
        <label>stock</label>
        <input type="number" name="stock" value="<?php echo $producto->stock; ?>" class="form-control" placeholder="Ingrese cantidad disponible" required>
    </div>
    
    <div class="form-group">
        <label>Id_categoria</label>
        <input type="number" name="id_categoria" value="<?php echo $producto->id_categoria; ?>" class="form-control" placeholder="Ingrese la categoria" required>
    </div>
     <div class="form-group">
        <label>id_proveedor</label>
        <input type="number" name="id_proveedor" value="<?php echo $producto->id_proveedor; ?>" class="form-control" placeholder="Ingrese el provedor" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
