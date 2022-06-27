<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
   <h3>Laporan Transaksi Warung</h3>
   <table>
      <tr>
         <td>Pada Tanggal</td>
         <td> : </td>
         <td><?php foreach ($tanggal as $t) {
                  echo $t->tanggal;
               } ?></td>
      </tr>
   </table>
   <br>

   <table>
      <thead>
         <tr>
            <td> No </td>
            <td> Nama Barang </td>
            <td> Harga </td>
            <td> Qty </td>
            <td> Total </td>
            <td> Total Semua</td>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         foreach ($print as $p) {
         ?>
            <tr class="bg-appside">
               <td><?= $no++ ?></td>
               <td><?= $p->nama_barang ?></td>
               <td><?= $p->harga_jual ?></td>
               <td><?= $p->qty_belanja ?></td>
               <td><?= $p->total ?></td>
               <td><?= $p->total_belanja ?></td>
            </tr>
         <?php } ?>

      </tbody>
   </table>
   <script type="text/javascript">
      window.print();
   </script>

</body>

</html>