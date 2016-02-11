<?php

class Tickets extends CI_Controller {
    

    function __construct() {
        parent::__construct();
            if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))){
            redirect('mapos/login');
            }
            $this->load->helper(array('codegen_helper'));
            $this->load->model('tickets_model','',TRUE);
            $this->data['menuTicket'] = 'tickets';
	}	
	
	function index(){
		$this->gerenciar();
	}

	function gerenciar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vTicket')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar Tickets.');
           redirect(base_url());
        }
        $this->load->library('table');
        $this->load->library('pagination');
        
   
        $config['base_url'] = base_url().'index.php/tickets/gerenciar/';
        $config['total_rows'] = $this->tickets_model->count('nesitelco.ticket');
        $config['per_page'] = 10;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 	
        
	    $this->data['results'] = $this->tickets_model->get('nesitelco.ticket','id,ESTADO,FECHA,ESTACION,PROYECTO,CRITICIDAD,OBSERVACION,ODS,USUARIO,COORDINADOR,TECNICO,CUADRILLA','',$config['per_page'],$this->uri->segment(3));
       	
       	$this->data['view'] = 'tickets/visualizar';
       	$this->load->view('tema/topo',$this->data);
	  
       
		
    }

     public function visualizar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vTicket')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar clientes.');
           redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->tickets_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->tickets_model->getOsByTicket($this->uri->segment(3));
        $this->data['view'] = 'tickets/tkdetalle';
        $this->load->view('tema/topo', $this->data);

        
    }

    

    public function adicionar(){
         if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aTicket')){
           $this->session->set_flashdata('error','No tiene permiso para agregar clientes.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nomeCliente' => set_value('nomeCliente'),
                'documento' => set_value('documento'),
                'telefone' => set_value('telefone'),
                'celular' => $this->input->post('celular'),
                'email' => set_value('email'),
                'rua' => set_value('rua'),
                'numero' => set_value('numero'),
                'bairro' => set_value('bairro'),
                'cidade' => set_value('cidade'),
                'estado' => set_value('estado'),
                'cep' => set_value('cep'),
                'dataCadastro' => date('Y-m-d')
            );

            if ($this->clientes_model->add('clientes', $data) == TRUE) {
                $this->session->set_flashdata('success','Cliente agregado con éxito!');
                redirect(base_url() . 'index.php/clientes/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ha ocurrido un error.</p></div>';
            }
        }
        $this->data['view'] = 'tickets/nuevo_ticket';
        $this->load->view('tema/topo', $this->data);

    }

    public function gestionar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'eTicket')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar clientes.');
           redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->tickets_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->tickets_model->getOsByTicket($this->uri->segment(3));
        $this->data['view'] = 'tickets/gestionticket';
        $this->load->view('tema/topo', $this->data);



    }


}