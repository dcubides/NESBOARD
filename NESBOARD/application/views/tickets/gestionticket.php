<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Datos del Ticket</a></li>
            <li><a data-toggle="tab" href="#tab2">Reporte llegada</a></li>
            <li><a data-toggle="tab" href="#tab3">Reprogramar</a></li>
            <li><a data-toggle="tab" href="#tab4">Informe Tecnico</a></li>
            <li><a data-toggle="tab" href="#tab5">Reporte de Suministros</a></li>

            <div class="buttons">
                    <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'eTicket')){
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/tickets/editar/'.$result->id.'"><i class="icon-pencil icon-white"></i> Editar</a>'; 
                    } ?>
                    
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 50px">

            <div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Datos Generales</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Ticket</strong></td>
                                                    <td><?php echo $result->id ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Estado</strong></td>
                                                    <td><?php echo $result->ESTADO ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Fecha de Registro</strong></td>
                                                    <td><?php echo date('d/m/Y',  strtotime($result->FECHA)) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Detalle del Ticket</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGTwo">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Estación</strong></td>
                                                    <td><?php echo $result->ESTACION ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Proyecto</strong></td>
                                                    <td><?php echo $result->PROYECTO ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Criticidad</strong></td>
                                                    <td><?php echo $result->CRITICIDAD ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Alcances</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGThree">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Alcance</strong></td>
                                                    <td><?php echo $result->OBSERVACION ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Coordinador</strong></td>
                                                    <td><?php echo $result->COORDINADOR ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Tecnico</strong></td>
                                                    <td><?php echo $result->TECNICO ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Cuadrilla</strong></td>
                                                    <td><?php echo $result->CUADRILLA ?> 
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Operacion tecnica</strong></td>
                                                    <td><?php echo $result->OPERACION_TECNICA ?></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



          
        </div>


        <!--Tab 2-->
       <div id="tab2" class="tab-pane" style="min-height: 50px">
            
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Fecha Inicial</th>
                                    <th>Fecha Final</th>
                                    <th>Descripción</th>
                                    <th>Defecto</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Ninguna OS Registrada</td>
                                </tr>
                            </tbody>
                        </table>
                
          

        </div>


        <!--tab3-->
         <!--Tab 2-->
       <div id="tab3" class="tab-pane" style="min-height: 50px">
            
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>gggg</th>
                                    <th>ggg Final</th>
                                    <th>gg</th>
                                    <th>Defecto</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Ninguna OS Registrada</td>
                                </tr>
                            </tbody>
                        </table>
            

        </div>




        <div id="tab4" class="tab-pane" style="min-height: 50px">
            
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>4444</th>
                                    <th>44444 Final</th>
                                    <th>4444</th>
                                    <th>4444</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Ninguna OS Registrada</td>
                                </tr>
                            </tbody>
                        </table>
            

        </div>


        <div id="tab5" class="tab-pane" style="min-height: 50px">
            
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>555</th>
                                    <th>555 Final</th>
                                    <th>555</th>
                                    <th>5555</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Ninguna OS Registrada</td>
                                </tr>
                            </tbody>
                        </table>
            

        </div>






    </div>
</div>