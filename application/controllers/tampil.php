<?php class tampil extends CI_Controller
{
	
	public function __construct()
	{
	parent::__construct();
	$this->load->model('proses_model');
	$this->load->helper('url_helper');
	}
	public function index()
	{
	$data['tampil'] = $this->proses_model->get_tampil();
	$data['judul'] = 'Selamat Datang';
	$this->load->view('view/index', $data);
	$this->load->view('view/footer', $data);

	}
	public function input()
		 {
		 $this->load->helper('form');
		 $this->load->library('form_validation');
		 $data['judul'] = 'Form Input';
		 $this->form_validation->set_rules('nim', 'nama', 'required');
		 $this->form_validation->set_rules('judul', 'pemb', 'required');
		 if ($this->form_validation->run() === FALSE)
		 	{
		 	$this->load->view('menu/input');
		 	$this->load->view('view/footer');
		 	}else{
		 	$this->proses_model->set_tskripsi();
		 	$this->load->view('menu/success');
		 	$this->load->view('view/footer');
		 	}
		 }
	public function data()
	{
		$data['tampil'] = $this->proses_model->get_tampil();
		$this->load->view('menu/data', $data);
		$this->load->view('view/footer', $data);
	}

	public function delete_news(){         
		$nim = $this->uri->segment(3);                  	
		if (empty($id)){             
			show_404();
		}                          
		$tampil_item = $this->proses_model->get_news_by_id($id);                  
		$this->proses_model->delete_news($id);                 
		redirect( base_url() . 'index.php/view');             
	}

	public function edit(){         
		$id = $this->uri->segment(3);                  
		
		if (empty($id)){             
			show_404();         
		}                  
		
		$this->load->helper('form');         
		$this->load->library('form_validation');                  
		$data['tampil'] = '';                 
		$data['tampil_item'] = $this->proses_model->get_news_by_id($id);
		$this->form_validation->set_rules('nim', 'nim', 'required');         
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('pemb', 'pemb', 'required');     
		
		if ($this->form_validation->run() == FALSE){                          
			$this->load->view('tampil/edit', $data);             
			$this->load->view('view/footer');
		}else{             
			$this->proses_model->set_tampil($id);                          
			redirect( base_url().'index.php/view');         
		}     
	}
}
