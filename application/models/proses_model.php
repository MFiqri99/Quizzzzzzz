<?php class proses_model extends CI_Model {
       public function __construct()  
       {         
       	$this->load->database();     
       }
       public function get_tampil($judul = FALSE)     
       {         
       	if ($judul === FALSE)         
       		{             
       			$query = $this->db->get('tskripsi');
       			             return $query->result_array();
       		}           
       		$query = $this->db->get_where('tskripsi', array('judul' => $judul));
       		return $query->row_array(); 
			}
      public function get_tampil_by_nim($id = 0)
                  {
                  if ($id === 0)
                  {             
                  $query = $this->db->get('tskripsi');
                  return $query->result_array();
                  }
                  $query = $this->db->get_where('tskripsi', array('nim' => $id));
                  return $query->row_array();
                  }
                  public function set_tampil($id = 0)
                  {
                  $this->load->helper('url');
                  $judul = url_title($this->input->post('nama'), 'dash', TRUE);
                  $data = array('nim' => $this->input->post('nim'),'nama' => $this->input->post('nama'),'judul' => $this->input->post('judul'),'pemb' => $this->input->post('pemb'));
                  if ($id == 0)
                  {
                  return $this->db->insert('tskripsi', $data);
                  } else {
                  $this->db->where('nim', $id);
                  return $this->db->update('tskripsi', $data);
                  }
            }
            public function delete_news($id)
            {
            $this->db->where('nim', $id);
            return $this->db->delete('tskripsi');
            }
   }