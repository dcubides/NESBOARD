<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Creación de Ticket</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                     <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Fecha:<span class="required">*</span></label>
                        <div class="controls">
                            <input id="fecha" type="date" name="fecha" value="<?php echo set_value('fecha'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="documento" class="control-label">Proyecto:<span class="required">*</span></label>
                        <div class="controls">
                            <input id="proyecto" type="text" name="proyecto" value="<?php echo set_value('proyecto'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label">Criticidad<span class="required">*</span></label>
                        <div class="controls">
                            <input id="criticidad" type="text" name="criticidad" value="<?php echo set_value('criticidad'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Op. Tecnica:</label>
                        <div class="controls">
                            <input id="opt" type="text" name="opt" value="<?php echo set_value('opt'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email" class="control-label">Zona<span class="required">*</span></label>
                        <div class="controls">
                            <input id="zona" type="text" name="zona" value="<?php echo set_value('zona'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Estación<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estacion" type="text" name="estacion" value="<?php echo set_value('estacion'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label">Tipo equipo:<span class="required">*</span></label>
                        <div class="controls">
                            <input id="equipo" type="text" name="equipo" value="<?php echo set_value('equipo'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Cliente<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cliente" type="text" name="cliente" value="<?php echo set_value('cliente'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">ODS/Ticket cliente<span class="required">*</span></label>
                        <div class="controls">
                            <input id="ods" type="text" name="ods" value="<?php echo set_value('ods'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">Posición<span class="required">*</span></label>
                        <div class="controls">
                            <input id="posicion" type="text" name="posicion" value="<?php echo set_value('posicion'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">Alcance<span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="alcance" rows="5" type="textarea" name="alcance" value="<?php echo set_value('alcance'); ?>"></textarea>
                        </div>
                    </div>



                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Crear Ticket</button>
                                <a href="<?php echo base_url() ?>index.php/tickets" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  documento:{ required: true},
                  telefone:{ required: true},
                  email:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  documento :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  bairro:{ required: 'Campo Requerido.'},
                  cidade:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'}

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
</script>