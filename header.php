<link rel="stylesheet" href="css/css_pristontale.css" type="text/css">
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                       <a href="trang_chu">
                        <?php
                         include 'database.php';
                         $sql_info="SELECT * FROM `menu_website` WHERE name = 'logo' ORDER BY id DESC LIMIT 1";
                         
                         //mysqli_query('SET CHARACTER SET utf8');
                         $show_info=$pdo->query($sql_info);
                         
                    ?>                            
                    <?php foreach($show_info as $showall_info) { ?>
                            <img src="<?php echo $showall_info['img']; ?>" alt="">
                    <?php } ?>
                        </a>
                    </div>
                    <!-- line run -->
                    <div class="ribon"></div>
                    <!-- end line run -->
                    
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <!--<li class="active"><a href="index-2.html">Trang Chủ</a></li>-->
                                                <?php
                                        include 'database.php';
                                        $sql_menu1="SELECT * FROM `pristontale_posts` WHERE id IN (112, 114, 115, 137, 138, 139) ";
                                       // mysqli_query('SET CHARACTER SET utf8');
                                        $show_menu1=$pdo->query($sql_menu1);
                                                ?>
                                <li><a href="#">Giới thiệu <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                                <?php
                                       foreach($show_menu1 as $showall_menu1) 
                                                { 
                                   echo'<li><a href="'.$showall_menu1['sort_link'].'.html"> '.$showall_menu1['tieude'].'</a></li>';
                                                } ?>
                                     </ul>
                                </li>
                                                <?php
                                        include 'database.php';
                                        $sql_menu2="SELECT * FROM `pristontale_posts` WHERE id IN (116, 117, 118, 119, 120, 121, 122) ";
                                        //mysqli_query('SET CHARACTER SET utf8');
                                        $show_menu2=$pdo->query($sql_menu2);
                                                ?>
                                <li><a href="#">Mới biết chơi <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                                <?php
                                       foreach($show_menu2 as $showall_menu2) 
                                                { 
                                   echo'<li><a href="'.$showall_menu2['sort_link'].'.html"> '.$showall_menu2['tieude'].'</a></li>';
                                                } ?>
                                    </ul>
                                </li>
                                                <?php
                                        include 'database.php';
                                        $sql_menu3="SELECT * FROM `pristontale_posts` WHERE id IN (19, 20, 124) ";
                                       // mysqli_query('SET CHARACTER SET utf8');
                                        $show_menu3=$pdo->query($sql_menu3);
                                                ?>
                                <li><a href="#">Chuyên nghiệp <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <?php
                                       foreach($show_menu3 as $showall_menu3) 
                                                { 
                                   echo'<li><a href="'.$showall_menu3['sort_link'].'.html"> '.$showall_menu3['tieude'].'</a></li>';
                                                } ?>
                                    
                                    </ul>
                                </li>
                                                <?php
                                        include 'database.php';
                                        $sql_menu4="SELECT * FROM `pristontale_posts` WHERE id IN (126, 127, 33, 128, 129, 130, 131, 132, 133, 134) ";
                                        //mysqli_query('SET CHARACTER SET utf8');
                                        $show_menu4=$pdo->query($sql_menu4);
                                                ?>
                                 <li><a href="#">Hệ thống <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <?php
                                    foreach($show_menu4 as $showall_menu4) 
                                                { 
                                   echo'<li><a href="'.$showall_menu4['sort_link'].'.html"> '.$showall_menu4['tieude'].'</a></li>';
                                                } ?>
                                        
                                    </ul>
                                </li>
                                            <?php
                                        include 'database.php';
                                        $sql_menu5="SELECT * FROM `pristontale_posts` WHERE id IN (135) ";
                                       // mysqli_query('SET CHARACTER SET utf8');
                                        $show_menu5=$pdo->query($sql_menu5);
                                                ?>
                                <li><a href="#">Quy định <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <?php
                                    foreach($show_menu5 as $showall_menu5) 
                                                { 
                                   echo'<li><a href="'.$showall_menu5['sort_link'].'.html"> '.$showall_menu5['tieude'].'</a></li>';
                                                } ?>
                                    </ul>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="#"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
        
    </header>