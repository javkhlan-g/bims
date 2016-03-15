<?php
/**
 * Created by PhpStorm.
 * User: javkhlan.g
 * Date: 8/5/2015
 * Time: 12:38 PM
 */
use_helper('I18N');
?>
<div class="panel panel-success">
    <div class="panel-heading"><?php echo __("Хэрэглэгчийн хувийн мэдээлэл") ?></div>
    <div class="panel-body" style="padding-bottom: 0px;padding-top: 0px">
        <div class="row">
            <div class="col-md-2">
                <img class="center-block img-rounded img-thumbnail" alt="" src="/images/default-avatar.png">

                <p class="text-success" style="cursor: pointer"
                   onclick="$('#passwordDiv').show('slide');"><?php echo __("Нууц үг солих") ?></p>
            </div>
            <div class="col-md-10">
                <table class="table" style="border-bottom:1px solid #ddd;width: 400px;">
                    <tr>
                        <td style="border-top:none"><?php echo __("Нэр") ?></td>
                        <td style="border-top: none"><?php echo $user->getDisplayName() ?></td>
                    </tr>
                    <tr>
                        <td style="border-top:none"><?php echo __("Нэвтрэх нэр") ?></td>
                        <td style="border-top: none"><?php echo $user->getLoginName() ?></td>
                    </tr>
                    <tr>
                        <td style="border-top:none"><?php echo __("Хандах эрх") ?></td>
                        <td style="border-top: none"><?php echo $user->getRoles() ?></td>
                    </tr>
                    <tr>
                        <td style="border-top:none"><?php echo __("Газар хэлтэс") ?></td>
                        <td style="border-top: none"><?php echo $user->getDepartment() ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php if ($sf_user->hasFlash('success')) : ?>
            <div class="alert alert-success">
                <?php echo $sf_user->getFlash('success') ?>
            </div>
        <?php endif ?>
        <?php if ($sf_user->hasFlash('error')) : ?>
            <div class="alert alert-danger">
                <?php echo $sf_user->getFlash('error') ?>
            </div>
        <?php endif ?>
        <form id="passwordDiv" action="/systemuser/profile/" method="post">
            <table class="" style="width: 100%">
                <tr>
                    <td><?php echo __("Хуучин нууц үг") ?><font size="2" color="red">*</font></td>
                    <td>
                        <input type="password" style="background-color: rgb(252, 249, 203);" name="OldPass" id=""
                               class="form-control" value="" size="40" maxlength="50" required="">
                    </td>
                    <td rowspan="5">
                        <div class="alert alert-warning">
                            <p class="text-warning">* Нууц үг хамгийн багадаа 6 тэмдэгт байна</p>

                            <p class="text-warning">* Cул зай авахгүй</p>

                            <p class="text-warning">* Ядаж нэг том үсэг орсон байна</p>

                            <p class="text-warning">* Ядаж нэг жижиг үсэг орсон байна</p>

                            <p class="text-warning">* Ядаж нэг тоо орсон байна</p>

                            <p class="text-warning">* Нэвтрэх нэрийг оролцуулж болохгүй</p>

                            <p class="text-warning">* Тусгай тэмдэгтээс заавал нэгийг оруулна (@ # $ ^ * ! ~) гэх
                                мэт</p>

                            <p style="padding-left: 150px" class="text-success"> Жишээ нь: Paul@1020</p>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td><?php echo __("Шинэ нууц үг") ?> <font size="2" color="red">*</font></td>
                    <td>
                        <input type="password" style="" name="Password" id="Password" class="form-control" value=""
                               size="40" maxlength="50" required="">
                    </td>
                </tr>
                <tr>
                    <td><?php echo __("Шинэ нууц үг") ?><font size="2" color="red">*</font></td>
                    <td>
                        <input type="password" style="" name="cPassword" id="cPassword" class="form-control"
                               value=""
                               size="40" maxlength="50" required="">
                    </td>
                </tr>
                <tr>
                    <td nowrap="" align="right">
                    </td>
                    <td align="left">
                        <input type="submit" name="_save" value="Хадгалах" onclick="return validate()"
                               class="btn btn-default">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<script>
    $(function () {
        $('#passwordDiv').hide();
    })

</script>