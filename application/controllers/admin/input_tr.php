<?php
class Input_tr extends CI_Controller{


    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/input_tr',$data);
        $this->load->view('templates_admin/footer');
    }

    public function input_aksi()
    {
        $id_customer                        =$this->input->post('id_customer');
        $id_mobil                           =$this->input->post('id_mobil');
        $tanggal_rental                     =$this->input->post('tanggal_rental');
        $tanggal_kembali                    =$this->input->post('tanggal_kembali');
        $denda                              =$this->input->post('denda');
        $harga                              =$this->input->post('harga');
        $tanggal_pengembalian               =$this->input->post('tanggal_pengembalian');
        $status_pengembalian                =$this->input->post('status_pengembalian');
        $status_rental                      =$this->input->post('status_rental');

        $data = array(
            'id_customer'           =>$id_customer,
            'id_mobil'              =>$id_mobil,
            'tanggal_rental'        =>$tanggal_rental,
            'tanggal_kembali'       =>$tanggal_kembali,
            'denda'                 =>$denda,
            'harga'                 =>$harga,
            'tanggal_pengembalian'  =>$tanggal_pengembalian ,
            'status_pengembalian'   =>$status_pengembalian,
            'status_rental'         =>$status_rental
        );
            
            

        $this->rental_model->insert_data($data,'transaksi');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil Ditambahkan!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/input_tr');
    }
}
?>