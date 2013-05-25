<div class="wrapper">
    <div id="footer">
        <div id="sitemap">
            <div class="column">
                <h3 class="bnet">
                    <a href="#" tabindex="100"><?php echo $website['title']; ?></a>
                </h3>
                <ul>
                    <li><a href="<?php echo $website['root']; ?>account_log.php"><?php echo $Account['Account']; ?></a></li>
                    <li><a href=""><?php echo $Support['Support']; ?></a></li>
                </ul>
            </div>
            <div class="column">
                <h3 class="games">
                    <a href="#" tabindex="100"><?php echo $Games['Games']; ?></a>
                </h3>
                <ul>
                    <li><a href="#"><?php echo $website['title']; ?></a></li>
                    <li><a href="#"><?php echo $Client_down['Client_down']; ?></a></li>
                </ul>
            </div>
            <div class="column">
                <h3 class="account">
                    <a href="#" tabindex="100"><?php echo $Account['Account']; ?></a>
                </h3>
                <ul>
                    <li><a href="#"><?php echo $Account1['Account1']; ?></a></li>
                    <li><a href="<?php echo $website['root']; ?>register.php"><?php echo $lang_general['create_account']; ?></a></li>
                    <li><a href="<?php echo $website['root']; ?>account_log.php"><?php echo $Account4['Account4']; ?></a></li>
                    <li><a href="<?php echo $website['root']; ?>account_log.php"><?php echo $Account5['Account5']; ?></a></li>
                </ul>
            </div>
            <div class="column">
                <h3 class="support">
                    <a href="#" tabindex="100"><?php echo $Support['Support']; ?></a>
                </h3>
                <ul>
                    <li><a href="#"><?php echo $Support3['Support3']; ?></a></li>
                    <li><a href="#"><?php echo $Support4['Support4']; ?></a></li>
                </ul>
            </div>
            <span class="clear"><!-- --></span>
        </div>
        <div id="copyright">
            <?php

            function curPageName() {
                return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
            }

            echo '<a tabindex="100" id="change-language" ';
            if (strtoupper(curPageName()) <> 'ADVANCED.PHP' && strtoupper(curPageName()) <> 'THREED.PHP') {
                echo ' href="javascript:;"';
            }
            echo '>'
            ?>
            <span><?php
                echo $website['title'] . " - " . $lang_language_selection['change'];
                ?></span>
            </a>
            <span class="clear"><!-- --></span>
            <div id="international" style=": block; ">
                <div class="column">
                    <h3 style="padding-left:12px;" ><?php echo $lang_language_selection['zone_america']; ?></h3>
                    <ul>
                        <li>
                            <a href="?Local=en-us" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to en-us');
                                    return true;">
                                   <?php echo $lang_language_selection['en-us']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=es-mx" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to es-mx');
                                    return true;">
                                   <?php echo $lang_language_selection['es-mx']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=pt-br" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to pt-br');
                                    return true;">
                                   <?php echo $lang_language_selection['pt-br']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h3 style="padding-left:14px;" ><?php echo $lang_language_selection['zone_europe']; ?></h3>
                    <ul>
                        <li>
                            <a href="?Local=de-de" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to de-de');
                                    return true;">
                                   <?php echo $lang_language_selection['de-de']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=en-gb" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to en-gb');
                                    return true;">
                                   <?php echo $lang_language_selection['en-gb']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=es-es" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to es-es');
                                    return true;">
                                   <?php echo $lang_language_selection['es-es']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=fr-fr" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to fr-fr');
                                    return true;">
                                   <?php echo $lang_language_selection['fr-fr']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=it-it" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to it-it');
                                    return true;">
                                   <?php echo $lang_language_selection['it-it']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=pt-pt" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to pt-pt');
                                    return true;">
                                   <?php echo $lang_language_selection['pt-pt']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="?Local=ru-ru" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to ru-ru');
                                    return true;">
                                   <?php echo $lang_language_selection['ru-ru']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h3 style="padding-left:12px;" ><?php echo $lang_language_selection['zone_korea']; ?></h3>
                    <ul>
                        <li>
                            <a href="?Local=ko-kr" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to ko-kr');
                                    return true;">
                                   <?php echo $lang_language_selection['ko-kr']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h3 style="padding-left:12px;" ><?php echo $lang_language_selection['zone_taiwan']; ?></h3>
                    <ul>
                        <li>
                            <a href="?Local=zh-tw" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to zh-tw');
                                    return true;">
                                   <?php echo $lang_language_selection['zh-tw']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h3 style="padding-left:12px;" ><?php echo $lang_language_selection['zone_china']; ?></h3>
                    <ul>
                        <li>
                            <a href="?Local=zh-cn" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to zh-cn');
                                    return true;">
                                   <?php echo $lang_language_selection['zh-cn']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h3 style="padding-left:15px;" ><?php echo $lang_language_selection['zone_souteast_asia']; ?></h3>
                    <ul>
                        <li>
                            <a href="?Local=gr-gr" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to en-us');
                                    return true;">
                                   <?php echo $lang_language_selection['en-us']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <span class="clear"><!-- --></span>
            </div>
            <br />
            <center>
                <br>
                <small><?php echo $copyright3['copyright3']; ?>.<br /><?php echo $copyright['copyright']; ?> - <?php echo date('Y'); ?> <?php echo $website['title']; ?>.<br /><?php echo $copyright4['copyright4']; ?></small>
            </center>
        </div>
        <center><a class="powered" href="http://www.strawberry-pr0jcts.com/" ></a></center>
    </div>
    <span class="clear"><!-- --></span>
</div>


<div id="service">
    <ul class="service-bar">
        <li class="service-cell service-home"><a href="<?php echo $website['address']; ?>" tabindex="50" accesskey="1" title="Home"><div style="width:45px;">&nbsp;</div></a></li>
        <?php if (isset($_SESSION['username'])) { ?>
            <li class="service-cell service-welcome"><?php echo $lang_navigation_top['welcome'] . ", "; ?><?php
                if ($userInfo['firstName'] == "") {
                    echo $globalInfoVar['Anonymous'];
                } else {
                    echo $userInfo['firstName'];
                }
                ?> | <a href="<?php echo $website['root']; ?>logout.php"><?php echo $lang_navigation_top['logout']; ?></a></li>
        <?php } else { ?>
            <li class="service-cell service-welcome"><a href="?login" onclick="return Login.open()"><?php echo $lang_navigation_top['login']; ?></a> <?php echo $lang_general['or']; ?> <a href="<?php echo $website['root']; ?>register.php"><?php echo $lang_general['create_account']; ?></a></li>
        <?php } ?>
        <li class="service-cell service-account"><a href="<?php echo $website['root']; ?>account_log.php" class="service-link" tabindex="50" accesskey="3"><?php echo $Account['Account']; ?></a></li>
        <li class="service-cell service-support service-support-enhanced">
            <a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" onclick="return false" style="cursor: progress" rel="javascript"><?php echo $Support['Support']; ?><span class="no-support-tickets" id="support-ticket-count"></span></a>
            <div class="support-menu" id="support-menu" style="display:none;">
                <div class="support-primary">
                    <ul class="support-nav">
                        <li>
                            <a href="" tabindex="55" class="support-category">
                                <strong class="support-caption"><?php echo $Support8['Support8']; ?></strong>
                                <?php echo $Support5['Support5']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="" tabindex="55" class="support-category">
                                <strong class="support-caption"><?php echo $Support9['Support9']; ?></strong>
                                <?php echo $Support6['Support6']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="" tabindex="55" class="support-category">
                                <strong class="support-caption"><?php echo $Support10['Support10']; ?></strong>
                                <?php echo $Support7['Support7']; ?>
                            </a>
                            <div class="ticket-summary" id="ticket-summary"></div>
                        </li>
                    </ul>
                    <span class="clear"><!-- --></span>
                </div>
                <div class="support-secondary"></div>
                <!--[if IE 6]> <iframe id="support-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 297px; height: 400px; z-index: -1;"></iframe>
                <script type="text/javascript">
                //<![CDATA[
                (function(){
                var doc = document;
                var shim = doc.getElementById('support-shim');
                shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
                shim.style.display = 'block';
                })();
                //]]>
                </script>
                <![endif]-->
            </div>
        </li>
        <li class="service-cell service-explore">
            <a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" onclick="return false" style="cursor: progress" rel="javascript"><?php echo $website['explore']; ?></a>
            <div class="explore-menu" id="explore-menu" style="display:none;">
                <div class="explore-primary">
                    <ul class="explore-nav">
                        <li>
                            <a href="<?php echo $website['root']; ?>index.php" tabindex="55">
                                <strong class="explore-caption"><?php echo $website['title']; ?></strong>
                                <?php echo $Friends['Keepthem']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $website['root']; ?>account_log.php" tabindex="55">
                                <strong class="explore-caption"><?php echo $Account['Account']; ?></strong>
                                <?php echo $Account6['Account6']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" tabindex="55">
                                <strong class="explore-caption"><?php echo $Support['Support']; ?></strong>
                                <?php echo $Support11['Support11']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" tabindex="55">
                                <strong class="explore-caption"><?php echo $Donate['Donate']; ?></strong>
                                <?php
                                echo $Donate1['Donate1'];
                                echo $website['title'];
                                ?>.
                            </a>
                        </li>
                    </ul>
                    <div class="explore-links">
                        <h2 class="explore-caption"><?php echo $More['More']; ?></h2>
                        <ul>
                            <li><a href="#" tabindex="55"><?php echo $Retrieve['Retrieve']; ?></a></li>
                            <li><a href="#" tabindex="55"><?php echo $Client_down3['Client_down3']; ?></a></li>
                        </ul>
                    </div>
                    <span class="clear"><!-- --></span>
                    <!--[if IE 6]> <iframe id="explore-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 409px; height: 400px; z-index: -1;"></iframe>
                    <script type="text/javascript">
                    //<![CDATA[
                    (function(){
                    var doc = document;
                    var shim = doc.getElementById('explore-shim');
                    shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
                    shim.style.display = 'block';
                    })();
                    //]]>
                    </script>
                    <![endif]-->
                </div>

            </div>
        </li>
    </ul>
</div>

<script type="text/javascript">
//<![CDATA[
                                var xsToken = '272c2eb0-9252-4eae-b494-93fd89788702';
                                var supportToken = '';
                                var Msg = {
                                    support: {
                                        ticketNew: 'Ticket {0} was created.',
                                        ticketStatus: 'Ticket {0}’s status changed to {1}.',
                                        ticketOpen: 'Open',
                                        ticketAnswered: 'Answered',
                                        ticketResolved: 'Resolved',
                                        ticketCanceled: 'Cancelled',
                                        ticketArchived: 'Archived',
                                        ticketInfo: 'Need Info',
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

<script type="text/javascript" src="<?php echo $website['root']; ?>wow/static/local-common/js/search.js?v37"></script>

<script type="text/javascript">
//<![CDATA[
    Core.load("<?php echo $website['root']; ?>wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v37");
    Core.load("<?php echo $website['root']; ?>wow/static/local-common/js/login.js?v37", false, function() {
        Login.embeddedUrl = '<?php echo $website['root']; ?>loginframe.php';
    });
//]]>
</script>


<script type="text/javascript" src="<?php echo $website['root']; ?>wow/static/local-common/js/menu.js?v37"></script>
<script type="text/javascript" src="<?php echo $website['root']; ?>wow/static/js/wow.js?v19"></script>
<script type="text/javascript">
//<![CDATA[
    $(function() {
        Menu.initialize('<?php echo $website['root']; ?>data/menu.json');
    });
//]]>
</script>
<script type="text/javascript" src="<?php echo $website['root']; ?>wow/static/local-common/js/cms.js?v37"></script>

<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v37"></script>
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
