<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">


      <div class="col-md-12">
        <!-- general form elements -->
        <?php foreach ($variable as $key): ?>


          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url()."index.php/Producto/update"?>"  enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Introduzca nombre del producto">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Clasificación:</label>
                  <select class="form-control">
                    <option></option>
                    <option>SELECCIONE...</option>
                  </select>
                </div>
          <!--div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen 1 del producto</label>
            </div>
            <br>
            <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen 2 del producto</label>
            </div>
            <br>
            <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen 3 del producto</label>
            </div>
          </div-->
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Precio:</label>
          <div class="input-group mb-3">
            <input type="text" name="precio" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  <?php endforeach ?>
</div>
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
</div>

<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">PRODUCTO</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <?php foreach ($all_product as $key): ?>


          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?= $key->nombre_producto?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre:</label>
                <input type="text" class="form-control" value="<?= $key->nombre_producto?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Clasificación:</label>
                <select class="form-control">
                  <?php if ($key->tipo_producto == 1): ?>
                    <option></option>
                  <?php endif ?>
                </select>
              </div>
          <!--div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen 1 del producto</label>
            </div>
            <br>
            <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen 2 del producto</label>
            </div>
            <br>
            <div class="input-group">
              <input type="file" name="img[]" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Imagen 3 del producto</label>
            </div>
          </div-->
          <div class="form-group">
            <label for="exampleInputEmail1">Precio:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" value="<?= $key->costo_producto?>">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    <?php endforeach ?>
  </div>
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
</div>