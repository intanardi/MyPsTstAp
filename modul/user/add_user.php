  <?php
    include '../core/connection.php';
    include '../core/class.php';
    $db   = new database();
    $user = new user();
    ?>
      <p>ADD DATA</p>
      <form action="user/process.php?aksi=tambah" method="post" class="form-data">
        <div class="input-form">
          <label class="labeling">Username</label>
          <input type="text" name="username" class="text-form">
        </div>
        <div class="input-form">
          <label class="labeling">Password</label>
          <input type="password" name="password" class="text-form">
        </div>
        <div class="input-form">
          <label class="labeling">Level</label>
          <select name="level" class="text-form">
            <?php 
              foreach($user->getLevel() as $data){
                echo "<option value='".$data['level']."'>".$data['level']."</option>";
              }
            ?>
          </select>
        </div>
        <div class="submit-form">
          <button type="submit" class="btn-add wd-medium top-medium hg-medium">SAVE</button>
        </div>
      </form>