<h1 class="page-header">Productos </h1>


    <a class="btn btn-primary pull-right" href="?c=producto&a=Cruduser">Agregar</a>
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

        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>

