<?php 

class Produk_model extends CI_Model {
  public function tampil_produk_terbaik($best) {
    return $this->db->get_where('tb_produk', ['produk_type' => $best]);
  }

  public function tampil_produk($merk) {
    return $this->db->get_where('tb_produk', ['produk_merk' => $merk]);
  }

  public function tampil_semua_produk() {
    return $this->db->get("tb_produk");
  }

  public function tampil_semua_customer() {
    return $this->db->get("tb_customer");
  }

  public function find($id) {
    $result = $this->db->where("produk_id", $id)->limit(1)->get("tb_produk");

    if($result->num_rows() > 0) {
      return $result->row();
    } else {
      return array();
    }
  }

  public function edit($where, $table) {
    return $this->db->get_where($table, $where);
  }

  public function tambah($data, $table) {
    $this->db->insert($table, $data);
  }

  public function update_data($where, $data, $table) {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapus_data($where, $table) {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function tambah_penjualan($data, $table) {
    $this->db->insert($table, $data);
  }
  
}