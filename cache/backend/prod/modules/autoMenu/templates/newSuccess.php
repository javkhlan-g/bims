<?php use_helper('I18N', 'Date') ?>
<?php include_partial('menu/assets') ?>

<div id="sf_admin_container" class="panel panel-default">

    <div class="panel-heading">
        <?php echo __('New Menu', array(), 'messages') ?>

        <?php if(true == sfTwitterBootstrap::getProperty('top_link_to_fieldset')): ?>
        <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields):
        ?>
        <?php if ('NONE' != $fieldset): ?>
        <?php $fieldset_name = __($fieldset, array(), 'messages') ?>
        <small>- <a class="link-to-fieldset"
                    href="#<?php echo preg_replace('/[^a-z0-9_]/', '_', strtolower($fieldset)) ?>"><?php echo
                $fieldset_name ?></a></small>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="panel-body">
        <?php include_partial('menu/flashes') ?>

        <div id="sf_admin_header">
            <?php include_partial('menu/form_header',
            array('menu' => $menu, 'form' => $form,
            'configuration' => $configuration)) ?>
        </div>

        <div id="sf_admin_content">
            <?php include_partial('menu/form',
            array('menu' => $menu, 'form' => $form,
            'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>

        <div id="sf_admin_footer">
            <?php include_partial('menu/form_footer',
            array('menu' => $menu, 'form' => $form,
            'configuration' => $configuration)) ?>
        </div>
    </div>
</div>
