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
            <div class="panel panel-primary">
              <div class="panel-heading"><h3 class="panel-title">Preguntas</h3></div>
              <div class="panel-body">
                <div style="width: 100%;">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".mdl-add-pregunta" title="Adicionar pregunta"><span class="fa fa-plus"></span> Adicionar pregunta</button>
                </div>
                <br/>
                <table class="table table-bordered">
                  <thead>
                    <tr class="bg bg-success">
                      <th style="width: 40px;">#</th>
                      <th>Enunciado de la Pregunta</th>
                      <th style="width: 150px;">Tipo</th>
                      <th style="width: 60px; text-align: center">Estado</th>
                      <th style="width: 150px; text-align: center">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum reprehenderit dignissimos officia tempore, aliquam.</td>
                      <td>Casillas de verificación</td>
                      <td style="text-align: center">
                        <a href="#" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span></a>
                      </td>
                      <td style="text-align: center">
                        <div class="btn-group">
                          <a href="#" class="btn btn-default" title="Editar"><span class="fa fa-pencil"></span></a>
                          <a href="#" class="btn btn-default" title="Eliminar"><span class="fa fa-trash"></span></a>
                          <a href="#" class="btn btn-default" title="Ver"><span class="fa fa-eye"></span></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="form-group">
              <label for="txtEstado">Estado del cuestionario <span>*</span></label>
              <div class="row">
                <div class="col-sm-6">
                  <select class="form-control">
                    <option>Publicado</option>
                    <option>Despublicado</option>
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

<!-- begin : modal_adicionar_pregunta -->
<div class="modal fade mdl-add-pregunta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Pregunta</h4>
      </div>
      <div class="modal-body">
        <small>Todos los campos marcados con * son obligatorios</small>
        <div class="form-group">
          <label for="txtEnunciado">Enunciado de la pregunta <span>*</span></label>
          <input type="email" class="form-control" id="txtEnunciado" placeholder="Ingrese el enunciado de la pregunta">
        </div>

        <label for="txtTipo">Tipo de control <span>*</span></label>
        <ul class="list-group">
            <li class="list-group-item">
              <label>
                <input type="radio" name="r1" class="minimal" checked> <span class="fa fa-font fa-lg" style="margin: 0 10px;"></span> Respuesta corta
              </label>
            </li>
            <li class="list-group-item">
              <label>
                <input type="radio" name="r1" class="minimal"> <span class="fa fa-hashtag fa-lg" style="margin: 0 10px;"></span> Numeral
              </label>
            </li>
            <li class="list-group-item">
              <label>
                <input type="radio" name="r1" class="minimal"> <span class="fa fa-dot-circle-o fa-lg" style="margin: 0 10px;"></span> Selección multiple
              </label>
            </li>
            <li class="list-group-item">
              <label>
                <input type="radio" name="r1" class="minimal"> <span class="fa fa-check-square-o fa-lg" style="margin: 0 10px;"></span> Casillas de verificación
              </label>
            </li>
            <li class="list-group-item">
              <label>
                <input type="radio" name="r1" class="minimal"> <span class="fa fa-caret-down fa-lg" style="margin: 0 10px;"></span> Desplegable
              </label>
            </li>
            <li class="list-group-item">
              <label>
                <input type="radio" name="r1" class="minimal"> <span class="fa fa-align-justify fa-lg" style="margin: 0 10px;"></span> Parrafo
              </label>
            </li>
        </ul>

        <div class="panel panel-primary">
          <div class="panel-heading"><h3 class="panel-title">Opciones</h3></div>
          <div class="panel-body">
            <form action="#">
              <table class="table">
                <thead>
                  <tr>
                    <th style="padding-bottom: 0px;">Enunciado de la opción</th>
                    <th style="width: 100px;"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control" id="txtEnunciadoOpcion" placeholder="Ingresar el enunciado de la opción"></td>
                    <td><button type="button" class="btn btn-success" title="Adicionar Opción"><span class="fa fa-plus"></span> Adicionar opción</button></td>
                  </tr>
                </tbody>
              </table>
            </form>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Enunciado de la Opción</th>
                  <th style="text-align: center">Estado</th>
                  <th style="text-align: center">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>(icono) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim omnis quidem excepturi itaque id.</td>
                  <td style="text-align: center">
                    <a href="#" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span></a>
                  </td>
                  <td style="text-align: center">
                    <div class="btn-group">
                      <a href="#" class="btn btn-default" title="Editar"><span class="fa fa-pencil"></span></a>
                      <a href="#" class="btn btn-default" title="Eliminar"><span class="fa fa-trash"></span></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="form-group">
          <label for="txtEstadoPregunta">Estado de la pregunta <span>*</span></label>              
          <div class="row">
            <div class="col-sm-6">
              <select class="form-control">
                <option>Publicado</option>
                <option>Despublicado</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- end : modal_adicionar_pregunta -->

<?php $this->load->view('backend/template/footer'); ?>
<script>
  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass   : 'iradio_minimal-blue'
  });

</script>