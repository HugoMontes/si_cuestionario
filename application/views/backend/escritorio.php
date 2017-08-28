<?php $this->load->view('backend/template/header'); ?> 
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150</h3>

          <p>Cuestionarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-compose"></i>
        </div>
        <a href="#" class="small-box-footer">Ver Cuestionarios <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
   
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>44</h3>

          <p>Usuarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">Ver usuarios <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cuestionarios más visitados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-condensed">
            <tr>
              <th style="width: 10px">#</th>
              <th>Cuestionario</th>
              <th>Creado</th>
              <th style="width: 40px">Visitas</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Update software</td>
              <td>11-7-2014</td>
              <td><span class="badge bg-blue">55</span></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Clean database</td>
              <td>11-7-2014</td>
              <td><span class="badge bg-blue">70</span></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Cron job running</td>
              <td>11-7-2014</td>
              <td><span class="badge bg-blue">30</span></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Fix and squish bugs</td>
              <td>11-7-2014</td>
              <td><span class="badge bg-blue">90</span></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Fix and squish bugs</td>
              <td>11-7-2014</td>
              <td><span class="badge bg-blue">90</span></td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Ultimos cuestionarios visitados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-condensed">
            <tr>
              <th style="width: 10px">#</th>
              <th>Cuestionario</th>
              <th>Creado</th>
              <th>Ultima visita</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Update software</td>
              <td>11-7-2014</td>
              <td>05-6-2015</td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Clean database</td>
              <td>11-7-2014</td>
              <td>05-6-2015</td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Cron job running</td>
              <td>11-7-2014</td>
              <td>05-6-2015</td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Fix and squish bugs</td>
              <td>11-7-2014</td>
              <td>05-6-2015</td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Fix and squish bugs</td>
              <td>11-7-2014</td>
              <td>05-6-2015</td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row (main row) -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cuestionarios agregados recientemente</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Cuestionario</th>
              <th>Usuario</th>
              <th>Creado</th>
              <th>Estado</th>
            </tr>
            <tr>
              <td>183</td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>John Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-success">Approved</span></td>
            </tr>
            <tr>
              <td>219</td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>Alexander Pierce</td>
              <td>11-7-2014</td>
              <td><span class="label label-warning">Pending</span></td>                  
            </tr>
            <tr>
              <td>657</td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>Bob Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-primary">Approved</span></td>                  
            </tr>
            <tr>
              <td>175</td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>Mike Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-danger">Denied</span></td>                  
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->  
<?php $this->load->view('backend/template/footer'); ?>