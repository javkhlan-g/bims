<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_title() ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <?php use_helper('I18N') ?>
    <script>
        $(document).bind("ajaxSend", function () {
            parent.$("#loader").show();
        }).bind("ajaxComplete", function () {
            parent.resizeIframe(window.frameElement.id);
            parent.$("#loader").hide();
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
            // is empty filter remove with label with new line space
            $("[id$=_is_empty]").prev().remove();
            $("[for$=_is_empty], [id$=_is_empty]").remove();
        });
    </script>
</head>

<!--       bootstrap.min.css  display:table -> " " сольчихвол зүгээр болох хийсэн байсан зүйлүүдийг эвдэх гээд байна ;content:" " -->
<div id="main-container">
    <div class="main-content" style="padding: 1px;display: inherit;" id="main-content">
        <?php echo $sf_content ?>
    </div>
    <!-- /.main-content -->
</div>

</html>
