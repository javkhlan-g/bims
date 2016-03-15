<td colspan="4">
  <?php echo __('%%login_name%% - %%Roles%% - %%Department%% - %%status%%', array('%%login_name%%' => $systemuser->getLoginName(), '%%Roles%%' => $systemuser->getRoles(), '%%Department%%' => $systemuser->getDepartment(), '%%status%%' => get_partial('systemuser/list_field_boolean', array('value' => $systemuser->getStatus()))), 'messages') ?>
</td>
