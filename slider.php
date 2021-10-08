<section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
            <?php
                         include 'database.php';
                         $sql_tintuc="SELECT * FROM `pristontale` WHERE idt = 5 ORDER BY id DESC LIMIT 1";
                         $sql_sukien="SELECT * FROM `pristontale` WHERE idt = 10 ORDER BY id DESC LIMIT 1";
                         $sql_baotri="SELECT * FROM `pristontale` WHERE idt = 15 ORDER BY id DESC LIMIT 1";
                         mysql_query('SET CHARACTER SET utf8');
                         $media_tintuc=$pdo->query($sql_tintuc);
                         $media_sukien=$pdo->query($sql_sukien);
                         $media_baotri=$pdo->query($sql_baotri);
                    ?>                            
                    <?php foreach($media_tintuc as $hienthimedia_tintuc) { ?>
                    
                    
                
                        <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                            <div class="label">TIN TỨC</div>
                                <h2><?php echo $hienthimedia_tintuc['tieude']; ?></h2>
                                <p><?php echo $hienthimedia_tintuc['tomtatnd']; ?></p>
                                <a href="#"><span>Chi tiết..</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                 <?php } ?>
                 <?php foreach($media_sukien as $hienthimedia_sukien) { ?>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">SỰ KIỆN</div>
                                <h2><?php echo $hienthimedia_sukien['tieude']; ?></h2>
                                <p><?php echo $hienthimedia_sukien['tomtatnd']; ?></p>
                                <a href="#"><span>Chi tiết..</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach($media_baotri as $hienthimedia_baotri) { ?>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-3.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">BẢO TRÌ</div>
                                <h2><?php echo $hienthimedia_baotri['tieude']; ?></h2>
                                <p><?php echo $hienthimedia_baotri['tomtatnd']; ?></p>
                                <a href="#"><span>Chi tiết..</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>