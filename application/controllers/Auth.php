<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_model'); // Sesuaikan dengan nama model yang sebenarnya
    }
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function fungsi_login()
    {
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $data = ['email' => $email,];
        $query = $this->m_model->getwhere('user', $data);
        $result = $query->row_array();

        if (!empty($result) && md5($password) === $result['password']) {
            $data = [
                'loged_in' => TRUE,
                'username' => $result['username'],
                'email'    => $result['email'],
                'role'     => $result['role'],
                'id'       => $result['id'],
                'last_activity' => time(), // Menambahkan waktu terakhir akses
            ];
            $this->session->set_userdata($data);
            if ($this->session->userdata('role') == 'admin') {
                redirect(base_url() . "admin/dashboard");
            } elseif ($this->session->userdata('role') == 'user') {
                redirect(base_url() . "user");
            } else {
                redirect(base_url() . "auth/login");
            }
        } else {
            redirect(base_url() . 'auth/login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function aksi_register()
    {
        $email = $this->input->post('email', true);
        $data = ['email' => $email];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('admin');
        // $result = $query->row_array();
        if (empty($result)) {
            if (strlen($password) < 8) { //jika password kurang dari 8 angka maka tidak bisa menjalankan register
                $this->session->set_flashdata('error_password', 'gagal...');
                redirect(base_url('auth/register'));
            } else {
                $data = [
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'role' => 'admin',

                ];
                $this->m_model->register($data);
                $this->session->set_flashdata('succsess', 'berhasil...');
                redirect(base_url('auth/login'));
            }
        } else {
            $this->session->set_flashdata('error_email', 'gagal...');
            redirect(base_url('auth/register'));
        }
    }

    // register user
    public function registeru()
    {
        $this->load->view('auth/registeru');
    }

    public function aksi_registeru()
    {
        $email = $this->input->post('email', true);
        $data = ['email' => $email];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('user');
        // $result = $query->row_array();
        if (empty($result)) {
            if (strlen($password) < 8) { //jika password kurang dari 8 angka maka tidak bisa menjalankan register
                $this->session->set_flashdata('error_password', 'gagal...');
                redirect(base_url('auth/registeru'));
            } else {
                $data = [
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'role' => 'user',
                ];
                $this->m_model->register($data);
                $this->session->set_flashdata('succsess', 'berhasil...');
                redirect(base_url('auth/login'));
            }
        } else {
            $this->session->set_flashdata('error_email', 'gagal...');
            redirect(base_url('auth/registeru'));
        }
    }
}
