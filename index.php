<!DOCTYPE html>
<html lang="US">


<!-- Mirrored from technext.github.io/anime/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Oct 2021 11:58:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="priston tale, pristontale, ptvui">
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
                                       include 'database.php';
                                       $sql_thongbao="SELECT * FROM `pristontale` WHERE idt IN (5, 10, 15)  ORDER BY id DESC LIMIT 6";
                                       mysql_query('SET CHARACTER SET utf8');
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
                                            echo "Vài giây trước";
                                        }
                                        //Minutes
                                        else if($minutes <=60){
                                            if($minutes==1){
                                                echo "1 phút trước";
                                            }
                                            else{
                                                echo "$minutes phút trước";
                                            }
                                        }
                                        //Hours
                                        else if($hours <=24){
                                            if($hours==1){
                                                echo "1 giờ trước";
                                            }else{
                                                echo "$hours giờ trước";
                                            }
                                        }
                                        //Days
                                        else if($days <= 7){
                                            if($days==1){
                                                echo "hôm qua";
                                            }else{
                                                echo "$days ngày trước";
                                            }
                                        }
                                        //Weeks
                                        else if($weeks <= 4.3){
                                            if($weeks==1){
                                                echo "1 tuần trước";
                                            }else{
                                                echo "$weeks tuần trước";
                                            }
                                        }
                                        //Months
                                        else if($months <=12){
                                            if($months==1){
                                                echo "1 tháng trước";
                                            }else{
                                                echo "$months tháng trước";
                                            }
                                        }
                                        //Years
                                        else{
                                            if($years==1){
                                                echo "1 năm trước";
                                            }else{
                                                echo "$years năm trước";
                                            }
                                        }
                                    }
                                    
                                    
                                    ?>

                                    <h4>THÔNG BÁO</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Xem tất cả <span class="arrow_right"></span></a>
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
                                            echo'<div class="ep">TIN TỨC</div>';
                                        } elseif ($hienthimedia_thongbao['idt'] == 10) {
                                            echo'<div class="ep">SỰ KIỆN</div>';
                                        } elseif ($hienthimedia_thongbao['idt'] == 15) {
                                            echo'<div class="ep">BẢO TRÌ</div>';
                                        } else {
                                            echo'<div class="ep">System</div>';
                                        }

                                    
                                      echo' <div class="comment"><i class="fa fa-clock-o"></i> ';echo timeAgo($time_ago);echo'</div>
                                        <div class="view"><i class="fa fa-eye"></i> '.$hienthimedia_thongbao['viewer'].'</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                           <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                                            
                                        </ul>
                                        <h5><a href="#">'.$hienthimedia_thongbao['tieude'].'</a></h5>
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
                                   
                                    <h4><a href="#">Morion</a></h4></p>
                                    <font style="color: white"> Soul and magic </font>
                                </div>
                            </div>
                        </div>
                                                <?php
                                        include 'database.php';
                                        $sql_char_morion="SELECT * FROM `pristontale` WHERE id IN (40, 41, 42, 43, 49) ORDER BY RAND() LIMIT 2";
                                        mysql_query('SET CHARACTER SET utf8');
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
                                        $sql_char_tempskron="SELECT * FROM `pristontale` WHERE id IN (44, 45, 46, 47, 48) ORDER BY RAND() LIMIT 2";
                                        mysql_query('SET CHARACTER SET utf8');
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
                                    <h4><a href="#">Tempskron</a></h4> </p>
                                    <font style="color: white"> Power and technology </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Funny <!DOCTYPE html></h5>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/character/png/1.png" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Pikeman - <span>1 Hour ago</span></h6>
                                    <p>Drop 1 images =></p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-2.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-3.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-4.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-5.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-6.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
            </div>

            <?php
	$connect['host'] = "ptvui.ddns.net";
	$connect['user'] = "sb";
	$connect['pass'] = "123456";
	$connect['db'] = "userdb";

	$connect['string'] = "DRIVER={SQL Server};";
	$connect['string'] .= "SERVER=".$connect['host'].";";
	$connect['string'] .= "DATABASE=".$connect['db'];

	try{
		$connect['connection'] = @odbc_connect($connect['string'],$connect['user'],$connect['pass']);
	} catch(Exception $e){
		$connect['connection'] = FALSE;
		echo('Não foi possivel conectar com o SQL!<br>');
		echo('Error: '.$e);
	}

	$query = "SELECT TOP 10 * FROM [userdb].[dbo].[CharacterInfo] WHERE 
	(
	Name NOT LIKE 'HoChiMinh' and 
	Name!='BacHo' and 
	Name!='[GM]Skull' and 
	Name!='MG' and 
	Name!='Knight' and 
	Name!='HelloWorld' and 
	Name!='GM' and 
	Name!='NewSupport' and
  Name!='3DVungQue' and
  Name!='ADMAtalanta' and
  Name!='GMAssasin'
	) ORDER BY Level DESC";
	
		$q = odbc_do($connect['connection'],$query);
	$i = 0;
	while(odbc_fetch_row($q)){
	$i++;
	    echo '<td width="14%">'.$i.'</td>';
    //echo '<td align="center" width="50" bgcolor="#996633">'.odbc_result ($q,"UserID").'</td>';
    echo '<td align="left" width="10" height="24"><img id="imgtop" src="classe/'.odbc_result($q,"JobCode").'.png" width="20" height="18" /></td>';
	echo '<td align="left" width="10">'.odbc_result($q,"Name").'</td>';
	echo '<td width="6%">'.odbc_result($q,"Level").'</td>';
      
echo '</tr>';
	}
	if(!$i>0)
	   echo "<center>Chưa cập nhật";

?>

        <div class="recent__product">
                        
                        
                        
                    </div>
                    
                </div>

                
                   
                

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>M</h5>
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
                                        $sql_system="SELECT * FROM `pristontale` WHERE id IN (20)";
                                        mysql_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {echo'
                           
                            <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                            </div>
                                               '; }
                                                ?>
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale` WHERE id IN (19)";
                                        mysql_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {echo'
                          
                           <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                            </div>
                                               '; }
                                                ?>
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale` WHERE id IN (31)";
                                        mysql_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {echo'
                           
                            <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'">
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                            </div>
                                               '; }
                                                ?>
                                                <?php
                                        include 'database.php';
                                        $sql_system="SELECT * FROM `pristontale` WHERE id IN (24)";
                                        mysql_query('SET CHARACTER SET utf8');
                                        $show_system=$pdo->query($sql_system);
                                                ?>
                                                <?php
                                    foreach($show_system as $showall_system) 
                                                {echo'
                            
                            <div class="product__sidebar__view__item__topview set-bg mix day"
                                data-setbg="img/character/png/'.$showall_system['img_230x325'].'"></a>
                                <!--<div class="ep">'.$showall_system['tieude'].'</div>-->
                           </div>
                           
                                               '; }
                                                ?>
                                    
                                    
                            <div class="product__sidebar__view__item__char set-bg mix week"
                                data-setbg="img/character/png/blog_tempskron1.png"></a>
                                <div class="blog__item__text__char">
                                  <h4><a href="#">Tempskron</a></h4>
                                    <font style="color: white"> Power and technology </font>
                                </div>
                            </div>
                            <div class="product__sidebar__view__item__char set-bg mix week"
                                data-setbg="img/character/png/blog_morion1.png"></a>
                                <div class="blog__item__text__char">
                                    <!--<p><span class="icon_calendar"></span> 01 March 2020</p>-->
                                    <h4><a href="#">Tempskron</a></h4>
                                    <font style="color: white"> Power and technology </font>
                                </div>
                            </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_solo_quests.png">
                        </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_beginner_quests.png">
                        </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_exp_quests.png">
                        </div>
                        <div class="product__sidebar__view__item__quest set-bg mix month"
                            data-setbg="img/character/png/quest_daily_quests.png">
                        </div>

                        <div class="product__sidebar__view__item__services set-bg mix years"
                            data-setbg="img/character/png/services_1.png">
                            <div class="ep">Dịch vụ máy chủ Tier 4 (Classical)</div>
                        </div>
                        <div class="product__sidebar__view__item__services set-bg mix years"
                            data-setbg="img/character/png/services_2.png">
                            <div class="ep">Dịch vụ máy chủ Tier 5 (New UI)</div>
                        </div>
                       </div>
                       <div class="anime__details__sidebar">
                            <div class="section-title">
                               <h5> <img src="img/character/png/topserver.png" alt="" hieght="45px" width="329px"> </h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/character/png/360x190_morion_top.png" style="background-image: url(&quot;img/sidebar/tv-1.jpg&quot;);">
                                <!--<div class="ep">18 / ?</div>-->
                                <div class="view_char_1"><img src="img/character/newpngchar/1.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_2"><img src="img/character/newpngchar/2.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_3"><img src="img/character/newpngchar/3.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_4"><img src="img/character/newpngchar/4.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_5"><img src="img/character/newpngchar/5.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <!--<div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>-->
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/character/png/360x190_tempskron_top.png" style="background-image: url(&quot;img/sidebar/tv-2.jpg&quot;);">
                                <!--<div class="ep">18 / ?</div>-->
                                <div class="view_char_1"><img src="img/character/newpngchar/6.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_2"><img src="img/character/newpngchar/7.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_3"><img src="img/character/newpngchar/8.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_4"><img src="img/character/newpngchar/9.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                                <div class="view_char_5"><img src="img/character/newpngchar/10.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
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

     echo 'Chưa cập nhật';
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
                            <div class="view_clan_sod_gold"><img src="img/character/newpngchar/sod1.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                            <div class="view_clan_sod_silver"><img src="img/character/newpngchar/sod2.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                            <div class="view_clan_sod_bronze"><img src="img/character/newpngchar/sod3.png" alt="" height="28px" width="28px"> CHARNAME LEVEL</div>
                            </div>
                        </div>
                     </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-1.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-2.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-3.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-4.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Monogatari Series: Second Season</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
    </div>
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


</body>


<!-- Mirrored from technext.github.io/anime/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Oct 2021 11:58:49 GMT -->
</html>