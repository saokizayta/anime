<style>

.heart_on {
  position: relative;
  background-color: #70F567;
  display: inline-block;
  height: 16px;
  top:3px;
  left:-1px;
  right: 33px;
  transform: rotate(-45deg);
  width:16px;
  animation: .8s beat infinite;
  border-radius:50%;
}
.heart_off {
  position: relative;
  background-color: #F15831;
  display: inline-block;
  height: 16px;
  top:3px;
  left:-1px;
  right: 3px;
  transform: rotate(-45deg);
  width:16px;
  animation: .8s beat infinite;
  border-radius:50%;
}
@keyframes beat {
  0% {
    transform: scale(1);
  }
  25% {
    transform: scale(1.1);
  }
  40% {
    transform: scale(1);
  }
  60% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}
</style>
                          <div class="section-title">
                               <h5> <img src="img/character/png/status.png" alt="" hieght="45px" width="329px"> </h5>
                          </div>
                          <div class="product__sidebar__view__status set-bg"
                            data-setbg="img/character/png/status_wall.png">

<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "10009";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_server">Server: <div class="heart_on"></div></div>';
} else {
    echo'<div class="status_server">Server: <div class="heart_off"></div></div>';
}
?>
 
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "8";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_clan">Clan: <div class="heart_on"></div></div>';
} else {
    echo'<div class="status_clan">Clan: <div class="heart_off"></div></div>';
}
?>
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "80";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_account">Account: <div class="heart_on"></div></div>';
} else {
    echo'<div class="status_account">Account: <div class="heart_off"></div></div>';
}
?>
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "8";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_update">Update: <div class="heart_on"></div></div>';
} else {
    echo'<div class="status_update">Update: <div class="heart_off"></div></div>';
}
?>
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "8";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_app">App: <div class="heart_on"></div></div>';
} else {
    echo'<div class="status_app">App: <div class="heart_off"></div></div>';
}
?>
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "10009";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_gamemaster">GM: <div class="heart_on"></div></div>';
} else {
    echo'<div class="status_gamemaster">GM: <div class="heart_off"></div></div>';
}
?>
</div>