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
				<div class="box" style="margin-left:300px;width:500px">
					<div class="box-heading">
						<h2>Member</h2>
					</div>
					<p>Silahkan Pilih Aksi Anda <?php echo $this->session->userdata('username')?></p>
				          <div class="more">
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

