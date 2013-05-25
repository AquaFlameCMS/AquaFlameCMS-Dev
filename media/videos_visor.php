<?php
require_once("../configs.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="chrome chrome8">
    <head><link rel="stylesheet" type="text/css" href="/s7.addthis.com/static/r07/widget49.css" media="all" />
        <title><?php echo $website['title']; ?></title>
        <meta content="false" http-equiv="imagetoolbar" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <link rel="shortcut icon" href="../wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
        <link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="WoW Search" />
        <link rel="stylesheet" type="text/css" media="all" href="../wow/static/local-common/css/common.css?v15" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="../wow/static/css/wow.css?v3" />
        <link rel="stylesheet" type="text/css" media="all" href="../wow/static/css/lightbox.css?v7" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/lightbox-ie6.css?v7" /><![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="../wow/static/local-common/css/cms/blog.css?v15" />
        <link rel="stylesheet" type="text/css" media="all" href="../wow/static/local-common/css/cms/comments.css?v15" />
        <link rel="stylesheet" type="text/css" media="all" href="../wow/static/css/cms.css?v3" />
        <link href="../wow/static/css/media/media.css" rel="stylesheet" type="text/css">
            <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms-ie6.css?v3" /><![endif]-->
            <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v3" /><![endif]-->
            <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v3" /><![endif]-->
            <!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v3" /><![endif]-->
            <script type="text/javascript" src="../wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
            <script type="text/javascript" src="../wow/static/local-common/js/core.js?v15"></script>
            <script type="text/javascript" src="../wow/static/local-common/js/tooltip.js?v15"></script>
            <!--[if IE 6]> <script type="text/javascript">
            //<![CDATA[
            try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
            //]]>
            </script>
            <![endif]-->
            <script type="text/javascript">
                //<![CDATA[
                Core.staticUrl = '../wow/static';
                Core.sharedStaticUrl = '../wow/static/local-common';
                Core.baseUrl = '../wow/en';
                Core.project = '../wow';
                Core.locale = 'en-gb';
                Core.buildRegion = 'eu';
                Core.shortDateFormat = 'dd/MM/Y';
                Core.loggedIn = false;
                Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
                Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
                Flash.ratingImage = 'http://eu.media.blizzard.com/wow/player/rating-pegi.jpg';
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-544112-16']);
                _gaq.push(['_setDomainName', '.battle.net']);
                _gaq.push(['_trackPageview']);
                //]]>
            </script>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
    </head>
    <body class="en-gb logged-in">
        <div id="wrapper">
            <?php include("../header.php"); ?>
            <div id="content">
                <div class="content-top">
                    <div class="content-trail">
                        <ol class="ui-breadcrumb">
                            <li><a href="../index.php"><?php echo $website['title']; ?></a></li>
                            <li><a href="../media.php" rel="np"><?php echo $Media['Media']; ?></a></li>
                            <li><a href="videos_index.php" rel="np"><?php echo $Media['Videos']; ?></a></li>
                            <?php
                            $videos_id = intval($_GET['id']);
                            if ($videos_id > 0) {
                                $error = 0;
                                $videos_query = mysql_query("SELECT * FROM media WHERE id = '" . $videos_id . "'") or $error = 1;
                                $videos = mysql_fetch_assoc($videos_query) or $error = 1;
                                $date = $videos['date'];
                            } else {
                                $error = 1;
                            }
                            ?>
                            <li class="last"><a href="#" rel="np"><?php echo $videos['title']; ?></a></li>
                        </ol>
                    </div>
                    <div class="content-bot">
                        <script type="text/javascript">
                            //<![CDATA[
                            var addthis_config = {
                                username: "TrinityCMS"
                            };
                            //]]>
                        </script>
                        <div class="media-content">
                            <div id="media-content" class="film-strip-wrapper2">
                                <?php
                                if ($error == 0) {
                                    $posted = 0;
                                    if (isset($_POST['vali'])) {
                                        mysql_select_db($server_adb) or die(mysql_error());
                                        $get_accountinfo = mysql_query("SELECT * FROM account WHERE username = '" . strtoupper($_SESSION['username']) . "'");
                                        $accountinfo = mysql_fetch_assoc($get_accountinfo);
                                        $author = $accountinfo['id'];
                                        $comment = stripslashes($_POST['detail']);

                                        /* Replace some HTML tags */
                                        $comment = strip_tags($comment);

                                        /* End of Replacing */
                                        $comment = addslashes($comment);
                                        $comment = nl2br($comment);
                                        mysql_select_db($server_db) or die(mysql_error());
                                        $insert = mysql_query("INSERT INTO media_comments (mediaid,comment,accountid) VALUES ('" . $_POST['videoId'] . "','" . $comment . "','" . $author . "')") or print("Could not post the comment!");

                                        $update = mysql_query("UPDATE media SET comments = comments + 1 WHERE id = '" . $_POST['videoId'] . "'");
                                        $update = mysql_query("UPDATE media SET date = '" . $date . "' WHERE id = '" . $_POST['videoId'] . "'");
                                        $posted = 1;

                                        echo '<center><br /><br />Comment Posted<br />';
                                        echo '
										<style type="text/css">
										.loader {
											width:24px;
											height:24px;
											background: url("' . $website['root'] . 'wow/static/images/loaders/canvas-loader.gif") no-repeat;
											}
										</style>';
                                        echo '<div class="loader"></div><br /></center>';
                                        echo '<meta http-equiv="refresh" content="1;url=videos_visor.php?id=' . $_POST['videoId'] . '"/>';
                                        $show_comment = false;
                                    } else {
                                        $posterInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM $server_db.users WHERE id = '" . $videos['author'] . "'"));
                                        ?>
                                        <table width="940" height="546">
                                            <tr><td width="40"></td><td width="860"><span style="font-size:16px; color:#F9EFA2";><?php echo $videos['title']; ?></span></td><td width="40"></td></tr>
                                            <tr><td height="500" colspan="3" align="center" valign="middle">
                                                    <iframe width="767" height="420" src="http://www.youtube.com/embed/<?php echo $videos['id_url']; ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe></td></tr>
                                        </table>
                                    </div>
                                    <table width="940">
                                        <tr><td width="40"></td><td width="860" height="40">by <a href="#"><?php echo $posterInfo['firstName']; ?></a><span> // </span><?php echo $videos['date']; ?></td><td width="40"></td></tr>
                                        <tr><td width="40"></td><td width="860"><font color='#C09A67'><?php echo $videos['description']; ?></font></td><td width="40"></td></tr>
                                        <tr><td width="40" height="40"></td><td width="860" valign="bottom"><span style="font-size:20px; font-family:Verdana,Geneva,sans-serif;"><?php echo $lang_general['comments']; ?>(<?php echo $videos['comments']; ?>)</span></td><td width="40"></td></tr>
                                    </table>
                                    <?php
                                    $show_comment = true;
                                }
                            }
                            ?>
                        </div>

                        <script type="text/javascript">
                            //<![CDATA[
                            $(function() {
                                Cms.Comments.commentInit();
                            });
                            //]]>
                        </script>
                        <!-- [if IE 6] >
                                          <script type="text/javascript">
                                          //<![CDATA[
                                          $(function() {
                                                  Cms.Comments.commentInitIe();
                                          });
                                          //]]>
                                          </script>
                                          < [endif] -->

                        <?php if ($show_comment == true) { ?>
                            <span id="comments"></span>
                            <div id="page-comments">
                                <div class="page-comment-interior" id="comments">
                                    <div class="comments-container">
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            var textAreaFocused = false;
                                            //]]>
                                        </script>
                                        <?php
                                        if (isset($_SESSION['username'])) {
                                            if ($posted == 1) {

                                            } else {
                                                $user_query = mysql_query("SELECT * FROM users WHERE id = '" . mysql_real_escape_string($account_information['id']) . "'");
                                                $user = mysql_fetch_assoc($user_query);
                                                ?>
                                                <form action="" method="post" onSubmit="return Cms.Comments.validateComment(this);" id="comment-form">
                                                    <fieldset>
                                                        <input type="hidden" name="videoId" value="<?php echo intval($_GET['id']); ?>">
                                                            <input type="hidden" name="ref" value="" />
                                                            <input type="hidden" name="xstoken" value="" />
                                                            <input type="hidden" name="vali" value="" />
                                                    </fieldset>
                                                    <div class="new-post">
                                                        <div class="comment">
                                                            <div class="portrait-b ajax-update">
                                                                <div class="avatar-interior">
                                                                    <a href="#"><img height="64" width="64" src="../images/avatars/2d/<?php echo $user['avatar']; ?>" alt="" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-interior">
                                                                <div class="character-info user ajax-update">
                                                                    <!--commentThrottle[]-->
                                                                    <div class="user-name">
                                                                        <a href="#" class="context-link" rel="np"><?php echo ucfirst($user['firstName']); ?></a>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="comment-ta">
                                                                        <textarea id="comment-ta" cols="78" rows="3" name="detail" onFocus="textAreaFocused = true;" onBlur="textAreaFocused = false;"></textarea>
                                                                    </div>
                                                                    <div class="action">
                                                                        <div class="submit">
                                                                            <button class="ui-button button1 comment-submit" type="submit">
                                                                                <span><span><?php echo $lang_general['add_a_reply']; ?></span></span>
                                                                            </button>
                                                                        </div>
                                                                        <span class="clear"><!-- --></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php
                                            }
                                        } else {
                                            echo'
							 <table class="dynamic-center"><tr><td>
							 <a class="ui-button button1 " href="?login" onclick="return Login.open(\'../loginframe.php\')"><span><span>Add a reply</span></span></a>
							 </td></tr></table>';
                                        }
                                        $get_comments = mysql_query("SELECT * FROM media_comments WHERE mediaid = '" . $videos['id'] . "' ORDER BY DATE DESC");
                                        if (mysql_num_rows($get_comments) > 0) {
                                            while ($comment = mysql_fetch_array($get_comments)) {
                                                mysql_select_db($server_adb) or die(mysql_error());
                                                $accountInfo_query = mysql_query("SELECT * FROM account WHERE id = '" . $comment['accountId'] . "'");
                                                $accountInfo = mysql_fetch_assoc($accountInfo_query);

                                                mysql_select_db($server_db) or die(mysql_error());
                                                $userInfo_query = mysql_query("SELECT * FROM users WHERE id = '" . $accountInfo['id'] . "'");
                                                $userInfo = mysql_fetch_assoc($userInfo_query);
                                                ?>
                                                <div class="comment" id="">
                                                    <div class="avatar portrait-b">
                                                        <a href="#">
                                                            <img height="64" src="../images/avatars/2d/<?php echo $userInfo['avatar']; ?>" alt="" />
                                                        </a>
                                                    </div>

                                                    <div class="comment-interior">
                                                        <div class="character-info user">
                                                            <div class="user-name">
                                                                <a href="#" class="context-link" rel="np">
                                                                    <?php echo ucfirst($user['firstName']); ?>
                                                                </a>
                                                            </div>

                                                            <span class="time"><a href="#"><?php echo date('d-m-Y H:i:s', strtotime($comment['date'])); ?></a></span>
                                                        </div>
                                                        <div class="content"><?php echo html_entity_decode($comment['comment']); ?></div>
                                                        <div class="comment-actions"><a class="reply-link" href="#" onClick=""><?php echo $lang_general['reply']; ?></a></div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <div class="page-nav-container">
                                            <div class="page-nav-int"></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <script type="text/javascript">
                                            //<![CDATA[
                                            var addthis_config = {
                                                username: "wow"
                                            }
                                            //]]>
                        </script>



                        <span class="clear"><!-- --></span>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="wow/static/local-common/js/cms.js"></script>
            <script type="text/javascript" src="wow/static/local-common/js/menu.js"></script>
            <script type="text/javascript" src="wow/static/js/wow.js"></script>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
            <script type="text/javascript" src="wow/static/local-common/js/cms.js?v17?v7"></script>
            <script type="text/javascript" src="wow/static/local-common/js/lightbox.js?v17?v7"></script>
            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>