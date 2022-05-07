<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="PTvui Private Server">
    <meta name="keywords" content="Pristontale, PTvui, ptvui, ptv">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
      include('connect.php');

      //$tableName="menu";
      //$targetpage = "Admin-show.php";
      //$limit = 10;
      $id=$_GET['id'];
      //mysqli_query("set names 'utf8'");
      $query1 = " SELECT * FROM `pristontale` where id='$id' ";
      $set_viewer = "UPDATE `pristontale` SET viewer = viewer + 1 Where id='$id'";
      //mysqli_query("set names 'utf8'");
      $result = mysqli_query($conn, $query1);
      $result1 = mysqli_query($conn, $set_viewer);

      ?>
      <?php


          while($row = mysqli_fetch_array($result))


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

    <link rel="stylesheet" href="css/characters.css" type="text/css">
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
      //mysqli_query("set names 'utf8'");
      $query1 = " SELECT * FROM `pristontale` where id='$id' ";
      $set_viewer = "UPDATE `pristontale` SET viewer = viewer + 1 Where id='$id'";
      //mysqli_query("set names 'utf8'");
      $result = mysqli_query($conn, $query1);
      $result1 = mysqli_query($conn, $set_viewer);

      ?>
      <?php


          while($row = mysqli_fetch_array($result))


        {
            $get_content = $row['noidung'];
            if ($get_content == null){
                    echo'
                    <div class="blog__details__pic">
                        <img src="img/character/no_info.png" alt="">
                    </div>
                    ';
            } else {
                echo'
    <!---<section class="normal-breadcrumb set-bg" data-setbg="'.$row['img_1172x564'].'">--->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <!--- <h2>'.$row['tieude'].'</h2> --->
                        <!--<p>'.$row['noidung'].'</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>';
                    echo'<!--------------------------->';
                        echo '<div class="header-character header-'.$row['img_230x325'].'">
                        <div class="char-page-navigation">
                            <!-- <div id="overview">Overview</div> <div class="nav-spacer" style="letter-spacing: -2px;">--</div>
                            <div id="mechanics">Mechanics</div> <div class="nav-spacer" style="letter-spacing: -2px;">--</div>
                            <div id="skills">Skills</div> <div class="nav-spacer" style="letter-spacing: -2px;">--</div>
                            <div id="our-chars">Our Heroes</div> -->
                        </div>
                
                        <div class="overview-section">
                            <!-- <div class="hero-list"><a href="characters.php">Hero List</a></div> -->
                            <div class="char-title">'.$row['tieude'].'</div>
                            <div class="char-sub-title">'.$row['tomtatnd'].'</div>
                            <div class="char-description">
                            '.$row['noidung'].'
                            </div>
                
                         </div>
                </div>';
                    echo'<!--------------------------->';
               echo'    <!-- Blog Details Section Begin -->
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
                                            <div class="blog__details__text">';
                                          
                                               echo' <!---<p>'.$row['noidung'].'</p>--->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                            <!-- Blog Details Section End -->
        ';
            }
         


}
?>
<!--Characters-->
<div class="tempskrons" style="text-align: center;">
        <img src="img/tempskron.png">
        <div class="tempskron-title">Tempskron</div>
        <div style="color: #b18276;">Power and technology</div>
        <div class="tempskron-chars">

            <a href="fighter">
                <div class="tempskron-char">
                    <div class="tempskron-char-gradient-botton"></div>
                    <img class="tempskron-char-image" src="img/fighter.png">
                    <div class="tempskron-char-text" style="">Fighter</div>
                    <div class="char-icon">
                        <img src="img/char_icons/fighter.gif">
                    </div>
                </div>
            </a>

            <a href="archer">
                <div class="tempskron-char">
                    <div class="tempskron-char-gradient-botton"></div>
                    <img class="tempskron-char-image" src="img/archer.png">
                    <div class="tempskron-char-text" style="">Archer</div>
                    <div class="char-icon">
                        <img src="img/char_icons/archer.gif">
                    </div>
                </div>
            </a>


            <a href="mechanician">
            <div class="tempskron-char">
                <div class="tempskron-char-gradient-botton"></div>
                <img class="tempskron-char-image" src="img/mechanician.png">
                <div class="tempskron-char-text" style="">Mechanician</div>
                <div class="char-icon">
                    <img src="img/char_icons/mechanician.gif">
                </div>
            </div>
            </a>

            <a href="assassin">
                <div class="tempskron-char">
                    <div class="tempskron-char-gradient-botton"></div>
                    <img class="tempskron-char-image" src="img/assassin.png">
                    <div class="tempskron-char-text" style="">Assassin</div>
                    <div class="char-icon">
                        <img src="img/char_icons/assassin.jpg">
                    </div>
                </div>
            </a>


            <a href="pikeman">
                <div class="tempskron-char">
                    <div class="tempskron-char-gradient-botton"></div>
                    <img class="tempskron-char-image" src="img/pikeman.png">
                    <div class="tempskron-char-text" style="">Pikeman</div>
                    <div class="char-icon">
                        <img src="img/char_icons/pikeman.jpg">
                    </div>
                </div>
            </a>

        </div>
    </div>

    <div class="morions" style="text-align: center;">
        <img src="img/morion.png">
        <div class="morion-title">Morion</div>
        <div style="color: #b18276;">Soul and magic</div>
        <div class="morion-chars">

            <a href="knight">
            <div class="morion-char">
                <div class="morion-char-gradient-botton"></div>
                <img class="morion-char-image" src="img/knight.png">
                <div class="morion-char-text" style="">Knight</div>
                <div class="char-icon">
                    <img src="img/char_icons/knight.gif">
                </div>
            </div>
            </a>

            <a href="shaman">
            <div class="morion-char">
                <div class="morion-char-gradient-botton"></div>
                <img class="morion-char-image" src="img/shaman.png">
                <div class="morion-char-text" style="">Shaman</div>
                <div class="char-icon">
                    <img src="img/char_icons/shaman.jpg">
                </div>
            </div>
            </a>

            <a href="priestess">
            <div class="morion-char">
                <div class="morion-char-gradient-botton"></div>
                <img class="morion-char-image" src="img/priestess.png">
                <div class="morion-char-text" style="">Priestess</div>
                <div class="char-icon">
                    <img src="img/char_icons/priestess.gif">
                </div>
            </div>
            </a>

            <a href="magician">
            <div class="morion-char">
                <div class="morion-char-gradient-botton"></div>
                <img class="morion-char-image" src="img/magician.png">
                <div class="morion-char-text" style="">Magician</div>
                <div class="char-icon">
                    <img src="img/char_icons/magician.gif">
                </div>
            </div>
            </a>

            <a href="atalanta">
            <div class="morion-char">
                <div class="morion-char-gradient-botton"></div>
                <img class="morion-char-image" src="img/atalanta.png">
                <div class="morion-char-text" style="">Atalanta</div>
                <div class="char-icon">
                    <img src="img/char_icons/atalanta.gif">
                </div>
            </div>
            </a>

        </div>
    </div>
    <!--Characters-->
    

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

    

</html>