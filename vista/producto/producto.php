<h1 class="page-header">Productos </h1>
	
   <a class="btn btn-info btn-lg pull-right" href="?c=producto&a=Crud"><span class="glyphicon glyphicon-plus-sign"></span></a>
<a class="btn btn-info btn-lg pull-right" href="vista_productouser.php"><span class="glyphicon glyphicon-list-alt"></span></a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">

    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style=" background-color: #5DACCD; color:#fff">precio</th>
            <th style=" background-color: #5DACCD; color:#fff">stock</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">id_categoria</th>            
			<th style="width:120px; background-color: #5DACCD; color:#fff">id_proveedor</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
		<td><?php echo $r->id_producto; ?></td>
         <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->stock; ?></td>
            <td><?php echo $r->id_categoria; ?></td>
            <td><?php echo $r->id_proveedor; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=producto&a=Crud&id_producto=<?php echo $r->id_producto; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&id_producto=<?php echo $r->id_producto; ?>"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p>Categorias de los productos traidos atraves de REST</p>
<table class="table  table-striped  table-hover">
		<thead>	
            <th style="width:180px; background-color: #5DACCD; color:#fff">Id Categoria</th>
			<th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
			<th style="width:180px; background-color: #5DACCD; color:#fff">Descripcion</th>
			</tr>
		</thead>
	<tr>
<td  class="id_cat"></td>
<td  class="nombre_cat"></td>
<td  class="desc_cat"></td>
</tr>
		
</table>

</body>

<script  src="../assets/js/datatable.js">  

</script>


</html>

