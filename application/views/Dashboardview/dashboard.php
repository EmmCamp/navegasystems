<div class="content-wrapper">
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>

                    <p>Peticiones recibidas</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Contrataciones</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>44</h3>

                    <p>Equipos adquiridos este mes</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>65</h3>

                    <p>Servicios programados este mes</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <?php       #echo "<pre>".print_r($info, true)."</pre>";?>
            </div>
            <!-- /.row -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Formularios recibidos</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Fecha</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Estatus</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($info as $key => $encuesta) { ?>   
                               
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td><?php echo $encuesta->IdSol?></td>
                      <td><?php echo $encuesta->nombre?></td>
                      <td><?php echo date('D d, M H:i:s', strtotime($encuesta->timestamp))?></td>
                      <td><?php echo $encuesta->correo?></td>
                      <td><?php echo $encuesta->telefono?></td>
                      <td>sin modificar</td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="6">
                        <p>
                        <?php echo $encuesta->descripcion?>
                        </p>
                      </td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <!-- TO DO List -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="ion ion-clipboard mr-1"></i>
                      Actividades
                    </h3>

                    <div class="card-tools">
                      <ul class="pagination pagination-sm">
                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <ul class="todo-list" data-widget="todo-list">
                      
                      <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <!-- checkbox -->
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo1" id="todoCheck1">
                          <label for="todoCheck1"></label>
                        </div>
                        <!-- todo text -->
                        <span class="text">Recordatorio de pago de servicio #1000589</span>
                        <!-- Emphasis label -->
                        <small class="badge badge-danger"><i class="far fa-clock"></i> Hoy</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                          <i class="fas fa-edit"></i>
                          <i class="fas fa-trash-o"></i>
                        </div>
                      </li>

                      <li>
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                          <label for="todoCheck2"></label>
                        </div>
                        <span class="text">Instalación para la empresa Ejemplo SA DE CV</span>
                        <small class="badge badge-info"><i class="far fa-clock"></i> viernes 14</small>
                        <div class="tools">
                          <i class="fas fa-edit"></i>
                          <i class="fas fa-trash-o"></i>
                        </div>
                      </li>
                      <li>
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo3" id="todoCheck3">
                          <label for="todoCheck3"></label>
                        </div>
                        <span class="text">Comprar 5 cajas de tinta para Epson ECOTANK 1050A (5 piezas restantes) </span>
                        <small class="badge badge-warning"><i class="far fa-clock"></i> domingo 28</small>
                        <div class="tools">
                          <i class="fas fa-edit"></i>
                          <i class="fas fa-trash-o"></i>
                        </div>
                      </li>
                      <li>
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo4" id="todoCheck4">
                          <label for="todoCheck4"></label>
                        </div>
                        <span class="text">Recolección de copiadora de la empresa ejemplo 2 SA DE CV</span>
                        <small class="badge badge-success"><i class="far fa-clock"></i> lunes 29</small>
                        <div class="tools">
                          <i class="fas fa-edit"></i>
                          <i class="fas fa-trash-o"></i>
                        </div>
                      </li>
                      <li>
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo5" id="todoCheck5">
                          <label for="todoCheck5"></label>
                        </div>
                        <span class="text">Recoger pedido 3 fotocopiadoras con proveedor sa de cv</span>
                        <small class="badge badge-primary"><i class="far fa-clock"></i> 3 semanas</small>
                        <div class="tools">
                          <i class="fas fa-edit"></i>
                          <i class="fas fa-trash-o"></i>
                        </div>
                      </li>
                      <li>
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo6" id="todoCheck6">
                          <label for="todoCheck6"></label>
                        </div>
                        <span class="text">Entregar impresora de servicio #100259</span>
                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 3 semanas</small>
                        <div class="tools">
                          <i class="fas fa-edit"></i>
                          <i class="fas fa-trash-o"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                  </div>
                </div>
                <!-- /.card -->
              </section>
              <!-- /.Left col -->
              <!-- right col (We are only adding the ID to make the widgets sortable)-->
              <section class="col-lg-5 connectedSortable">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Log</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Fecha</th>
                      <th>Tipo</th>
                      <th>Movimiento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>emmanuel.campos</td>
                      <td>11-7-2014 13:02:25</td>
                      <td><span class="tag tag-success">inventario</span></td>
                      <td>Se asigno Impresora Ecotank 20058A a Ubicación mi empresa sa de cv</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>daniel.vega</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Ventas</span></td>
                      <td>Se ligó formulario #183 con el servicio "adquisición de Equipos"</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>root</td>
                      <td>11-7-2014 13:02:25</td>
                      <td><span class="tag tag-success">Sistema</span></td>
                      <td>Se corrieron interfaces de actualización de inventario</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>daniel.vega</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">inventario</span></td>
                      <td>Se agrego consumible : Botella de Toner negro para impresora Sharp AL-1250</td>
                    </tr>
                    <tr>
                      <td>134</td>
                      <td>emmanuel.campos</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Gestion de usuarios</span></td>
                      <td>Se agrego el usuario guillermo.nigote a inventario</td>
                    </tr>
                    <tr>
                      <td>494</td>
                      <td>Victoria Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>832</td>
                      <td>Michael Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              </section>
              <!-- right col -->
            
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

</div>



