<div class="span12" style="margin-left: 0">
    <form action="<?php echo base_url();?>index.php/permissoes/adicionar" id="formPermissao" method="post">

    <div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-lock"></i>
                </span>
                <h5>Registrar Permisos</h5>
            </div>
            <div class="widget-content">
                
                <div class="span6">
                    <label>Nombre del Permiso</label>
                    <input name="nome" type="text" id="nome" class="span12" />

                </div>
                <div class="span6">
                    <br/>
                    <label>
                        <input name="marcarTodos" type="checkbox" value="1" id="marcarTodos" />
                        <span class="lbl"> Marcar Todos</span>

                    </label>
                    <br/>
                </div>

                <div class="control-group">
                    <label for="documento" class="control-label"></label>
                    <div class="controls">

                        <table class="table table-bordered">
                            <tbody>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vInventario" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Inventario</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Inventario</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Inventario</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input name="dInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Ineventario</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr><td colspan="4"></td></tr>
                                     <tr>

                                    <td>
                                        <label>
                                            <input name="vTicket" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Ticket</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Ticket</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Ticket</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input name="dTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Ticket</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vModulo3" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Modulo3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo3</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vModulo4" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Modulo4</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo4</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo4</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo4</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vModulo5" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Modulo5</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo5</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo5</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo5</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vModulo6" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Modulo6</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo6</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo6</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo6</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="vModulo7" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo7</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="vModulo7" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo7</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="rInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe de Inventarios</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe de Tickets</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rInforme1" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe 1</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rInforme2" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe 2</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="rInforme3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe 3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rInforme4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe 4</span>
                                        </label>
                                    </td>
                                    <td colspan="2"></td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="cUsuario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Usuário</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cEmitente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Empresa</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cPermissao" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Permisos</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cBackup" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Backup</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

              
    
            <div class="form-actions">
                <div class="span12">
                    <div class="span6 offset3">
                        <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                        <a href="<?php echo base_url() ?>index.php/permissoes" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                    </div>
                </div>
            </div>
           
            </div>
        </div>

                   
    </div>

</form>

</div>


<script type="text/javascript" src="<?php echo base_url()?>assets/js/validate.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click', '#marcarTodos', function(event) {
            if($(this).prop('checked')){

              $('.marcar').each(
                 function(){
                    $(this).attr("checked", true);
                 }
              );
           }else{

              $('.marcar').each(
                 function(){
                    $(this).attr("checked", false);
                 }
              );
           }
        });
       

 
    $("#formPermissao").validate({
        rules :{
            nome: {required: true}
        },
        messages:{
            nome: {required: 'Campo obrigatório'}
        }
    });     

        

    });
</script>
