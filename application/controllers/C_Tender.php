<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tender extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('M_Pemilihan','pemilihan');
	}

	public function index()
	{
		$this->load->view('welcome_message');
		// $data["all"] = $this->pemilihan->getAlldata();
		// $this->load->view('welcome_message',$data);
	}

	public function ajax_list()
	{
		$list = $this->pemilihan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $pemilihan) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $pemilihan->kode_rup;
			$row[] = $pemilihan->kode_tender;
			$row[] = $pemilihan->nama_tender;
			$row[] = $pemilihan->satuan_kerja;
			$row[] = $pemilihan->jenis_pengadaan;
			$row[] = $pemilihan->metode_pengadaan;
			// $row[] = $pemilihan->pemenang;
			// $row[] = $pemilihan->npwp;
			// $row[] = $pemilihan->alamat;
			$row[] = $pemilihan->nilai_pagu;
			$row[] = $pemilihan->nilai_hps;
			// $row[] = $pemilihan->nilai_Pterkoreksi;
			// $row[] = $pemilihan->nilai_Phasilnego;
			// $row[] = $pemilihan->efisiensi_keuangan;
			$row[] = $pemilihan->tanggal;
			$row[] = $pemilihan->tahapan;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_pemilihan('."'".$pemilihan->id_pemilihantender."'".')"><i class="bi bi-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_pemilihan('."'".$pemilihan->id_pemilihantender."'".')"><i class="bi bi-trash3"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pemilihan->count_all(),
						"recordsFiltered" => $this->pemilihan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->pemilihan->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$insert = $this->pemilihan->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->pemilihan->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->pemilihan->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	
}
