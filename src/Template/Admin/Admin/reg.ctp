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

    <span id="extr-page-header-space"> <span class="hidden-mobile hidden-xs">Already registered?</span> <a href="/admin/login" class="btn btn-danger">Sign In</a> </span>

</header>

<div id="main" role="main">
    <!-- MAIN CONTENT -->
    <div id="content" class="container">
            <div class="col-sm-12">
                <div class="well no-padding">

                    <form action="/admin/reg" id="smart-form-register" class="smart-form client-form" method="post">
                        <header>
                           new admin user
                        </header>

                        <fieldset>
                            <section>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="name" placeholder="Username">
                                    <b class="tooltip tooltip-bottom-right">Введіть Ваше імя</b> </label>
                            </section>

                            <section>
                                <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email address">
                                    <b class="tooltip tooltip-bottom-right">Email</b> </label>
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



<?php $this->append('pageScript'); ?>


<script>

    // Validation
    $(function() {
        // Validation
        $("#smart-form-register").validate({

            // Rules for form validation
            rules : {
                username : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                login : {
                    required : 'Please enter your login'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                },
                passwordConfirm : {
                    required : 'Please enter your password one more time',
                    equalTo : 'Please enter the same password as above'
                },
                firstname : {
                    required : 'Please select your first name'
                },
                lastname : {
                    required : 'Please select your last name'
                },
                gender : {
                    required : 'Please select your gender'
                },
                terms : {
                    required : 'You must agree with Terms and Conditions'
                }
            },

            // Ajax form submition


            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

    });
</script>




<?php $this->end() ?>
</body>