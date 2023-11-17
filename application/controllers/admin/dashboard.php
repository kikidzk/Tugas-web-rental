<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/topbar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_mobil', $data);
        $this->load->view('templates_adminr/footer');
    }
}