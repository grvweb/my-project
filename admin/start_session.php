<?php
$inc = 1;
include "../ajax/sessioncheck.php";
if($session == 1){
?>
<div style="padding-top:15%;padding-left:40%;padding-right:35%"><i><h3>Session started and running successfully</h3></i><br><center><img src="img/preloader.GIF" width="62" height="63">
<br /><br /><br />
<form action="process.php" method="post">
<input type="hidden" name="action" value="stop_session" />
<button type="submit">Stop Session</button>
</form>
</center></div>
<?php }else{?>
<div style="padding-top:15%;padding-left:40%;padding-right:35%"><i><h3>No session was running currently</h3></i><br></div>
<center><br /><br /><br />
<form action="index.php">
<button type="submit">Return</button>
</form></center></div>
<?php }?>