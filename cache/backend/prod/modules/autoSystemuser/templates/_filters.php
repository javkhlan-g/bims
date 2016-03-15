<?php $filterFields = sfOutputEscaper::unescape($configuration->getFormFilterFields($filters)) ?>
<form action="<?php echo url_for('systemuser_collection', array('action' => 'filter')) ?>" method="post">
  <tr class="greystock">
        <td></td>
    <?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['login_name']) && isset($filterFields['login_name'])): ?>
    <?php include_partial('systemuser/filters_field', array(
    'name'       => 'login_name',
    'attributes' => $filterFields['login_name']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['login_name'] instanceof sfOutputEscaper ? $filters['login_name']->getRawValue() : $filters['login_name'],
                    $filterFields['login_name']->getType()
        )
    ),
    'label'      => $filterFields['login_name']->getConfig('label'),
    'help'       => $filterFields['login_name']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['login_name'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['Roles']) && isset($filterFields['Roles'])): ?>
    <?php include_partial('systemuser/filters_field', array(
    'name'       => 'Roles',
    'attributes' => $filterFields['Roles']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['Roles'] instanceof sfOutputEscaper ? $filters['Roles']->getRawValue() : $filters['Roles'],
                    $filterFields['Roles']->getType()
        )
    ),
    'label'      => $filterFields['Roles']->getConfig('label'),
    'help'       => $filterFields['Roles']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['Roles'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['Department']) && isset($filterFields['Department'])): ?>
    <?php include_partial('systemuser/filters_field', array(
    'name'       => 'Department',
    'attributes' => $filterFields['Department']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['Department'] instanceof sfOutputEscaper ? $filters['Department']->getRawValue() : $filters['Department'],
                    $filterFields['Department']->getType()
        )
    ),
    'label'      => $filterFields['Department']->getConfig('label'),
    'help'       => $filterFields['Department']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['Department'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['status']) && isset($filterFields['status'])): ?>
    <?php include_partial('systemuser/filters_field', array(
    'name'       => 'status',
    'attributes' => $filterFields['status']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['status'] instanceof sfOutputEscaper ? $filters['status']->getRawValue() : $filters['status'],
                    $filterFields['status']->getType()
        )
    ),
    'label'      => $filterFields['status']->getConfig('label'),
    'help'       => $filterFields['status']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['status'],
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
      <?php echo link_to($icon_reset . __("Болих", array(), 'sf_admin'), 'systemuser_collection', array('action' => 'filter'), array('class' => 'btn btn-default btn-sm', 'query_string' => '_reset', 'method' => 'post')) ?>
    </td>
  </tr>
</form>
