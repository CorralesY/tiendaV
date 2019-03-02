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
                <input type="text" class="form-control" value="<?= $key->nombre_producto?>" readonly="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Clasificación:</label>
                <?php if ($key->tipo_producto == 1): ?>
                  <input type="text" class="form-control" value="Alimento" readonly="">
                <?php endif ?>
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
            <input type="text" class="form-control" value="<?= $key->costo_producto?>" readonly="">
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