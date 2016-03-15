<td class="sf_admin_text sf_admin_list_td_login_name">
  <?php echo $systemuser->getLoginName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Roles">
  <?php echo $systemuser->getRoles() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Department">
  <?php echo $systemuser->getDepartment() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_status">
  <?php echo get_partial('systemuser/list_field_boolean', array('value' => $systemuser->getStatus())) ?>
</td>
