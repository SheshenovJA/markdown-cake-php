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
    <link rel="stylesheet" type="text/css" href="/admin/css/pnotify.custom.min.css">
</head>
<body>

<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(0%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>

<header id="header">

    <div id="logo-group">
        <span id="logo"> <img src="/admin/img/logo.png" alt="SmartAdmin"> </span>
    </div>

    <!--    <span id="extr-page-header-space">-->
    <!--        <span class="hidden-mobile hidden-xs">Need an account?</span> <a href="/admin/reg" class="btn btn-danger">Create account</a>-->
    <!--    </span>-->

</header>

<div id="main" role="main">
    <!-- MAIN CONTENT -->
    <div id="content" class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="well no-padding">

                    <form action="/admin/login" id="login-form" class="smart-form client-form" method="post">
                        <?= $this->Flash->render() ?>
                        <header>
                            Sign In to Admin panel
                        </header>
                        <fieldset>
                            <section>
                                <label class="label">Login:</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="login">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter admin account name</b></label>
                            </section>

                            <section>
                                <label class="label">Password:</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="pass">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                                <div class="note">
                                    <!--                                    <a href="">Forgot password?</a>-->
                                </div>
                            </section>

                            <section>
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" checked="">
                                    <i></i>Stay signed in</label>
                            </section>
                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                        </footer>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>





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
<script src="/admin/js/pnotify.custom.min.js"></script>
<!-- JQUERY VALIDATE -->
<script src="/admin/js/plugin/jquery-validate/jquery.validate.js"></script>
<script>

    //runAllForms();
    // Validation
    $("#login-form").validate({
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
                minlength: 'dsasd',
                required : 'Please enter your password'
            },
        },

        // Do not change code below
        errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
        }
    });

</script>
</body>
</html>