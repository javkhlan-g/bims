<?php use_helper('I18N', 'Date') ?>
<?php include_partial('roles/assets') ?>

<div id="sf_admin_container" class="panel panel-default">

    <div class="panel-heading">
        <?php echo __('New Roles', array(), 'messages') ?>

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
        <?php include_partial('roles/flashes') ?>

        <div id="sf_admin_header">
            <?php include_partial('roles/form_header',
            array('roles' => $roles, 'form' => $form,
            'configuration' => $configuration)) ?>
        </div>

        <div id="sf_admin_content">
            <?php include_partial('roles/form',
            array('roles' => $roles, 'form' => $form,
            'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>

        <div id="sf_admin_footer">
            <?php include_partial('roles/form_footer',
            array('roles' => $roles, 'form' => $form,
            'configuration' => $configuration)) ?>
        </div>
    </div>
</div>
