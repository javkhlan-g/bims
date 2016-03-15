<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_title() ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <?php use_helper('I18N') ?>
    <link rel="stylesheet" href="/css/ace.min.css" id="main-ace-style"/>
    <script src="/js/ace.min.js"></script>
    <script src="/js/ace.extra.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/easy/ui.min.css">
    <script type="text/javascript" src="/css/easy/ui.min.js"></script>
    <script>
        $(document).bind("ajaxSend", function () {
            $("#loader").show();
        }).bind("ajaxComplete", function () {
            $("#loader").hide();
        });
        $(function () {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                weekStart: 1
            });

            $('.selectpicker').selectpicker();
            $('#loader').hide();
            $(".submenu li").click(function () {
                // remove classes from all
                $("li").removeClass("active");
                // add class to the one we clicked
                $(this).addClass("active");
            });

            loadWindow(0, '<?php echo __("Үндсэн")?>', '/home/home/');

        });
    </script>
</head>
<body class="no-skin">
<table
    style="width: 100%;color: white;font-family: Roboto Condensed;font-size: 13px; height: 40px;background: url('/images/header-final-40.jpg');background-repeat: no-repeat;background-color: #A54CBD">
    <tr>
        <td><a class="" style="font-size: 23px;padding:0px 30px 2px 50px ;color: white;">
                <i class="glyphicon glyphicon-star-empty"></i>Budgeting and Inventory Management System</a>
        </td>
        <td><img class="pull-right" src="/images/load-wifi.gif" id="loader"/></td>
        <td style="width: 200px;">
            <ul> <!-- Profile Info -->
                <li class="dropdown ">
                    <!-- add class "pull-right" if you want to place this from right -->
                    <a data-toggle="dropdown" style="color: white;vertical-align: middle" class="dropdown-toggle" href="#"
                       aria-expanded="false"> <img width="30"
                                                   class="img-circle"
                                                   alt=""
                                                   src="http://demo.neontheme.com/assets/images/thumb-1@2x.png">
                        <?php echo $sf_user->getAttribute('user'); ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a style="cursor: pointer"
                               onclick="loadWindow(-1,'<?php echo __("Хувийн мэдээлэл") ?>','/systemuser/profile/')">
                                <i class="glyphicon glyphicon-user"></i> <?php echo __("Хувийн мэдээлэл") ?>
                            </a>
                        </li>
                        <li>
                            <a href="/systemuser/changeCulture/language/<?php $language = ($sf_user->getCulture() == 'mn' ? 'en' : 'mn');
                            echo $language ?>">
                                <i class="glyphicon glyphicon-flag"></i> <img src="/images/<?php echo $language ?>.png">
                            </a>
                        </li>
                        <li>
                            <a href="/systemuser/logout/">
                                <i class="glyphicon glyphicon-off"></i> <?php echo __("Гарах") ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </td>
    </tr>
</table>
<div id="main-container" style="border: none">
    <div id="sidebar" class="sidebar <?php echo $_SESSION['menu_switch'] ?>">
        <?php include_component('menu', 'menu'); ?>
    </div>
    <div class="main-content" style="padding: 1px;display: inherit;" id="main-content">
        <div id="tt" class="easyui-tabs">

        </div>
    </div>
    <!-- /.main-content -->
</div>
</body>
</html>
<script>
    function ajaxModule(link) {
        $.ajax({
            type: 'GET',
            url: link,
            success: function (data) {
                $('#main-content').html(data);
            }
        });
    }

    function resizeIframe(id) {
        var iFrameID = document.getElementById(id);
        if (iFrameID) {
            // here you can make the height, I delete it first, then I make it again
            iFrameID.height = "";
            if (iFrameID.contentWindow.document.body.scrollHeight < 500) {
                iFrameID.height = "500px";
            }
            else {
                iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
            }
        }
    }


</script>