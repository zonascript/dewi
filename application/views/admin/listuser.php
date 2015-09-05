<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding Organizer : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url().'css/bootstrap.css'?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url().'css/font-awesome.css'?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'css/custom.css'?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url().'js/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet" />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>

  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="<?php echo base_url();?>index.php/admin/pemesanan/logout">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url().'img/find_user.png'?>" class="user-image img-responsive"/>
          </li>
        
          
                    
                   <li>
                        <a  href="<?php echo base_url();?>index.php/admin/pemesanan/listing"> Data Pesanan</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/admin/undangan/listing"> Data Undangan</a>
                    </li>
              <li>
                        <a  href="<?php echo base_url();?>index.php/admin/dekorasi/listing"> Data Dekorasi</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/admin/gedung/listing"> Data Gedung</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/admin/salon/listing"> Data Salon & Bridal</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/admin/katering/listing"> Data Katering</a>
                    </li>
					 <li>
                        <a  href="<?php echo base_url();?>index.php/admin/user/listing"> Data User</a>
                    </li>
                    <!--   <li  >
                        <a class="active-menu"  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li> -->
                   
          
                             
                   
                               
                               
                       
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                        <h2>Welcome Admin , Selamat Bekerja :) </h2>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar User
							 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
								 <button id="btnExport">Export to excel</button>
                                    <thead>
									
                                       
                   <tr>
  <th>No</th>
   <th>Username</th>
  <th>Nama</th>
  <th>Alamat</th>
  <th>No Hp</th>
  <th>Email</th>

  <th>Del</th>
  <?php
$batas = 5;
if(isset($_GET['halaman'])){
  $halaman = $_GET['halaman'];
}
if(empty($halaman)){
  $posisi=0;
  $halaman=1;
}else{
$posisi = ($halaman-1) * $batas;
}



  
  $nomor= $posisi+1;
  
?>
          </tr>
		   </thead>
                                    <tbody>
  <?php foreach($user as $tuk) {?>
<tr>
<td><?php echo $nomor++; ?></td>
  <td><?php echo $tuk->username?></td>
    <td><?php echo $tuk->nama?></td>
  <td><?php echo $tuk->alamat?></td>
    <td><?php echo $tuk->nohp?></td>
  <td><?php echo $tuk->email?></td>
 
   
    <td><a href="<?php echo base_url()?>index.php/admin/user/delete/<?php echo $tuk->id?>">X </a></td>
        <td></td>

</tr>
<?php } ?>
          
      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->
        
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url().'js/jquery-1.10.2.js'?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url().'js/jquery.metisMenu.js'?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url().'js/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'js/dataTables/dataTables.bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'js/jquery.min.js'?>"></script>
<script src="jquery.btechco.excelexport.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
	
<script>
$(document).ready(function () {
        $("#btnExport").click(function () {
            $("#dataTables-example").btechco_excelexport({
                containerid: "dataTables-example"
               , datatype: $datatype.Table
            });
        });
    });
	</script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url().'js/custom.js'?>"></script>
    
   
</body>
</html>
