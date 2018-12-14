<?php
	  include '../core/connection.php';
		include '../core/class.php';
		$db   = new database();
		$judul = new judul();

		foreach($judul->edit($_GET['id']) as $d){
    $waktu       = $d['batas_waktu'];
    $arr_waktu = explode (":",$waktu);
	  ?>
      <p>EDIT DATA</p>
      <form action="judul/process.php?aksi=update" method="post" class="form-data">
        <div class="input-form">
          <label class="labeling">Judul</label>
          <input type="text" name="judul" class="text-form" value="<?php echo $d['judul']?>">
          <input type="hidden" name="id" class="text-form" value="<?php echo $d['id_judul']?>">
        </div>
        <div class="input-form">
          <label class="labeling">Waktu</label>
          <div class="form-number">
              <input type="number" name="waktu1" class="text-form-number" value="<?php echo $arr_waktu[0]?>"><div class="double-periode">:</div>
                <input type="number" name="waktu2" class="text-form-number" value="<?php echo $arr_waktu[1]?>"><div class="double-periode">:</div>
              <input type="number" name="waktu3" class="text-form-number" value="<?php echo $arr_waktu[2]?>">
            </div>
        </div>
        <div class="submit-form">
          <button type="submit" class="btn-add wd-medium top-medium hg-medium">SAVE</button>
        </div>
      </form>
      <?php } ?>