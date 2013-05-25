<?php
include("configs.php");
$page_cat = 'summary';
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
    header('Location: account_log.php');
}
?>

<html>
    <head>
        <title><?php echo $website['title']; ?><?php echo @$Man['Man']; ?></title>
        <meta content="false" http-equiv="imagetoolbar" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
        <link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/management/common.css" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="local-common/css/common-ie.css" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="local-common/css/common-ie6.css" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="local-common/css/common-ie7.css" /><![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
        <link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/dashboard.css" />
        <link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/dashboard.css" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="/css/management/wow/dashboard-ie.css" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="/css/management/dashboard-ie6.css" /><![endif]-->
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="css/bnet-ie.css" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="css/bnet-ie6.css" /><![endif]-->
        <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/core.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/third-party/swfobject.js?v37"></script>
        <script type="text/javascript" src="wow/static/js/management/dashboard.js?v23"></script>
        <script type="text/javascript" src="wow/static/js/management/wow/dashboard.js?v23"></script>
        <script type="text/javascript" src="wow/static/js/bam.js?v23"></script>
        <script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v37"></script>
        <script type="text/javascript" src="wow/static/local-common/js/menu.js?v37"></script>
        <script type="text/javascript">
            $(function() {
                Menu.initialize();
                Menu.config.colWidth = 190;
                Locale.dataPath = 'data/i18n.frag.xml';
            });
        </script>
        <!--[if IE 6]> <script type="text/javascript">
        //<![CDATA[
        try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
        //]]>
        </script>
        <![endif]-->
    </head>
    <body class="en-gb logged-in">
        <div id="layout-top">
            <div class="wrapper">
                <div id="header">
                    <?php include("functions/header_account.php"); ?>
                    <?php include("functions/footer_man_nav.php"); ?>
                </div>
                </li>
                </ul>
                <div id="warnings-wrapper">
                    <!--[if lt IE 8]>
                    <div id="browser-warning" class="warning warning-red">
                    <div class="warning-inner2">
                    You are using an outdated web browser.<br />
                    <a href="http://eu.blizzard.com/support/article/browserupdate">Upgrade</a> or <a href="http://www.google.com/chromeframe/?hl=en-GB" id="chrome-frame-link">install Google Chrome Frame</a>.
                    <a href="#close" class="warning-close" onclick="App.closeWarning('#browser-warning', 'browserWarning'); return false;"></a>
                    </div>
                    </div>
                    <![endif]-->
                    <!--[if lte IE 8]>
                    <script type="text/javascript" src="wow/static/local-common/js/third-party/CFInstall.min.js?v22"></script>
                    <script type="text/javascript">
                    //<![CDATA[
                    $(function() {
                    var age = 365 * 24 * 60 * 60 * 1000;
                    var src = 'https://www.google.com/chromeframe/?hl=en-GB';
                    if ('http:' == document.location.protocol) {
                    src = 'http://www.google.com/chromeframe/?hl=en-GB';
                    }
                    document.cookie = "disableGCFCheck=0;path=/;max-age="+age;
                    $('#chrome-frame-link').bind({
                    'click': function() {
                    App.closeWarning('#browser-warning');
                    CFInstall.check({
                    mode: 'overlay',
                    url: src
                    });
                    return false;
                    }
                    });
                    });
                    //]]>
                    </script>
                    <![endif]-->
                    <noscript>
                    <div id="javascript-warning" class="warning warning-red">
                        <div class="warning-inner2">
                            <?php echo $Man['Man2']; ?>
                        </div>
                    </div>
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div id="layout-middle">
        <div class="wrapper">
            <div id="content">
                <div class="dashboard wowx3 eu">
                    <div class="primary">
                        <div class="header">
                            <h2 class="subcategory"><?php echo $Man['Man3']; ?></h2>
                            <h3 class="headline"><?php echo $Man['Man4']; ?></h3>
                            <a href=""><img src="wow/static/local-common/images/game-icons/wowx3.png" alt="World of Warcraft®" title="" width="48" height="48" /></a>
                        </div>
                        <div class="account-summary">
                            <div class="account-management">
                                <div class="section box-art" id="box-art">
                                    <img src="wow/static/local-common/images/game-boxes/en-gb/wowx3-big.png" alt="World of Warcraft®" title="" width="242" height="288" id="box-img" />
                                </div>
                                <div class="section account-details">
                                    <dl>
                                        <dt class="subcategory"><?php echo $Man['Man5']; ?></dt>
                                        <dd class="account-name"><?php echo strtolower($_SESSION['username']); ?></dd>
                                        <dt class="subcategory"><?php echo $Man['Man6']; ?></dt>
                                        <dd class="account-status"> <span><strong class="disable">
                                                    <?php
                                                    include("configs.php");
                                                    //Get Info By Query
                                                    $conn = mysql_connect("$serveraddress", "$serveruser", "$serverpass") or die("Couldn't connect to database");
                                                    $account_info = mysql_query("SELECT id,username,locked  FROM `" . $server_adb . "`.`account` WHERE username='" . $_SESSION['username'] . "'") or die(mysql_error());
                                                    while ($get = mysql_fetch_array($account_info)) {
                                                        //Banned?
                                                        if ($get['locked'] == 0)
                                                            echo "<font color='green'>" . $Man['Man7'] . "</font>";
                                                        else
                                                            echo "<font color='red'>" . $Man['Man8'] . "</font>";
                                                    }
                                                    ?></strong></span>
                                        </dd>
                                        <dt class="subcategory"><?php echo $Man['Man9']; ?></dt>
                                        <dd class="account-details"><?php
                                            include("configs.php");
                                            //Get Info By Query
                                            $conn = mysql_connect("$serveraddress", "$serveruser", "$serverpass") or die("Couldn't connect to database");
                                            $account_info = mysql_query("SELECT id,username,locked  FROM `" . $server_adb . "`.`account` WHERE username='" . $_SESSION['username'] . "'") or die(mysql_error());
                                            while ($get = mysql_fetch_array($account_info)) {
                                                //Banned?
                                                if ($get['locked'] == 0)
                                                    echo "<font color='green'>" . $Man['Man10'] . "</font>";
                                                else
                                                    echo "<font color='red'>" . $Man2['Man10'] . "</font>";
                                            }
                                            ?>
                                        </dd>
                                        <dt class="subcategory"><?php echo $Man['Man11']; ?></dt>
                                        <dd class="account primary-account"><span class="account-history"><font color="#D16000"><?php echo $Man['Man12']; ?></font></span>
                                            <em><a href="change_client.php?client=3"><li><?php echo $Man['Man13']; ?></li></a></em></dd>
                                        <dd class="account secondary-account"><font color="#0072A3"><?php echo $Man['Man14']; ?></font>
                                            <em><a href="change_client.php?client=2"><li><?php echo $Man['Man15']; ?></li></a></em></dd>
                                        <dd class="account secondary-account"><font color="#138701"><?php echo $Man['Man16']; ?></font>
                                            <em><a href="change_client.php?client=1"><li><?php echo $Man['Man17']; ?></li></a></em></dd>
                                        <dd class="account secondary-account oldest-account"><font color="#5B4325"><?php echo $Man['Man18']; ?></font>
                                            <em><a href="change_client.php?client=0"><li><?php echo $Man['Man19']; ?></li></a></em></dd>
                                        <dt class="subcategory"><?php echo $Man['Man20']; ?></dt>
                                        <dd class="region eu"><?php echo $Man['Man21']; ?></dd>
                                        <dt class="subcategory"><?php echo $website['title']; ?><?php echo $Man['Man22']; ?></dt>
                                        <dd><strong class="unsubscribed"><?php echo $Man['Man23']; ?></strong></dd>
                                    </dl>
                                </div>
                                <div class="section available-actions">
                                    <ul class="game-time">
                                        <li class="change-payment-method">
                                            <a href=""><?php echo $Man['Man24']; ?></a>
                                        </li>
                                        <li class="change-payment-method">
                                            <a href="vote.php"><?php echo $Man['Man25']; ?></a>
                                        </li>
                                        <li class="add-game-card">
                                            <a href="change-password.php"><?php echo $Man['Man26']; ?></a>
                                        </li>
                                        <li class="payment-history">
                                            <a href=""><?php echo $Man['Man27']; ?></a>
                                        </li>
                                        <li class="download-guide">
                                            <a href="game_client.php"><?php echo $Man['Man28']; ?></a>
                                        </li>
                                        <li class="download-client">
                                            <a href="game_client.php"><?php echo $Man['Man29']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dashboard-form" id="enter-game-key">
                                <form action="" method="post">
                                    <div class="hiddenInputWrapper">
                                        <input type="hidden" name="confirmed" value="true" />
                                        <input type="hidden" name="codeType" value="WOW" />
                                        <input type="hidden" name="wowAccountLabel" value="<?php echo strtolower($_SESSION['username']); ?>" />
                                        <input type="hidden" name="legalAgreementAccepted" value="false" />
                                        <input type="hidden" name="product" value="" />
                                        <input type="hidden" name="region" value="EU" />
                                    </div>
                                    <h4><?php echo $Man['Man30']; ?></h4>
                                    <p></p>
                                    <p class="simple-input">
                                        <input type="text" name="gameKey" value="" class="input border-5 glow-shadow-2" maxlength="320" tabindex="1" />
                                        <button
                                            class="ui-button button1 disabled"
                                            type="submit"
                                            disabled="disabled"
                                            tabindex="1">
                                            <span>
                                                <span><?php echo $Man['Man31']; ?></span>
                                            </span>
                                        </button>
                                        <a class="ui-cancel "
                                           href="#"
                                           onclick="DashboardForm.hide($('#enter-game-key'));
                return false;"
                                           tabindex="1">
                                            <span>
                                                <?php echo $Man['Man32']; ?></span>
                                        </a>
                                    </p>
                                    <p><?php echo $Man['Man33']; ?></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="secondary">
                        <div class="service-selection character-services">
                            <ul class="wow-services">
                                <li class="category"><a href="#character-services" class="character-services"><?php echo $Man['Man34']; ?></a></li>
                                <li class="category"><a href="#additional-services" class="additional-services"><?php echo $Man['Man35']; ?></a></li>
                                <li class="category"><a href="#referrals-rewards" class="referrals-rewards"><?php echo $Man['Man36']; ?></a></li>
                                <li class="category"><a href="#game-time-subscriptions" class="game-time-subscriptions"><?php echo $Man['Man37']; ?></a></li>
                            </ul>
                            <div class="service-links">
                                <div class="position"></div>
                                <div class="content character-services" id="character-services">
                                    <ul>
                                        <li class="wow-service pct">
                                            <a href="">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man38']; ?></strong>
                                                <?php echo $Man['Man39']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service pfc">
                                            <a href="options/change_faction.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man40']; ?></strong>
                                                <?php echo $Man['Man41']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service prc">
                                            <a href="options/change_race.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man42']; ?></strong>
                                                <?php echo $Man['Man43']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service pnc">
                                            <a href="options/change_name.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man44']; ?></strong>
                                                <?php echo $Man['Man45']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service pcc">
                                            <a href="options/change_appear.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man46']; ?></strong>
                                                <?php echo $Man['Man47']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service char-move">
                                            <a href="chars-unst.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man48']; ?></strong>
                                                <?php echo $Man['Man49']; ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content additional-services" id="additional-services">
                                    <ul>
                                        <li class="wow-service ptr-copy">
                                            <a href="vote.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man50']; ?></strong>
                                                <?php echo $Man['Man51']; ?><?php echo $website['title']; ?> <?php echo $Man['Man52']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service arena-tournament-closed">
                                            <a href="" onclick="return Core.open(this);">
                                                <span class="icon glow-shadow-3 disabled"></span>
                                                <strong><?php echo $Man['Man53']; ?></strong>
                                                <?php echo $Man['Man54']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service parental-controls">
                                            <a href="">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man55']; ?></strong>
                                                <?php echo $Man['Man56']; ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content referrals-rewards" id="referrals-rewards">
                                    <ul>
                                        <li class="wow-service raf">
                                            <a href="">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man57']; ?></strong>
                                                <?php echo $Man['Man58']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service resurrection-scroll">
                                            <a href="raf-invite.php">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man59']; ?></strong>
                                                <?php echo $Man['Man60']; ?><?php echo $website['title']; ?><?php echo $Man['Man61']; ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content game-time-subscriptions" id="game-time-subscriptions">
                                    <ul>
                                        <li class="wow-service add-game-card">
                                            <a href="">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $Man['Man62']; ?></strong>
                                                <?php echo $Man['Man63']; ?><?php echo $website['title']; ?><?php echo $Man['Man64']; ?>
                                            </a>
                                        </li>
                                        <li class="wow-service wow-anywhere">
                                            <a href="">
                                                <span class="icon glow-shadow-3"></span>
                                                <strong><?php echo $website['title']; ?><?php echo $Man['Man65']; ?></strong>
                                                <?php echo $Man['Man66']; ?><?php echo $website['title']; ?>.
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--[if lt IE 7]> <script type="text/javascript" src="local-common/js/third-party/DD_belatedPNG.js"></script>
<script type="text/javascript">
//<![CDATA[
DD_belatedPNG.fix('.download a .icon');
//]]>
</script>
<![endif]-->
                <script type="text/javascript">
            //<![CDATA[
            $(function() {
                var times = new DateTime();
            });
            //]]>
                </script>
            </div>
        </div>
    </div>
    <div id="layout-bottom">
        <?php include("functions/footer_man.php"); ?>
    </div>
</div>
<script type="text/javascript" src="wow/static/local-common/js/search.js?v37"></script>
<script type="text/javascript">
//<![CDATA[
    var xsToken = '';
    var supportToken = '';
    var Msg = {
        support: {
            ticketNew: 'Ticket {0} was created.',
            ticketStatus: 'Ticket {0}’s status changed to {1}.',
            ticketOpen: 'Open',
            ticketAnswered: 'Answered',
            ticketResolved: 'Resolved',
            ticketCanceled: 'Canceled',
            ticketArchived: 'Archived',
            ticketInfo: 'Need Info',
            ticketAll: 'View All Tickets'
        },
        cms: {
            requestError: 'Your request cannot be completed.',
            ignoreNot: 'Not ignoring this user',
            ignoreAlready: 'Already ignoring this user',
            stickyRequested: 'Sticky requested',
            stickyHasBeenRequested: 'You have already sent a sticky request for this topic.',
            postAdded: 'Post added to tracker',
            postRemoved: 'Post removed from tracker',
            userAdded: 'User added to tracker',
            userRemoved: 'User removed from tracker',
            validationError: 'A required field is incomplete',
            characterExceed: 'The post body exceeds XXXXXX characters.',
            searchFor: "Search for",
            searchTags: "Articles tagged:",
            characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
            ilvl: "Level {0}",
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
            submit: 'Submit',
            cancel: 'Cancel',
            reset: 'Reset',
            viewInGallery: 'View in gallery',
            loading: 'Loading…',
            unexpectedError: 'An error has occurred',
            fansiteFind: 'Find this on…',
            fansiteFindType: 'Find {0} on…',
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
        },
        search: {
            kb: 'Support',
            post: 'Forums',
            article: 'Blog Articles',
            static: 'General Content',
            wowcharacter: 'Characters',
            wowitem: 'Items',
            wowguild: 'Guilds',
            wowarenateam: 'Arena Teams',
            other: 'Other'
        }
    };
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
    Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v37");
    Core.load("wow/static/local-common/js/login.js?v37", false, function() {
        Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
    });
//]]>
</script>
<script type="text/javascript" src="wow/static/js/bam.js?v23"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v37"></script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js?v37"></script>
<script type="text/javascript">
    $(function() {
        Menu.initialize();
        Menu.config.colWidth = 190;
        Locale.dataPath = 'data/i18n.frag.xml';
    });
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v37"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/swfobject.js?v37"></script>
<script type="text/javascript" src="wow/static/js/management/dashboard.js?v23"></script>
<script type="text/javascript" src="wow/static/js/management/wow/dashboard.js?v23"></script>
<!--[if lt IE 8]> <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v37"></script>
<script type="text/javascript">
//<![CDATA[
$('.png-fix').pngFix(); //]]>
</script>
<![endif]-->
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