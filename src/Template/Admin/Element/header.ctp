<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
             Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i>  </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
<!--            <div class="btn-group btn-group-justified" data-toggle="buttons">-->
<!--                <label class="btn btn-default">-->
<!--                    <input type="radio" name="activity" id="ajax/notify/mail.html">-->
<!--                    Msgs (14) </label>-->
<!--                -->
<!---->
<!--            </div>-->

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Ласково просимо до адміністративної панелі</h4>
                   Докементація по керуванню <a href="/admin/howtouse">за посиланням</a>
                    <br>
                    <p><strong>Основні опції: </strong></p>
                    <p><a href="/admin/change_login">Змінити логін</a></p>
                    <p><a href="">Змінити пароль</a></p>
                    <p><a href="">Налаштування контактів</a></p>
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->


            <span> Показувати при запуску <input id="show_notif" type="checkbox" <?= (!empty($options['show_notif']) && $options['show_notif'] == 1 ? 'checked' : '')?> name="show_notif" > </span>


        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- #PROJECTS: projects dropdown -->

    <!-- #TOGGLE LAYOUT BUTTONS -->
    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="img/avatars/sunny.png" alt="John Doe" class="online">
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#ajax/profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="/admin/logout" title="Вийти" data-action="userLogout" data-logout-msg="Вийти з панелі керування?"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
<!--        <div id="search-mobile" class="btn-header transparent pull-right">-->
<!--            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>-->
<!--        </div>-->
        <!-- end search mobile button -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="На весь екран"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

        <!-- #Voice Command: Start Speech -->
        <!-- NOTE: Voice command button will only show in browsers that support it. Currently it is hidden under mobile browsers.
                   You can take off the "hidden-sm" and "hidden-xs" class to display inside mobile browser-->

        <!-- end voice command -->

        <!-- multiple lang dropdown : find all flags in the flags page -->

        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

</header>