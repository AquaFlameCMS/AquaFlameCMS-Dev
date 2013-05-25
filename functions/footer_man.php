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
            <a href="javascript:;" tabindex="100" id="change-language">
                <span><?php echo $website['title'] . " - " . $lang_language_selection['change']; ?></span>
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
                            <a href="?Local=gr-gr" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to gr-gr');
                                    return true;">
                                   <?php echo $lang_language_selection['en-us']; ?>
                            </a>
                        </li>
                    </ul>
                    <span class="clear"><!-- --></span>
                </div>
                <br />
                <center>
                    <br>
                    <small><?php echo $copyright3['copyright3']; ?>.<br /><?php
                        echo $copyright['copyright'];
                        echo $website['title'];
                        ?>.<br /><?php echo $copyright4['copyright4']; ?></small>
                </center>
            </div>
            <center><a href="http://www.strawberry-pr0jcts.com/forum/index.php?/forum/27-wowfailurecms/" height="46" width="190"><img src="<?php echo $website['root']; ?>wow/static/images/logos/wof-logo-small.png" height="21px" width="190px"/></center></a>
        </div>
        <span class="clear"><!-- --></span>
    </div>
</div>
</div>