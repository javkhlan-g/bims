
<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('№', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo link_to($systemuser->getSystemUserId(), 'systemuser_edit', $systemuser) ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Нэвтрэх нэр', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $systemuser->getLoginName() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Нууц үг', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $systemuser->getLoginPassword() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Харагдах нэр', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $systemuser->getDisplayName() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Нээлттэй', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo get_partial('systemuser/list_field_boolean', array('value' => $systemuser->getStatus())) ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Department', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $systemuser->getDepartmentId() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Role', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $systemuser->getRoleId() ?></div>
  </div>
</div>
