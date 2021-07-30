<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
<img src="libs/images/logo.png" width="300" height="300">
    <div class="text-center">
       <h1>Bem-Vindo</h1>
       <p>Faça o login!</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Login</label>
              <input type="name" class="form-control" name="username" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Senha</label>
            <input type="password" name= "password" class="form-control" placeholder="Senha">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Login</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
