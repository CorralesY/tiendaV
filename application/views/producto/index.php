<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Productos Existentes:</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body p-0">
			<table class="table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Tipo</th>
						<th style="width: 150px">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($all_product as $key ): ?>
						<tr>
							<td><?= $key->nombre_producto?></td>
							<td>
								<?php if ($key->tipo_producto == 1): ?>
									Alimento
								<?php endif ?>
							</td>
							<td>
								<a data-toggle="modal" data-target="#exampleModal" onclick="view('<?=base_url();?>','<?=$key->id_producto?>');"><i class="fa fa-search"></i></a>
								<a data-toggle="modal" data-target="#exampleModal" onclick="edit('<?=base_url();?>','<?=$key->id_producto?>')"><i class="fa fa-edit"></i></a>
								<a data-toggle="modal" data-target="#exampleModal" onclick="deletep('<?=base_url();?>','<?=$key->id_producto?>');"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
					
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="page_modal">
				
			</div>
		</div>
	</div>
</div>