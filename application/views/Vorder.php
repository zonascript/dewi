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
  <link href="<?php echo base_url().'css/jquery-ui.css'?>" rel="stylesheet" />

<script type="text/javascript" src="<?php echo base_url().'js/helper.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'js/jquery-ui.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'js/jquery-1.9.1.js'?>"></script>
  <script src="<?php echo base_url().'js/bootstrap.min.js'?>" ></script>
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'css/custom.css'?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url().'js/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css'?>" />

<script>
var total = 0;
function convertToRupiah(angka)
{
	var rupiah = '';		
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}


function inputValue(id,name)
{
	
	$('#'+name).val(id);
	
	$.ajax({
		type	:'POST',
		url  	:"<?php echo base_url()?>index.php/Corder/ajax_getdata",
		data	:"data="+id+'&type='+name,
		success	:function(msg)
		{
			var data = JSON.parse(msg);
			
			$('#'+name+'pilihan img').attr('src',('<?php echo base_url()?>uploads/'+data[0].photo));
			$('#'+name+'pilihan b').text(data[0].nama);
			if($('#'+name+'harga').val())
			{
				total = total - parseInt($('#'+name+'harga').val());
				
			}
			
			total = total + parseInt(data[0].harga);
			$('#'+name+'harga').val(data[0].harga);
			
			$('#harga').val(convertToRupiah(total));
			$('#total').val(total);
		//	$('#bayarawal').val(convertToRupiah(total*0.5));
			$('#bayarawal').val(convertToRupiah((total*0.5).toFixed(0)));
			$('#bayar-awal').val(total*0.5);
			$('#'+name+'pilihan').show();
		}
	});
}

	
	
function myFunction(val) {
   //console.log("idgedung",val);
	
	 
}
		
    
   
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
if (isset($index)) {
	$id=$index->idgedung;
	
		$nama=$index->nama;
		
	

} else {
	$id="";
	$nama="";
}
 ?>
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
				              <form method="post" id="validasi" name="daftar" onsubmit="return validasi()" action="<?php echo base_url();?>index.php/Corder/simpan" enctype="multipart/form-data">
            <fieldset>
                <legend>Form Pemesanan</legend>
      
                <div>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pilih Gedung</button>
						<input type="hidden" name="idgedung" id="idgedung" value="" />
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Silahkan Pilih Gedung</h4>
								 <p class="text-warning">Silahkan klik gambar untuk memilih</p>
								</div>
								<div class="modal-body">
									<?php foreach($gedung as $lala){?>
									<div class="clearfix">
										<img data-dismiss="modal" onclick="inputValue(<?php echo $lala->idgedung?>,'idgedung');myFunction(<?php echo $lala->idgedung?>)" style="cursor:pointer" src="<?php echo base_url()?>uploads/<?php echo $lala->photo?>" width="40%" class="pull-left" />
										<div class="" style="margin-left:250px">
										
											<table style="padding-left:10px">
												<tr>
													<td>Alamat</td>
													<td>: <?php echo $lala->alamat?></td>
												</tr>
												<tr>
													<td>Jenis Paket</td>
													<td>: <?php echo $lala->jenis?></td>
												</tr>
												<tr>
													<td>Kapasitas Gedung</td>
													<td>: <?php echo strrev(implode('.',str_split(strrev(strval($lala->kapasitas)),3))); ?> Orang</td>
												</tr>
												<tr>
													<td>Contact Person</td>
													<td>: <?php echo $lala->cp?></td>
												</tr>
												<tr>
													<td>Harga</td>
													<td>: <?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($lala->harga)),3))); ?></td>
												</tr>
												
											</table>
										</div>
									</div><br>
									<?php }?>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							  
							</div>
						 </div>
						 <span id="idgedungpilihan" style="display:none">
								<img width="10%" src="aa.jpg" class="img-circle" /> <b>a</b>
								<input type="hidden" id="idgedungharga" />
						 </span>
				</div> <br>
				
                
				
				<br>
         <div>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#undangan">Pilih Undangan</button>
			<input type="hidden" name="idundangan" id="idundangan" value="" />
			<div class="modal fade" id="undangan" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Silahkan Pilih Undangan</h4>
								   <p class="text-warning">Silahkan klik gambar untuk memilih</p>
								</div>
								<div class="modal-body">
									<?php foreach($undangan as $lala){?>
									<div class="clearfix">
										<img data-dismiss="modal" onclick="inputValue(<?php echo $lala->idundangan?>,'idundangan')" style="cursor:pointer" src="<?php echo base_url()?>uploads/<?php echo $lala->photo?>" width="40%" class="pull-left" />
										<div class="" style="margin-left:250px">
										
											<table style="padding-left:10px">
												<tr>
													<td>Alamat</td>
													<td>: <?php echo $lala->alamat?></td>
												</tr>
												<tr>
													<td>Jenis Paket</td>
													<td>: <?php echo $lala->jenis?></td>
												</tr>
												<tr>
													<td>Contact Person</td>
													<td>: <?php echo $lala->cp?></td>
												</tr>
												<tr>
													<td>Harga</td>
													<td>: <?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($lala->harga)),3))); ?> </td>
												</tr>
												
											</table>
										</div>
									</div><br>
									<?php }?>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							  
							</div>
			</div>
						<span id="idundanganpilihan" style="display:none">
								<img width="10%" src="aa.jpg" class="img-circle" /> <b>a</b>
								<input type="hidden" id="idundanganharga" />
						 </span>
        </div>
<br>

        <div>
               <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#dekorasi">Pilih Dekorasi</button>
			   <input type="hidden" name="iddekorasi" id="iddekorasi" value="" />
			<div class="modal fade" id="dekorasi" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Silahkan Pilih Dekorasi</h4>
								  <p class="text-warning">Silahkan klik gambar untuk memilih</p>
								</div>
								<div class="modal-body">
									<?php foreach($dekorasi as $lala){?>
									<div class="clearfix">
										<img data-dismiss="modal" onclick="inputValue(<?php echo $lala->iddekorasi?>,'iddekorasi') " style="cursor:pointer" src="<?php echo base_url()?>uploads/<?php echo $lala->photo?>" width="40%" class="pull-left" />
										<div class="" style="margin-left:250px">
										
											<table style="padding-left:10px">
												<tr>
													<td>Alamat</td>
													<td>: <?php echo $lala->alamat?></td>
												</tr>
												<tr>
													<td>Jenis Paket</td>
													<td>: <?php echo $lala->jenis?></td>
												</tr>
												<tr>
													<td>Contact Person</td>
													<td>: <?php echo $lala->cp?></td>
												</tr>
												<tr>
													<td>Harga</td>
													<td>: <?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($lala->harga)),3))); ?> </td>
												</tr>
												
											</table>
										</div>
									</div><br>
									<?php }?>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							  
							</div>
			</div>
						<span id="iddekorasipilihan" style="display:none">
								<img width="10%" src="aa.jpg" class="img-circle" /> <b>a</b>
								<input type="hidden" id="iddekorasiharga" />
						 </span>
        </div>
 <br>

        <div>
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#katering">Pilih Katering</button> 
		   <input type="hidden" name="idkatering" id="idkatering" value="" />
			<div class="modal fade" id="katering" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Silahkan Pilih Katering</h4>
								  <p class="text-warning">Silahkan klik gambar untuk memilih</p>
								</div>
								<div class="modal-body">
									<?php foreach($katering as $lala){?>
									<div class="clearfix">
										<img data-dismiss="modal" onclick="inputValue(<?php echo $lala->idkatering?>,'idkatering')" style="cursor:pointer" src="<?php echo base_url()?>uploads/<?php echo $lala->photo?>" width="40%" class="pull-left" />
										<div class="" style="margin-left:250px">
										
											<table style="padding-left:10px">
												<tr>
													<td>Alamat</td>
													<td>: <?php echo $lala->alamat?></td>
												</tr>
												<tr>
													<td>Jenis Paket</td>
													<td>: <?php echo $lala->jenis?></td>
												</tr>
												<tr>
													<td>Contact Person</td>
													<td>: <?php echo $lala->cp?></td>
												</tr>
												<tr>
													<td>Harga</td>
													<td>: <?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($lala->harga)),3))); ?></td>
												</tr>
												
											</table>
										</div>
									</div><br>
									<?php }?>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							  
							</div>
			</div>
						<span id="idkateringpilihan" style="display:none">
								<img width="10%" src="aa.jpg" class="img-circle" /> <b>a</b>
								<input type="hidden" id="idkateringharga" />
						 </span>
        </div>
<br>

        <div>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#salon">Pilih Salon</button> 
		  <input type="hidden" name="idsalon" id="idsalon" value="" />
			<div class="modal fade" id="salon" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Silahkan Pilih Salon</h4>
								  <p class="text-warning">Silahkan klik gambar untuk memilih</p>
								</div>
								<div class="modal-body">
									<?php foreach($salon as $lala){?>
									<div class="clearfix">
										<img data-dismiss="modal" onclick="inputValue(<?php echo $lala->idsalon?>,'idsalon')" style="cursor:pointer" src="<?php echo base_url()?>uploads/<?php echo $lala->photo?>" width="40%" class="pull-left" />
										<div class="" style="margin-left:250px">
										
											<table style="padding-left:10px">
												<tr>
													<td>Alamat</td>
													<td>: <?php echo $lala->alamat?></td>
												</tr>
												<tr>
													<td>Jenis Paket</td>
													<td>: <?php echo $lala->jenis?></td>
												</tr>
												<tr>
													<td>Contact Person</td>
													<td>: <?php echo $lala->cp?></td>
												</tr>
												<tr>
													<td>Harga</td>
													<td>: <?php echo 'Rp. '.strrev(implode('.',str_split(strrev(strval($lala->harga)),3))); ?></td>
												</tr>
												
											</table>
										</div>
									</div><br>
									<?php }?>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							  
							</div>
			</div> 
						<span id="idsalonpilihan" style="display:none">
								<img width="10%" src="aa.jpg" class="img-circle" /> <b>a</b>
								<input type="hidden" id="idsalonharga" />
						 </span>
        </div>
        <br>
				<div>
				<input type="date" id="datepicker" name="tanggal">               
				 </div>
				 <div>
				<input type="time" name="time" placeholder="jam dipakai">               
				 </div>
				<div>
                   <input type="text" name="harga" id="harga" readonly />
                   <input type="hidden" name="total" id="total" readonly />
                </div>
                 <div>
                   <input type="text" id="bayarawal"  placeholder="Bayar min 1/2 Harga" />
                   <input type="hidden" name="bayarawal" id="bayar-awal"  placeholder="Bayar min 1/2 Harga" />
                </div>
        <div>
                   <input type="text" name="harga" value="Norek 900-2345-111 / Mandiri / a/n Mr ZZ" readonly />
                </div>
      
                 
       <h4>Pembayaran lebih dari 1 hari pemesanan dianggap hangus pesanan </h4>
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

