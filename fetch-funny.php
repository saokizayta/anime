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
        <p>Tham gia tr?? ch??i nh???n ???????c [ '.odbc_result($q,"ItemName").' ] - '.odbc_result($q,"Quantity").' ea</p>
    </div>
</div>
';
	}
}
	if(!$i>0)
	   echo "<center>H??? th???ng b??? gi??n ??o???n ho???c ch??a c?? d??? li???u.</center>";
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
                            echo "C??n $seconds gi??y";
                        }
                        //Minutes
                        else if($minutes <=60){
                            if($minutes==1){
                                echo "1 ph??t n???a";
                            }
                            else{
                                echo "c??n $minutes ph??t";
                            }
                        }
                        //Hours
                        else if($hours <=24){
                            if($hours==1){
                                echo "c??n 1 gi???";
                            }else{
                                echo "c??n $hours gi???";
                            }
                        }
                        //Days
                        else if($days <= 7){
                            if($days==1){
                                echo "c??n 1 ng??y";
                            }else{
                                echo "c??n $days ng??y";
                            }
                        }
                        //Weeks
                        else if($weeks <= 4.3){
                            if($weeks==1){
                                echo "c??n 1 tu???n";
                            }else{
                                echo "c??n $weeks tu???n";
                            }
                        }
                        //Months
                        else if($months <=12){
                            if($months==1){
                                echo "c??n 1 th??ng";
                            }else{
                                echo "c??n $months ph??t";
                            }
                        }
                        //Years
                        else{
                            if($years==1){
                                echo "c??n 1 n??m";
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
                                echo "trong $seconds gi??y";
                            }
                            //Minutes
                            else if($minutes <=60){
                                if($minutes==1){
                                    echo "trong 1 ph??t";
                                }
                                else{
                                    echo "trong $minutes ph??t";
                                }
                            }
                            //Hours
                            else if($hours <=24){
                                if($hours==1){
                                    echo "trong 1 gi???";
                                }else{
                                    echo "trong $hours gi???";
                                }
                            }
                            //Days
                            else if($days <= 7){
                                if($days==1){
                                    echo "trong 1 ng??y";
                                }else{
                                    echo "trong $days ng??y";
                                }
                            }
                            //Weeks
                            else if($weeks <= 4.3){
                                if($weeks==1){
                                    echo "trong 1 tu???n";
                                }else{
                                    echo "trong $weeks tu???n";
                                }
                            }
                            //Months
                            else if($months <=12){
                                if($months==1){
                                    echo "trong 1 th??ng";
                                }else{
                                    echo "trong $months th??ng";
                                }
                            }
                            //Years
                            else{
                                if($years==1){
                                    echo "trong 1 n??m";
                                }else{
                                    echo "trong $years n??m";
                                }
                            }
                            }
                        
                        ?>        

                        
                            <div class="anime__details__review">
                            <div class="section-title">
                                <h5>S??? KI???N TRONG GAME</h5>
                            </div>
                            <div class="row">



                     <?php
                     
                        include 'database.php';
                        //$id=$_GET['id'];
                        $sql_get_ev="SELECT * FROM `event` LIMIT 3";
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
                                                        // echo 'S???p di???n ra';
                                                       
                                                        echo' <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="product__item">
                                                            <div class="product__item__event set-bg" data-setbg="'.$showall_event['img_ev'].'" style="background-image: url('; echo $getimg; echo');">
                                                            <div class="ep_pending">S???p di???n ra</div>
                                                           
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
                                                            <div class="ep_progress">??ang di???n ra</div>
                                                           
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
                                                            <div class="ep_complete">???? k???t th??c</div>
                                                           
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


