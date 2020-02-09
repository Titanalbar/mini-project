<div class="container-fluid">

  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>Nama Customer</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Total Belanja</th>
    </tr>

    <?php $no=1; foreach($customer as $c) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $c->customer_nama; ?></td>
        <td><?= $c->customer_email; ?></td>
        <td><?= $c->customer_alamat; ?></td>
        <td>Rp. <?= number_format($c->customer_total_belanja, 0, ",", "."); ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>