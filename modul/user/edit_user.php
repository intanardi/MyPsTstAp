
	  <?php
	  	include '../core/connection.php';
		include '../core/class.php';
		$db   = new database();
		$user = new user();
		foreach($user->edit($_GET['id']) as $d){
	  ?>
      <p>EDIT DATA</p>
      <form action="user/process.php?aksi=update" method="post" class="form-data">
        <div class="input-form">
          <label class="labeling">Username</label>
          <input type="text" name="username" class="text-form" value="<?php echo $d['username']?>">
          <input type="hidden" name="id" class="text-form" value="<?php echo $d['user_id']?>">
        </div>
        <div class="input-form">
          <label class="labeling">Level</label>
          <select name="level" class="text-form">
            <?php
              $level = $user->getLevel();
              foreach($level as $datalevel){
              	if ($d['level']==$datalevel['level']) {
                	$cek ="selected";
            	} else {
            		$cek = "";
            	}
           		 echo "<option value='".$datalevel['level']."' $cek>".$datalevel['level']."</option>";
              }
            ?>
          </select>
        </div>
        <div class="submit-form">
          <button type="submit" class="btn-add wd-medium top-medium hg-medium">SAVE</button>
        </div>
      </form>
      <?php } ?>
