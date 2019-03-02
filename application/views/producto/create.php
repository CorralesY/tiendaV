<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Nuevo Producto</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?=base_url()."index.php/Producto/insert"?>"  enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Codigo del Producto:</label>
          <input type="text" class="form-control" name="codigo_producto" id="exampleInputEmail1" value="<?php echo $code;?>" readonly="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre:</label>
          <input type="text" class="form-control" name="nombre_producto" id="exampleInputEmail1" placeholder="Introduzca nombre del producto">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Clasificación:</label>
          <select class="form-control" name="tipo_producto">
            <option>SELECCIONE...</option>
            <option value="1">Alimento</option>
          </select>
        </div>
        <!--div class="form-group">
          <label for="exampleInputFile">Imagen del producto</label>
          <a class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></a>
          <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen</label>
          </div>
          <br>
        </div-->
        <div class="form-group">
          <label for="exampleInputEmail1">Precio:</label>
          <div class="input-group mb-3">
            <input type="text" name="precio" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cargar</button>
      </div>
    </form>
  </div>
  <?php if ($mensaje != 0): ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fa fa-check"></i> Alert!</h5>
      EL PRODUCTO FUE CREADO CON EXITO.
    </div>
  <?php endif ?>
</div>
