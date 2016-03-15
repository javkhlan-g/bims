<?php $filterFields = sfOutputEscaper::unescape($configuration->getFormFilterFields($filters)) ?>
<form action="<?php echo url_for('roles_collection', array('action' => 'filter')) ?>" method="post">
  <tr class="greystock">
        <td></td>
    <?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['role_id']) && isset($filterFields['role_id'])): ?>
    <?php include_partial('roles/filters_field', array(
    'name'       => 'role_id',
    'attributes' => $filterFields['role_id']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['role_id'] instanceof sfOutputEscaper ? $filters['role_id']->getRawValue() : $filters['role_id'],
                    $filterFields['role_id']->getType()
        )
    ),
    'label'      => $filterFields['role_id']->getConfig('label'),
    'help'       => $filterFields['role_id']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['role_id'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['name']) && isset($filterFields['name'])): ?>
    <?php include_partial('roles/filters_field', array(
    'name'       => 'name',
    'attributes' => $filterFields['name']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['name'] instanceof sfOutputEscaper ? $filters['name']->getRawValue() : $filters['name'],
                    $filterFields['name']->getType()
        )
    ),
    'label'      => $filterFields['name']->getConfig('label'),
    'help'       => $filterFields['name']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['name'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?>    <td>
      <?php echo $filters->renderHiddenFields() ?>

      <?php
        $icon_filter = '';
        $icon_reset  = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false)) {
          $icon_filter = '<i class="glyphicon glyphicon-search icon-white"></i> ';
          $icon_reset  = '<i class="glyphicon glyphicon-refresh icon-refresh"></i> ';
        }
      ?>

      <button type="submit" class="btn btn-info btn-fix-margin btn-sm"><?php echo $icon_filter . __('Хайх', array(), 'sf_admin') ?></button>
      <?php echo link_to($icon_reset . __("Болих", array(), 'sf_admin'), 'roles_collection', array('action' => 'filter'), array('class' => 'btn btn-default btn-sm', 'query_string' => '_reset', 'method' => 'post')) ?>
    </td>
  </tr>
</form>
