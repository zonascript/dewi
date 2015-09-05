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
  <link href="<?php echo base_url().'css/font-awesome.css'?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'css/custom.css'?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url().'js/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet" />
  //   <script>
  //   function validasi() {
  //         var nama= document.getElementById("nama");
  //         var alamat= document.getElementById ('alamat');
  //         var jenis=document.getElementById('jenis');
  //         var cp=document.getElementById('cp');
  //         var harga=document.getElementById('harga');
       
  //           if(nama.value==""){
  //         alert("Masukkan nama");
  //         return false;  
  //       }
  //        else if (alamat.value=="") {
  //              alert("Anda belum memasukkan Alamat !!!");
  //                return false;
  //           }
  //           else if (jenis.value=="") {
  //              alert("Masukkan Jenis Type!!!");
  //                return false;
  //           }
  //        else if (cp.value=="") {
  //              alert("Anda belum memasukkan Contact Person!!");
  //                return false;
           
  //        }
         
  //       else if (harga.value=="") {
  //              alert("Anda belum memasukkan Harga!!");
  //                return false;
  //           }
       
        
         
  //       else{
  //     return true;
  //     }
  //     alert("Data yang telah anda isikan dianggap benar !!!");
  //   }
  // </script> 
 <script>
$(function() {
$( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});
});
</script>
  <script language="javascript">

$(document).ready(function()
{  
    $("#nama").blur(function()
    {
        //remove all the class add the messagebox classes and start fading
        $("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
        //check the username exists or not from ajax
        $.post("cek2.php",{nama:$(this).val() } ,function(data)
        {
          if(data=='no') //if username not avaiable
          {
              $("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
            {
              //add message and change the class of the box and start fading
              $(this).html('Nama Sudah Ada').addClass('messageboxerror').fadeTo(900,1);
            });       
          }
          else
          {
              $("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
            {
              //add message and change the class of the box and start fading
              $(this).html('Nama Tersedia ').addClass('messageboxok').fadeTo(900,1);
              $(this).focus();
            });

          }
               
        });

    });
   
});
</script>
</head>
<style type="text/css">
   
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 40px;
        width:400px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
 
</style>
</head>
<?php
if (isset($Corder)) {
	$id=$Corder->id;
		$bayarawal=$Corder->jmlbayar_awal;
		$bayarakhir=$Corder->jmlbayar_akhir;
		$total=$Corder->total;
			
		
	

} else {
	$id="";

	$bayarawal="";
	$bayarakhir="";
}
 ?>
<body>
<div class="header">
<div class="header_wrapper">
	<div class="wrap">
<div class="header_top">
<div class="logo">
<a href="index.html"><img src="web/images/logo.png" alt="" /></a>
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
	 <div class="content_bottom">	
	 <div class="box" style="margin-left:300px;width:500px">
				              <form method="post"id="validasi" name="daftar" onsubmit="return validasi()" action="<?php echo base_url();?>index.php/Corder/simpans" enctype="multipart/form-data">
            <fieldset>
                <legend>Form Pemesanan</legend>
      
            <div>
                 <input type="text" readonly value="<?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval(($total - ($bayarawal + $bayarakhir)))),3)));?>"  />
                 <input type="hidden" name="bayarakhir" value="<?php echo ($total - ($bayarawal + $bayarakhir));?>"  />
				 
                </div>
				
       <!-- <div>
               
       <input type="text" name="bayarakhir" value="<?php echo $bayarakhir?>" placeholder="Bayar kurangnya" />
                </div>-->
      
                 <input type='text' value='<?php echo $id?>' name='id' hidden>
				
						
               
                 
            

      
                 
       <h4>Pembayaran lebih dari 1 minggu pemesanan dianggap hangus pesanan </h4>
                      <div>
        
                   </form>
                <input type="submit" value="Simpan"/>
				
				</div>
	 
	 </div>
				<div class="clear"></div>
					
	 </div>		
	  
			
	 <!--  <div class="content_bottom">			
				<div class="box" style="margin-left:300px;width:500px">
					<div class="box-heading">
						<h2>Gedung</h2>
						<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
					</div>
					<p>Kami memberikan Gedung sesuai akan budget yang anda punya</p>
				          <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cgedung/listing">Lihat Gedung</a></span>
				         	  </div>
				</div>
				
			
				<div class="clear"></div>
			</div> -->
	 <!-- <div class="content_bottom">			
				<div class="box">
					<div class="box-heading">
						<h2>Venues</h2>
						<img src="<?php echo base_url().'images/veanu.jpg'?>" alt="" />
					</div>
					<p>Kami memberikan venue-venue yang berkualitas dan terjamin akan segala aspek.</p>
				          <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cvenue/listing">Lihat Venue</a></span>
				         	  </div>
				</div>
				<div class="box">
					<div class="box-heading">
						<h2>Wedding Cakes</h2>
						<img src="<?php echo base_url().'images/wedding-cake.jpg'?>" alt="" />
					</div>
					<p>Kami menawarkan kue pernikahan dengan rasa dan bentuk yang sangat disukai oleh banyak kalangan.</p>
				 			  <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Ccake/listing">Lihat Kue</a></span>
				         	  </div>
				</div>
				<div class="box">
					<div class="box-heading">
						<h2>Undangan</h2>
						<img src="<?php echo base_url().'images/wedding-ring.jpg'?>" alt="" />
					</div>
					<p>Kami memberikan desain undangan yang sangat ciamik untuk anda para penyuka design</p>
				         <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cletter/listing">Lihat Undangan</a></span>
				         	  </div>
				</div>
				<div class="box-last">
					<div class="box-heading">
						<h2>Bridal Makeup</h2>
						<img src="<?php echo base_url().'images/make-up.jpg'?>" alt="" />
					</div>
					<p>Kami memberikan tata riasan wajah sesuai keinginan adat yang akan dipakai</p>
				         <div class="more">
				         	  	<span><a href="<?php echo base_url();?>index.php/Cmakeup/listing">Lihat Makeup</a></span>
				         </div>
				</div> -->
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
</body>
</html>

