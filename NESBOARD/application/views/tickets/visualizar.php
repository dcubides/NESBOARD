
<?php if($this->permission->checkPermission($this->session->userdata('permissao'),'aTicket')){ ?>
    <a href="<?php echo base_url();?>index.php/tickets/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Crear Ticket</a>    
<?php } ?>

<?php
if(!$results){?>

        <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5>Tickets</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TICKET</th>
                        <th>FECHA</th>
                        <th>ESTACION</th>
                        <th>PROYECTO</th>
                        <th>ZONA</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Ningún ticket Registrado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php }else{
    

?>
<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
         </span>
        <h5>Tickets</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr>
            <th>TICKET</th>
            <th>ESTADO</th>
            <th>FECHA</th>
            <th>ESTACION</th>
            <th>PROYECTO</th>
             <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
            echo '<tr>';
            echo '<td>'.$r->id.'</td>';
            echo '<td>'.$r->ESTADO.'</td>';
            echo '<td>'.$r->FECHA.'</td>';
            echo '<td>'.$r->ESTACION.'</td>';
             echo '<td>'.$r->PROYECTO.'</td>';
            echo '<td>';
            if($this->permission->checkPermission($this->session->userdata('permissao'),'vTicket')){
                echo '<a href="'.base_url().'index.php/tickets/visualizar/'.$r->id.'" style="margin-right: 1%" class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
            }
            if($this->permission->checkPermission($this->session->userdata('permissao'),'eTicket')){
                echo '<a href="'.base_url().'index.php/tickets/gestionar/'.$r->id.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Gestionar Ticket"><i class="icon-pencil icon-white"></i></a>'; 
            }
            if($this->permission->checkPermission($this->session->userdata('permissao'),'dTicket')){
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" Ticket="'.$r->id.'" style="margin-right: 1%" class="btn btn-warning tip-top" title="Alcance Ticket"><i class="icon-time icon-white"></i></a>'; 
            }

              
            echo '</td>';
            echo '</tr>';
        }?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
<?php echo $this->pagination->create_links();}?>



 
<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Alcance Ticket</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="id" name="id" value="" />
    <h5 style="text-align: center"><?php

    //$this->data['custom_error'] = '';
     //$this->data['result'] = $this->tickets_model->getById($this->uri->segment(3));
       // $this->data['results'] = $this->tickets_model->getOsByTicket($this->uri->segment(3));
       
         
                echo $r->id ;
             echo $r->OBSERVACION ;
            
             
         
             ?>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">oK</button>
   
  </div>
  </form>
</div>






<script type="text/javascript">
$(document).ready(function(){


   $(document).on('click', 'a', function(event) {
        
        var ticket = $(this).attr('Ticket');
        $('#id').val(cliente);

    });

});

</script>
