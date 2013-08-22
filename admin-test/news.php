<?php
include("../configs.php");
ini_set("default_charset", "iso-8859-1");    //For special chars

mysql_select_db($server_adb);
$check_query = mysql_query("SELECT account.id,gmlevel from account  inner join account_access on account.id = account_access.id where username = '" . strtoupper($_SESSION['username']) . "'") or die(mysql_error());
$login = mysql_fetch_assoc($check_query);
if ($login['gmlevel'] < 3) {
    die('
<meta http-equiv="refresh" content="2;url=GTFO.php"/>
		');
}
//To show the images pop-up
$path = "../news/";       //The images path
$dir = opendir($path);   //Open path
$img_total = 0;
while ($elemento = readdir($dir)) {   //read content
    if (substr($elemento, strlen($elemento) - 11, 11) == '_header.jpg') { //if a valid picture then show it
        $img_array[$img_total] = $elemento;    //Save the pictures in array
        $img_total++;
    }
}
//End image pop-up

if (isset($_POST['save'])) {
    $title = mysql_real_escape_string($_POST['title']);
    $image = mysql_real_escape_string($_POST['image']);
    $content = $_POST['content'];
    $content = trim($content);
    $date = date("Y-m-d H:i:s", time());

    $emptyContent = strip_tags($content);
    if (empty($emptyContent)) {                          //Check if content is empty, title will never be empty
        echo '<font color="red">You have to write something!</font>';
    } else {
        mysql_select_db($server_db);
        $save_new = mysql_query("INSERT INTO news (author, date, content, title, image) VALUES ('" . $login['id'] . "','" . $date . "','" . addslashes($content) . "','" . $title . "','" . $image . "');") or die(mysql_error());
        if ($save_new == true) {
            echo '<div class="alert-page" align="center"> The new has been created successfully!</div>';
            echo '<meta http-equiv="refresh" content="3;url=dashboard.php"/>';
        } else {
            echo '<div class="errors" align="center"><font color="red"> An ERROR has occured while saving the post in the database!</font></div>';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FA - Inputs</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="../wow/static/local-common/images/wow.png">
  <!---CSS Files-->
  <link rel="stylesheet" href="css/core.css">
  <link rel="stylesheet" href="css/ui.css">
  <link rel="stylesheet" href="css/style.css">
  <!---jQuery Files-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/inputs.js"></script>
  <script src="js/minicolors.js"></script>
  <script src="js/cleditor.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
            $(document).ready(function() {
                $("#input").cleditor(
                        {
                            width: 900, // width not including margins, borders or padding
                            height: 250, // height not including margins, borders or padding
                        }
                );
            });
            //This functions to work the pop-up image select
            function pop(action) {
                var frm_element = document.getElementById('pop');
                var vis = frm_element.style;
                if (action == 'open')
                {
                    vis.display = 'block';               //show/hidde the image select pop-up
                    frm_element.focus();
                }
                else if (action == 'blur') {
                    if (document.activeElement.name != 'pop') {
                        vis.display = 'none';
                    }
                }
                else
                {
                    vis.display = 'none';
                }
            }
            function changeVal(val) {
                var frm_element = document.getElementById('image'); //change the image input box value
                frm_element.value = val;                            //And the preview image
                var imgL = document.getElementById('imgLoad');
                imgL.style.display = '';
                imgL.src = '../news/' + val + '.jpg';
            }

            function preview(img, event) {
                var div = document.getElementById('preview');      //To show preview image
                div = div.style;
                var imgP = document.getElementById('imgP');
                if (event == 'on') {
                    div.display = 'block';
                    imgP.src = img;
                }
                else {
                    div.display = 'none';
                }
            }
        </script>
</head>
<body>

  <div id="wrapper">

    <!--USER PANEL-->
	<?php 	$login_query = mysql_query("SELECT * FROM $server_adb.account WHERE username = '" . mysql_real_escape_string($_SESSION["username"]) . "'");
			$login2 = mysql_fetch_assoc($login_query);
	
			$uI = mysql_query("SELECT avatar FROM $server_db.users WHERE id = '" . $login2['id'] . "'");
			$userInfo = mysql_fetch_assoc($uI);
	?>
    <div id="usr-panel">
      <div class="av-overlay"></div>
      <img src="<?php echo $website['root']; ?>images/avatars/2d/tyrael.gif" id="usr-av">
      <div id="usr-info">
        <span id="usr-name"><?php echo $account_extra['firstName']; ?></span><span id="usr-role">Administrator</span>
        <button id="usr-btn" class="orange" data-modal="#usr-mod #mod-home">User CP</button>
      </div>
    </div>

    <!--NAVIGATION-->

    <div id="nav">
      <ul>
        <li><a href="dashboard.php"></a><span class="icon">H</span>Dashboard</li>
        <li class="active"><span class="icon">&lt;</span>News</li>
        <li><a href="media.php"></a><span class="icon">F</span>Media</li>
        <li><a href="users.php"></a><span class="icon">G</span>Users</li>
        <li><a href="health.php"></a><span class="icon">S</span>Server Health</li>
        <li><a href="more.html"></a><span class="icon">N</span>More</li>
        <li data-modal="#usr-mod #mod-set" id="set-btn"><span class="icon">)</span>Settings</li>
        <li id="logout"><a href="index.html"></a><span class="icon icon-grad">B</span>Log Out</li>
      </ul>
      <br class="clear">
    </div>

    <div id="content" class="inputs-page"><!--BEGIN MAIN CONTENT-->

      <div class="box g16">
        <h2 class="box-ttl">LATEST NEWS</h2>
        <div class="box-body no-pad datatable-cont">
          <div id="example_wrapper" class="dataTables_wrapper" role="grid"><div id="example_length" class="dataTables_length">Show <div class="drop select"><select size="1" name="example_length" aria-controls="example" class="transformed" style="display: none;"><option value="5" selected="selected">5</option><option value="10">10</option><option value="25">25</option></select><ul><li class="sel">5</li><li class="">10</li><li>25</li></ul><span class="opt-sel" data-default-val="5">5</span><span class="arrow">&amp;</span></div> entries</div><div class="dataTables_filter" id="example_filter"><label>Search: <input type="text" aria-controls="example"></label></div><table class="display table dataTable" id="example" aria-describedby="example_info">
            <thead>
              <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 0px;">TITLE</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 0px;">AUTHOR</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 0px;">DESCRIPTION</th><th class="center sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 0px;">COMMENTS</th><th class="center sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 0px;">FUNCTIONS</th></tr>
            </thead>
            
          <tbody role="alert" aria-live="polite" aria-relevant="all">
		  <?php
                            mysql_select_db($server_db) or die(mysql_error());
                            $news = mysql_query("SELECT id,author,content,title,comments FROM news ORDER BY date");
                            while ($fcheck2 = mysql_fetch_assoc($news)) {
                            echo'
								<tr class="gradeX odd">
								<td class=" sorting_1">' . substr(strip_tags($fcheck2['title']), 0, 36) . '...</td>
								<td class=" ">' . $fcheck2['author'] . '</td>
								<td class=" ">' . substr(strip_tags($fcheck2['content']), 0, 36) . '...</td>
								<td class="center "> ' . $fcheck2['comments'] . '</td>
								<td class="center "><a href="edtnews.php?id=' . $fcheck2['id'] . '">
								<button class="btn-m has-icon">
								<span class="icon">U</span>EDIT</button></a>
								<a href="dltnews.php?id=' . $fcheck2['id'] . '">
								<button class="btn-m red has-icon">
								<span class="icon2">X</span>DELETE</button></a></td>
								</tr>';
								}
                  ?>
				</tbody></table><div class="dataTables_info" id="example_info">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_full_numbers" id="example_paginate"><a tabindex="0" class="first button" id="example_first">First</a><a tabindex="0" class="previous button" id="example_previous">%</a><span><a tabindex="0" class="button">1</a><a tabindex="0" class="button pressed">2</a><a tabindex="0" class="button">3</a></span><a tabindex="0" class="next button" id="example_next">(</a><a tabindex="0" class="last button" id="example_last">Last</a></div></div>
        </div></div>
		<div id="grid-cont" class="full">
		<div class="box g16"><span>Write News</span><span style="color: #CE9109;" >(Here you can write news for your website)</span></div>
		</div>
      <!--WYSIWYG EDITOR-->

      <div id="editor-box" class="box coll g8">
        <h2 class="box-ttl">News Editor</h2>
        <div class="box-body no-pad">
          <textarea id="wysiwyg" name="content" class="no-bdrad no-mg full">
            <span style="font-style: italic;">Write something here!</span><br><br>
          </textarea>
        </div>
      </div>
	  <div id="inputs" class="box g8">
        <h2 class="box-ttl">Title & Image</h2>
        <div class="box-body form">
          <span class="label input g4">Title</span>
          <input name="title" type="text" class="g12" value="Enter Title" class="reg" onfocus="if (this.value == 'Enter Title') this.value = ''" onblur="if (this.value == '') this.value = 'Enter Title'" />      
					
        <span class="label input g4">Image select</span>
        <input id="image" name="image" type="text" value="" class="reg" onfocus="pop('open');" />
        <br>
		<span class="label input g4"></span>
		<br>
		<span class="label input g4">Image Preview</span>
		<img class ="g4 box" src="" id="imgLoad" style="display:none;"/>
                                <div  class="pop-image" id="pop" name="pop" onblur="pop('blur');" tabindex="1">
                                    <div class="note">
                                        <table border=0>
                                            <?php
                                            for ($i = 0; $i < $img_total; $i++) { //Shows images in table
                                                $imagen = $img_array[$i];
                                                $pathimagen = $path . $imagen;
                                                $nombre = substr($imagen, 0, strlen($imagen) - 11); //Gets the name from the database
                                                echo "<tr>";
                                                echo "<td><a href='javascript:;' name='pop' onclick=changeVal('" . $nombre . "');pop('close');>
												<img src='$pathimagen' width='160px' border=0 onmouseover=preview('" . $pathimagen . "','on'); onmouseout=preview('" . $pathimagen . "','out');>
												</a></td>"; //Click on it and the name appear on the text-box
                                                echo "</tr>"; 
                                            }
                                            ?>
                                        </table>
                                    </div>
      </div>
	<button name="save" class="btn-m green has-icon">
    <span class="icon">J</span>Submit</button>
    </div>
	</div>
	</div><!--END MAIN CONTENT-->

    <!--MODAL WINDOWS-->

    <div id="modal-ov">

      <div class="modal" id="usr-mod">
        <div class="mod-ttl"><h2>USER CONTROL PANEL</h2></div>
        <div class="mod-body">

          <div id="mod-home" class="nav-item show">
            <div class="av-overlay"></div>
            <img src="img/avatars/nick.jpg">
            <ul id="usr-det">
              <li><p><span>Name: </span>Nick Halden</p></li>
              <li><p><span>Role: </span>System Administrator</p></li>
              <li><p><span>Contact: </span>nick@haldeninc.com</p></li>
              <li><p><span>Member since: </span>12.06.2010</p></li>
              <li><p>You have <strong>2</strong> notifications pending</p></li>
            </ul>
          </div>

          <div id="mod-set" class="nav-item">
            <input type="text" class="g4" placeholder="First name" value="Nick">
            <input type="text" class="g4" placeholder="Last name" value="Halden">
            <input type="text" class="g8 last" placeholder="E-mail" value="nick@haldeninc.com">
            <button class="g8">Change Password</button>
            <button class="g8 last">Change Email</button>
            <div class="g8 cont">
              <input type="checkbox" class="chbox g4" checked>
              <div class="label g12 last"><span>Remember login details</span></div>
            </div>
            <div class="g8 cont last">
              <input type="checkbox" class="chbox g4" checked>
              <div class="label g12 last"><span>Toggle this checkbox</span></div>
            </div>
            <div class="g8 cont">
              <input type="checkbox" class="chbox tgcls g4" data-tgcls="#wrapper hz-nav">
              <div class="label g12 last"><span>Horizontal navigation</span></div>
            </div>
            <div class="g8 cont last">
              <input type="checkbox" class="chbox g4">
              <div class="label g12 last"><span>God Mode</span></div>
            </div>
          </div>
        </div>

        <div class="mod-act">
          <ul class="mod-nav">
            <li class="sel" data-nav="#mod-home"><span class="icon">H</span></li>
            <li data-nav="#mod-set"><span class="icon">U</span></li>
          </ul>
          <button class="orange close">Close</button>
        </div>
      </div>

    </div>

  </div><!--END WRAPPER-->

  <span id="load">
    <img src="img/load.png"><img src="img/spinner.png" id="spinner">
  </span>

  <!---jQuery Code-->
  <script type='text/javascript'>

    // LOAD FUNCTIONS

    $.fn.loadfns( function() {
      $.fn.inputgrp();
      $('#wysiwyg').cleditor({ height: 326 });
      $('#eula').nanoScroller();

      if ($('#ads').width() < 800) $('#ads').nanoScroller();
    });
    $.fn.inputs();
    $('#sample-form').validate();
    $('.datepicker').glDatePicker({ showAlways: false });
    $('.nav-hz').scrollspy();
    $('#age-inp').spinner({ min: 16, max: 99 });
    $('#decimal').spinner({ step: 0.1101001101010011, numberFormat: "n" });
    $('#card-num').mask('9999-9999-9999-9999');
    $('#exp-inp').mask('99/99', {placeholder:'.'});
  </script>
</body>
</html>