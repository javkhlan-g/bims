<?php use_helper('I18N'); ?>

    <div class="fRight">
                                    <?php echo $helper->linkToNew(array(  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
                        </div>

    <div id="modal-more-filters" class="modal fade modal-filters">

        <?php if ($filters->hasGlobalErrors()): ?>
        <?php echo $filters->renderGlobalErrors() ?>
        <?php endif; ?>
        <div class="modal-dialog" >
            <div class="modal-content">
                <form action="<?php echo url_for('systemuser_collection', array('action' => 'filter')) ?>" method="post">
                    <div class="modal-header">                        
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo __('More filters') ?></h4>
                    </div>
                    <div class="modal-body">
                        <table class="table" cellspacing="0">
                            <tbody>
                                <?php foreach ($configuration->getFormFilterFields($filters) as $name => $field): ?>
                                <?php if ((isset($filters[$name]) && $filters[$name]->isHidden()) || (!isset($filters[$name]) && $field->isReal())) continue ?>
                                <?php $filters->getWidgetSchema()->setIdFormat('filters_field_modal_%s'); ?>
                                <?php include_partial('systemuser/filters_field_modal', array(
                                'name'       => $name,
                                'attributes' => $field->getConfig('attributes',
                                sfTwitterBootstrap::getDefaultAttributesFromField(
                                $filters[$name] instanceof sfOutputEscaper ? $filters[$name]->getRawValue() : $filters[$name],
                                $field->getType()
                                )),
                                'label'      => $field->getConfig('label'),
                                'help'       => $field->getConfig('help'),
                                'form'       => $filters,
                                'field'      => $field,
                                )) ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <?php echo $filters->renderHiddenFields() ?>
                        <a id="close-modal-filters" href="#" class="btn btn-info"><?php echo __('Close window') ?></a>
                        <?php echo link_to(__('Reset', array(), 'sf_admin'), 'systemuser_collection', array('action' => 'filter'), array('class' => 'btn', 'query_string' => '_reset', 'method' => 'post')) ?>
                        <input type="submit" class="btn btn-primary" value="<?php echo __('Filter', array(), 'sf_admin') ?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    $icon = '';
    if (sfTwitterBootstrap::getProperty('use_icons_in_button', false)) {
    $icon = '<i class="glyphicon glyphicon-filter icon-white"></i> ';
    }
    ?>

    <div class="fRight" style="margin-right: 4px">
        <a id="more-filters" href="#more-filters" class="btn btn-info btn-sm"><?php echo $icon . __('Хайлт') ?></a>
    </div>
