<?php $this->append('pageCss'); ?>

<?php $this->end(); ?>
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

    <span id="extr-page-header-space">
        <span class="hidden-mobile hidden-xs">Need an account?</span> <a href="/admin/reg" class="btn btn-danger">Create account</a>
    </span>

</header>

<div id="main" role="main">
    <!-- MAIN CONTENT -->
    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="well no-padding">
                    <form action="/admin/login" id="login-form" class="smart-form client-form" method="post">
                        <header>
                            Sign In
                        </header>

                        <fieldset>

                            <section>
                                <label class="label">E-mail</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="email" name="email">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                            </section>

                            <section>
                                <label class="label">Password</label>
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

<?php $this->append('pageScript'); ?>


<script>

    runAllForms();

    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 6,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });

</script>

</body>
<?php $this->end(); ?>