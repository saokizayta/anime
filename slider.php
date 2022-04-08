<section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
            <?php
                         include 'database.php';
                         $sql_tintuc="SELECT * FROM `pristontale` WHERE idt = 5 ORDER BY id DESC LIMIT 1";
                         $sql_sukien="SELECT * FROM `pristontale` WHERE idt = 10 ORDER BY id DESC LIMIT 1";
                         $sql_baotri="SELECT * FROM `pristontale` WHERE idt = 15 ORDER BY id DESC LIMIT 1";
                         mysqli_query('SET CHARACTER SET utf8');
                         $media_tintuc=$pdo->query($sql_tintuc);
                         $media_sukien=$pdo->query($sql_sukien);
                         $media_baotri=$pdo->query($sql_baotri);
                    ?>                            
                    <?php foreach($media_tintuc as $hienthimedia_tintuc) { 
/**
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 * @access    public
 * @param string
 * @return    string
 */
if (!function_exists('create_slug')) {
    function create_slug($string)
    {
        $search = array(
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
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

                        
                        
                        ?>
                    
                    
                
                        <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                            <div class="label">TIN TỨC</div>
                                <h2><?php echo $hienthimedia_tintuc['tieude']; ?></h2>
                                <p><?php echo $hienthimedia_tintuc['tomtatnd']; ?></p>
                                <a href="<?php echo create_slug($hienthimedia_tintuc['tieude']); ?>-<?php echo $hienthimedia_tintuc['id']; ?>"><span>Chi tiết..</span> <i class="fa fa-angle-right"></i></a>
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
                                <a href="<?php echo create_slug($hienthimedia_sukien['tieude']); ?>-<?php echo $hienthimedia_sukien['id'];?>"><span>Chi tiết..</span> <i class="fa fa-angle-right"></i></a>
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
                                <a href="<?php echo create_slug($hienthimedia_baotri['tieude']); ?>-<?php echo $hienthimedia_baotri['id'];?>"><span>Chi tiết..</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>