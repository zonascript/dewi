<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Wedding Organizer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url().'css/style.css'?>" rel="stylesheet" type="text/css" media="all"/>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
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

  <script type="text/javascript" src="<?php echo base_url().'js/jquery-1.9.0.min.js'?>"></script>
 <script type="text/javascript" src="<?php echo base_url().'js/jquery.openCarousel.js'?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'css/slider.css'?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url().'js/jquery.nivo.slider.js'?>"></script>
 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">
<div class="header_wrapper">
	<div class="wrap">
<div class="header_top">
<div class="logo">
<a href="index.html"><img src="<?php echo base_url().'images/logo.png'?>" alt="" /></a>
</div>
<div class="social-icons">					
		                <ul>
		                    <li><a class="facebook" href="#" target="_blank"> </a></li>
		                    <li><a class="twitter" href="#" target="_blank"> </a></li>
		                    <li><a class="googleplus" href="#" target="_blank"> </a></li>		   
		                    <li><a class="rss" href="#" target="_blank"> </a></li>
		                    <div class="clear"></div>
		                </ul>
		 		    </div>
       <div class="clear"></div>
</div>
<div class="menu">
<ul>
<li><a href="<?php echo base_url();?>index.php/Cmember/listing">Profile</a></li>
      <li><a href="<?php echo base_url();?>index.php/Corder/listing">Order</a></li>
            <li><a href="<?php echo base_url();?>index.php/Cpesanan/listing">List Pesanan</a></li>

      <li><a href="<?php echo base_url();?>index.php/login/logout">Logout</a></li>
      <div class="clear"></div>
    </ul>
     <span class="left-ribbon"> </span> 
      <span class="right-ribbon"> </span>    
 </div>
</div>
</div>
<div class="header_bottom">
	<div class="wrap">
			
	
	</div>
</div>
</div>
	<div class="main">
		<div class="wrap">
		<div class="content">
			<div class="content_top">
				     <div class="grid1">
				     	<div class="grides">
				   
					     				     
		  
		   <div class="clear"></div>
	 </div>	
 </div>			   


	 <div class="content_bottom">	 </div>
				<div class="clear"></div>
					
	 </div>		
	  
			
	  <div class="content_bottom">			
				<?php 
					foreach($notif as $row){
				?>
					<div class="alert alert-info" role="alert">
					 <?php echo $row->text?>
					</div>
				<?php
					}
				?>
				
				<!-- <div class="box" style="margin-left=30px";> -->
					<div class="box-heading">
						<h2>Member</h2>
					</div>
					 <!-- <div class="panel-body"> -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       
                   <tr>
  <th>No</th>
  <th>Gedung</th>
  <th>Dekorasi</th>
  <th>Salon</th>
  <th>Katering</th>
  <th>Undangan</th>
  <th>Tanggal</th>

  <th>Jam Dipakai</th>
    <th>Jumlah Bayar Awal</th>
  <th>Sisa Bayar</th>
    <th>Tanggal bayar Awal</th>
  <th>Harga</th>
    <th>Status</th>
  <th>Aksi</th>
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
  <?php foreach($pemesanan as $tuk) {?>
<tr>
<td><?php echo $nomor++; ?></td>
  <td><?php echo $tuk->nama_gedung?></td>
    <td><?php echo $tuk->nama_dekorasi?></td>
  <td><?php echo $tuk->nama_salon?></td>
    <td><?php echo $tuk->nama_katering?></td>
    <td><?php echo $tuk->nama_undangan?></td>
     <td><?php echo $tuk->tgldipakai?></td>
        <td><?php echo $tuk->jamdipakai?></td>
                <td><?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval(($tuk->jmlbayar_awal + $tuk->jmlbayar_akhir))),3)));?></td>
			
     <td><?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval(($tuk->total - ($tuk->jmlbayar_awal + $tuk->jmlbayar_akhir)))),3)));?> </td>


        <td><?php echo $tuk->tglbayar_awal?></td>
    <td><?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($tuk->total)),3)));?></td>
	 <td><?php echo $tuk->status?></td>
              <td><a href="<?php echo base_url()?>index.php/Corder/edit/<?php echo $tuk->id?>">edit</a></td>

</tr>
<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                     <!--    </div> -->
				<!-- </div> -->
				
			
				<div class="clear"></div>
			</div>
			
  
</div>
</div>
<div class="footer">
	<div class="wrap">
		<div class="foot-nav">
		
		</div>
		<div class="copy-right">
			<p>Weddding Day © All Rights Reseverd | Design by  <a href="#">Dewi Ratnasari</a></p>
		</div>	
		<div class="clear"></div>
	</div>
 </div>	 
 <script src="<?php echo base_url().'js/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'js/dataTables/dataTables.bootstrap.js'?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script> 

</body>
</html>

