<?php

/* @var $this \yii\web\View */
/* @var $content string */
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\widgets\Breadcrumbs;
AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
   <meta charset="<?- Yii::$app->charset ?>">
    <meta http-equiv-"X-UA-Compatitble" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale-1">
     <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php $this->registerCsrfMetaTags()?>

  <title>MyResume Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
    <?php $this->head() ?>
    
 
</head>
<body>
<?php $this->beginBody() ?>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

<nav class="nav-menu">
<ul>
<li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
<li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
<li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
<li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
<li><a href="#services"><i class="bx bx-server"></i> <span>Services</span></a></li>
<li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
</ul>

</nav><!-- .nav-menu -->

</header><!-- End Header --> 
     
    </div>
</div>
 
  <div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    
    
<footer id="footer">
    <div class="container">
      <h3>Ken Munene Nyaga</h3>
      <p>All about Simple innovative solutions.</p>
      <div class="social-links">
        <a href="https://twitter.com/K3n_Munene" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://github.com/l56l" class="google-plus"><i class="bx bxl-github"></i></a>
        <a href="https://www.linkedin.com/in/ken-nyaga-76a415134/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">ken nyaga</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
