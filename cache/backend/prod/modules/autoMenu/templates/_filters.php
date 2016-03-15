<?php $filterFields = sfOutputEscaper::unescape($configuration->getFormFilterFields($filters)) ?>
<form action="<?php echo url_for('menu_collection', array('action' => 'filter')) ?>" method="post">
  <tr class="greystock">
        <td></td>
    <?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['menu_name']) && isset($filterFields['menu_name'])): ?>
    <?php include_partial('menu/filters_field', array(
    'name'       => 'menu_name',
    'attributes' => $filterFields['menu_name']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['menu_name'] instanceof sfOutputEscaper ? $filters['menu_name']->getRawValue() : $filters['menu_name'],
                    $filterFields['menu_name']->getType()
        )
    ),
    'label'      => $filterFields['menu_name']->getConfig('label'),
    'help'       => $filterFields['menu_name']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['menu_name'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['menu_eng']) && isset($filterFields['menu_eng'])): ?>
    <?php include_partial('menu/filters_field', array(
    'name'       => 'menu_eng',
    'attributes' => $filterFields['menu_eng']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['menu_eng'] instanceof sfOutputEscaper ? $filters['menu_eng']->getRawValue() : $filters['menu_eng'],
                    $filterFields['menu_eng']->getType()
        )
    ),
    'label'      => $filterFields['menu_eng']->getConfig('label'),
    'help'       => $filterFields['menu_eng']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['menu_eng'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['Parent']) && isset($filterFields['Parent'])): ?>
    <?php include_partial('menu/filters_field', array(
    'name'       => 'Parent',
    'attributes' => $filterFields['Parent']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['Parent'] instanceof sfOutputEscaper ? $filters['Parent']->getRawValue() : $filters['Parent'],
                    $filterFields['Parent']->getType()
        )
    ),
    'label'      => $filterFields['Parent']->getConfig('label'),
    'help'       => $filterFields['Parent']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['Parent'],
    )) ?>
  <?php endif; ?>
</td>
<?php end_slot(); ?>
  <?php include_slot('sf_admin.current_filter_field') ?><?php slot('sf_admin.current_filter_field') ?>
<td>
  <?php if(isset($filters['menu_state']) && isset($filterFields['menu_state'])): ?>
    <?php include_partial('menu/filters_field', array(
    'name'       => 'menu_state',
    'attributes' => $filterFields['menu_state']->getConfig(
        'attributes',
        sfTwitterBootstrap::getDefaultAttributesFromField(
                    $filters['menu_state'] instanceof sfOutputEscaper ? $filters['menu_state']->getRawValue() : $filters['menu_state'],
                    $filterFields['menu_state']->getType()
        )
    ),
    'label'      => $filterFields['menu_state']->getConfig('label'),
    'help'       => $filterFields['menu_state']->getConfig('help'),
    'form'       => $filters,
    'field'      => $filterFields['menu_state'],
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
      <?php echo link_to($icon_reset . __("Болих", array(), 'sf_admin'), 'menu_collection', array('action' => 'filter'), array('class' => 'btn btn-default btn-sm', 'query_string' => '_reset', 'method' => 'post')) ?>
    </td>
  </tr>
</form>
