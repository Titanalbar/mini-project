<div class="container-fluid">
  <h4><strong>Produk Terbaik</strong></h4>


  <div class="row mt-3">
    <?php foreach($produk as $p) : ?>

      <div class="card ml-2 mb-3" style="width: 16rem;">
        <img src="<?= base_url("assets/foto/").$p->produk_gambar; ?>" class="card-img-top" alt="image">
        <div class="card-body">
          <h5 class="card-title mb-1"><?= $p->produk_nama ?></h5>
          <small><?= $p->produk_desc; ?></small> <br />
          <span class="badge badge-warning text-dark mb-3 float-right mt-2">Rp. <?= number_format($p->produk_harga, 0, ",", "."); ?></span>
          <?= anchor("dashboard/tambah_keranjang/".$p->produk_id, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>'); ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

