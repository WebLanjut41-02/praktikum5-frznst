
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}

public function getalldata($perpage,$offset)
	{
		# code...
		return $this->db->get('data_mahasiswa',$perpage,$offset);
	}	

	public function search($pointer)
	{
		# code...
		$this->db->where('nim', $pointer);
		$this->db->or_where('nama', $pointer);
		$this->db->or_where('kelas', $pointer);
		$query = $this->db->get('data_mahasiswa');
		return $query;
		}

		public function delete($value='')
		{
			# code...
			$this->db->where('nim', $value);
			$this->db->delete('data_mahasiswa');
		}

		public function updates($pointer,$data)
		{
			
		$this->db->set($data);
 		$this->db->where('nim',$pointer);
  		$this->db->update('data_mahasiswa');

			//print_r($data);
		}

		public function insert($data)
		{
			# code...
			$this->db->insert('data_mahasiswa', $data);
		}
}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */