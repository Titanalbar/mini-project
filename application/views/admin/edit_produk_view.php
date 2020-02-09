<div class="container-fluid">
  <h3><i class="fas fa-edit"></i> Edit Data Produk</h3>

  <?php foreach($produk as $p) : ?>
    <form action="<?= base_url(); ?>admin/update" method="post">
    <input type="hidden" name="produk_id" value="<?= $p->produk_id; ?>">
      <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="produk_nama" class="form-control" value="<?= $p->produk_nama; ?>">
      </div>

      <div class="form-group">
        <label>Type</label>
        <select name="produk_type" class="form-control">
          <option <?php echo ($p->produk_type == 'terbaik') ? 'selected' : ""; ?>>Terbaik</option>
          <option <?php echo ($p->produk_type == 'bukan terbaik') ? 'selected' : ""; ?>>Bukan Terbaik</option>
        </select>
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" name="produk_desc" class="form-control" value="<?= $p->produk_desc; ?>">
      </div>

      <div class="form-group">
        <label>Merk</label>
        <select name="produk_merk" class="form-control">
          <option <?php echo ($p->produk_merk == 'Acer') ? 'selected' : ""; ?>>Acer</option>
          <option <?php echo ($p->produk_merk == 'Asus') ? 'selected' : ""; ?>>Asus</option>
          <option <?php echo ($p->produk_merk == 'HP') ? 'selected' : ""; ?>>HP</option>
          <option <?php echo ($p->produk_merk == 'MacBook') ? 'selected' : ""; ?>>MacBook</option>
        </select>
      </div>

      <div class="form-group">
        <label>Harga</label>
        <input type="text" name="produk_harga" class="form-control" value="<?= $p->produk_harga; ?>">
      </div>

      <div class="form-group">
        <label>Stok</label>
        <input type="text" name="produk_stok" class="form-control" value="<?= $p->produk_stok; ?>">
      </div>

      <button type="submit" name="simpan" class="btn btn-primary btn-sm my-3">Simpan</button>
    </form>
  <?php endforeach; ?>
</div>