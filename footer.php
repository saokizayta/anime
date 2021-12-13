<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="trang_chu">
                    <?php
                         include 'database.php';
                         $sql_info="SELECT * FROM `menu_website` WHERE name = 'logo_footer' ORDER BY id DESC LIMIT 1";
                         
                         mysql_query('SET CHARACTER SET utf8');
                         $show_info=$pdo->query($sql_info);
                         
                    ?>                            
                    <?php foreach($show_info as $showall_info) { ?>
                            <img src="<?php echo $showall_info['img']; ?>" alt="">
                    <?php } ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="trang_chu">Trang chủ</a></li>
                        <li><a href="dang_ki.html">Đăng kí</a></li>
                        <li><a href="tai_ve.html">Tải về</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<br> made with <font style="color:white"><i class="fa fa-keyboard-o fa-lg" aria-hidden="true"></i></font> And <font style="color:red"><i class="fa fa-heart" aria-hidden="true"></i></font> <br>by <a href="http://ptvui.com" target="_blank">PTvui Managerment</a> 
                </p>

              </div>
          </div>
      </div>
  </footer>