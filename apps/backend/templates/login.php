<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_title() ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <?php use_helper('I18N') ?>
    <style>
        body {
            /*background: url("/images/login_bg.jpg") no-repeat center center fixed #000;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading, .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            /*position: relative;*/
            font-size: 14px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .account-wall {

            padding: 20px 0px 20px 0px;
            background-color: #f7f7f7;
            opacity: 0.8;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
    </style>
</head>
<?php echo $sf_content ?>
</html>
