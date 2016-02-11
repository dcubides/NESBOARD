<?php $permissoes = unserialize($result->permissoes);?>
<div class="span12" style="margin-left: 0">
    <form action="<?php echo base_url();?>index.php/permissoes/editar" id="formPermissao" method="post">

    <div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-lock"></i>
                </span>
                <h5>Editar Permisos</h5>
            </div>
            <div class="widget-content">
                
                <div class="span4">
                    <label>Nombre del Permiso</label>
                    <input name="nome" type="text" id="nome" class="span12" value="<?php echo $result->nome; ?>" />
                    <input type="hidden" name="idPermissao" value="<?php echo $result->idPermissao; ?>">

                </div>

                <div class="span3">
                    <label>Situación</label>
                    
                    <select name="situacao" id="situacao" class="span12">
                        <?php if($result->situacao == 1){$sim = 'selected'; $nao ='';}else{$sim = ''; $nao ='selected';}?>
                        <option value="1" <?php echo $sim;?>>Ativo</option>
                        <option value="0" <?php echo $nao;?>>Inactivo</option>
                    </select>

                </div>
                <div class="span4">
                    <br/>
                    <label>
                        <input name="" type="checkbox" value="1" id="marcarTodos" />
                        <span class="lbl"> Marcar Todos</span>
                
                    </label>
                    <br/>
                </div>
                <div class="control-group">
                    <label for="documento" class="control-label"></label>
                    <div class="controls">
                </div>
                </div>                               
                        <table class="table table-bordered">
                            <tbody>
                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vInventario'])){ if($permissoes['vInventario'] == '1'){echo 'checked';}}?> name="vInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Inventario</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aInventario'])){ if($permissoes['aInventario'] == '1'){echo 'checked';}}?> name="aInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Inventario</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eInventario'])){ if($permissoes['eInventario'] == '1'){echo 'checked';}}?> name="eInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Inventario</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dInventario'])){ if($permissoes['dInventario'] == '1'){echo 'checked';}}?> name="dInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Inventario</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vTicket'])){ if($permissoes['vTicket'] == '1'){echo 'checked';}}?> name="vTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Tickets</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aTicket'])){ if($permissoes['aTicket'] == '1'){echo 'checked';}}?> name="aTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Tickets</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eTicket'])){ if($permissoes['eTicket'] == '1'){echo 'checked';}}?> name="eTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Tickets</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dTicket'])){ if($permissoes['dTicket'] == '1'){echo 'checked';}}?> name="dTicket" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Tickets</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                
                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vModulo3'])){ if($permissoes['vModulo3'] == '1'){echo 'checked';}}?> name="vModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Modulo3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aModulo3'])){ if($permissoes['aModulo3'] == '1'){echo 'checked';}}?> name="aModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eModulo3'])){ if($permissoes['eModulo3'] == '1'){echo 'checked';}}?> name="eModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dModulo3'])){ if($permissoes['dModulo3'] == '1'){echo 'checked';}}?> name="dModulo3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo3</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vModulo4'])){ if($permissoes['vModulo4'] == '1'){echo 'checked';}}?> name="vModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Modulo4</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aModulo4'])){ if($permissoes['aModulo4'] == '1'){echo 'checked';}}?> name="aModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo4</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eModulo4'])){ if($permissoes['eModulo4'] == '1'){echo 'checked';}}?> name="eModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo4</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dModulo4'])){ if($permissoes['dModulo4'] == '1'){echo 'checked';}}?> name="dModulo4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo4</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                
                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vModulo5'])){ if($permissoes['vModulo5'] == '1'){echo 'checked';}}?> name="vModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Modulo5</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aModulo5'])){ if($permissoes['aModulo5'] == '1'){echo 'checked';}}?> name="aModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo5</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eModulo5'])){ if($permissoes['eModulo5'] == '1'){echo 'checked';}}?> name="eModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo5</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dModulo5'])){ if($permissoes['dModulo5'] == '1'){echo 'checked';}}?> name="dModulo5" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo5</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vModulo6'])){ if($permissoes['vModulo6'] == '1'){echo 'checked';}}?> name="vModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Modulo6</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aModulo6'])){ if($permissoes['aModulo6'] == '1'){echo 'checked';}}?> name="aModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo6</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eModulo6'])){ if($permissoes['eModulo6'] == '1'){echo 'checked';}}?> name="eModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo6</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dModulo6'])){ if($permissoes['dModulo6'] == '1'){echo 'checked';}}?> name="dModulo6" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo6</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['vModulo7'])){ if($permissoes['vModulo7'] == '1'){echo 'checked';}}?> name="vModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Visualizar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['aModulo7'])){ if($permissoes['aModulo7'] == '1'){echo 'checked';}}?> name="aModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['eModulo7'])){ if($permissoes['eModulo7'] == '1'){echo 'checked';}}?> name="eModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Modulo7</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['dModulo7'])){ if($permissoes['dModulo7'] == '1'){echo 'checked';}}?> name="dModulo7" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Modulo7</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['rTickets'])){ if($permissoes['rTickets'] == '1'){echo 'checked';}}?> name="rTickets" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe Tickets</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['rInventario'])){ if($permissoes['rInventario'] == '1'){echo 'checked';}}?> name="rInventario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe Inventario</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['rInformes1'])){ if($permissoes['rInformes1'] == '1'){echo 'checked';}}?> name="rInformes1" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe Informes1</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['rInformes2'])){ if($permissoes['rInformes2'] == '1'){echo 'checked';}}?> name="rInformes2" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe Informes2</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['rInforme3'])){ if($permissoes['rInforme3'] == '1'){echo 'checked';}}?> name="rInforme3" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe Informess3</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['rInforme4'])){ if($permissoes['rInforme4'] == '1'){echo 'checked';}}?> name="rInforme4" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe Informes4</span>
                                        </label>
                                    </td>
                                    <td colspan="2"></td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['cUsuario'])){ if($permissoes['cUsuario'] == '1'){echo 'checked';}}?> name="cUsuario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Usuário</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['cEmitente'])){ if($permissoes['cEmitente'] == '1'){echo 'checked';}}?> name="cEmitente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Empresa</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['cPermissao'])){ if($permissoes['cPermissao'] == '1'){echo 'checked';}}?> name="cPermissao" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Permisos</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input <?php if(isset($permissoes['cBackup'])){ if($permissoes['cBackup'] == '1'){echo 'checked';}}?> name="cBackup" class="marcar" type="checkbox" value="1" />
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
                        <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Modificar</button>
                        <a href="<?php echo base_url() ?>index.php/permissoes" id="" class="btn"><i class="icon-arrow-left"></i> Volverr</a>
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


        $("#marcarTodos").click(function(){

            if ($(this).attr("checked")){
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
