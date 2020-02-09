<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="btn btn-success">
        <?php 
        $grand_total = 0;

        if($keranjang = $this->cart->contents()) {
          foreach($keranjang as $item) : 
            $grand_total += $item["subtotal"];
          endforeach;

          echo "Total belanja Anda : Rp. ".number_format($grand_total, 0, ",", ".");
        ?>
      </div>

      <h3 class="my-3">Input Halaman Pengiriman Dan Pembayaran</h3>

      <form action="<?= base_url(); ?>dashboard/proses_pesanan" method="post">
        <input type="hidden" name="customer_total_belanja" value="<?= $grand_total; ?>">

        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="customer_nama" class="form-control">
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <textarea name="customer_alamat" cols=5 rows=4 class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="customer_email" class="form-control">
        </div>
        
        <div class="form-group">
          <label>Jasa Pengiriman</label>
          <select name="jasa_pengiriman" class="form-control">
            <option value="TIKI">TIKI</option>
            <option value="JNE">JNE</option>
            <option value="GoJek">GoJek</option>
            <option value="Grab">Grab</option>
            <option value="JT">JT</option>
          </select>
        </div>

        <div class="form-group">
          <label>Bank</label>
          <select name="bank" class="form-control">
            <option value="BCA">BCA - 112********</option>
            <option value="BNI">BNI - 119********</option>
            <option value="BRI">BRI - 122********</option>
            <option value="Mandiri">Mandiri - 110********</option>
          </select>
        </div>

        <button type="submit" name="simpan" class="btn btn-primary btn-sm my-2">Pesan</button>

      </form>

      <?php 
      } else {
        echo "Keranjang belanja anda masih kosong..!";
      }
      ?>

    </div>

  </div>
</div>