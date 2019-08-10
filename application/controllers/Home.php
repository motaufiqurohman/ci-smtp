<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('email');
        // $this->load->library('form_validation');
        // $this->load->library('session');
        // $this->load->helper('form');
    }

	public function index()
	{
        $data['title'] = 'Home';

        $this->form_validation->set_rules('dari', 'Dari', 'required|valid_email', ['required' => 'Nilai Dari tidak boleh kosong!', 'valid_email' => 'Nilai Dari harus berupa email']);
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nilai Nama tidak boleh kosong!']);
        $this->form_validation->set_rules('email_tujuan', 'Email tujuan', 'required|valid_email', ['required' => 'Nilai Email Tujuan tidak boleh kosong!', 'valid_email' => 'Nilai Email tujuan harus berupa email']);
        $this->form_validation->set_rules('subject', 'Subject', 'required', ['required' => 'Nilai Subject tidak boleh kosong!']);
        $this->form_validation->set_rules('pesan', 'Pesan', 'required', ['required' => 'Nilai Pesan tidak boleh kosong!']);

        if($this->form_validation->run() === false){
            $this->load->view('home', $data);
        }else{
            $data['dari'] = $this->input->post('dari', true);
            $data['nama'] = $this->input->post('nama', true);
            $data['email_tujuan'] = $this->input->post('email_tujuan', true);
            $data['subject'] = $this->input->post('subject', true);
            $data['pesan'] = $this->input->post('pesan', true);
            $this->send_email($data);
        }
    }

    public function send_email($data)
    {
        $config = $this->config->item('email_smtp');
        $this->load->library('email', $config);

        $dari = $data['dari'];
        $nama = $data['nama'];
        $email_tujuan = $data['email_tujuan'];
        $subject = $data['subject'];
        $pesan = $data['pesan'];

        $this->email->from($dari, $nama);
        $this->email->to($email_tujuan);
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject($subject);
        $this->email->message($pesan);

        if($this->email->send()){
            $this->session->set_flashdata('email_sent', 'Email berhasil dikirim');
            redirect('home');
        }else{
            $this->session->set_flashdata('email_sent', 'Email gagal dikirim');
        }
    }
}
