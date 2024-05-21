<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Öğrenci Paneli</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
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
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br></br></br></br></br></br>
 <div class="container">
  <div id="output"></div>
  <form id="getAttendance">
    <div class="form-group">
      <label>Ders Yılı</label>
      <select name="year" class="form-control">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Bölüm</label>
      <select name="section" class="form-control">
      <option>1</option><option>2</option><option>3</option>	
    </select>
    </div>
    <div class="form-group">
      <label>Ders Kodu</label>
      <input type="text" class="form-control" name="code" placeholder="Ör - YAZ-202">
      <span class="help-block">BBB-SSS B:Bölüm S:Sınıf</span>
    </div>
    <div class="form-group">
      <label>Öğrenci Numarası</label>
      <input type="text" class="form-control" name="roll" placeholder="ÖR - 052/YM/19">
      <span class="help-block">NNN/BB/YY N : Numara, B : Bölüm , Y : Yıl</span>
    </div>
    <button class="btn btn-primary">Sonuçları gör</button>
  </form>
  </div>
  </div><!-- /.container -->
   <!-- FOOTER -->
      <footer style="background:; height:;">
        <p class="pull-right"><a href="#">Yukarı dön</a></p>
        <p>&copy; 2019 Tüm hakları saklıdır. &middot;  MERT ÇOLAKOĞLU tarafından geliştirlmiştir.
      </footer>

    
 </body>
</html>
