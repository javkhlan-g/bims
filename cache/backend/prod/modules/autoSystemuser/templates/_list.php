<?php use_stylesheets_for_form($filters) ?>
<?php use_javascripts_for_form($filters) ?>
<?php if ($filters->hasGlobalErrors()): ?>
    <?php echo $filters->renderGlobalErrors() ?>
<?php endif; ?>

  <div class="sf_admin_list">
    
    <table class="table table-bordered table-striped mbn">
      <thead>
        <tr>
          <th class="blue" id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
          <?php include_partial('systemuser/list_th_tabular', array('sort' => $sort)) ?>
          <th class="blue" id="sf_admin_list_th_actions"><?php echo __('Үйлдлүүд', array(), 'sf_admin') ?></th>
        </tr>
      </thead>
      <tbody>
                    <?php include_partial('systemuser/filters', array('filters' => $filters, 'configuration' => $configuration)) ?>
        
  <?php if (!$pager->getNbResults()): ?>
    <tr><td colspan="6"><?php echo __('No result', array(), 'sf_admin') ?></td></tr>
  <?php else: ?>

        <?php foreach ($pager->getResults() as $i => $systemuser): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <tr class="sf_admin_row <?php echo $odd ?>">
            <?php include_partial('systemuser/list_td_batch_actions', array('systemuser' => $systemuser, 'helper' => $helper)) ?>
            <?php include_partial('systemuser/list_td_tabular', array('systemuser' => $systemuser)) ?>
            <?php include_partial('systemuser/list_td_actions', array('systemuser' => $systemuser, 'helper' => $helper)) ?>
          </tr>
        <?php endforeach; ?>

  <?php endif; ?>
        </tbody>
    </table>

    <?php include_partial('systemuser/pagination', array('pager' => $pager)) ?>
  </div>

<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for (var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>
