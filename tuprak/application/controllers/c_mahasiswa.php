
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_mahasiswa','mahasiswa');
}

public function insertform()
{
	# code...
	$this->load->view('insert');
}
	public function index($offset=0)
	{

	// $data['data'] = $this->mahasiswa->getalldata()->result_array();
	// 	$this->load->view('v_mahasiswa',$data);
		$config['base_url'] = base_url().'C_mahasiswa/index';
		$config['total_rows'] = $this->db->get('data_mahasiswa')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['data'] = $this->mahasiswa->getalldata($config['per_page'],$offset)->result_array();
		$this->load->view('v_mahasiswa',$data);
	}

	public function cariWhere($offset=0)
		{
			# code...
			$value = $this->input->post('search');
			//echo $value;
			// $data['sampahkeluar'] = $this->jualan->search($value)->result_array();
		 //   	$this->load->view('main/header');
		 //   	$this->load->view('main/sidebar');
			// $this->load->view('pages/sampahkeluar',$data);
		 //   	$this->load->view('main/footer');
        
        if($value != 'all'){
		   	$config['base_url'] = base_url().'c_mahasiswa/cariWhere';
		   	$config['total_rows'] = $this->db->get('data_mahasiswa')->num_rows();
			//$config['per_page'] = 5;
			//$config['num_links'] = 3;
			$this->pagination->initialize($config);
			$data['nilai'] = $value;
			$data['halaman'] =$this->pagination->create_links();
			$data['data'] =$this->mahasiswa->search($value)->result_array();
			$this->load->view('v_mahasiswa',$data);
	}
	else{
		redirect(base_url().'C_mahasiswa','refresh');
		}
	}

public function delete($value='')
{
	# code...
	$this->mahasiswa->delete($value);
	redirect(base_url().'C_mahasiswa','refresh');
}
public function update($value='')
{
	# code...
			$data =$this->mahasiswa->search($value)->row_array();
			//echo $data['data']['nim'];
			$this->load->view('edit',$data);

}

public function edits()
{
	# code...
	//echo "string";
	$nim = $this->input->post('nim');
	$nama = $this->input->post('nama');
	$kelas = $this->input->post('kelas');
	$tangggal = $this->input->post('tangggal');
	$IPK = $this->input->post('IPK');

	$data =  array(
	'nim' => $nim,
	'nama' => $nama,
	'tangggal'=> $tangggal,
	'IPK' => $IPK,
	'kelas' => $kelas
);
	//print_r($data);
	$this->mahasiswa->updates($nim,$data);
	redirect(base_url().'C_mahasiswa','refresh');

}
public function insert()
{
	# code...
	$nim = $this->input->post('nim');
	$nama = $this->input->post('nama');
	$kelas = $this->input->post('kelas');
	$tangggal = $this->input->post('tangggal');
	$IPK = $this->input->post('IPK');

	$data =  array(
	'nim' => $nim,
	'nama' => $nama,
	'tangggal'=> $tangggal,
	'IPK' => $IPK,
	'kelas' => $kelas
);
	$this->mahasiswa->insert($data);
	redirect(base_url().'C_mahasiswa','refresh');

}
}

/* End of file c_mahasiswa.php */
/* Location: ./application/controllers/c_mahasiswa.php */
