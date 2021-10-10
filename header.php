<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index-2.html">
                        <?php
                         include 'database.php';
                         $sql_info="SELECT * FROM `menu_website` WHERE name = 'logo' ORDER BY id DESC LIMIT 1";
                         
                         mysql_query('SET CHARACTER SET utf8');
                         $show_info=$pdo->query($sql_info);
                         
                    ?>                            
                    <?php foreach($show_info as $showall_info) { ?>
                            <img src="<?php echo $showall_info['img']; ?>" alt="">
                    <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <!--<li class="active"><a href="index-2.html">Trang Chủ</a></li>-->
                                                <?php
                                        include 'database.php';
                                        $sql_menu1="SELECT * FROM `pristontale` WHERE id IN (112, 114, 115, 137, 138, 139) ";
                                        mysql_query('SET CHARACTER SET utf8');
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

                                <li><a href="categories.html">Mới biết chơi <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="categories.html">Bắt đầu chơi</a></li>
                                        <li><a href="anime-details.html">Nhân vật</a></li>
                                        <li><a href="anime-watching.html">Party</a></li>
                                        <li><a href="blog-details.html">Mua bán/Trao đổi</a></li>
                                        <li><a href="signup.html">Kết bạn</a></li>
                                        <li><a href="login.html">Warehouse</a></li>
                                        <li><a href="login.html">Giao diện trò chơi</a></li>
                                    </ul>
                                </li>

                                <li><a href="categories.html">Chuyên nghiệp <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="categories.html">Đăng kí</a></li>
                                        <li><a href="anime-details.html">Đăng nhập</a></li>
                                        <li><a href="anime-watching.html">Tải về</a></li>
                                        <li><a href="blog-details.html">Launcher</a></li></ul>
                                </li>

                                <li><a href="categories.html">Hệ thống <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="categories.html">Clan</a></li>
                                        <li><a href="anime-details.html">Aging</a></li>
                                        <li><a href="anime-watching.html">Mixing</a></li>
                                        <li><a href="blog-details.html">BlessCastle</a></li>
                                        <li><a href="signup.html">S.O.D</a></li>
                                        <li><a href="login.html">MAP</a></li>
                                        <li><a href="login.html">Monster</a></li>
                                        <li><a href="login.html">Xếp hạng</a></li>
                                        <li><a href="login.html">Nhân vật</a></li>
                                        <li><a href="login.html">Nhiệm vụ</a></li>
                                    </ul>
                                </li>

                               
                                <li><a href="categories.html">Quy định <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="categories.html">Quy định chung</a></li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>