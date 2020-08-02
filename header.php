<?php 
include 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>magExpress</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <!-- Headar Top Menu Start -->
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="pages/page.html">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
              <li><a href="pages/404.html">Error Page</a></li>
            </ul>
          </div>
          <!-- Header Top Finish -->
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html">mag<strong>Express</strong> <span>A Pro Magazine Template</span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- Header Start -->
          <ul class="nav navbar-nav custom_nav">
           <?php

            $PR_sql = $conn->query("SELECT * FROM Menuler ORDER BY Menuid asc");
            //$sonuc = $PR_sql->fetch_assoc(); 
            while ($PR_cek = $PR_sql->fetch_assoc()) {
               
                          
            ?>


        
            <li class=""><a href="<?php echo $PR_cek['MenuUrl'] ?>"><?php echo $PR_cek["MenuAd"]; ?></a></li>
             <?php } ?>  


            
          </ul>
          <!-- Header Finish -->
        </div>
      </div>
    </nav>
  </div>