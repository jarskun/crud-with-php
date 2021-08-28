<?php
include "config.php";
include "header.php";
?>

<p>
     <a href="buat.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</a> &nbsp; &nbsp;
     <a href="cetak.php" class="btn btn-success btn-md" target="_blank"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Cetak Data</a>
     <br />
</p>
<table id="ghatable" class="display table table-bordered table-striped table-responsive" cellspacing="0" width="100%">
     <thead>
          <tr>
               <th>No</th>
               <th>Nama pelanggan</th>
               <th>alamat pelanggan</th>
               <th>kerusakan</th>
               <th>harga</th>
               <th>tanggal masuk</th>
               <th>tanggal keluar</th>
               <th>Aksi</th>
          </tr>
     </thead>
     <tbody>
          <?php
          $res = $mysqli->query("SELECT * FROM personal order by name");
          $no = 1;
          while ($row = $res->fetch_assoc()) :
               ?>
               <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['kerusakan'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['masuk'] ?></td>
                    <td><?= $row['keluar'] ?></td>
                    <td>
                         <a href="update.php?u=<?= $row['id_personal'] ?>" class="btn btn-success"> Edit</a> &nbsp;&nbsp;
                         <a onclick="return confirm('Yakin ingin menghapus ? ')" href="delete.php?d=<?= $row['id_personal'] ?>" class="btn btn-danger"> Delete</a>
                         <a href="update.php?id=<?php echo $row['id_personal']; ?>"><button>Edit</button></a>

                    </td>
               </tr>

          <?php
               $no++;
          endwhile;
          ?>

     </tbody>
</table>

<?php
include "footer.php";
?>