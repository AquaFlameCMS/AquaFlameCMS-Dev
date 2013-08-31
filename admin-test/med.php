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
        if(isset($_GET['id']) && isset($_GET['action'])){
          mysql_select_db($server_db);
          if ($_GET['action'] == 'add'){
            $sql = mysql_query("UPDATE media SET visible='1' WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
          }                                      //We could set get_action to 0/1 and set it on the sql query
          elseif($_GET['action'] == 'un'){
            $sql = mysql_query("UPDATE media SET visible='0' WHERE id = '".mysql_real_escape_string($_GET['id'])."'");  
          }
        }
        if($sql == true && $_GET['action'] == 'add'){
          echo '<meta http-equiv="refresh" content="0;url=media.php?med=1"/>';
        }
        elseif($sql == true && $_GET['action'] == 'un'){
          echo '<meta http-equiv="refresh" content="0;url=media.php?med=2"/>';
        }
        else{
          echo '<meta http-equiv="refresh" content="0;url=media.php?med=3"/>';
        }
      ?>