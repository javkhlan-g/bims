<?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('role_id' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_text sf_admin_list_th_role_id">
  <?php if ('role_id' == $sort[0]): ?>
    <?php echo link_to(__('Role', array(), 'messages'), '@roles', array('query_string' => 'sort=role_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Role', array(), 'messages'), '@roles', array('query_string' => 'sort=role_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('name' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_text sf_admin_list_th_name">
  <?php if ('name' == $sort[0]): ?>
    <?php echo link_to(__('Name', array(), 'messages'), '@roles', array('query_string' => 'sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Name', array(), 'messages'), '@roles', array('query_string' => 'sort=name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>