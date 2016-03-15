
<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Role', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo link_to($roles->getRoleId(), 'roles_edit', $roles) ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Name', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $roles->getName() ?></div>
  </div>
</div>
