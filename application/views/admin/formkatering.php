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
    <link href="<?php echo base_url().'css/editor.css'?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url().'js/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet" />
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url().'js/jquery-1.10.2.js'?>"></script>
	
    <script>
    function validasi() {
          var nama= document.getElementById("nama");
          var alamat= document.getElementById ('alamat');
          var jenis=document.getElementById('jenis');
          var cp=document.getElementById('cp');
          var harga=document.getElementById('harga');
       
            if(nama.value==""){
          alert("Masukkan nama");
          return false;  
        }
         else if (alamat.value=="") {
               alert("Anda belum memasukkan Alamat !!!");
                 return false;
            }
            else if (jenis.value=="") {
               alert("Masukkan Jenis Type!!!");
                 return false;
            }
         else if (cp.value=="") {
               alert("Anda belum memasukkan Contact Person!!");
                 return false;
           
         }
         
        else if (harga.value=="") {
               alert("Anda belum memasukkan Harga!!");
                 return false;
            }
       
        
         
        else{
      return true;
      }
      alert("Data yang telah anda isikan dianggap benar !!!");
    }
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
<?php
if (isset($katering)) {

  $id=$katering->idkatering;
    $nama=$katering->nama;
        $alamat=$katering->alamat;

    $jenis=$katering->jenis;
  $cp=$katering->cp;
  $harga=$katering->harga;
  $deskripsi=$katering->deskripsi;
  $photo=$katering->photo;

} else {
  $id="";
  $nama="";
    $alamat="";
  $jenis="";

  $cp="";
  $harga="";
  $deskripsi="";
$photo="";

}
 ?>
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
                      <div> <a href="<?php echo base_url()?>index.php/admin/dekorasi/tambah/">Add New</a></div>
                        <div class="panel-heading">
                             Daftar Katering
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                               <form method="post"id="validasi" name="daftar" onsubmit="return validasi()" action="<?php echo base_url();?>index.php/admin/katering/simpan" enctype="multipart/form-data">
            <fieldset>
                <legend>Form Katering</legend>
        <!-- <div>
                <input type="text" name="iddekorasi" id="iddekorasi"  value="<?php echo $id?>" placeholder="ID" />
                </div> -->
                <div>
                <input type="text" name="nama" id="nama"  value="<?php echo $nama?>" placeholder="Nama"/>
                </div>
         <div>
                <input type="text" name="alamat" id="alamat" value="<?php echo $alamat?>" placeholder="alamat" />
                </div>
         <div>
                <input type="text" name="jenis" id="jenis" value="<?php echo $jenis?>" placeholder="jenis" />
                </div>
        <div>
                 <input type="number" name="cp"  id="cp" value="<?php echo $cp?>" placeholder="contact Person"/>
                </div>
        <div>
                  <div>
        <input type="number" name="harga" maxlength="8" id="harga"  value="<?php echo $harga?>" placeholder="Harga"/>
                </div>
               <div>
					<textarea name="deskripsi" id="deskripsi" value="<?php echo $deskripsi?>"></textarea>
                </div>
         <div >
                      <td>Photo</td>
                      <td>
                      <img src="<?php echo base_url();?>uploads/<?php echo $photo==""?"images.jpg":$photo ?>" height=50 width=50 /><br>
                      <input type="file"  name="userfile" size="20" value="<?php echo $photo?>"/></td>
                      </div>
                      <div>
        
                   </form>
                <input type="submit" value="Simpan"/>
                            </div>
                            <?php 
  if($id!="")
  echo "<input type='hidden' value='$id' name='idkatering'>";
?>
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
    
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url().'js/jquery.metisMenu.js'?>"></script>
    <script src="<?php echo base_url().'js/editor.js'?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url().'js/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'js/dataTables/dataTables.bootstrap.js'?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
				$('#deskripsi').Editor(); 
				
				$('.Editor-editor').keyup(function(){
					$('#deskripsi').text($(this).html());
					
					//alert($(this).html());
				});
            });
    </script>
         
</body>
</html>
