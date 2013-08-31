<?php
include("../configs.php");
	mysql_select_db($server_adb);
	$check_query = mysql_query("SELECT gmlevel from account inner join account_access on account.id = account_access.id where username = '".strtoupper($_SESSION['username'])."'") or die(mysql_error());
    $login = mysql_fetch_assoc($check_query);
	if($login['gmlevel'] < 3)
	{
		die('
<meta http-equiv="refresh" content="2;url=wrong.php"/>
		');
	}
?>

      <?php
        if(isset($_GET['id'])){
          mysql_select_db($server_db);
          $media = mysql_fetch_assoc(mysql_query("SELECT * FROM media WHERE id = '".mysql_real_escape_string($_GET['id'])."'"));
          $del = mysql_query("DELETE FROM media WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
          $del_c = mysql_query("DELETE FROM media_comments WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
          if ($del == true && $del_c == true && $media['type'] != '0'){
          //If not a video delete file, overwrite $del var for detect errors
            $del = unlink('../images/wallpapers/'.$media['id_url']);
          }
        }
        if($del == true){
          echo '<meta http-equiv="refresh" content="0;url=media.php?del=2"/>';
        }
        else{
          echo '<meta http-equiv="refresh" content="0;url=media.php?del=1"/>';
				

        }

      ?>
     