<?php 
include_once 'conn/connection-fetch-funny.php';
?>
<!--                      
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
                            </div> -->
                            <?php
                        
function timeAgo($time_ago){
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
	echo "$seconds seconds ago";
}
//Minutes
else if($minutes <=60){
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
// $query = "SELECT TOP 10 * FROM [logdb].[dbo].[OnlineRewardLog] WHERE 
// 	(
// 	Name NOT LIKE 'HoChiMinh' and 
// 	Name!='BacHo' and 
// 	Name!='[GM]Skull' and 
// 	Name!='MG' and 
// 	Name!='Knight' and 
// 	Name!='HelloWorld' and 
// 	Name!='GM' and 
// 	Name!='NewSupport' and
//   Name!='3DVungQue' and
//   Name!='ADMAtalanta' and
//   Name!='GMAssasin'
// 	) ORDER BY Date DESC";
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
    $query_getcharjob = " SELECT TOP 4 * FROM [userdb].[dbo].[CharacterInfo] where Name = '$name' ";
	
	$q_getcharjob = odbc_do($connect['connection'],$query_getcharjob);
	$i_getcharjob = 0;
    // $curenttime = odbc_result($q,"Date");
    // $time_ago = strtotime($curenttime);
	while(odbc_fetch_row($q_getcharjob)){
        date_default_timezone_set('Etc/GMT+7');
        $curenttime=odbc_result($q,"Date");
        $time_ago =strtotime($curenttime);
        $timenow = time();
      
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
	   echo "<center>Website đang nâng cấp hoặc chưa có thông tin.";
    //    echo .odbc_result($q,"Name").
 
?>
</div>

<?php 
include_once 'conn/connection-fetch-funny.php';
?>
<!--                      
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
                            </div> -->
                            <?php
                        
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
                                <h5>SỰ KIỆN TRONG GAME<!DOCTYPE html></h5>
                            </div>
                            <div class="row">
<?php
// $query = "SELECT TOP 10 * FROM [logdb].[dbo].[OnlineRewardLog] WHERE 
// 	(
// 	Name NOT LIKE 'HoChiMinh' and 
// 	Name!='BacHo' and 
// 	Name!='[GM]Skull' and 
// 	Name!='MG' and 
// 	Name!='Knight' and 
// 	Name!='HelloWorld' and 
// 	Name!='GM' and 
// 	Name!='NewSupport' and
//   Name!='3DVungQue' and
//   Name!='ADMAtalanta' and
//   Name!='GMAssasin'
// 	) ORDER BY Date DESC";
    $query_ev = " SELECT TOP 3 * FROM [EventDB].[dbo].[Event] Order by Start_date desc ";
	
	$q_ev = odbc_do($connect['connection'],$query_ev);
	$i_ev = 0;
    // $curenttime = odbc_result($q,"Date");
    // $time_ago = strtotime($curenttime);
    
	while(odbc_fetch_row($q_ev)){
        // $curenttime=odbc_result($q,"Date");
        // $time_ago =strtotime($curenttime);
        // $timenow = time();
      
	$i_ev++;
    // date_default_timezone_set("Asia/Ho_Chi_Minh");
	// echo $time_ago;echo'<br>';
    //echo $i;
    // ////////////////////////////////////
    date_default_timezone_set('Etc/GMT+7'); // get GMT+7
    $getStart_time = odbc_result($q_ev,"Start_time");
    $getEnd_time = odbc_result($q_ev,"End_time");
    
    $curenttime = odbc_result($q_ev,"Start_time");
    $time_ago = strtotime($curenttime);

    date_default_timezone_set('Etc/GMT+7');
    $curenttime_progrees_end = odbc_result($q_ev,"End_time");
    $time_progrees_end = strtotime($curenttime_progrees_end);

    date_default_timezone_set('Etc/GMT+7');
    $curenttime_progrees_start = odbc_result($q_ev,"Start_time");
    $time_progrees_start = strtotime($curenttime_progrees_start);

    $time_progress = $time_progrees_end - $time_progrees_start;
    
    // echo $time_progrees_end .'<br>';
    // echo $time_progrees_start .'<br>';
    // echo $time_progress .'<br>';

    
       
    //$progress_time = (odbc_result($q_ev,"End_time") - odbc_result($q_ev,"Start_time"));
    //$time_progress = strtotime($progress_time);
    
    $caltime = odbc_result($q_ev,"End_time") - odbc_result($q_ev,"Start_time");
    date_default_timezone_set('Etc/GMT+7');
    
        
   // $time_ago =strtotime($curenttime);
    $today_date = date('Y-m-d H:i:s');
    

  


    
    
    if ( strtotime($today_date) <= strtotime($getStart_time)  ) {
        // echo strtotime($today_date) . "<br>";
        // echo strtotime($getEnd_time) . "<br>";
        // echo $today_date . "<br>";
        // echo 'Sắp diển ra';
       
        echo' <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="https://i.pinimg.com/originals/81/ac/f2/81acf2056041f53ab459ed6c68cc630d.jpg" style="background-image: url(&quot;https://i.pinimg.com/originals/81/ac/f2/81acf2056041f53ab459ed6c68cc630d.jpg&quot;);">
            <div class="ep_pending">Sắp diễn ra</div>
           
            <div class="comment"><i class="fa fa-clock-o"></i> ';echo timeAfter($time_ago);echo'</div>
                <div class="view"><i class="fa fa-eye"></i> 0</div>
            </div>
            <div class="product__item__text">
                <ul>
                <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                    
                </ul>
                <h5><a href="#">'.odbc_result($q_ev,"Name_ev").'</a></h5>
            </div>
        </div>
    </div>';
    } elseif ( strtotime($today_date) >= strtotime($getStart_time) && strtotime($today_date) <= strtotime($getEnd_time) ) {
        
        
        
        echo' <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="https://i.pinimg.com/originals/81/ac/f2/81acf2056041f53ab459ed6c68cc630d.jpg" style="background-image: url(&quot;https://i.pinimg.com/originals/81/ac/f2/81acf2056041f53ab459ed6c68cc630d.jpg&quot;);">
            <div class="ep_progress">Đang diễn ra</div>
           
            <div class="comment"><i class="fa fa-clock-o"></i> ';echo timeProgress($time_progress);echo'</div>
                <div class="view"><i class="fa fa-eye"></i> 0</div>
            </div>
            <div class="product__item__text">
                <ul>
                <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                    
                </ul>
                <h5><a href="#">'.odbc_result($q_ev,"Name_ev").'</a></h5>
            </div>
        </div>
    </div>';
    } 
    
    else {
        
        echo' <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="https://i.pinimg.com/originals/81/ac/f2/81acf2056041f53ab459ed6c68cc630d.jpg" style="background-image: url(&quot;https://i.pinimg.com/originals/81/ac/f2/81acf2056041f53ab459ed6c68cc630d.jpg&quot;);">
            <div class="ep_complete">Đã kết thúc</div>
           
            <div class="comment"><i class="fa fa-clock-o"></i> 6 tháng trước</div>
                <div class="view"><i class="fa fa-eye"></i> 0</div>
            </div>
            <div class="product__item__text">
                <ul>
                <!-- <li>free for fun !</li> <li>Priston tale</li> -->
                    
                </ul>
                <h5><a href="#">'.odbc_result($q_ev,"Name_ev").'</a></h5>
            </div>
        </div>
    </div>';
      
        
    }
	
}
echo'</div>';
	if(!$i_ev>0)
	   echo "<center>Website đang nâng cấp hoặc chưa có thông tin.";
    //    echo .odbc_result($q,"Name").
 
?>
</div>