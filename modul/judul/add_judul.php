  <?php
    include '../core/connection.php';
    include '../core/class.php';
    $db   = new database();
    $user = new user();
    ?>
      <p>ADD DATA</p>
      <form action="judul/process.php?aksi=tambah" method="post" class="form-data">
        <div class="input-form">
          <label class="labeling">judul</label>
          <input type="text" name="judul" class="text-form">
        </div>
        <div class="input-form">
          <label class="labeling">Waktu</label>
            <div class="form-number">
              <input type="number" name="waktu1" class="text-form-number" value="00"><div class="double-periode">:</div>
                <input type="number" name="waktu2" class="text-form-number" value="00"><div class="double-periode">:</div>
              <input type="number" name="waktu3" class="text-form-number" value="00">
            </div>
        </div>
        <div class="submit-form">
          <button type="submit" class="btn-add wd-medium top-medium hg-medium">SAVE</button>
        </div>
      </form>