<?php
class user {
      function tampil_data(){
          $data = mysql_query("select * from user");
          while($d = mysql_fetch_array($data)){
              $hasil[] = $d;
          }
          return $hasil;

      }

      function input($username,$password,$level){
          mysql_query("insert into user values('','$username','$password','$level')");

      }

      function delete($id){
          mysql_query("delete from user where user_id='$id'");
      }

      function edit($id){
          $data = mysql_query("select * from user where user_id='$id'");
          while($d = mysql_fetch_array($data)){
              $hasil[] = $d;
          }
          return $hasil;
      }

      function getLevel(){
        $data = mysql_query("select level from level");
          while($d = mysql_fetch_array($data)){
              $hasil[] = $d;
          }
          return $hasil;
      }

      function update($id,$username,$level){
          mysql_query("update user set username='$username', level='$level' where user_id='$id'");
      }
      function login($username,$password){
          $check = mysql_query("select * from user where username='$username'");
          if($check['username'] < 1){
            echo "username tidak ada";
          }else{
            echo "username ada";
          }
      }
}
class judul{

      function tampil_judul(){
        $data = mysql_query("select * from judul");
          while($d = mysql_fetch_array($data)){
              $hasil[] = $d;
          }
          return $hasil;
      }
      function input($judul,$batas_waktu){
          mysql_query("insert into judul values('','$judul','$batas_waktu')");
      }
      function edit($id){
          $data = mysql_query("select * from judul where id_judul='$id'");
          while($d = mysql_fetch_array($data)){
              $hasil[] = $d;
          }
          return $hasil;
      }
      function update($id,$judul,$batas_waktu){
          mysql_query("update judul set judul='$judul', batas_waktu='$batas_waktu' where id_judul='$id'");
      }
      function delete($id){
        mysql_query("delete from judul where id_judul='$id'");
      }
}
class soal{

    function tampil_data(){
      $data = mysql_query("select * from soal");
      while($d=mysql_fetch_array($data)){
        $hasil[] = $d;
      }
      return $hasil;
    }

    function input(){
        $jawaban         = $_FILES["jawaban"]["name"];
        if($_FILES["pilihan1"]){
                $folder         = "../images/";
                $tmpname        = $_FILES["pilihan1"]["tmp_name"];
                $size           = ($_FILES["pilihan1"]["size"]/5242880)."MB<br>";
                $type           = $_FILES["pilihan1"]["type"];
                $image1         = $_FILES["pilihan1"]["name"];
                $path           = $folder.$image1;
                move_uploaded_file($_FILES["pilihan1"]["tmp_name"], $path);
        }
        if($_FILES["pilihan2"]){
                $folder         = "../images/";
                $tmpname        = $_FILES["pilihan2"]["tmp_name"];
                $size           = ($_FILES["pilihan2"]["size"]/5242880)."MB<br>";
                $type           = $_FILES["pilihan2"]["type"];
                $image2         = $_FILES["pilihan2"]["name"];
                $path           = $folder.$image2;
                move_uploaded_file($_FILES["pilihan2"]["tmp_name"], $path);
        }
        if($_FILES["pilihan3"]){
                $folder         = "../images/";
                $tmpname        = $_FILES["pilihan3"]["tmp_name"];
                $size           = ($_FILES["pilihan3"]["size"]/5242880)."MB<br>";
                $type           = $_FILES["pilihan3"]["type"];
                $image3         = $_FILES["pilihan3"]["name"];
                $path           = $folder.$image3;
                move_uploaded_file($_FILES["pilihan3"]["tmp_name"], $path);
        }
        if($_FILES["pilihan4"]){
                $folder         = "../images/";
                $tmpname        = $_FILES["pilihan4"]["tmp_name"];
                $size           = ($_FILES["pilihan4"]["size"]/5242880)."MB<br>";
                $type           = $_FILES["pilihan4"]["type"];
                $image4         = $_FILES["pilihan4"]["name"];
                $path           = $folder.$image4;
                move_uploaded_file($_FILES["pilihan4"]["tmp_name"], $path);
        }
          if($_FILES["pilihan5"]){
                  $folder         = "../images/";
                  $tmpname        = $_FILES["pilihan5"]["tmp_name"];
                  $size           = ($_FILES["pilihan5"]["size"]/5242880)."MB<br>";
                  $type           = $_FILES["pilihan5"]["type"];
                  $image5         = $_FILES["pilihan5"]["name"];
                  $path           = $folder.$image5;
                  move_uploaded_file($_FILES["pilihan5"]["tmp_name"], $path);
          }
          if($_FILES["pilihan6"]){
                  $folder         = "../images/";
                  $tmpname        = $_FILES["pilihan6"]["tmp_name"];
                  $size           = ($_FILES["pilihan6"]["size"]/5242880)."MB<br>";
                  $type           = $_FILES["pilihan6"]["type"];
                  $image6         = $_FILES["pilihan6"]["name"];
                  $path           = $folder.$image6;
                  move_uploaded_file($_FILES["pilihan6"]["tmp_name"], $path);
          }
        mysql_query("insert into soal values('','$this->soal','$image1','$image2','$image3','$image4','$image5','$image6','$this->id_judul','$jawaban')");
    }

    function input_text($soal,$pilihan1,$pilihan2,$pilihan3,$pilihan4,$pilihan5,$pilihan6,$id_judul,$jawaban){
       mysql_query("insert into soal values('','$soal','$pilihan1','$pilihan2','$pilihan3','$pilihan4','$pilihan5','$pilihan6','$id_judul','$jawaban')");
    }

    function edit($id){
      //echo "select * from soal where id_soal='$id'";
      $soal = mysql_query("select * from soal where id_soal='$id'");
      while($d_array=mysql_fetch_array($soal)){
        $hasil[] = $d_array;
      }
      return $hasil;
    }

    function update_gambar($id,$soal,$pilihan1,$pilihan2,$pilihan3,$pilihan4,$pilihan5,$pilihan6,$id_judul,$jawaban){
      $datass          = mysql_query("select * from soal where id_soal='$id'");
      $rowss           = mysql_fetch_array($datass);
      $images1         = $rowss['pilihan_1'];
      $images2         = $rowss['pilihan_2'];
      $images3         = $rowss['pilihan_3'];
      $images4         = $rowss['pilihan_4'];
      $images5         = $rowss['pilihan_5'];
      $images6         = $rowss['pilihan_6'];
      //$_FILES["image"]["tmp_name"]
      if($_FILES["edit_upload_1"]){
          $folder         = "../images/";
          $tmpname        = $_FILES["edit_upload_1"]["tmp_name"];
          $size           = ($_FILES["edit_upload_1"]["size"]/5242880)."MB<br>";
          $type           = $_FILES["edit_upload_1"]["type"];
          $image1         = $_FILES["edit_upload_1"]["name"];
          $path           = $folder.$image1;
            if(empty($tmpname)){

            }
            else{
              $deletepatth    = $folder.$images1;
              unlink($deletepatth);
              move_uploaded_file($_FILES["edit_upload_1"]["tmp_name"], $path);
            }

      }
      if($_FILES["edit_upload_2"]){
              $folder         = "../images/";
              $tmpname        = $_FILES["edit_upload_2"]["tmp_name"];
              $size           = ($_FILES["edit_upload_2"]["size"]/5242880)."MB<br>";
              $type           = $_FILES["edit_upload_2"]["type"];
              $image2         = $_FILES["edit_upload_2"]["name"];
              $path           = $folder.$image2;
              if(empty($tmpname)){

              }
              else{
                $deletepatth    = $folder.$images2;
                unlink($deletepatth);
                move_uploaded_file($_FILES["edit_upload_2"]["tmp_name"], $path);
              }

      }
      if($_FILES["edit_upload_3"]){
              $folder         = "../images/";
              $tmpname        = $_FILES["edit_upload_3"]["tmp_name"];
              $size           = ($_FILES["edit_upload_3"]["size"]/5242880)."MB<br>";
              $type           = $_FILES["edit_upload_3"]["type"];
              $image3         = $_FILES["edit_upload_3"]["name"];
              $path           = $folder.$image3;
              if(empty($tmpname)){

              }
              else{
                $deletepatth    = $folder.$images3;
                unlink($deletepatth);
                move_uploaded_file($_FILES["edit_upload_3"]["tmp_name"], $path);
              }

      }
      if($_FILES["edit_upload_4"]){
              $folder         = "../images/";
              $tmpname        = $_FILES["edit_upload_4"]["tmp_name"];
              $size           = ($_FILES["edit_upload_4"]["size"]/5242880)."MB<br>";
              $type           = $_FILES["edit_upload_4"]["type"];
              $image4         = $_FILES["edit_upload_4"]["name"];
              $path           = $folder.$image4;
              if(empty($tmpname)){

              }
              else{
                $deletepatth    = $folder.$images4;
                unlink($deletepatth);
                move_uploaded_file($_FILES["edit_upload_4"]["tmp_name"], $path);
              }

      }
        if($_FILES["edit_upload_5"]){
                $folder         = "../images/";
                $tmpname        = $_FILES["edit_upload_5"]["tmp_name"];
                $size           = ($_FILES["edit_upload_5"]["size"]/5242880)."MB<br>";
                $type           = $_FILES["edit_upload_5"]["type"];
                $image5         = $_FILES["edit_upload_5"]["name"];
                $path           = $folder.$image5;
                if(empty($tmpname)){

                }
                else{
                  $deletepatth    = $folder.$images5;
                  unlink($deletepatth);
                  move_uploaded_file($_FILES["edit_upload_5"]["tmp_name"], $path);
                }

        }
        if($_FILES["edit_upload_6"]){
                $folder         = "../images/";
                $tmpname        = $_FILES["edit_upload_6"]["tmp_name"];
                $size           = ($_FILES["edit_upload_6"]["size"]/5242880)."MB<br>";
                $type           = $_FILES["edit_upload_6"]["type"];
                $image6         = $_FILES["edit_upload_6"]["name"];
                $path           = $folder.$image6;
                if(empty($tmpname)){

                }
                else{
                  $deletepatth    = $folder.$images6;
                  unlink($deletepatth);
                  move_uploaded_file($_FILES["edit_upload_6"]["tmp_name"], $path);
                }

        }
        mysql_query("update soal set soal='$this->soal', pilihan_1='$pilihan1',pilihan_2='$pilihan2',pilihan_3='$pilihan3',pilihan_4='$pilihan4',pilihan_5='$pilihan5',pilihan_6='$pilihan6', id_judul='$this->id_judul', jawaban='$jawaban' where id_soal='$id'");

        //echo $mysql_query;
    }

    function update_text($id,$soal,$pilihan1,$pilihan2,$pilihan3,$pilihan4,$pilihan5,$pilihan6,$id_judul,$jawaban){
        mysql_query ("update soal set soal='$soal', pilihan_1='$pilihan1',pilihan_2='$pilihan2',pilihan_3='$pilihan3',pilihan_4='$pilihan4',pilihan_5='$pilihan5',pilihan_6='$pilihan6', id_judul='$id_judul', jawaban='$jawaban' where id_soal='$id'");

    }

    function getJudul(){
      $data = mysql_query("select * from judul");
      while($d=mysql_fetch_array($data)){
        $hasil[] = $d;
      }
      return $hasil;
    }
    function delete($id){
      $datas = mysql_query("select * from soal where id_soal='$id'");
      $rows  = mysql_fetch_array($datas);
      $folder = '../images/';
      $image1 = $rows['pilihan_1'];
      $image2 = $rows['pilihan_2'];
      $image3 = $rows['pilihan_3'];
      $image4 = $rows['pilihan_4'];
      $image5 = $rows['pilihan_5'];
      $image6 = $rows['pilihan_6'];
      unlink($folder.$image1);
      unlink($folder.$image2);
      unlink($folder.$image3);
      unlink($folder.$image4);
      unlink($folder.$image5);
      unlink($folder.$image6);
      mysql_query("delete from soal where id_soal='$id'");

    }
}


?>
