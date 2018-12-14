
<?php
include '../core/connection.php';
include '../core/class.php';
$db   = new database();
$user = new user();
?>

<center><h2>DATA USER</h2></center>
  <a class="btn btn-add wd-large hg-high top-medium" href="?menu=user/add_user">Insert</a>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th data-field="id">Username</th>
        <th data-field="price">Level</th>
        <th data-field="price">Tool</th>
      </tr>
    </thead>
          <?php
            $no = 1;
            foreach($user->tampil_data() as $data){
          ?>
    <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td>
              <!--<a href="process.php?id=<?php //echo $data['id']; ?>&aksi=hapus" class="btn btn-delete sp-small" onclick="MyFunction();return false;">Delete</a>-->

              <a href="?menu=user/edit_user&amp;id=<?php echo $data['user_id']; ?>&aksi=edit" class="btn btn-edit"><i class="fa fa-pencil"></i></a>
              <a href="user/process.php?id=<?php echo $data['user_id']; ?>&aksi=hapus" class="btn btn-delete sp-small" onclick="return confirm('Are you sure you want to delete this user?');"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
        </tbody>
        <?php
          }
          ?>
      </table>