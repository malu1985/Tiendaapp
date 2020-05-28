<h1 class="page-header">Productos </h1>


    <a class="btn btn-info btn-lg pull-right" href="?c=producto&a=Cruduser"><span class="glyphicon glyphicon-plus-sign"></span></a>
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
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
		

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

