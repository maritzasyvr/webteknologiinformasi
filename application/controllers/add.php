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