<?php
include("configs.php");
$page_cat = "settings";
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
    header('Location: account_log.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
    <head>
        <title><?php echo $website['title']; ?> - Character Unstuck</title>
        <meta content="false" http-equiv="imagetoolbar" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/management/common.css" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v22" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v22" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v22" /><![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs.css?v21" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs-ie6.css?v21" /><![endif]-->
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs-ie.css?v21" /><![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/merge/wow-merge.css?v21" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css?v21" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css?v21" /><![endif]-->
        <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/core.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
        <!--[if IE 6]> <script type="text/javascript">
        //<![CDATA[
        try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
        //]]>
        </script>
        <![endif]-->
        <script type="text/javascript">
            //<![CDATA[
            Core.staticUrl = '/account';
            Core.sharedStaticUrl = 'wow/static/local-common';
            Core.baseUrl = '/account';
            Core.supportUrl = 'http://eu.battle.net/support/';
            Core.secureSupportUrl = 'https://eu.battle.net/support/';
            Core.project = 'bam';
            Core.locale = 'en-gb';
            Core.buildRegion = 'eu';
            Core.shortDateFormat = 'dd/MM/yyyy';
            Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
            Core.loggedIn = true;
            Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/bam/video-player.swf';
            Flash.videoBase = 'http://eu.media.blizzard.com/bam/media/videos';
            Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/bam/rating-pegi.jpg';
            Flash.expressInstall = 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-544112-16']);
            _gaq.push(['_trackPageview']);
            _gaq.push(['_trackPageLoadTime']);
            //]]>
        </script>
    </head>
    <body class="en-gb wowconv logged-in">
        <div id="layout-top">
            <div class="wrapper">
                <div id="header">
                    <?php include("functions/header_account.php"); ?>
                    <?php include("functions/footer_man_nav.php"); ?>
                </div>
                <div id="layout-middle">
                    <div class="wrapper">
                        <div id="content">
                            <div id="account-progress">
                                <span>Progress 20%</span> [Step 1 of 5]
                                <div id="progress-bar" class="border-3">
                                    <div id="current-progress" class="border-3" style="width: 20%"></div>
                                </div>
                            </div>
                            <div id="page-header">
                                <span class="float-right"><span class="form-req">*</span> Required</span>
                                <h2 class="subcategory">Special Information</h2>
                                <h3 class="headline">Special Account Information</h3>
                            </div>
                            <p>Here you will add your information about yourself so you can use the Donation System or if you have won any prizes from events, we will need these so we can send it to you.</p>
                            <div id="page-content">

                                <?php
                                include("configs.php");
                                $con = mysql_connect("$serveraddress", "$serveruser", "$serverpass", "$server_db");
                                if (!$con) {
                                    die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db("$server_db", $con);

                                $update = "INSERT INTO contacts SET name = '' WHERE id = 1";
                                $insert = "UPDATE contacts SET name = '' WHERE id = 1";
                                mysql_query($update, $con);

                                echo "Your <b>Name</b> has been updated successfully<br><br>";

                                mysql_close($con);
                                ?>
                                <form method="post" action="" class="account-merge" id="account-merge">
                                    <div id="wowLogin">
                                        <div class="input-row input-row-text">
                                            <span class="input-left">
                                                <label for="username">
                                                    <span class="label-text">
                                                        Your Saved Name:
                                                    </span>
                                                    <span class="input-required">*</span>
                                                </label>
                                            </span>
                                            <span class="input-right">
                                                <span class="input-text input-text-small">
                                                    <input type="text" name="name" value='' id="name" class="input border-5 glow-shadow-2 form-disabled" autocomplete="off" tabindex="1" required="required" disabled="disabled"/>
                                                    <span class="inline-message" id="username-message"></span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="input-row input-row-text">
                                            <span class="input-left">
                                                <label for="username">
                                                    <span class="label-text">
                                                        Your Current Name:
                                                    </span>
                                                    <span class="input-required">*</span>
                                                </label>
                                            </span>
                                            <span class="input-right">
                                                <span class="input-text input-text-small">
                                                    <input type="text" name="name" value='' id="name" class="input border-5 glow-shadow-2" autocomplete="off" tabindex="1" required="required" />
                                                    <span class="inline-message" id="username-message"></span>
                                                </span>
                                            </span>
                                        </div>
                                        <fieldset class="ui-controls " >
                                            <button
                                                class="ui-button button1 "
                                                type="submit"
                                                name="unstuck"
                                                value="Unstuck!"
                                                id="merge-submit"
                                                tabindex="1">
                                                <span>
                                                    <span>Continue</span>
                                                </span>
                                            </button>
                                            <a class="ui-cancel "
                                               href="/account/"
                                               tabindex="1">
                                                <span>
                                                    Cancel </span>
                                            </a>
                                        </fieldset>
                                </form>
                                </table>
                            </div>


                            <script type="text/javascript">
                                //<![CDATA[
                                (function() {
                                    var mergeSubmit = document.getElementById('merge-submit');
                                    mergeSubmit.disabled = 'disabled';
                                    mergeSubmit.className = mergeSubmit.className + ' disabled';
                                })();
                                //]]>
                            </script>
                            </form>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                            $(function() {
                                var inputs = new Inputs('#account-merge');
                                var mergeForm = new AccountMerge('#account-merge', {
                                    captchaRegions: ['US', 'EU', 'KR', 'TW'],
                                    accountCountry: 'GRC'
                                });
                            });
                            //]]>
                        </script>
                    </div>
                </div>
            </div>
            <div id="layout-bottom">
                <?php include("functions/footer_man.php"); ?>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                var xsToken = 'b213c993-d61d-4957-9141-9da399fd7d54';
                var Msg = {
                    support: {
                        ticketNew: 'Ticket {0} was created.',
                        ticketStatus: 'Ticket {0}�s status changed to�{1}.',
                        ticketOpen: 'Open',
                        ticketAnswered: 'Answered',
                        ticketResolved: 'Resolved',
                        ticketCanceled: 'Cancelled',
                        ticketArchived: 'Archived',
                        ticketInfo: 'Need�Info',
                        ticketAll: 'View All Tickets'
                    },
                    cms: {
                        requestError: 'Your request cannot be completed.',
                        ignoreNot: 'Not ignoring this user',
                        ignoreAlready: 'Already ignoring this user',
                        stickyRequested: 'Sticky requested',
                        postAdded: 'Post added to tracker',
                        postRemoved: 'Post removed from tracker',
                        userAdded: 'User added to tracker',
                        userRemoved: 'User removed from tracker',
                        validationError: 'A required field is incomplete',
                        characterExceed: 'The post body exceeds XXXXXX characters.',
                        searchFor: "Search for",
                        searchTags: "Articles tagged:",
                        characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
                        ilvl: "Item Lvl",
                        shortQuery: "Search requests must be at least three characters long."
                    },
                    bml: {
                        bold: 'Bold',
                        italics: 'Italics',
                        underline: 'Underline',
                        list: 'Unordered List',
                        listItem: 'List Item',
                        quote: 'Quote',
                        quoteBy: 'Posted by {0}',
                        unformat: 'Remove Formating',
                        cleanup: 'Fix Linebreaks',
                        code: 'Code Blocks',
                        item: 'WoW Item',
                        itemPrompt: 'Item ID:',
                        url: 'URL',
                        urlPrompt: 'URL Address:'
                    },
                    ui: {
                        viewInGallery: 'View in gallery',
                        loading: 'Loading�',
                        unexpectedError: 'An error has occurred',
                        fansiteFind: 'Find this on�',
                        fansiteFindType: 'Find {0} on�',
                        fansiteNone: 'No fansites available.'
                    },
                    grammar: {
                        colon: '{0}:',
                        first: 'First',
                        last: 'Last'
                    },
                    fansite: {
                        achievement: 'achievement',
                        character: 'character',
                        faction: 'faction',
                        'class': 'class',
                        object: 'object',
                        talentcalc: 'talents',
                        skill: 'profession',
                        quest: 'quest',
                        spell: 'spell',
                        event: 'event',
                        title: 'title',
                        arena: 'arena team',
                        guild: 'guild',
                        zone: 'zone',
                        item: 'item',
                        race: 'race',
                        npc: 'NPC',
                        pet: 'pet'
                    }
                };
                //]]>
            </script>
            <script type="text/javascript" src="wow/static/js/bam.js?v21"></script>
            <script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v22"></script>
            <script type="text/javascript" src="wow/static/local-common/js/menu.js?v22"></script>
            <script type="text/javascript">
                $(function() {
                    Menu.initialize();
                    Menu.config.colWidth = 190;
                    Locale.dataPath = 'data/i18n.frag.xml';
                });
            </script>
            <!--[if lt IE 8]>
            <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v22"></script>
            <script type="text/javascript">$('.png-fix').pngFix();</script>
            <![endif]-->
            <script type="text/javascript" src="wow/static/js/inputs.js?v21"></script>
            <script type="text/javascript" src="wow/static/js/management/wow/merge/account-merge.js?v21"></script>
            <script type="text/javascript">
                //<![CDATA[
                Core.load("wow/static/local-common/js/overlay.js?v22");
                Core.load("wow/static/local-common/js/search.js?v22");
                Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v22");
                Core.load("wow/static/local-common/js/third-party/jquery.mousewheel.min.js?v22");
                Core.load("wow/static/local-common/js/third-party/jquery.tinyscrollbar.custom.js?v22");
                Core.load("wow/static/local-common/js/login.js?v22", false, function() {
                    Login.embeddedUrl = '<?php echo $website['root']; ?>loginframe.php';
                });
                //]]>
            </script>
            <script type="text/javascript">
                //<![CDATA[
                (function() {
                    var ga = document.createElement('script');
                    var src = "https://ssl.google-analytics.com/ga.js";
                    if ('http:' == document.location.protocol) {
                        src = "http://www.google-analytics.com/ga.js";
                    }
                    ga.type = 'text/javascript';
                    ga.setAttribute('async', 'true');
                    ga.src = src;
                    var s = document.getElementsByTagName('script');
                    s = s[s.length - 1];
                    s.parentNode.insertBefore(ga, s.nextSibling);
                })();
                //]]>
            </script>
    </body>
</html>