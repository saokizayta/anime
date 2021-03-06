<!DOCTYPE html>
<html lang="uft-8">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="description" content="PTvui Private Server">
    <meta name="keywords" content="ptvui, pristontale, priston tale, priston">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTvui - Priston Tale</title>

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
    <link rel="stylesheet" href="img/character/png/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include('header.php') ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <?php include('slider.php') ?>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    
    <section class="product spad">
        <div class="container">
 

        
        
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    
                                    <?php 
                                    /**
 * Chuy???n ?????i chu???i k?? t??? th??nh d???ng slug d??ng cho vi???c t???o friendly url.
 * @access    public
 * @param string
 * @return    string
 */
if (!function_exists('create_slug')) {
    function create_slug($string)
    {
        $search = array(
            '#(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)#',
            '#(??|??|???|???|???|??|???|???|???|???|???)#',
            '#(??|??|???|???|??)#',
            '#(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)#',
            '#(??|??|???|???|??|??|???|???|???|???|???)#',
            '#(???|??|???|???|???)#',
            '#(??)#',
            '#(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)#',
            '#(??|??|???|???|???|??|???|???|???|???|???)#',
            '#(??|??|???|???|??)#',
            '#(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)#',
            '#(??|??|???|???|??|??|???|???|???|???|???)#',
            '#(???|??|???|???|???)#',
            '#(??)#',
            "/[^a-zA-Z0-9\-\_.]/",
        );
        $replace = array(
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        );
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
    }
}
                                       include 'database.php';
                                       $sql_thongbao="SELECT * FROM `pristontale_posts` WHERE idt IN (5, 10, 15)  ORDER BY id DESC LIMIT 3";
                                      // mysqli_query('SET CHARACTER SET utf8');
                                       date_default_timezone_set('Etc/GMT+7');
                                       $media_thongbao=$pdo->query($sql_thongbao);
                                    
                                       function timeAgo($time_ago){
                                        $cur_time 	= time();
                                        $time_elapsed 	= $cur_time - $time_ago;
                                        $seconds 	= $time_elapsed ;
                                        $minutes 	= round($time_elapsed / 60 );
                                        $hours 		= round($time_elapsed / 3600);
                                        $days 		= round($time_elapsed / 86400 );
                                        $weeks 		= round($time_elapsed / 604800);
                                        $months 	= round($time_elapsed / 2600640 );
                                        $years 		= round($time_elapsed / 31207680 );
                                        // Seconds
                                        if($seconds <= 60){
                                            echo "V??i gi??y tr?????c";
                                        }
                                        //Minutes
                                        else if($minutes <=60){
                                            if($minutes==1){
                                                echo "1 ph??t tr?????c";
                                            }
                                            else{
                                                echo "$minutes ph??t tr?????c";
                                            }
                                        }
                                        //Hours
                                        else if($hours <=24){
                                            if($hours==1){
                                                echo "1 gi??? tr?????c";
                                            }else{
                                                echo "$hours gi??? tr?????c";
                                            }
                                        }
                                        //Days
                                        else if($days <= 7){
                                            if($days==1){
                                                echo "h??m qua";
                                            }else{
                                                echo "$days ng??y tr?????c";
                                            }
                                        }
                                        //Weeks
                                        else if($weeks <= 4.3){
                                            if($weeks==1){
                                                echo "1 tu???n tr?????c";
                                            }else{
                                                echo "$weeks tu???n tr?????c";
                                            }
                                        }
                                        //Months
                                        else if($months <=12){
                                            if($months==1){
                                                echo "1 th??ng tr?????c";
                                            }else{
                                                echo "$months th??ng tr?????c";
                                            }
                                        }
                                        //Years
                                        else{
                                            if($years==1){
                                                echo "1 n??m tr?????c";
                                            }else{
                                                echo "$years n??m tr?????c";
                                            }
                                        }
                                    }
                                    
                                    
                                    ?>

                                    <h4>TH??NG B??O</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Xem t???t c??? <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           

                            <?php foreach($media_thongbao as $hienthimedia_thongbao) {


                            
                            $curenttime = $hienthimedia_thongbao['date'];
                            $time_ago = strtotime($curenttime);
                           echo ' <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="'.$hienthimedia_thongbao['img_230x325'].'">';
                                        if ($hienthimedia_thongbao['idt'] == 5) {
                                            echo'<div class="ep">TIN T???C</div>';
                                        } elseif ($hienthimedia_thongbao['idt'] == 10) {
                                            echo'<div class="ep">S??? KI???N</div>';
                                        } elseif ($hienthimedia_thongbao['idt'] == 15) {
                                            echo'<div class="ep">B???O TR??</div>';
                                        } else {
                                            echo'<div class="ep">System</div>';
                                        }

                                    
                                      echo' <div class="comment"><i class="fa fa-clock-o"></i> ';echo timeAgo($time_ago);echo'</div>
                                        <div class="view"><i class="fa fa-eye"></i>';
                                        
                                        if ($hienthimedia_thongbao['viewer'] < 1000){
                                            echo  ' ';echo  $hienthimedia_thongbao['viewer'];
                                        } else {
                                            echo ' 1 K';
                                        }

                                        echo'</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                           <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                                            
                                        </ul>
                                        <h5><a href="'.create_slug($hienthimedia_thongbao['tieude']).'-'.$hienthimedia_thongbao['id'].'">'.$hienthimedia_thongbao['tieude'].'</a></h5>
                                    </div>
                                </div>
                            </div>';
                              }
                            ?>
                        </div> 
                    </div>
             
        <section class="blog spad">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/character/png/blog_morion.png" style="background-image: url(&quot;img/blog/blog-1.jpg&quot;);">
                                <div class="blog__item__text">
                                   
                                <h4 style="color:white;">Morion</h4></p>
                                    <font style="color: white"> Soul and magic </font>
                                </div>
                            </div>
                        </div>
                                                <?php
                                        include 'database.php';
                                        $sql_char_morion="SELECT * FROM `pristontale_posts` WHERE id IN (40, 41, 42, 43, 49) ORDER BY RAND() LIMIT 2";
                                       // mysqli_query('SET CHARACTER SET utf8');
                                        $show_char_morion=$pdo->query($sql_char_morion);
                                                ?>
                                                <?php
                                    foreach($show_char_morion as $showall_char_morion_randoms) 
                                                {
                        echo '<a href="'.$showall_char_morion_randoms['sort_link'].'">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item small__item set-bg" data-setbg="img/character/png/'.$showall_char_morion_randoms['img_230x325'].'.png" style="background-image: url();">
                            </a>
                                <div class="blog__item__text">
                                    <!--<p><span class="icon_calendar"></span> 01 March 2020</p>-->
                                    <h4><a href="'.$showall_char_morion_randoms['sort_link'].'">'.$showall_char_morion_randoms['tieude'].'</a></h4>
                                </div>
                            </div>
                        </div>';
                                                }?>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                                                <?php
                                        include 'database.php';
                                        $sql_char_tempskron="SELECT * FROM `pristontale_posts` WHERE id IN (44, 45, 46, 47, 48) ORDER BY RAND() LIMIT 2";
                                       // mysqli_query('SET CHARACTER SET utf8');
                                        $show_char_tempskron=$pdo->query($sql_char_tempskron);
                                                ?>
                                                <?php
                                    foreach($show_char_tempskron as $showall_char_tempskron_randoms) 
                                                {
                        echo '<div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="'.$showall_char_tempskron_randoms['sort_link'].'"><div class="blog__item small__item set-bg" data-setbg="img/character/png/'.$showall_char_tempskron_randoms['img_230x325'].'.png" style="background-image: url(&quot;img/blog/blog-4.jpg&quot;);"></a>
                                <div class="blog__item__text">
                                    <!--<p><span class="icon_calendar"></span> 01 March 2020</p>-->
                                    <h4><a href="'.$showall_char_tempskron_randoms['sort_link'].'">'.$showall_char_tempskron_randoms['tieude'].'</a></h4>
                                </div>
                            </div>
                        </div>';
                                                }?>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/character/png/blog_tempskron.png" style="background-image: url(&quot;img/blog/blog-6.jpg&quot;);">
                                <div class="blog__item__text">
                                    <!--<p><span class="icon_calendar"></span> 01 March 2020</p>-->
                                    <h4 style="color:white;">Tempskron</h4> </p>
                                    <font style="color: white"> Power and technology </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- fetch funny -->
<?php //include 'fetch-funny.php'; ?>
    <div id="link_funnydata">

    </div>
<!-- fetch funny -->
 <div class="recent__product">
                        
                        
                        
                    </div>
                    
                </div>

                
                   
                

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>C</h5>
                            </div>
                            <ul class="filter__controls">
                            <li class="active" data-filter="*"></li>
                                <li data-filter=".day"><img src="img/character/png/70x32_system.png" alt=""></li>
                                <li data-filter=".week"><img src="img/character/png/70x32_characer.png" alt=""></li>
                                <li data-filter=".month"><img src="img/character/png/70x32_quest.png" alt=""></li>
                                <li data-filter=".years"><img src="img/character/png/70x32_services.png" alt=""></li>
                            </ul>
                            <div class="filter__gallery">
                            
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale_posts` WHERE id IN (20)";
                                        //mysqli_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {
                                                    echo'
                           
                            <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <a href="'.$showall_system['sort_link'].'.html"><div class="download">T???I GAME</div></a>
                                <!--<a href="download"><img src="img/character/png/'.$showall_system['img_230x325'].'" alt=""></a>-->
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                            </div>
                                               '; 
                                                }
                                                ?>
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale_posts` WHERE id IN (19)";
                                        //mysqli_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {
                                                    echo'
                          
                           <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <a href="'.$showall_system['sort_link'].'.html"><div class="register">????NG K??</div></a>
                                <!--<a href="register"><img src="img/character/png/'.$showall_system['img_230x325'].'" alt=""></a>-->
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                            </div>
                                               '; 
                                                }
                                                ?>
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale_posts` WHERE id IN (31)";
                                        //mysqli_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {
                                                    echo'
                           
                            <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <a href="'.$showall_system['sort_link'].'.html"><div class="quest">NHI???M V???</div></a>
                                <!--<a href="quest"><img src="img/character/png/'.$showall_system['img_230x325'].'" alt=""></a>-->
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                            </div>
                                               ';
                                                }
                                                ?>
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale_posts` WHERE id IN (24)";
                                        //mysqli_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {
                                                    echo'
                            
                            <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <a href="'.$showall_system['sort_link'].'.html"><div class="donate">T??I TR???</div></a>
                                <!--<a href="donate"><img src="img/character/png/'.$showall_system['img_230x325'].'" alt=""></a>-->
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                           </div>
                           
                                               '; 
                                                }
                                                ?>
                                    
                                    
                            <div class="product__sidebar__view__item__char set-bg mix week"
                                data-setbg="img/character/png/blog_tempskron1.png"></a>
                                <div class="blog__item__text__char">
                                  <h4><a href="tempskron">Tempskron</a></h4>
                                    <font style="color: white"> Power and technology </font>
                                </div>
                            </div>
                            <div class="product__sidebar__view__item__char set-bg mix week"
                                data-setbg="img/character/png/blog_morion1.png"></a>
                                <div class="blog__item__text__char">
                                    <!--<p><span class="icon_calendar"></span> 01 March 2020</p>-->
                                    <h4><a href="morion">Morion</a></h4>
                                    <font style="color: white"> Soul and magic </font>
                                </div>
                            </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_solo_quests.png">
                            <div class="solo_quests">Solo Quests</div>
                        </div>
                       
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_beginner_quests.png">
                            <div class="beginner">Beginner's</div>
                        </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_exp_quests.png">
                            <div class="exp_quests">EXP Quests</div>
                        </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_daily_quests.png">
                            <div class="daily_quests">Daily Quests</div>
                        </div>

                        <div class="product__sidebar__view__item__services set-bg mix years"
                            data-setbg="img/character/png/services_1.png">
                            <div class="tier4">D???ch v??? m??y ch??? Tier 4 (Classical)</div>
                        </div>
                        <div class="product__sidebar__view__item__services set-bg mix years"
                            data-setbg="img/character/png/services_2.png">
                            <div class="tier5">D???ch v??? m??y ch??? Tier 5 (New UI)</div>
                        </div>
                       </div>
                       <div class="anime__details__sidebar">
                            <div class="section-title">
                               <h5> <img src="img/character/png/topserver.png" alt="" hieght="45px" width="329px"> </h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/character/png/360x190_morion_top.png" style="background-image: url(&quot;img/sidebar/tv-1.jpg&quot;);">
                                <!--<div class="ep">18 / ?</div>-->
                <?php
                //char 1
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 1 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_1"><img src="img/character/newpngchar/1.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 2
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 2 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_2"><img src="img/character/newpngchar/2.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 3
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 3 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_3"><img src="img/character/newpngchar/3.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 4
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 4 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_4"><img src="img/character/newpngchar/4.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 5
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 5 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_5"><img src="img/character/newpngchar/5.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>

                                <!--<div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>-->
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/character/png/360x190_tempskron_top.png" style="background-image: url(&quot;img/sidebar/tv-2.jpg&quot;);">
                                <!--<div class="ep">18 / ?</div>-->
                <?php
                //char 6
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 6 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_1"><img src="img/character/newpngchar/6.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 7
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 7 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_2"><img src="img/character/newpngchar/7.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 8
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 8 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_3"><img src="img/character/newpngchar/8.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 9
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 9 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_4"><img src="img/character/newpngchar/9.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                <?php
                //char 10
                    include_once "incluir/configura.php";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query = "SELECT TOP 1 * FROM [userdb].[dbo].[CharacterInfo] where JobCode = 10 ORDER BY Level DESC";
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $get_JobCode = odbc_result($qt,8);
                    $get_Name = odbc_result($qt,3);
                    }
                         echo '<div class="view_char_5"><img src="img/character/newpngchar/10.png" alt="" height="28px" width="28px"> '.$get_Name.'</div>';
                ?>
                              
                                <!--<div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>-->
                            </div>
                        </div>
                        <div class="section-title">
                               <h5> <img src="img/character/png/bc_sod.png" alt="" hieght="45px" width="329px"> </h5>
                               </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/character/png/360x190_bc.png" style="background-image: url(&quot;img/sidebar/tv-1.jpg&quot;);">
                            <div class="view_clan_bc_icon"><img src="img/character/newpngchar/bc1.png" alt="" height="64px" width="64px">
    <?php
                    include_once "incluir/configura.php";
                    
                    $connection = odbc_connect( $connection_string, $user, $pass );

                    $query = "SELECT TOP 1 * FROM [serverdb].[dbo].[BlessCastleSettings] ";

                    $q = odbc_exec($connection, $query);
                    $qt = odbc_do($connection, $query);
                    $i = 0;
                    while(odbc_fetch_row($qt)){
                    $ClanID = odbc_result($qt,1);
                    }
                   
                    $IP = "http://ptvui.ddns.net:8/anImage/";
                    $connection = odbc_connect( $connection_string, $user, $pass );
                    $query2 = "SELECT TOP 1 * FROM [ClanDB].[dbo].[CL] WHERE MIconCnt = $ClanID";
                    $q2 = odbc_exec($connection, $query2);
                    $qt2 = odbc_do($connection, $query2);
                    while(odbc_fetch_row($qt2)){
                    $i = 0;
                    $ClanName = odbc_result($qt2,2);
                    $ClanZang = odbc_result($qt2,6);
                    }
                   
    if ( $ClanZang = "") {

     echo 'Ch??a c???p nh???t';
     # code...
        } else  { 
           
      echo $ClanName;

       } 
?>

                            
                            </div>
                            
                            <!--<div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>-->
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/character/png/360x190_sod.png" style="background-image: url(&quot;img/sidebar/tv-2.jpg&quot;);">
                            <?php
	$connect['host'] = "remote.myvnc.com";
	$connect['user'] = "sb";
	$connect['pass'] = "123456";
	$connect['db'] = "ClanDB";

	$connect['string'] = "DRIVER={SQL Server};";
	$connect['string'] .= "SERVER=".$connect['host'].";";
	$connect['string'] .= "DATABASE=".$connect['db'];

	try{
		$connect['connection'] = @odbc_connect($connect['string'],$connect['user'],$connect['pass']);
	} catch(Exception $e){
		$connect['connection'] = FALSE;
		echo('Kh??ng th??? k???t n???i ?????n m??y ch???.<br>');
		echo('Error: '.$e);
	}

	$query = "SELECT TOP 3 * FROM [ClanDB].[dbo].[BellatraTeamScore] ORDER BY TotalPoint DESC";
	
		$q = odbc_do($connect['connection'],$query);
	$i = 0;
	while(odbc_fetch_row($q)){
	$i++;

    if ($i == 1) {
        echo' <div class="view_clan_sod_gold"><img src="img/character/newpngchar/sod1.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>';
    } elseif ($i == 2) {
        echo' <div class="view_clan_sod_silver"><img src="img/character/newpngchar/sod2.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>';
    } elseif ($i == 3) {
        echo' <div class="view_clan_sod_bronze"><img src="img/character/newpngchar/sod3.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>';
    }
        }
	
        if(!$i>0)
	   echo '<div class="view_clan_sod_silver">Ch??a c?? d??? li???u</div>';

?>
</div>
                            
                               
                          <?php include_once('status_server.php'); ?>
                        
                       
                        </div>
                        
                     </div>
                     </div>

                     
    <?php //include('newcomment.php') ?>
    </section>
<!-- Product Section End -->

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
<script src="https://kit.fontawesome.com/2080506b97.js" crossorigin="anonymous"></script>


</body>




</html>
<script>
        function loadXMLDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("link_funnydata").innerHTML =
            this.responseText;
            }
        };
        xhttp.open("GET", "fetch-funny.php", true);
        xhttp.overrideMimeType('text/xml; charset=UTF-8');
        xhttp.send();
        }
        setInterval(function(){
            loadXMLDoc();
        },10000)
        window.onload = loadXMLDoc();
</script>