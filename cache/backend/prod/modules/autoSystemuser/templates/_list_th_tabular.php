<?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('login_name' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_text sf_admin_list_th_login_name">
  <?php if ('login_name' == $sort[0]): ?>
    <?php echo link_to(__('Нэвтрэх нэр', array(), 'messages'), '@systemuser', array('query_string' => 'sort=login_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Нэвтрэх нэр', array(), 'messages'), '@systemuser', array('query_string' => 'sort=login_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header  sf_admin_text sf_admin_list_th_Roles">
  <?php echo __('Roles', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header  sf_admin_text sf_admin_list_th_Department">
  <?php echo __('Department', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('status' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_boolean sf_admin_list_th_status">
  <?php if ('status' == $sort[0]): ?>
    <?php echo link_to(__('Нээлттэй', array(), 'messages'), '@systemuser', array('query_string' => 'sort=status&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Нээлттэй', array(), 'messages'), '@systemuser', array('query_string' => 'sort=status&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>