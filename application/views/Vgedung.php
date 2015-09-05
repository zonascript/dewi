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

 <div id="All" style="float:left;margin-left:400px;">
 <a href="<?php echo base_url()?>index.php/Cgedung/listing"><input type="button" value="All"/></a> 
</div>
 <div id="gold" style="float:left;margin-left:10px;">
 <a href="<?php echo base_url()?>index.php/Cgedung/gold"><input type="button" value="Gold"/></a> 
</div>
 <div id="silver" style="float:left;margin-left:10px;">
 <a href="<?php echo base_url()?>index.php/Cgedung/silver"><input type="button" value="Silver"/></a> 
</div>
 <div id="perunggu" style="float:left;margin-left:10px;">
 <a href="<?php echo base_url()?>index.php/Cgedung/Bronze"><input type="button" value="Bronze"/></a> 
</div>
	 <div class="content_bottom">
	<ul class="products" style="width:900px;min-height:300px;margin-left:80px;">
	<?php foreach($Cgedung as $tuk) {?>
	<li style="margin-top:5px;min-height:220px;">
		<input type='hidden' value='<?php echo $tuk->idgedung?>' name='id'>
	<tr><td><img src="<?php echo base_url();?>uploads/<?php echo $tuk->photo==""?"noprofile.jpg":$tuk->photo ?>" height=150 width=200 />
	<fieldset>
	<p><h2><?php echo $tuk->nama?></h2></p>

					         	  	<span><a href="<?php echo base_url()?>index.php/Cgedung/detail/<?php echo $tuk->idgedung?>">Lihat Detail</a></span>
									

	</fieldset>
	</li>
	<?php } ?>
	</ul>
	
				       
	
	
	</div>
				<div class="clear"></div>
					
	 </div>		
	  
			
	 <!-- <div class="content_bottom">			
				<div class="box" style="margin-left:300px;width:500px">
					<div class="box-heading">
						<h2>Gedung</h2>
						<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
					</div>
					<p>Kami akan menampilkan beberapa informasi gedung</p>
				          <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cgedung/listing">Lihat Gedung</a></span>
				         	  </div>
				</div>-->
				
			
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
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

