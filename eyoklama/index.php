<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Yoklama Sistemi</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Yoklama Sistemi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Anasayfa</a></li>
          
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    <h2>Öğrenci</h2>
    <h4>Öğrenci paneli için <a href="student.php">Öğrenci Paneli</a></h4>
    <hr>
    <h2>Öğretmen Girişi</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Giriş</th>
          <th>Kaydol</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Şifre</label>
                <input class="form-control" placeholder="Şifre" type="password" name="password">
              </div>
              <button class="btn btn-primary pull-right">Login</button>
            </form>
          </td>
          <td>
            <form id="signup">
              <div class="form-group">
                <label>Ad Soyad</label>
                <input class="form-control" placeholder="Ad Soyad" type="text" name="name">
              </div>
              <div class="form-group">
                <label>Telefon</label>
                <input class="form-control" placeholder="Telefon" type="text" name="phone">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Şifre</label>
                <input class="form-control" placeholder="Şifre" type="password" name="password">
                <span class="help-block">Şifreniz 6 karakterden uzun olmalıdır.</span>
              </div>
              <div class="form-group">
                <label>Şifrenizi Tekrarlayınız</label>
                <input class="form-control" placeholder="Şifre" type="password" name="password2">
              </div>
              <button class="btn btn-primary pull-right">Kaydol</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
     <!-- FOOTER -->
      <footer style="background:; height:120%;">
        <p class="pull-right"><a href="#">Yukarı dön</a></p>
        <p>&copy;       2019 Tüm hakları saklıdır &middot;  MERT ÇOLAKOĞLU ve EREN YEL tarafından geliştirilmiştir.
      </footer>

    </div><!-- /.container -->

 </body>
</html>
