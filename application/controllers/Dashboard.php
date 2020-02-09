<?php

class Dashboard extends CI_Controller {
	public function index() {
		$data["produk"] = $this->Produk_model->tampil_produk_terbaik("terbaik")->result();

		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("pages/dashboard_view", $data);
		$this->load->view("templates/footer");
	}

	public function tambah_keranjang($id) {
		$produk = $this->Produk_model->find($id);

		$data = [
			"id"=>$produk->produk_id, 
			"qty"=>1, 
			"price"=>$produk->produk_harga, 
			"name"=>$produk->produk_nama
		];

		$this->cart->insert($data);
		redirect("Dashboard");
	}

	public function detail_keranjang() {
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("pages/keranjang_view");
		$this->load->view("templates/footer");
	}

	public function hapus_keranjang() {
		$this->cart->destroy();
		redirect("Dashboard");
	}

	public function pembayaran() {
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("pages/pembayaran_view");
		$this->load->view("templates/footer");
	}

	public function proses_pesanan() {
		$customer_nama          	= $this->input->post("customer_nama");
    $customer_alamat          = $this->input->post("customer_alamat");
    $customer_email         	= $this->input->post("customer_email");
    $customer_total_belanja   = $this->input->post("customer_total_belanja");
    $jasa_pengiriman          = $this->input->post("jasa_pengiriman");
		$bank 					         	= $this->input->post("bank");
		
		$data_customer = [
      "customer_nama"=>$customer_nama, 
      "customer_alamat"=>$customer_alamat, 
			"customer_email"=>$customer_email,
			"customer_total_belanja"=>$customer_total_belanja,
			"jasa_pengiriman"=>$jasa_pengiriman, 
      "bank"=>$bank
		];

		$this->Produk_model->tambah($data_customer, "tb_customer");
		
		$this->cart->destroy();
		
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("pages/proses_pesanan_view");
		$this->load->view("templates/footer");
	}
}
