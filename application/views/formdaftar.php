<html>
 <head>
  <title>Form Login</title>
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
 <form action="<?php echo base_url();?>index.php/login/simpan" method="post" name="login">
  <div id="form-login">
     <a href="<?php echo base_url();?>index.php/index/menulogin">Kembali</a>
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
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" size="40" name="nama" placeholder="nama anda" class="inputan"> </td>
       </tr>
	     <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" size="40" name="alamat" placeholder="alamat anda" class="inputan"> </td>
       </tr>
         <tr>
        <td>Nohp</td>
        <td>:</td>
        <td><input type="number" size="40" name="nohp" placeholder="No hp " class="inputan"> </td>
       </tr>
         <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" size="40" name="email" placeholder="Email Anda" class="inputan"> </td>
       </tr>
	   	  <td><input type="hidden" size="40" name="user_tipe" value="user" class="inputan"> </td>
	     <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="login" value="Login" class="tombol"> </td>
       </tr>

      </table>
  </div>
  </form>
 </body>
</html>