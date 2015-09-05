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
	  <style>
   body
   {
    font-family:Calibri;
    margin:50px;
   }
   
   #form-login{
   margin:auto;
   width:500px;
   padding:10px;
   border:1px #ccc solid;
   border-radius:30px;
   font-size:18px;
   font-weight:bold;
   color:#FF6600;
   }
   
   .inputan
   {
    padding:3px;
    font-family:Calibri;
    border:1px solid #ccc;
   }
   
   .tombol
   {
    padding:5px;
    background:#FF6600;
    color:#FFF;
    font-weight:bold;
    font-family:Calibri;
    font-size:15px;
    border:#eee 1px solid;
   }
   
   .error
   {
    color:#FF6600;
    font-size:11px;
   }
   
   
  </style>
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
<div class="header_bottom">
	<div class="wrap">
					
			
	
	</div>
</div>
</div>
	<div class="main">
		<div class="wrap">
		<div class="content">
			<div class="content_top">
				     <form action="<?php echo base_url();?>index.php/login/proses_login" method="post" name="login">
  <div id="form-login">
      Administrator Page - Plase Login First
      <br><br>
      <table border="0" cellpadding="4">
       <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" size="40" name="username" placeholder="username" class="inputan"> </td>
       </tr>
       <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" size="40" name="password" placeholder="password" class="inputan"> </td>
       </tr>
      <!--  <tr>
        <td>Level</td>
        <td>:</td>
        <td><select name="level" class="inputan">
        <option value="1">Pengguna</option>
        <option value="2">Admin</option>
        </select></td>
       </tr> -->
       
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="login" value="Login" class="tombol"> </td>
       </tr>
	   <tr>
	   <td><a href="<?php echo base_url();?>index.php/login/daftar"><p><b>Belum jadi member? </b></p></a></td>
	   </tr>
      </table>
  </div>
  </form>
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

