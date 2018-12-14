  <?php
    include '../core/connection.php';
    include '../core/class.php';
    $db   = new database();
    $soal = new soal();
    ?>
      <p>ADD DATA</p>
        <div class="form-data input-form">
          <label class="labeling">Judul</label>
            <select name="id_judul" class="text-form" id="soal-ident" onchange="javascript:valueselect()">
              <option value="0"> - </option>
              <?php
                foreach($soal->getJudul() as $data){
                  echo "<option value='".$data['id_judul']."'>".$data['judul']."</option>";
                }
              ?>
            </select>
        </div>
        <form action="soal/process.php?aksi=tambah_gambar" method="post" class="soal-text" enctype="multipart/form-data" id="input-soal-gambar">
            <input type="hidden" id="id_judul_inserte" value="" name="id_judul">
            <div class="input-form">
              <label class="labeling">Soal</label>
              <input type="text" name="soal" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Pilihan 1</label>
              <input type="file" name="pilihan1" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Pilihan 2</label>
              <input type="file" name="pilihan2" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Pilihan 3</label>
              <input type="file" name="pilihan3" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Pilihan 4</label>
              <input type="file" name="pilihan4" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Pilihan 5</label>
              <input type="file" name="pilihan5" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Pilihan 6</label>
              <input type="file" name="pilihan6" class="text-form">
            </div>
            <div class="input-form">
              <label class="labeling">Jawaban</label>
              <input type="file" name="jawaban" class="text-form">
            </div>
            <div class="submit-form">
              <button type="submit" class="btn-add wd-medium top-medium hg-medium" name="btnSave">SAVE</button>
            </div>
        </form>

        <form action="soal/process.php?aksi=tambah_text" method="post" enctype="multipart/form-data" class="soal-text" id="input-soal-text">
          <input type="hidden" id="id_judul_inserted" value="" name="id_judul">
              <div class="input-form">
                <label class="labeling">Soal</label>
                <input type="text" name="soal" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Pilihan 1</label>
                <input type="text" name="pilihan1" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Pilihan 2</label>
                <input type="text" name="pilihan2" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Pilihan 3</label>
                <input type="text" name="pilihan3" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Pilihan 4</label>
                <input type="text" name="pilihan4" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Pilihan 5</label>
                <input type="text" name="pilihan5" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Pilihan 6</label>
                <input type="text" name="pilihan6" class="text-form">
              </div>
              <div class="input-form">
                <label class="labeling">Jawaban</label>
                <input type="text" name="jawaban" class="text-form">
              </div>
              <div class="submit-form">
                <button type="submit" class="btn-add wd-medium top-medium hg-medium" name="btnSave">SAVE</button>
              </div>
        </form>

<script>

    var openSoal = document.getElementById('soal-ident');
    var getJudulSoal      = document.getElementById('soal-ident').value;

    openSoal.addEventListener('change', runEvent);

    function runEvent(){
        var getJudulSoal      = document.getElementById('soal-ident').value;
        var openSoalGambar    = document.getElementById('input-soal-gambar');
        var openSoalBiasa     = document.getElementById('input-soal-text');

        if(getJudulSoal == 0){
            openSoalGambar.style.display = 'none';
            openSoalBiasa.style.display  = 'none';
        }
        else if(getJudulSoal == 1){
            openSoalBiasa.style.display  = 'none';
            openSoalGambar.style.display = 'block';
            document.getElementById("id_judul_inserte").value = getJudulSoal;
        }
        else {
          openSoalBiasa.style.display = 'block';
            openSoalGambar.style.display  = 'none';
            document.getElementById("id_judul_inserted").value = getJudulSoal;
        }
    }

</script>
