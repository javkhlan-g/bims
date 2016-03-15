<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div class="sf_admin_show form-horizontal">

  
  <?php foreach ($configuration->getFormFields($form, 'show') as $fieldset => $fields): ?>

    <?php if (true == sfTwitterBootstrap::getProperty('top_link_to_fieldset') && 'NONE' != $fieldset): ?>
      <a name="<?php echo preg_replace('/[^a-z0-9_]/', '_', strtolower($fieldset)) ?>"></a>
    <?php endif; ?>

    <fieldset id="sf_fieldset_<?php echo preg_replace('/[^a-z0-9_]/', '_', strtolower($fieldset)) ?>" <?php if ('NONE' == $fieldset): ?>class="no-legend"<?php endif; ?>>
      <?php if ('NONE' != $fieldset): ?>
        <legend><?php echo __($fieldset, array(), 'messages') ?></legend>
      <?php endif; ?>

      <?php include_partial('systemuser/show_fieldset', array('systemuser' => $systemuser)) ?>

    </fieldset>
  <?php endforeach; ?>

  <?php include_partial('show_actions', array('systemuser' => $systemuser, 'configuration' => $configuration, 'helper' => $helper)) ?>

  </div>
