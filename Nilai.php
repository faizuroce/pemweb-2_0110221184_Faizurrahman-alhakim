<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Faizurrahman Alhakim</title>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-md-center">
            <div class="col-sm-6">
               <div class="card">
                  <center>
                     <h5 class="card-header bg-primary text-white">Praktek Pemrograman Web</h5>
                  </center>
                  <div class="card-body bg-light">
                     <form method="GET" action="grade.php">
                        <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-user"></i>
                                    </div>
                                 </div>
                                 <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                           <div class="col-8">
                              <select id="matkul" name="matkul" class="custom-select" required="required">
                                 <option value="ddp">Dasar-Dasar Pemrogram</option>
                                 <option value="pw">Pemrograman Web</option>
                                 <option value="so">Sistem Operasi</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-mortar-board"></i>
                                    </div>
                                 </div>
                                 <input id="uts" name="uts" placeholder="Nilai UTS" type="text" required="required" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-mortar-board"></i>
                                    </div>
                                 </div>
                                 <input id="uas" name="uas" placeholder="Nilai UAS" type="text" required="required" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="praktikum" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-mortar-board"></i>
                                    </div>
                                 </div>
                                 <input id="praktikum" name="praktikum" placeholder="Nilai Tugas Praktikum" type="text" required="required" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="offset-4 col-8">
                              <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                        </div>
                     </form>
                  </div>

                     <?php
                        if(isset($_GET['submit'])){
                            $nama = $_GET['nama'];
                            $nama_matkul = $_GET['matkul'];
                            $nilai_uts = $_GET['uts'];
                            $nilai_uas = $_GET['uas'];
                            $nilai_tugas = $_GET['praktikum'];
                            $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                            if ($nilai_akhir > 90) {
			    $grade = "A+";
			} elseif($nilai_akhir > 80){
			    $grade = "A";
			} elseif($nilai_akhir > 70){
			    $grade = "B+";
			} elseif($nilai_akhir > 60){
 			   $grade = "B";
			} elseif($nilai_akhir > 50){
			    $grade = "C+";
			} elseif($nilai_akhir > 40){
			    $grade = "C";
			} elseif($nilai_akhir > 30){
			    $grade = "D";
			} elseif($nilai_akhir > 20){
			    $grade = "E";
			} else {
			    $grade = "F";
			}                        
                            switch($matkul){
                                case "basis_data": $nama_matkul = "Basis Data"; break;
                                case "php": $nama_matkul = "PHP"; break;
                                case "ddp": $nama_matkul = "Dasar Dasar Pemerograman"; break;
                                default: "";
                            }
                        
                        }?>
                     <?php if(isset($_GET['submit'])){?>
                    <div class="m-3 alert-success p-3">
                     <p>Nama Lengkap : <?= $nama?> </p>
                     <p>Mata Kuliah : <?= $nama_matkul?></p>
                     <p>Nilai UTS : <?= $nilai_uts?></p>
                     <p>Nilai UAS : <?= $nilai_uas?></p>
                     <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p>
                     <p>Nilai Akhir : <?= $nilai_akhir?></p>
                     <p>Grade : <?= $grade?></p>
                   </div>
                     <?php }else{
                        echo '<center><div class="alert bg-primary text-white rounded"  role="alert"> Isi form untuk menampilkan</div></center>';
                        } ?>

                  <div class="text-center card-footer text-muted">
                     <a class="text-danger" href="https://faizur.me/">Faizurrahman
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
