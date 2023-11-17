<?php 

class transaksi extends CI_Controller
{
    public function index()
    {
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs 
                                                WHERE tr.id_mobil=mb.id_mobil 
                                                AND tr.id_customer=cs.id_customer 
                                                AND cs.id_customer")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_rental='$id' ORDER BY id_rental DESC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }

    public function batal_transaksi($id)
    {
        $where = array('id_rental' => $id);
        $data = $this->rental_model->get_where($where,'transaksi')->row();
        $where2 = array('id_mobil' => $data->id_mobil);
        $data2 = array('status' => '1');
        $this->rental_model->update_data('mobil',$data2,$where2);
        $this->rental_model->delete_data($where,'transaksi');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Berhasil Dibatalkan!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('customer/transaksi');
    }
    
}
?>