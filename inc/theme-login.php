<?php
function my_login_logo() { ?>
    <style>
        .login {
            background: #0D2F3F;
        }

        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-light.svg) !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center center !important;
            height: 100px !important;
            width: 100% !important;
        }

        .login:not(#loginform) a {
            color: #E3E7EF !important;
        }

        .login:not(#loginform) a:hover {
            color: #fff !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );
