<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<!-- <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> -->

<?php 
//header("Content-type: text/html; charset=utf-8");
include_once 'conn/connection-fetch-funny.php';
?>

                        <?php
                            //date_default_timezone_set('Etc/GMT+7');
                            function timeAgo($time_ago){
                                //date_default_timezone_set('Etc/GMT+7'); 
                            //$format = "%H:%M:%S %d-%B-%Y";
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
                                echo "few seconds ago";
                            }
                            else if($seconds < 0){
                                echo "few seconds ago";
                            }
                            //Minutes
                            else if($minutes <= 60){
                                if($minutes==1){
                                    echo "one minute ago";
                                }
                                else{
                                    echo "$minutes minutes ago";
                                }
                            }
                            //Hours
                            else if($hours <=24){
                                if($hours==1){
                                    echo "an hour ago";
                                }else{
                                    echo "$hours hours ago";
                                }
                            }
                            //Days
                            else if($days <= 7){
                                if($days==1){
                                    echo "yesterday";
                                }else{
                                    echo "$days days ago";
                                }
                            }
                            //Weeks
                            else if($weeks <= 4.3){
                                if($weeks==1){
                                    echo "a week ago";
                                }else{
                                    echo "$weeks weeks ago";
                                }
                            }
                            //Months
                            else if($months <=12){
                                if($months==1){
                                    echo "a month ago";
                                }else{
                                    echo "$months months ago";
                                }
                            }
                            //Years
                            else{
                                if($years==1){
                                    echo "one year ago";
                                }else{
                                    echo "$years years ago";
                                }
                            }
                            }

                          ?>

                        
                            <div class="anime__details__review">
                            <div class="section-title">
                                <h5>LOGIN GAME Gift ! <!DOCTYPE html></h5>
                            </div>
<?php

    $query = " SELECT TOP 4 * FROM [logdb].[dbo].[OnlineRewardLog] Order by Date desc ";
	
	$q = odbc_do($connect['connection'],$query);
	$i = 0;
    // $curenttime = odbc_result($q,"Date");
    // $time_ago = strtotime($curenttime);
	while(odbc_fetch_row($q)){
        // $curenttime=odbc_result($q,"Date");
        // $time_ago =strtotime($curenttime);
        // $timenow = time();
      
	$i++;
    // date_default_timezone_set("Asia/Ho_Chi_Minh");
	// echo $time_ago;echo'<br>';
    //echo $i;
    // ////////////////////////////////////
    $name = odbc_result($q,"Name");
    $query_getcharjob = " SELECT TOP 3 * FROM [userdb].[dbo].[CharacterInfo] where Name = '$name' ";
	
	$q_getcharjob = odbc_do($connect['connection'],$query_getcharjob);
	$i_getcharjob = 0;
    // $curenttime = odbc_result($q,"Date");
    // $time_ago = strtotime($curenttime);
	while(odbc_fetch_row($q_getcharjob)){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $curenttime=odbc_result($q,"Date");
        $time_ago =strtotime($curenttime);
        $timenow = time();
        $t=time();
       
      
	$i_getcharjob++;
echo'
    <div class="anime__review__item">
    <div class="anime__review__item__pic">
        <img src="img/character/png/';echo odbc_result($q_getcharjob,"JobCode");echo'.png" alt="">
    </div>
    <div class="anime__review__item__text">
        <h6>'.odbc_result($q,"Name").' - ';echo timeAgo($time_ago);echo'<span>';echo'</span></h6>
        <p>Tham gia trò chơi nhận được [ '.odbc_result($q,"ItemName").' ] - '.odbc_result($q,"Quantity").' ea</p>
    </div>
</div>
';
	}
}
	if(!$i>0)
	   echo "<center>Hệ thống bị gián đoạn hoặc chưa có dữ liệu.</center>";
    //    echo .odbc_result($q,"Name").
 
?>
</div>

<?php 
include_once 'conn/connection-fetch-funny.php';
?>

                            <?php
                        //date_default_timezone_set('Etc/GMT+7');
                        function timeAfter($time_ago){
                        //$format = "%H:%M:%S %d-%B-%Y";
                        $cur_time 	= time();
                        $time_elapsed 	= $time_ago - $cur_time;
                        $seconds 	= $time_elapsed ;
                        $minutes 	= round($time_elapsed / 60 );
                        $hours 		= round($time_elapsed / 3600);
                        $days 		= round($time_elapsed / 86400 );
                        $weeks 		= round($time_elapsed / 604800);
                        $months 	= round($time_elapsed / 2600640 );
                        $years 		= round($time_elapsed / 31207680 );
                        // Seconds
                        if($seconds <= 60){
                            echo "Còn $seconds giây";
                        }
                        //Minutes
                        else if($minutes <=60){
                            if($minutes==1){
                                echo "1 phút nữa";
                            }
                            else{
                                echo "còn $minutes phút";
                            }
                        }
                        //Hours
                        else if($hours <=24){
                            if($hours==1){
                                echo "còn 1 giờ";
                            }else{
                                echo "còn $hours giờ";
                            }
                        }
                        //Days
                        else if($days <= 7){
                            if($days==1){
                                echo "còn 1 ngày";
                            }else{
                                echo "còn $days ngày";
                            }
                        }
                        //Weeks
                        else if($weeks <= 4.3){
                            if($weeks==1){
                                echo "còn 1 tuần";
                            }else{
                                echo "còn $weeks tuần";
                            }
                        }
                        //Months
                        else if($months <=12){
                            if($months==1){
                                echo "còn 1 tháng";
                            }else{
                                echo "còn $months phút";
                            }
                        }
                        //Years
                        else{
                            if($years==1){
                                echo "còn 1 năm";
                            }else{
                                echo "$years years ago";
                            }
                        }
                        }
                        
                        ?>
                        <?php
                        date_default_timezone_set('Etc/GMT+7');
                        function timeProgress($time_progress){
                            //$format = "%H:%M:%S %d-%B-%Y";
                            
                            //$cur_time 	= $time_progrees_end;
                            $time_elapsed 	= $time_progress;
                            $seconds 	= $time_elapsed ;
                            $minutes 	= round($time_elapsed / 60 );
                            $hours 		= round($time_elapsed / 3600);
                            $days 		= round($time_elapsed / 86400 );
                            $weeks 		= round($time_elapsed / 604800);
                            $months 	= round($time_elapsed / 2600640 );
                            $years 		= round($time_elapsed / 31207680 );
                            // Seconds
                            if($seconds <= 60){
                                echo "trong $seconds giây";
                            }
                            //Minutes
                            else if($minutes <=60){
                                if($minutes==1){
                                    echo "trong 1 phút";
                                }
                                else{
                                    echo "trong $minutes phút";
                                }
                            }
                            //Hours
                            else if($hours <=24){
                                if($hours==1){
                                    echo "trong 1 giờ";
                                }else{
                                    echo "trong $hours giờ";
                                }
                            }
                            //Days
                            else if($days <= 7){
                                if($days==1){
                                    echo "trong 1 ngày";
                                }else{
                                    echo "trong $days ngày";
                                }
                            }
                            //Weeks
                            else if($weeks <= 4.3){
                                if($weeks==1){
                                    echo "trong 1 tuần";
                                }else{
                                    echo "trong $weeks tuần";
                                }
                            }
                            //Months
                            else if($months <=12){
                                if($months==1){
                                    echo "trong 1 tháng";
                                }else{
                                    echo "trong $months tháng";
                                }
                            }
                            //Years
                            else{
                                if($years==1){
                                    echo "trong 1 năm";
                                }else{
                                    echo "trong $years năm";
                                }
                            }
                            }
                        
                        ?>        

                        
                            <div class="anime__details__review">
                            <div class="section-title">
                                <h5>SỰ KIỆN TRONG GAME</h5>
                            </div>
                            <div class="row">



                     <?php
                     
                        include 'database.php';
                        //$id=$_GET['id'];
                        $sql_get_ev="SELECT * FROM `event`";
                        //$set_viewer = "UPDATE `event` SET views = views + 1 Where id='$id'";
                        //mysqli_query('SET CHARACTER SET utf8');
                        $show_event=$pdo->query($sql_get_ev);
                        //$update_views=$pdo->query($set_viewer);
                                             
                        ?>
                                    <?php
                                   
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
                        foreach($show_event as $showall_event) 
                                    {
                                        // img Condition
                                        $getimg_ev = $showall_event['img_ev'];
                                        if ($getimg_ev == null) {
                                                $getimg = 'img/character/no_images.png';
                                        } else {
                                                $getimg = $getimg_ev;
                                            }
                                                    // end Condition
                                                    //add Timeago   
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $today_date = date('Y-m-d H:i:s');
                                        date_default_timezone_set('Asia/Ho_Chi_Minh'); // get GMT+7
                                        $getStart_time = $showall_event['begin_time'];
                                        $getEnd_time = $showall_event['end_time'];
                                        
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $curenttime = $showall_event['end_time'];
                                        $time_ago = strtotime($curenttime);
                                    
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $curenttime_progrees_end = $showall_event['end_time'];
                                        $time_progrees_end = strtotime($curenttime_progrees_end);
                                    
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $curenttime_progrees_start = $showall_event['begin_time'];
                                        $time_progrees_start = strtotime($curenttime_progrees_start);
                                    
                                        $time_progress = $time_progrees_end - $time_progrees_start;
                                                //End Time ago
                                                $time_begin = strtotime($showall_event['begin_time']);
                                                $time_beginView = date(" g:i A", $time_begin);

                                                $time_end = strtotime($showall_event['end_time']);
                                                $time_endView = date(" g:i A", $time_end);
                                                    if ( strtotime($today_date) <= strtotime($getStart_time)  ) {
                                                        // echo strtotime($today_date) . "<br>";
                                                        // echo strtotime($getEnd_time) . "<br>";
                                                        // echo $today_date . "<br>";
                                                        // echo 'Sắp diển ra';
                                                       
                                                        echo' <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="product__item">
                                                            <div class="product__item__event set-bg" data-setbg="'.$showall_event['img_ev'].'" style="background-image: url('; echo $getimg; echo');">
                                                            <div class="ep_pending">Sắp diễn ra</div>
                                                           
                                                            <div class="event_comment"><i class="fa fa-clock-o"></i> ';echo timeAfter($time_ago);echo'</div>
                                                            <div class="event_begin_at"><i class="fa fa-clock-o"></i> ';echo 'Start: '.$time_beginView.' ';echo'</div>
                                                                <div class="event_view"><i class="fa fa-eye"></i> '.$showall_event['views'].'</div>
                                                            </div>
                                                            <div class="product__item__text">
                                                                <ul>
                                                                <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                                                                    
                                                                </ul>
                                                                <h5><a href="'.$showall_event['id'].'-'.create_slug($showall_event['name_ev']).'.html">'.$showall_event['name_ev'].'</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                } elseif ( strtotime($today_date) >= strtotime($getStart_time) && strtotime($today_date) <= strtotime($getEnd_time) ) {
                                                        echo' <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="product__item">
                                                            <div class="product__item__event set-bg" data-setbg="'.$showall_event['img_ev'].'" style="background-image: url(&quot;';echo $getimg; echo'&quot;);">
                                                            <div class="ep_progress">Đang diễn ra</div>
                                                           
                                                            <div class="event_comment"><i class="fa fa-clock-o"></i> ';echo timeProgress($time_progress);echo'</div>
                                                            <div class="event_end_at"><i class="fa fa-clock-o"></i> ';echo 'End: '.$time_endView.' ';echo'</div>  
                                                            <div class="event_view"><i class="fa fa-eye"></i> '.$showall_event['views'].'</div>
                                                            </div>
                                                            <div class="product__item__text">
                                                                <ul>
                                                                <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                                                                    
                                                                </ul>
                                                                <h5><a href="'.$showall_event['id'].'-'.create_slug($showall_event['name_ev']).'.html">'.$showall_event['name_ev'].'</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                } 
                                                    
                                                    else {
                                                        
                                                        echo' <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="product__item">
                                                            <div class="product__item__event set-bg" data-setbg="'.$showall_event['img_ev'].'" style="background-image: url(&quot;';echo $getimg; echo'&quot;);">
                                                            <div class="ep_complete">Đã kết thúc</div>
                                                           
                                                            <div class="event_comment"><i class="fa fa-clock-o"></i> ';echo timeAgo($time_ago);echo'</div>
                                                                <div class="event_view"><i class="fa fa-eye"></i> '.$showall_event['views'].'</div>
                                                            </div>
                                                            <div class="product__item__text">
                                                                <ul>
                                                                <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                                                                    
                                                                </ul>
                                                                <h5><a href="'.$showall_event['id'].'-'.create_slug($showall_event['name_ev']).'.html">'.$showall_event['name_ev'].'</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                }
                        //echo $showall_event['name_ev'];
                        
                                          }
                                          echo '</div>';  
                     ?>

</div>


