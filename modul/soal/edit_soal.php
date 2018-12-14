<?php
include '../core/connection.php';
include '../core/class.php';
$db   = new database();
$soal = new soal();

foreach($soal->edit($_GET['id']) as $d){
	$soal_value = $d['soal'];
?>
	<p>EDIT DATA</p>
			<div class="form-data input-form">
				<label class="labeling">Judul</label>
					<select name="level" class="text-form" id="soal-ident">
						<?php
							$judul = $soal->getJudul();
							foreach($judul as $datajudul){
								if ($d['id_judul']==$datajudul['id_judul']) {
									$cek ="selected";
							} else {
								$cek = "";
							}
							 echo "<option value='".$datajudul['id_judul']."' $cek>".$datajudul['judul']."</option>";
							}
						?>
					</select>
		</div>
		<form action="soal/process.php?aksi=update_gambar" method="post" enctype="multipart/form-data" id="input-soal-gambar">
				<div class="input-form">
					<input type="hidden" name="id" value="<?php echo $d['id_soal']?>">
					<label class="labeling">Soal</label>
					<textarea name="soal" rows="8" cols="80" class="text-form"><?php echo htmlspecialchars($soal_value); ?></textarea>
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 1</label>
					<input type="file" class="text-form" id="image_typed_1" name="edit_upload_1">
					<input type="hidden" name="pilihan1" value="<?php echo $d['pilihan_1']?>" id="image_type_inputed1">
					<img src="images/<?php echo $d['pilihan_1']?>" alt='old_image' class="img-thumbnail">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 2</label>
					<input type="file" class="text-form" id="image_typed_2" name="edit_upload_2">
					<input type="hidden" name="pilihan2" value="<?php echo $d['pilihan_2']?>" id="image_type_inputed2">
					<img src="images/<?php echo $d['pilihan_2']?>" alt='old_image' class="img-thumbnail">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 3</label>
					<input type="file" class="text-form" id="image_typed_3" name="edit_upload_3">
					<input type="hidden" name="pilihan3" value="<?php echo $d['pilihan_3']?>" id="image_type_inputed3">
					<img src="images/<?php echo $d['pilihan_3']?>" alt='old_image' class="img-thumbnail">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 4</label>
					<input type="file" class="text-form" id="image_typed_4" name="edit_upload_4">
					<input type="hidden" name="pilihan4" value="<?php echo $d['pilihan_4']?>" id="image_type_inputed4">
					<img src="images/<?php echo $d['pilihan_4']?>" alt='old_image' class="img-thumbnail">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 5</label>
					<input type="file" class="text-form" id="image_typed_5" name="edit_upload_5">
					<input type="hidden" name="pilihan5" value="<?php echo $d['pilihan_5']?>" id="image_type_inputed5">
					<img src="images/<?php echo $d['pilihan_5']?>" alt='old_image' class="img-thumbnail">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 6</label>
					<input type="file" class="text-form" id="image_typed_6" name="edit_upload_6" onchange="readURL(this);">
					<input type="hidden" name="pilihan6" value="<?php echo $d['pilihan_6']?>" id="image_type_inputed6">
					<img src="images/<?php echo $d['pilihan_6']?>" alt='old_image' class="img-thumbnail" id="imagepreview6" src="http://placehold.it/180">
				</div>
				<div class="input-form">
					<input type="hidden" id="id_judul_gambar" value="<?php echo $d['id_judul']?>" name="id_judul">
				</div>
				<div class="input-form">
					<label class="labeling">Jawaban</label>
					<input type="file" id="image_jawaban" class="text-form" name="edited_jawaban">
					<input type="hidden" name="jawaban" value="<?php echo $d['jawaban']?>" id="image_type_jawaban">
					<img src="images/<?php echo $d['jawaban']?>" alt='old_image' class="img-thumbnail">
				</div>
				<div class="submit-form">
					<button type="submit" class="btn-add wd-medium top-medium hg-medium" name="btnSave">SAVE</button>
				</div>
		</form>

		<form action="soal/process.php?aksi=update_text" method="post" enctype="multipart/form-data" id="input-soal-text">
				<div class="input-form">
					<input type="hidden" name="id" value="<?php echo $d['id_soal']?>">
					<label class="labeling">Soal</label>
					<textarea name="soal" rows="8" cols="80" class="text-form"><?php echo htmlspecialchars($soal_value); ?></textarea>
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 1</label>
					<input type="text" name="pilihan1" class="text-form" value="<?php echo $d['pilihan_1']?>">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 2</label>
					<input type="text" name="pilihan2" class="text-form" value="<?php echo $d['pilihan_2']?>">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 3</label>
					<input type="text" name="pilihan3" class="text-form" value="<?php echo $d['pilihan_3']?>">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 4</label>
					<input type="text" name="pilihan4" class="text-form" value="<?php echo $d['pilihan_4']?>">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 5</label>
					<input type="text" name="pilihan5" class="text-form" value="<?php echo $d['pilihan_5']?>">
				</div>
				<div class="input-form">
					<label class="labeling">Pilihan 6</label>
					<input type="text" name="pilihan6" class="text-form" value="<?php echo $d['pilihan_6']?>">
				</div>
				<div class="input-form">
					<input type="hidden" id="id_judul_text" value="<?php echo $d['id_judul']?>" name="id_judul">
				</div>
				<div class="input-form">
					<label class="labeling">Jawaban</label>
					<input type="text" name="jawaban" class="text-form" value="<?php echo $d['jawaban']?>">
				</div>
				<div class="submit-form">
					<button type="submit" class="btn-add wd-medium top-medium hg-medium" name="btnSave">SAVE</button>
				</div>
		</form>
      <?php } ?>

		<script>
		    var openSoal 				  = document.getElementById('soal-ident');
		    var getJudulSoal      = document.getElementById('soal-ident').value;
				var getOpenForm				= <?php echo $d['id_judul'];?>;
        var openSoalGambar    = document.getElementById('input-soal-gambar');
        var openSoalBiasa     = document.getElementById('input-soal-text');

				var imageChange1			= document.getElementById('image_typed_1');
				var imageChange2			= document.getElementById('image_typed_2');
				var imageChange3			= document.getElementById('image_typed_3');
				var imageChange4			= document.getElementById('image_typed_4');
				var imageChange5			= document.getElementById('image_typed_5');
				var imageChange6			= document.getElementById('image_typed_6');
				var jawabanChange6		= document.getElementById('image_jawaban');


				 imageChange1.addEventListener('change', ChangeImage1);
				 imageChange2.addEventListener('change', ChangeImage2);
				 imageChange3.addEventListener('change', ChangeImage3);
				 imageChange4.addEventListener('change', ChangeImage4);
				 imageChange5.addEventListener('change', ChangeImage5);
				 imageChange6.addEventListener('change', ChangeImage6);
				 jawabanChange6.addEventListener('change', changeJawaban);

				function ChangeImage1(){
					var image1					= document.getElementById('image_typed_1').value;
					var typing_img1			= image1.replace("C:\\fakepath\\","");
					document.getElementById("image_type_inputed1").value = typing_img1;
				}

				function ChangeImage2(){
					var image2					= document.getElementById('image_typed_2').value;
					var typing_img2			= image2.replace("C:\\fakepath\\","");
					document.getElementById("image_type_inputed2").value = typing_img2;
				}

				function ChangeImage3(){
					var image3					= document.getElementById('image_typed_3').value;
					var typing_img3			= image3.replace("C:\\fakepath\\","");
					document.getElementById("image_type_inputed3").value = typing_img3;
				}

				function ChangeImage4(){
					var image4					= document.getElementById('image_typed_4').value;
					var typing_img4			= image4.replace("C:\\fakepath\\","");
					document.getElementById("image_type_inputed4").value = typing_img4;
				}

				function ChangeImage5(){
					var image5					= document.getElementById('image_typed_5').value;
					var typing_img5			= image5.replace("C:\\fakepath\\","");
					document.getElementById("image_type_inputed5").value = typing_img5;
				}

				function ChangeImage6(){
					var image6					= document.getElementById('image_typed_6').value;
					var typing_img6			= image6.replace("C:\\fakepath\\","");
					document.getElementById("image_type_inputed6").value = typing_img6;
				}

				function changeJawaban(){
					var jawaban					= document.getElementById('image_jawaban').value;
					var typing_jwb			= jawaban.replace("C:\\fakepath\\","");
					document.getElementById("image_type_jawaban").value = typing_jwb;
				}


				if(getJudulSoal == 1 && getOpenForm == 1){
						openSoalBiasa.style.display  = 'none';
						openSoalGambar.style.display = 'block';
				}
				else {
					openSoalBiasa.style.display = 'block';
					openSoalGambar.style.display  = 'none';
				}

		    openSoal.addEventListener('change', runEvent);

		    function runEvent(){
						var getJudulSoal      = document.getElementById('soal-ident').value;
						if(getJudulSoal == 1){
		            openSoalBiasa.style.display  = 'none';
		            openSoalGambar.style.display = 'block';
		            document.getElementById("id_judul_gambar").value = getJudulSoal;
		        }
		        else {
		          openSoalBiasa.style.display = 'block';
		          openSoalGambar.style.display  = 'none';
		          document.getElementById("id_judul_text").value = getJudulSoal;
		        }
		    }

				function readURL(input) {
					 if (input.files && input.files[0]) {
							 var reader = new FileReader();

							 reader.onload = function (e) {
									 document.getElementById('imagepreview6').src= e.target.result;
							 };

							 reader.readAsDataURL(input.files[0]);
					 }
			 }
		</script>
