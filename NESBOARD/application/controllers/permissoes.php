<?php

class Permissoes extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'cPermissao')){
          $this->session->set_flashdata('error','Usted no está autorizado para configurar los permisos en el sistema.');
          redirect(base_url());
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('permissoes_model', '', TRUE);
        $this->data['menuConfiguracoes'] = 'Permissões';
    }
	
	function index(){
		$this->gerenciar();
	}

	function gerenciar(){
        
        $this->load->library('pagination');
        
        
        $config['base_url'] = base_url().'index.php/permissoes/gerenciar/';
        $config['total_rows'] = $this->permissoes_model->count('permissoes');
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

		  $this->data['results'] = $this->permissoes_model->get('permissoes','idPermissao,nome,data,situacao','',$config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'permissoes/permissoes';
       	$this->load->view('tema/topo',$this->data);

       
		
    }
	
    function adicionar() {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            
            $nomePermissao = $this->input->post('nome');
            $cadastro = date('Y-m-d');
            $situacao = 1;

            $permissoes = array(

                  'aInventario' => $this->input->post('aInventario'),
                  'eInventario' => $this->input->post('eInventario'),
                  'dInventario' => $this->input->post('dInventario'),
                  'vInventario' => $this->input->post('vInventario'),

                  'aTicket' => $this->input->post('aTicket'),
                  'eTicket' => $this->input->post('eTicket'),
                  'dTicket' => $this->input->post('dTicket'),
                  'vTicket' => $this->input->post('vTicket'),

                  'aModulo3' => $this->input->post('aModulo3'),
                  'eModulo3' => $this->input->post('eModulo3'),
                  'dModulo3' => $this->input->post('dModulo3'),
                  'vModulo3' => $this->input->post('vModulo'),

                  'aModulo3' => $this->input->post('aModulo3'),
                  'eModulo3' => $this->input->post('eModulo3'),
                  'dModulo3' => $this->input->post('dModulo3'),
                  'vModulo3' => $this->input->post('vModulo3'),

                  'aModulo4' => $this->input->post('aModulo4'),
                  'eModulo4' => $this->input->post('eModulo4'),
                  'dModulo4' => $this->input->post('dModulo4'),
                  'vModulo4' => $this->input->post('vModulo4'),

                  'aModulo5' => $this->input->post('aModulo5'),
                  'eModulo5' => $this->input->post('eModulo5'),
                  'dModulo5' => $this->input->post('dModulo5'),
                  'vModulo5' => $this->input->post('vModulo5'),

                  'aModulo6' => $this->input->post('aModulo6'),
                  'eModulo6' => $this->input->post('eModulo6'),
                  'dModulo6' => $this->input->post('dModulo6'),
                  'vModulo6' => $this->input->post('vModulo6'),

                  'aModulo7' => $this->input->post('aModulo7'),
                  'eModulo7' => $this->input->post('eModulo7'),
                  'dModulo7' => $this->input->post('dModulo7'),
                  'vModulo7' => $this->input->post('vModulo7'),

                  'cUsuario' => $this->input->post('cUsuario'),
                  'cEmitente' => $this->input->post('cEmitente'),
                  'cPermissao' => $this->input->post('cPermissao'),
                  'cBackup' => $this->input->post('cBackup'),

                  'rTickets' => $this->input->post('rTickets'),
                  'rInventario' => $this->input->post('rInventario'),
                  'rInformes1' => $this->input->post('rInformes1'),
                  'rInformes2' => $this->input->post('rInformes2'),
                  'rInforme3' => $this->input->post('rInforme3'),
                  'rInforme4' => $this->input->post('rInforme4'),

            );
            $permissoes = serialize($permissoes);

            $data = array(
                'nome' => $nomePermissao,
                'data' => $cadastro,
                'permissoes' => $permissoes,
                'situacao' => $situacao
            );

            if ($this->permissoes_model->add('permissoes', $data) == TRUE) {

                $this->session->set_flashdata('success', 'Permiso añadido con éxito.');
                redirect(base_url() . 'index.php/permissoes/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'permissoes/adicionarPermissao';
        $this->load->view('tema/topo', $this->data);

    }

    function editar() {

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            
            $nomePermissao = $this->input->post('nome');
            $situacao = $this->input->post('situacao');
            $permissoes = array(

                  'aInventario' => $this->input->post('aInventario'),
                  'eInventario' => $this->input->post('eInventario'),
                  'dInventario' => $this->input->post('dInventario'),
                  'vInventario' => $this->input->post('vInventario'),

                  'aTicket' => $this->input->post('aTicket'),
                  'eTicket' => $this->input->post('eTicket'),
                  'dTicket' => $this->input->post('dTicket'),
                  'vTicket' => $this->input->post('vTicket'),

                  'aModulo3' => $this->input->post('aModulo3'),
                  'eModulo3' => $this->input->post('eModulo3'),
                  'dModulo3' => $this->input->post('dModulo3'),
                  'vModulo3' => $this->input->post('vModulo'),

                  'aModulo3' => $this->input->post('aModulo3'),
                  'eModulo3' => $this->input->post('eModulo3'),
                  'dModulo3' => $this->input->post('dModulo3'),
                  'vModulo3' => $this->input->post('vModulo3'),

                  'aModulo4' => $this->input->post('aModulo4'),
                  'eModulo4' => $this->input->post('eModulo4'),
                  'dModulo4' => $this->input->post('dModulo4'),
                  'vModulo4' => $this->input->post('vModulo4'),

                  'aModulo5' => $this->input->post('aModulo5'),
                  'eModulo5' => $this->input->post('eModulo5'),
                  'dModulo5' => $this->input->post('dModulo5'),
                  'vModulo5' => $this->input->post('vModulo5'),

                  'aModulo6' => $this->input->post('aModulo6'),
                  'eModulo6' => $this->input->post('eModulo6'),
                  'dModulo6' => $this->input->post('dModulo6'),
                  'vModulo6' => $this->input->post('vModulo6'),

                  'aModulo7' => $this->input->post('aModulo7'),
                  'eModulo7' => $this->input->post('eModulo7'),
                  'dModulo7' => $this->input->post('dModulo7'),
                  'vModulo7' => $this->input->post('vModulo7'),

                  'cUsuario' => $this->input->post('cUsuario'),
                  'cEmitente' => $this->input->post('cEmitente'),
                  'cPermissao' => $this->input->post('cPermissao'),
                  'cBackup' => $this->input->post('cBackup'),

                  'rTickets' => $this->input->post('rTickets'),
                  'rInventario' => $this->input->post('rInventario'),
                  'rInformes1' => $this->input->post('rInformes1'),
                  'rInformes2' => $this->input->post('rInformes2'),
                  'rInforme3' => $this->input->post('rInforme3'),
                  'rInforme4' => $this->input->post('rInforme4'),

            );
            $permissoes = serialize($permissoes);

            $data = array(
                'nome' => $nomePermissao,
                'permissoes' => $permissoes,
                'situacao' => $situacao
            );

            if ($this->permissoes_model->edit('permissoes', $data, 'idPermissao', $this->input->post('idPermissao')) == TRUE) {
                $this->session->set_flashdata('success', 'Permiso editado con éxito!');
                redirect(base_url() . 'index.php/permissoes/editar/'.$this->input->post('idPermissao'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>ha ocurrido un error</p></div>';
            }
        }

        $this->data['result'] = $this->permissoes_model->getById($this->uri->segment(3));

        $this->data['view'] = 'permissoes/editarPermissao';
        $this->load->view('tema/topo', $this->data);

    }
	
    function excluir(){
           
        
        $id =  $this->input->post('id');
        if ($id == null){

            $this->session->set_flashdata('error','Error al intentar eliminar el permiso.');            
            redirect(base_url().'index.php/permissoes/gerenciar/');
        }

        /* $ this->db->where('permissoes_id', $id);
        $ this->db->delete('usuarios'); */

        $this->permissoes_model->delete('permissoes','idPermissao',$id);             
        

        $this->session->set_flashdata('success','Permiso eliminado con éxito!');            
        redirect(base_url().'index.php/permissoes/gerenciar');
    }
}


/* End of file permissoes.php */
/* Location: ./application/controllers/permissoes.php */