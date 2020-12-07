<?php
  include "bd/conexion.php";
    $sql_adm = mysqli_query($conexion,"SELECT COUNT(*) as total_adm from usuario WHERE Id_rol=1");
    $result_adm = mysqli_fetch_array($sql_adm);
	  $total_adm = $result_adm['total_adm'];
	   
	  $sql_pro = mysqli_query($conexion,"SELECT COUNT(*) as total_pro from usuario WHERE Id_rol=2");
    $result_pro = mysqli_fetch_array($sql_pro);
	  $total_pro = $result_pro['total_pro'];
	   
	  $sql_vig = mysqli_query($conexion,"SELECT COUNT(*) as total_vig from usuario WHERE Id_rol=3");
    $result_vig = mysqli_fetch_array($sql_vig);
	  $total_vig = $result_vig['total_vig'];

	  $sql_alm = mysqli_query($conexion,"SELECT COUNT(*) as total_alm from usuario WHERE Id_rol=4");
    $result_alm = mysqli_fetch_array($sql_alm);
    $total_alm = $result_alm['total_alm'];
     
    $sql_r1 = mysqli_query($conexion,"SELECT COUNT(*) as total_re from reserva WHERE Codigo_programa = 1");
    $result_re = mysqli_fetch_array($sql_r1);
    $total_re = $result_re['total_re'];
     
    $sql_r2 = mysqli_query($conexion,"SELECT COUNT(*) as total_re2 from reserva WHERE Codigo_programa = 2");
    $result_re2 = mysqli_fetch_array($sql_r2);
    $total_re2 = $result_re2['total_re2'];
     
    $sql_r_a = mysqli_query($conexion,"SELECT COUNT(*) as total_r_a from reserva WHERE Id_aula = 1");
    $result_r_a = mysqli_fetch_array($sql_r_a);
    $total_r_a = $result_r_a['total_r_a'];
     
    $sql_r_a1 = mysqli_query($conexion,"SELECT COUNT(*) as total_r_a1 from reserva WHERE Id_aula = 2");
    $result_r_a1 = mysqli_fetch_array($sql_r_a1);
	  $total_r_a1 = $result_r_a1['total_r_a1'];  
?>
   <section class="section">    
		<div class="main-content">
    <div class="card"><br>
		<h1 class="font-30" style="text-align:center;color:black;"><?php echo "Bienvenido  {$sesion->Tipo_rol}";?></h1><br>
    </div>
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-12" >Administradores</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo $total_adm ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/admi.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-12">Profesores</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_pro ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/prof.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-12">Almacenistas</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_alm ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/alma.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-12">Vigilantes</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_vig ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/vigi.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card"><br>
          <h1 class="font-30" style="text-align:center;color:black;">Resrvas por Programas y Aulas</h1><br>
          </div>
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15" style="text-align:center;">Sala TICS</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_r_a ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/sala.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15" style="text-align:center;" >Sena</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_re ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/sena.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15" style="text-align:center;" >Cisco</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_re2 ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/cisco.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-14" style="text-align:center;">Audiovisuales</h5><br>
                          <h2 class="mb-3 font-18" style="text-align:center;"><?php echo  $total_r_a1 ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img style="height:100px; widht:100px;" src="assets/Audiovisuales2.jpg" alt="">
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
require_once "view/header.php";
require_once "view/footer.php";
?>
		  