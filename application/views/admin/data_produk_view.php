<div class="container-fluid">
  <button class="btn btn-primary btn-sm mb-3"  data-toggle="modal" data-target="#tambah_produk">
    <i class="fas fa-plus fa-sm"></i> Tambah Produk
  </button>

  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>Nama Produk</th>
      <th>Type</th>
      <th>Deskripsi</th>
      <th>Merk</th>
      <th>Harga</th>
      <th>Stok</th>
      <th colspan=3>Aksi</th>
    </tr>

    <?php $no=1; foreach($produk as $p) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $p->produk_nama; ?></td>
        <td><?= $p->produk_type; ?></td>
        <td><?= $p->produk_desc; ?></td>
        <td><?= $p->produk_merk; ?></td>
        <td><?= $p->produk_harga; ?></td>
        <td><?= $p->produk_stok; ?></td>
        <td><?= anchor("admin/edit/".$p->produk_id, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        <td> 
          <a 
            onclick="return confirm('yakin?')" 
            href="<?= base_url("admin/hapus/").$p->produk_id; ?>"
            class="btn btn-danger btn-sm"
          >
            <i class="fa fa-trash"></i>
          </a> 
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="<?= base_url(); ?>admin/tambah_aksi" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="produk_nama" class="form-control">
          </div>

          <div class="form-group">
            <label>Type</label>
            <select name="produk_type" class="form-control">
              <option value="terbaik">Terbaik</option>
              <option value="bukan_terbaik">Bukan Terbaik</option>
            </select>
          </div>

          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="produk_desc" class="form-control">
          </div>

          <div class="form-group">
            <label>Merk</label>
            <select name="produk_merk" class="form-control">
              <option value="Acer">Acer</option>
              <option value="Asus">Asus</option>
              <option value="HP">HP</option>
              <option value="MacBook">MacBook</option>
            </select>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="produk_harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="produk_stok" class="form-control">
          </div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="produk_gambar" class="form-control">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>

        </form>
        <!-- end form -->
      </div>

    </div>
  </div>
</div>