<?php if ($field->isPartial()): ?>
  <?php include_partial('menu/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
  <?php include_component('menu', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>
  <?php echo $form[$name]->renderError() ?>
  <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>
  <?php if ($help || $help = $form[$name]->renderHelp()): ?>
    <span class="help-block"><?php echo __($help, array(), 'messages') ?></span>
  <?php endif; ?>
<?php endif; ?>
