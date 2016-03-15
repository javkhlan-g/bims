<?php use_helper('I18N', 'Date') ?>
<?php include_partial('systemuser/assets') ?>

    <?php include_partial('systemuser/flashes') ?>

    <div id="sf_admin_header">
        <?php include_partial('systemuser/list_header', array('pager' => $pager)) ?>
    </div>

    <div class="table mtm">

                    <div class="form-actions">
                <?php include_partial('systemuser/list_actions', array('filters' => clone $filters, 'configuration' => $configuration, 'helper' => $helper)) ?>
                <?php include_partial('systemuser/list_batch_actions', array('helper' => $helper)) ?>
            </div>
                <?php include_partial('systemuser/list', array('filters' => $filters, 'configuration' => $configuration, 'pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </div>

    <div id="sf_admin_footer">
        <?php include_partial('systemuser/list_footer', array('pager' => $pager)) ?>
    </div>
    