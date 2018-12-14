
<?php
include '../core/connection.php';
include '../core/class.php';
$db   = new database();
$judul = new judul();
?>

<p>DATA</p>
  <a class="btn btn-add wd-large hg-high top-medium" href="?menu=judul/add_judul">Insert</a>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th data-field="id">Judul</th>
        <th data-field="price">Waktu</th>
        <th data-field="price">Tool</th>
      </tr>
    </thead>
          <?php
            $no = 1;
            foreach($judul->tampil_judul() as $data){
          ?>
    <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['batas_waktu']; ?></td>
            <td>
              <a href="?menu=judul/edit_judul&amp;id=<?php echo $data['id_judul']; ?>&aksi=edit" class="btn btn-edit"><i class="fa fa-pencil"></i></a>
              <a href="judul/process.php?id=<?php echo $data['id_judul']; ?>&aksi=hapus" class="btn btn-delete sp-small" onclick="return confirm('Are you sure you want to delete this judul?');"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
        </tbody>
        <?php
          }
          ?>
      </table>