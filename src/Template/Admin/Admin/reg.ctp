<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Smart admin</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-production.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-skins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-rtl.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/demo.min.css">
</head>
<body id="login" class=" desktop-detected pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(0%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>
<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
<header id="header">
    <!--<span id="logo"></span>-->

    <div id="logo-group">
        <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>

        <!-- END AJAX-DROPDOWN -->
    </div>

<!--    <span id="extr-page-header-space"> <span class="hidden-mobile hidden-xs">Already registered?</span> <a href="/admin/login" class="btn btn-danger">Sign In</a> </span>-->

</header>

<div id="main" role="main">
    <!-- MAIN CONTENT -->
    <div id="content" class="container">
            <div class="col-sm-10">
                <div class="well no-padding">

                    <form action="/admin/reg" id="smart-register" class="smart-form client-form" method="post">
                        <header>
                           New admin user
                        </header>

                        <fieldset>
                            <section>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="login" placeholder="Username">
                                    <b class="tooltip tooltip-bottom-right">Введіть Ваше імя</b> </label>
                            </section>

                            <section>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="pass" placeholder="Password" id="password">
                                    <b class="tooltip tooltip-bottom-right">Ваш пароль</b> </label>
                            </section>

                        </fieldset>

                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </footer>

                        <div class="message">
                            <i class="fa fa-check"></i>
                            <p>
                                Thank you for your registration!
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>





<!-- JQUERY VALIDATE -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>

<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

<script src="/admin/js/plugin/pace/pace.js"></script>
<script src="/admin/js/bootstrap/bootstrap.js"></script>
<!-- IMPORTANT: APP CONFIG -->
<script src="/admin/js/app.config.js"></script>
<!--<script src="/admin/js/demo.min.js"></script>-->
<!-- MAIN APP JS FILE -->
<script src="/admin/js/app.js" > </script>
<!-- JQUERY MASKED INPUT -->
<script src="/admin/js/plugin/masked-input/jquery.maskedinput.js"></script>
<script src="/admin/js/notification/SmartNotification.js"></script>
<script src="/admin/js/smartwidgets/jarvis.widget.js"></script>
<script src="/admin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/admin/js/plugin/bootstrap-slider/bootstrap-slider.js"></script>
<script src="/admin/js/plugin/msie-fix/jquery.mb.browser.js"></script>
<script src="/admin/js/plugin/fastclick/fastclick.js"></script>
<!-- JQUERY VALIDATE -->
<script src="/admin/js/plugin/jquery-validate/jquery.validate.js"></script>
<script>

    //runAllForms();
    // Validation
    $("#smart-register").validate({
        // Rules for form validation
        rules : {
            login : {
                minlength : 5,
                required : true,
            },
            pass : {
                minlength : 5,
                required : true,

            }
        },

        // Messages for form validation
        messages : {
            login : {
                minlength : 'Must be minimum 5 symbols',
                required : 'Please enter your login'
            },
            pass : {
                minlength : 'At least 5 symbols',
                required : 'Please enter your password'
            }
        },

        // Do not change code below
        errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
        }
    });

</script>

</body>
</html>