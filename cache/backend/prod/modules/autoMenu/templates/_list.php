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
          <?php include_partial('menu/list_th_tabular', array('sort' => $sort)) ?>
          <th class="blue" id="sf_admin_list_th_actions"><?php echo __('Үйлдлүүд', array(), 'sf_admin') ?></th>
        </tr>
      </thead>
      <tbody>
                    <?php include_partial('menu/filters', array('filters' => $filters, 'configuration' => $configuration)) ?>
        
  <?php if (!$pager->getNbResults()): ?>
    <tr><td colspan="6"><?php echo __('No result', array(), 'sf_admin') ?></td></tr>
  <?php else: ?>

        <?php foreach ($pager->getResults() as $i => $menu): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <tr class="sf_admin_row <?php echo $odd ?>">
            <?php include_partial('menu/list_td_batch_actions', array('menu' => $menu, 'helper' => $helper)) ?>
            <?php include_partial('menu/list_td_tabular', array('menu' => $menu)) ?>
            <?php include_partial('menu/list_td_actions', array('menu' => $menu, 'helper' => $helper)) ?>
          </tr>
        <?php endforeach; ?>

  <?php endif; ?>
        </tbody>
    </table>

    <?php include_partial('menu/pagination', array('pager' => $pager)) ?>
  </div>

<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for (var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>
