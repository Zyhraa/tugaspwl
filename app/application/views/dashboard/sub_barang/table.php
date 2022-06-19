<div class="col-7 ml-5 bg-appcard rounded">

   <form action="<?= base_url() . 'auto/autobarang' ?>" method="post" class="col-md-12">
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <td> No </td>
               <td> Nama Barang </td>
               <td> Harga Beli </td>
               <td> Qty </td>
               <td> harga Jual </td>
               <td></td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach ($barang as $b) {
            ?>
               <tr>
                  <td>
                     <?= $no++; ?>
                     <input type="hidden" name="id[]" value="<?= $b->id_barang  ?>">
                  </td>
                  <td width="200px"><input type="text" name="nm[]" value="<?= $b->nama_barang ?>" class="form-control"></td>
                  <td><input type="number" name="hb[]" value="<?= $b->harga_beli ?>" class="form-control"></td>
                  <td><input type="number" name="qty[]" value="<?= $b->qty ?>" class="form-control"></td>
                  <td><input type="number" name="hl[]" value="<?= $b->harga_jual ?>" class="form-control"></td>
                  <td width="160px">
                     <a class="btn btn-outline-danger btn-sm" href="<?= base_url() . 'user/stokbarang/' . $b->id_barang ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                     <a class="btn btn-outline-warning btn-sm" href="<?= base_url() . 'user/barang_del_act/' . $b->id_barang ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
      <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
   </form>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->