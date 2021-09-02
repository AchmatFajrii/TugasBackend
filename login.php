<form method="post" action="proses_login.php" id="login-form">
 <?php 
 if(isset($_GET["login_error"])){ ?>

   <h4 style="color: red; text-align: center;" >Maaf Password atau username salah</h4>
 <?php } ?>
 <style>
body {
  background: #FFB6C1;
}
</style>
<body>
  <div class="jumbotron text-center">
  <h1>LOGIN KUYY</h1>
  <p>login lah masa nda</p> 
</div>
</body>
    <br />
    <div class="input-group">
     <input type="text" name="username" value="" placeholder="Username" style="width: 280px;">
    </div>
    <div class="input-group">
     <input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
    </div>
    <div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
    </div>
   </form>