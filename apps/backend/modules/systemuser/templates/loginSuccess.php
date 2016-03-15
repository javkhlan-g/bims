<?php use_helper('I18N') ?>
<div class="" style="width: 390px;position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -200px;
            margin-left: -195px;">
    <div class="account-wall">
        <img class="center-block img-circle img-thumbnail" src="/images/user.jpg"
             alt="">

        <form class="form-signin" action="/systemuser/login/" method="post">
            <div class="input-group" style="margin-bottom: 5px">
                <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                <input type="text" class="form-control" style="max-width: 100%" placeholder="Username"
                       name="username" required autofocus>
            </div>
            <div class="input-group" style="margin-bottom: 5px">
                <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                <input type="password" class="form-control" style="max-width: 100%" placeholder="Password"
                       name="password" required>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
    <div style="height: 100px;padding-top: 10px">
        <?php if ($sf_user->hasFlash('notice')) {
            ?>
            <div class="alert alert-danger" align="left" style="padding:10px">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <?php echo __($sf_user->getFlash('notice')) ?>
            </div>
            <script>
                setTimeout(function () {
                    $('.alert-danger').hide()
                }, 2000);
            </script>
        <?php } ?>
    </div>
</div>
<script>
    $(function () {

        if (self != top) {
            parent.window.document.location = '/systemuser/logout/';
        }
    });
</script>