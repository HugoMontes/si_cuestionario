<?php $this->load->view('backend/template/header'); ?> 
<!-- Main content -->
<section class="content">
  <!-- begin alert -->
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4>
      <span class="icon fa fa-ban"></span>Alert!
    </h4>
    Success alert preview.
  </div>
  <!-- /.end alert -->
  <div class="row">
    <div class="col-xs-12">
      <!-- interactive chart -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Cuestionario</h3><br/>
          <small>Todos los campos marcados con * son obligatorios</small>
        </div>
        <div class="box-body">
          <form>
            <div class="form-group">
              <label for="txtTitulo">Título del cuestionario <span>*</span></label>
              <input type="email" class="form-control" id="txtTitulo" placeholder="Ingresar el título del cuestionario">
            </div>
            <div class="form-group">
              <label for="txtTitulo">Estado</label>
              <div class="row">
                <div class="col-sm-6">
                  <select class="form-control">
                    <option>Publicado</option>
                    <option>Despublicado</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading"><h3 class="panel-title">Preguntas</h3></div>
              <div class="panel-body">
                <div class="form-group">
                  <label for="txtEnunciado">Enunciado de la pregunta <span>*</span></label>
                  <input type="email" class="form-control" id="txtEnunciado" placeholder="Ingrese el enunciado de la pregunta">
                </div>
                <div class="form-group">
                  <label for="txtTipo">Tipo de control <span>*</span></label>
                    <select id="txtTipo" class="form-control">
                      <option>Texto</option>
                      <option>Número</option>
                      <option>Radio Button</option>
                      <option>Checkbox</option>
                      <option>Selector</option>
                      <option>Area de texto</option>
                    </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-default">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
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
<!-- Bootstrap Select -->