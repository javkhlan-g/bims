<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@systemuser', array('class' => 'form-horizontal')) ?>

    
    
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('systemuser/form_fieldset', array('systemuser' => $systemuser, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    <?php include_partial('systemuser/form_actions', array('systemuser' => $systemuser, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>

          <?php if (!$form->isNew()) : ?>
      </div>
      <?php endif; ?>
    
  </form>
</div>
