<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
      $this->load->model('m_admin');
    $this->load->helper('url');
    if($this->session->userdata('status') != "login"){ 
      redirect(base_url("login")); 
    } 
  }
  

  function index(){
  
    $data['crud_db'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_admin',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['crud_db'] = $this->m_admin->edit_data($where,'users')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
    $message = $this->input->post('message');

    $data = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
      'message' => $message

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'users');
    redirect('admin/');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->m_admin->hapus_data($where,'users');
  redirect('admin/index');
  }

  function tambah_aksi(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
    $message = $this->input->post('message');

    $data = array(
			'name' => $nama,
			'email' => $email,
			'subject' => $subject,
      'message' => $message

			);
		$this->m_admin->input_data($data,'crud_db');
		redirect('welcome');
	}
}
