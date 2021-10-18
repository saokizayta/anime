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
                                      function get_time_ago( $time )
                                      {
                                          $time_difference = time() - $time;
                                      
                                          if( $time_difference < 1 ) { return 'less than 1 second ago'; }
                                          $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                                                      30 * 24 * 60 * 60       =>  'month',
                                                      24 * 60 * 60            =>  'day',
                                                      60 * 60                 =>  'hour',
                                                      60                      =>  'minute',
                                                      1                       =>  'second'
                                          );
                                      
                                          foreach( $condition as $secs => $str )
                                          {
                                              $d = $time_difference / $secs;
                                      
                                              if( $d >= 1 )
                                              {
                                                  $t = round( $d );
                                                  return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
                                              }
                                          }
                                      }
                                      ?>
                        
                            <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Funny <!DOCTYPE html></h5>
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
    $query = " SELECT TOP 11 * FROM [logdb].[dbo].[OnlineRewardLog] Order by ID desc ";
	
	$q = odbc_do($connect['connection'],$query);
	$i = 0;
    $curenttime = odbc_result($q,"Date");
    $time_ago = strtotime($curenttime);
	while(odbc_fetch_row($q)){
	$i++;
	$sorttime = strtotime(odbc_result($q,"Date"));
echo'
    <div class="anime__review__item">
    <div class="anime__review__item__pic">
        <img src="img/anime/review-6.jpg" alt="">
    </div>
    <div class="anime__review__item__text">
        <h6>'.odbc_result($q,"Name").' - ';echo get_time_ago( time()-'2021-10-18' );echo'<span>';echo'</span></h6>
        <p>Tham gia trò chơi nhận được [ '.odbc_result($q,"ItemName").' ] - '.odbc_result($q,"Quantity").' - '.odbc_result($q,"Date").' ea</p>
    </div>
</div>
';
	}
	if(!$i>0)
	   echo "<center>Chưa cập nhật";
    //    echo .odbc_result($q,"Name").
 //return current date time
function getCurrentDateTime(){
    //date_default_timezone_set("Asia/Calcutta");
    return date(odbc_result($q,"Date"));
}
function getDateString($date){
    $dateArray = date_parse_from_format('Y/m/d', $date);
    $monthName = DateTime::createFromFormat('!m', $dateArray['month'])->format('F');
    return $dateArray['day'] . " " . $monthName  . " " . $dateArray['year'];
}

echo round(((( time() - strtotime(odbc_result($q,"Date")) )/60)/60)/24).' day(s) ago';

?>
</div>