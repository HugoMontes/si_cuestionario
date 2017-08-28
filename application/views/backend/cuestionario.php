<?php $this->load->view('backend/template/header'); ?>
<!-- Main content -->
<section class="content">
  <!-- begin alert -->
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4>
      <span class="icon fa fa-check"></span>Alert!
    </h4>
    Success alert preview.
  </div>
  <!-- /.end alert -->
  <div class="row">
    <div class="col-xs-12">
      <!-- interactive chart -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Todos los cuestionarios</h3>
          <div class="box-tools pull-right">
            <a href="<?php echo base_url(); ?>index.php/backend/cuestionario/nuevo" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo Cuestionario</a>
          </div>
        </div>
        <div class="box-body">
          <form class="form-inline">
            <div class="form-group">
              <input type="text" class="form-control" id="txtBuscar" placeholder="Buscar...">
            </div>
            <button type="submit" class="btn btn-success"><span class="fa fa-search"> Buscar</button>
          </form>
          <br/>
          <table class="table table-bordered">
            <thead>
              <tr class="bg bg-info">
                <th style="width: 60px;">ID</th>
                <th>Cuestionario</th>
                <th style="width: 100px;">Creado</th>
                <th style="width: 60px; text-align: center">Estado</th>
                <th style="width: 60px; text-align: center">Preguntas</th>
                <th style="width: 100px; text-align: center">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>123</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum reprehenderit dignissimos officia tempore, aliquam.</td>
                <td>05-06-2017</td>
                <td style="text-align: center">
                  <a href="#" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span></a>
                </td>
                <td style="text-align: center">
                  <span class="badge bg-blue">15</span>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="<?php echo base_url(); ?>index.php/backend/cuestionario/editar" class="btn btn-default" title="Editar"><span class="fa fa-pencil"></span></a>
                    <a href="#" class="btn btn-default" title="Eliminar"><span class="fa fa-trash"></span></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!-- /.box-body-->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php $this->load->view('backend/template/footer'); ?>