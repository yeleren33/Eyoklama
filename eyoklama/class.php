<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Sınıf Düzenle</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/class.js"></script>
  <style>.form-control{display:inline-block !important; width: 185px !important; margin:5px !important;}.details{padding:5px 10px;margin-bottom:30px;border: 1px solid lightgrey;border-top: none;}}</style>
 </head>
 <body>
  <div id="header" class="clearfix">
    <h1>Kırklareli Üniversitesi Yazılım Mühendisliği</h1>
    <h3>Sınıf Düzenle</h3>	
  </div>
  <nav class="navbar navbar-default" id="sub-menu">  
    <div class="navbar-header">    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">      
        <span class="sr-only">Toggle navigation</span>      
        <span class="icon-bar"></span>      
        <span class="icon-bar"></span>      
        <span class="icon-bar"></span>    
      </button>  
    </div>  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    
      <ul class="nav navbar-nav navbar-left">      
        <li><a href="teacher.php">Panel</a></li>
        <li><a href="profile.php">Profil</a></li>
        <li class="active"><a href="class.php">Sınıflar</a></li>
        <li><a href="statistics.php">İstatistikler</a></li>
        <li><a href="logout.php">Çıkış</a></li>
      </ul>  
    </div>  
  </nav> 
  <div class="container">
    <h2> Sınıfların detaylarını buradan düzenleyebilirsiniz.</h2>
    <?php
      $classes = $_SESSION['classes'];
      $teacher_id = $_SESSION['teacher_id'];
      if(!$classes) echo '<h4> Tanımlanmış sınıf yok! </h4>';
      else {
        foreach($classes as $class_id) {
          $n = new Node;
          $node = $n->retrieveObjecti($class_id,$teacher_id) or die("Kayıt bulunamadı");
          $code = $node->getCode();
          $section = $node->getSection();
          $year = $node->getYear();
          $semester = $node->getSemester();
          
          echo '<ul class="nav nav-tabs">
                  <li class="active"><a href="#"><strong>'.$code . ' ( '.$section.' ) , '.$year.'</strong></a></li>
                </ul>';
          echo '<div class="details" id="_'.$class_id.'_">';
          echo 'Des Kodu : <input class="form-control" name="code" value="'.$code.'" placeholder="Ders Kodu giriniz, ör: YAZ-202">';
          echo 'Yıl : <input class="form-control" name="year" value="'.$year.'" placeholder="Yılı giriniz">';
          echo 'Bölüm : <input class="form-control" name="section" value="'.$section.'" placeholder="Bölümü giriniz">';
          echo 'Dönem : <input class="form-control" name="semester" value="'.$semester.'" placeholder="Dönemi giriniz">';
          echo '<button class="btn btn-success update">Güncelle</button>';
          echo '</div>';
        }
      }
    ?>
  </div>
 </body>
</html>
