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
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "10009";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_server"> 
            <div class="status_server_on">Server System: <div class="heart_on"></div></i></div>
        </div>';
} else {
    echo'<div class="status_server"> 
            <div class="status_server_off">Server System: <div class="heart_off"></div></div>
        </div>';
}
?>
 
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "8";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_server"> 
            <div class="status_server_on">Clan System: <div class="heart_on"></div> </div>
        </div>';
} else {
    echo'<div class="status_server"> 
            <div class="status_server_off">Clan System: <div class="heart_off"></div></div>
        </div>';
}
?>
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "80";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_server"> 
            <div class="status_server_on">Account System: <div class="heart_on"></div></div>
        </div>';
} else {
    echo'<div class="status_server"> 
            <div class="status_server_off">Account System: <div class="heart_off"></div></div>
        </div>';
}
?>
<?php
$server['host'] = "remote.myvnc.com";
$server['port'] = "8080";
$connection = @fsockopen($server['host'], $server['port'], $ERROR_NO, $ERROR_STR, (float)1.5);
if($connection)
{
    fclose($connection);
    echo'<div class="status_server"> 
            <div class="status_server_on">Update System: <div class="heart_on"></div></div>
        </div>';
} else {
    echo'<div class="status_server"> 
            <div class="status_server_off">Update System: <div class="heart_off"></div></div>
        </div>';
}
?>