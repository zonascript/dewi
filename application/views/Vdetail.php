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
 <script type="text/javascript" src="<?php echo base_url().'js/jquery-1.9.0.min.js'?>"></script>
 <script type="text/javascript" src="<?php echo base_url().'js/jquery.openCarousel.js'?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'css/slider.css'?>"  type="text/css" media="screen" />
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
       <div class="clear"></div>
</div>
<div class="menu">
	<ul>
		<li><a href="<?php echo base_url();?>index.php/home/listing">HOME</a></li>
    	<li><a href="<?php echo base_url();?>index.php/index/about">ABOUT</a></li>
    	<li><a href="<?php echo base_url();?>index.php/index/menulogin">LOGIN</a></li>
    	<div class="clear"></div>
    </ul>
     <span class="left-ribbon"> </span> 
      <span class="right-ribbon"> </span>    
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
 <form action="<?php echo base_url();?>index.php/Cgedung/select">
 <!--<select name="jenis" onchange="this.form.submit()">
  <option value="">---pilih---</option>

  <option value="gold">Gold</option>
 <option value="silver">Silver</option>
 <option value="bronze">Bronze</option>
  </select >
-->

	 <div class="content_bottom">
	 	<div class="box" style="box-shadow:0 0 30px rgba(0,0,0,.25);border-radius:20px;width:1070px;margin-left:300px;float:right;font-size:22px">
	<?php foreach($Cgedung as $tuk) {?>
		<input type='hidden' value='<?php echo $tuk->id?>' name='id'>
	<fieldset>
	<p><h2><?php echo $tuk->nama?></h2></p>
	<p>Alamat : <?php echo $tuk->alamat?></p>
	<p>Jenis Paket : <?php echo $tuk->jenis?></p>
	<p>Kapasitas Gedung : <?php echo strrev(implode('.',str_split(strrev(strval($tuk->kapasitas)),3)));?> orang</p>
	<p>Contact Person : <?php echo $tuk->cp?></p>
	
	<p>Harga Gedung : <b><?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($tuk->harga)),3)));?></b></h3>
	<!--<p> Di Booked Jam <h2><?php echo $tuk->jamdipakai?></h2></p>
	<p>Di Booked Tanggal <h2><?php echo $tuk->tgldipakai?></h2></p>-->
	<p>Gambar : </p>
	<p><img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" /> </p>
	<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
	</fieldset>
	</li>
	<?php } ?>
	
				       
	
	
	 </form>
	</div>
				<div class="clear"></div>
					
	 </div>		
	  
			
	  <!--<div class="content_bottom">			
				<div class="box" style="margin-left:300px;width:500px">
					<div class="box-heading">
						<h2>Gedung</h2>
						<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
					</div>
					<p>Kami memberikan Gedung sesuai akan budget yang anda punya</p>
				          <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cgedung/listing">Lihat Gedung</a></span>
				         	  </div>
				</div>-->
				
			
							<div class="clear"></div>
			</div><div class="clear"></div>
			</div>
	 <div class="content_bottom" >		
				 <div class="box">
					<div class="box-heading">
						<h2>Gedung</h2>
						<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
					</div>
					<p>Kami akan menampilkan beberapa informasi gedung.</p>
				          <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cgedung/listing">Lihat Gedung</a></span>
				         	  </div>
				</div>	
				<div class="box">
					<div class="box-heading">
						<h2>Dekorasi</h2>
						<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
					</div>
					<p>Kami akan menampilkan beberapa informasi dekorasi pernikahan.</p>
				          <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cvenue/listing">Lihat Dekorasi</a></span>
				         	  </div>
				</div>
				<div class="box">
					<div class="box-heading">
						<h2>Katering</h2>
						<img src="<?php echo base_url().'images/wedding-cake.jpg'?>" alt="" />
					</div>
					<p>Kami akan menampilkan beberapa informasi katering.</p>
				 			  <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Ccake/listing">Lihat Katering</a></span>
				         	  </div>
				</div>
				<div class="box">
					<div class="box-heading">
						<h2>Undangan</h2>
						<img src="<?php echo base_url().'images/wedding-ring.jpg'?>" alt="" />
					</div>
					<p>Kami akan menampilkan beberapa informasi undangan.</p>
				         <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cletter/listing">Lihat Undangan</a></span>
				         	  </div>
				</div>
				<div class="box-last">
					<div class="box-heading">
						<h2>Salon & Bridal</h2>
						<img src="<?php echo base_url().'images/make-up.jpg'?>" alt="" />
					</div>
					<p>Kami akan menampilkan beberapa informasi Salon & Bridal.</p>
				         <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cmakeup/listing">Lihat Make Up</a></span>
				         </div>
				</div>
				<div class="clear"></div>
			</div>		
  
</div>
</div>
<div class="footer">
	<div class="wrap">
		<div class="foot-nav">
		
		</div>
		<div class="copy-right">
			<p>Wedding Day © All Rights Reseverd | Design by  <a href="#">Dewi Ratnasari</a></p>
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

