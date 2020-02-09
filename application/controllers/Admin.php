<?php 

class Admin extends CI_Controller {
  public function index() {
    $data["produk"] = $this->Produk_model->tampil_semua_produk()->result();

    $this->load->view("admin/templates/header");
    $this->load->view("admin/templates/sidebar");
    $this->load->view("admin/data_produk_view", $data);
    $this->load->view("admin/templates/footer");
  }

  public function penjualan() {
    $data["customer"] = $this->Produk_model->tampil_semua_customer()->result();

    $this->load->view("admin/templates/header");
    $this->load->view("admin/templates/sidebar");
    $this->load->view("admin/data_customer_view", $data);
    $this->load->view("admin/templates/footer");
  }

  public function tambah_aksi() {
    $produk_nama          = $this->input->post("produk_nama");
    $produk_type          = $this->input->post("produk_type");
    $produk_desc          = $this->input->post("produk_desc");
    $produk_merk          = $this->input->post("produk_merk");
    $produk_harga         = $this->input->post("produk_harga");
    $produk_stok          = $this->input->post("produk_stok");

    $produk_gambar        = $_FILES["produk_gambar"]["name"];

    if($produk_gambar == "") {

    } else {
      $config["upload_path"]  = "./assets/foto/";
      $config["allowed_types"] = "jpg|jpeg|png";

      $this->load->library("upload", $config);

      if(!$this->upload->do_upload("produk_gambar")) {
        echo "Gambar gagal di upload"; die();
      } else {
        $produk_gambar = $this->upload->data("file_name");
      }
    }

    $data = [
      "produk_nama"=>$produk_nama, 
      "produk_type"=>$produk_type, 
      "produk_desc"=>$produk_desc, 
      "produk_merk"=>$produk_merk, 
      "produk_harga"=>$produk_harga, 
      "produk_stok"=>$produk_stok, 
      "produk_gambar"=>$produk_gambar
    ];

    $this->Produk_model->tambah($data, "tb_produk");
    redirect("Admin/index");  
  }

  public function edit($id) {
    $where = ["produk_id"=>$id];
    $data["produk"] = $this->Produk_model->edit($where, "tb_produk")->result();

    $this->load->view("admin/templates/header");
    $this->load->view("admin/templates/sidebar");
    $this->load->view("admin/edit_produk_view", $data);
    $this->load->view("admin/templates/footer");
  }

  public function update() {
    $produk_id            = $this->input->post("produk_id");
    $produk_nama          = $this->input->post("produk_nama");
    $produk_type          = $this->input->post("produk_type");
    $produk_desc          = $this->input->post("produk_desc");
    $produk_merk          = $this->input->post("produk_merk");
    $produk_harga         = $this->input->post("produk_harga");
    $produk_stok          = $this->input->post("produk_stok");

    $data = [
      "produk_nama"=>$produk_nama, 
      "produk_type"=>$produk_type, 
      "produk_desc"=>$produk_desc, 
      "produk_merk"=>$produk_merk, 
      "produk_harga"=>$produk_harga, 
      "produk_stok"=>$produk_stok
    ];

    $where = ["produk_id"=>$produk_id];

    $this->Produk_model->update_data($where, $data, "tb_produk");
    redirect("Admin");
  }

  public function hapus($id) {
    $where = ["produk_id"=>$id];

    if(TRUE) {
      $this->Produk_model->hapus_data($where, "tb_produk");
    } else {
      return FALSE;
    }
    redirect("Admin");
  }
}