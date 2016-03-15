<?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('menu_name' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_text sf_admin_list_th_menu_name">
  <?php if ('menu_name' == $sort[0]): ?>
    <?php echo link_to(__('Нэр', array(), 'messages'), '@menu', array('query_string' => 'sort=menu_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Нэр', array(), 'messages'), '@menu', array('query_string' => 'sort=menu_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('menu_eng' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_text sf_admin_list_th_menu_eng">
  <?php if ('menu_eng' == $sort[0]): ?>
    <?php echo link_to(__('Англи', array(), 'messages'), '@menu', array('query_string' => 'sort=menu_eng&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Англи', array(), 'messages'), '@menu', array('query_string' => 'sort=menu_eng&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header  sf_admin_text sf_admin_list_th_Parent">
  <?php echo __('Үндсэн цэс', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="blue header <?php if ('menu_state' == $sort[0]):
echo $sort[1]== 'desc' ? 'headerSortDown' : 'headerSortUp';
 endif; ?> sf_admin_text sf_admin_list_th_menu_state">
  <?php if ('menu_state' == $sort[0]): ?>
    <?php echo link_to(__('Хаяг', array(), 'messages'), '@menu', array('query_string' => 'sort=menu_state&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Хаяг', array(), 'messages'), '@menu', array('query_string' => 'sort=menu_state&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>