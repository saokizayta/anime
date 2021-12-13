<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Pristontale, PTvui, ptvui, ptv">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
      include('connect.php');

      //$tableName="menu";
      //$targetpage = "Admin-show.php";
      //$limit = 10;
      $id=$_GET['id'];
      mysql_query("set names 'utf8'");
      $query1 = " SELECT * FROM `pristontale` where id='$id' ";
      $set_viewer = "UPDATE `pristontale` SET viewer = viewer + 1 Where id='$id'";
      mysql_query("set names 'utf8'");
      $result = mysql_query($query1);
      $result1 = mysql_query($set_viewer);

      ?>
      <?php


          while($row = mysql_fetch_array($result))


        {
    echo'<title>Prison Tale | '.$row['tieude'].'</title>';
        }
            ?>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include('header.php') ?>
    <!-- Header End -->
    <!-- Blog Details Section Begin -->
    <?php
      include('connect.php');

      //$tableName="menu";
      //$targetpage = "Admin-show.php";
      //$limit = 10;
      $id=$_GET['id'];
      mysql_query("set names 'utf8'");
      $query1 = " SELECT * FROM `pristontale` where id='$id' ";
      $set_viewer = "UPDATE `pristontale` SET viewer = viewer + 1 Where id='$id'";
      mysql_query("set names 'utf8'");
      $result = mysql_query($query1);
      $result1 = mysql_query($set_viewer);

      ?>
      <?php


          while($row = mysql_fetch_array($result))


        {
         echo'
    <section class="normal-breadcrumb set-bg" data-setbg="img/banned_1920x300.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                         <h2>'.$row['tieude'].'</h2> 
                        <!--<p>'.$row['tieude'].'</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
                   <!-- Blog Details Section Begin -->
                        <section class="blog-details spad">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <!--<div class="blog__details__title">
                                            <h6>Action, Magic <span>- March 08, 2020</span></h6>
                                            <h2>Anime for Beginners: 20 Pieces of Essential Viewing</h2>
                                            <div class="blog__details__social">
                                                <a href="#" class="facebook"><i class="fa fa-facebook-square"></i> Facebook</a>
                                                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                                                <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i> Linkedin</a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <!--<div class="col-lg-12">
                                        <div class="blog__details__pic">
                                            <img src="img/blog/details/blog-details-pic.jpg" alt="">
                                        </div>
                                    </div>-->
                                    <div class="col-lg-8">
                                        <div class="blog__details__content">
                                            <div class="blog__details__text">
                                                <p>'.$row['noidung'].'</p>
                                            </div>
                                            <div class="blog__details__tags">
                                                <a href="#">Pristontale</a>
                                                <a href="#">PTvui</a>
                                                <a href="#">PTV</a>
                                            </div>
                                            <div class="blog__details__btns">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="blog__details__btns__item">
                                                            <h5><a href="trang_chu"><span class="arrow_left"></span> Trở về</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="blog__details__btns__item next__btn">
                                                            <h5><a href="#">Bài kế <span
                                                                class="arrow_right"></span></a></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                            <!-- Blog Details Section End -->
        ';


}
?>
        <!-- Blog Details Section End -->
        <!-- Footer Section Begin -->
    <?php include('footer.php') ?>
  <!-- Footer Section End -->
   <!-- Search model Begin -->
   <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/player.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

    </body>

    
<!-- Mirrored from technext.github.io/anime/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Oct 2021 11:58:59 GMT -->
</html>