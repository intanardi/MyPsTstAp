
<?php
include '../core/connection.php';
include '../core/class.php';
$db   = new database();
$soal = new soal();
?>

<p>DATA</p>
  <a class="btn btn-add wd-large hg-high top-medium" href="?menu=soal/add_soal">Insert</a>
<table>
<thead>
  <tr>
    <th>No</th>
    <th width="50%">Soal</th>
    <th width="30%">Jawaban</th>
    <th width="20%">Tool</th>
  </tr>
</thead>
  <?php
    $no = 1;
    foreach($soal->tampil_data() as $data){
  ?>
<tbody>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['soal']; ?></td>
    <td><?php echo $data['jawaban']; ?></td>
    <td>
      <?php echo "<a href=?menu=soal/edit_soal&amp;id=$data[id_soal]&aksi=edit_gambar class='btn btn-edit'><i class='fa fa-pencil'></i></a>";?>
      <a href="soal/process.php?id=<?php echo $data['id_soal']; ?>&aksi=hapus" class="btn btn-delete sp-small" onclick="return confirm('Are you sure you want to delete this soal?');"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
</tbody>
<?php
  }
  ?>
</table>