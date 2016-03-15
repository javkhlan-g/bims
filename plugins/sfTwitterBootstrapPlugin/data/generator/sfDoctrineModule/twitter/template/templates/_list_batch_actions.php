<?php if ($listActions = $this->configuration->getValue('list.batch_actions')): ?>
    <form
        action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]"
        method="post">
        <div class="mbn">
            <select id="batch_checked_ids" name="ids[]" multiple="multiple">
            </select>

            <div class="input-group" style="width: 250px">
                <select class="form-control" name="batch_action">
                    <option value="">[?php echo __('Үйлдэл сонго', array(), 'sf_admin') ?]</option>
                    <?php foreach ((array)$listActions as $action => $params): ?>
                        <?php echo $this->addCredentialCondition('<option value="' . $action . '">[?php echo __(\'' . ($params['label']!='Delete'?$params['label']:'Устга'). '\', array(), \'sf_admin\') ?]</option>', $params) ?>

                    <?php endforeach; ?>
                </select>

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"
                            onclick="copyIds()"/>
                    <i class="glyphicon glyphicon-ok"></i></button>
                </div>
            </div>

            [?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?]
            <input type="hidden" name="[?php echo $form->getCSRFFieldName() ?]"
                   value="[?php echo $form->getCSRFToken() ?]"/>
            [?php endif; ?]

        </div>
    </form>
    <?php
endif;
