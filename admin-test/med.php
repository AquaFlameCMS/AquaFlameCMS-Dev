<?php
include("../configs.php");
	mysql_select_db($server_adb);
	$check_query = mysql_query("SELECT gmlevel from account inner join account_access on account.id = account_access.id where username = '".strtoupper($_SESSION['username'])."'") or die(mysql_error());
    $login = mysql_fetch_assoc($check_query);
	if($login['gmlevel'] < 3)
	{
		die('
<meta http-equiv="refresh" content="0;url=wrong.php"/>
		');
	}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Flame Admin - PROCESSING</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="../wow/static/local-common/images/wow.png">
  <!---CSS Files-->
  <link rel="stylesheet" href="css/core.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/ui.css">  
  <!---jQuery Files-->
  <script src="js/jquery.js"></script>
  <script src="js/inputs.js"></script>
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <div id="logo"></div>
      <h1>FLAME ADMIN - Process</h1>
    </div>
                <div id="body">
                  <div id="head">
                  <span class="icon">K</span>
                  <h2>Your order is being processed.</h2>
                  <?php
    $media = mysql_fetch_assoc(mysql_query("SELECT * FROM media WHERE id = '".mysql_real_escape_string($_GET['id'])."'"));
        if(isset($_GET['id']) && isset($_GET['action'])){
          mysql_select_db($server_db);
          if ($_GET['action'] == 'add'){
            $sql = mysql_query("UPDATE media SET visible='1' WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
          }                                      //We could set get_action to 0/1 and set it on the sql query
          elseif($_GET['action'] == 'un'){
            $sql = mysql_query("UPDATE media SET visible='0' WHERE id = '".mysql_real_escape_string($_GET['id'])."'");  
          }
          elseif($_GET['action'] == 'del'){
            $sql = mysql_query("DELETE FROM media WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
            $sql_c = mysql_query("DELETE FROM media_comments WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
          }
        }
        if($sql == true && $_GET['action'] == 'add'){
          echo '<meta http-equiv="refresh" content="1;url=media.php?med=1"/>';
        }
        elseif($sql == true && $_GET['action'] == 'un'){
          echo '<meta http-equiv="refresh" content="1;url=media.php?med=2"/>';
        }
        elseif($sql == true && $_GET['action'] == 'del' && $sql_c ==true){
          $del = unlink('../images/wallpapers/'.$media['id_url']);
          echo '<meta http-equiv="refresh" content="1;url=media.php?med=3"/>';
        }
        else{
          echo '<meta http-equiv="refresh" content="1;url=media.php?med=4"/>';
        }
      ?>
                  <br class="clear">
                  </div>
                  <span id="load">
                  <img src="img/load.png"><img src="img/spinner.png" id="spinner">
                  </span>
                </div>
  <span id="load">
    <img src="img/load.png"><img src="img/spinner.png" id="spinner">
  </span>
  <!---jQuery Code-->
  <script type='text/javascript'>
    $('#wrapper, .notification, #forgot-psw').hide();
    $('#load').fadeIn(400);
    $(window).load( function() {
      $('#load').fadeOut(200, function() {
        $('#wrapper').fadeIn(600, function() {
          $('#welcome.notification').delay(500).fadeIn(4000).loginNotif();
          $('#psw').focus();
        });
      });
    });

    $('#rb-check').flcheck();

    $('#alt-lg-form').validateLogin();

  </script>
</body>
</html>