<td colspan="2">
  <?php echo __('%%role_id%% - %%name%%', array('%%role_id%%' => link_to($roles->getRoleId(), 'roles_edit', $roles), '%%name%%' => $roles->getName()), 'messages') ?>
</td>
