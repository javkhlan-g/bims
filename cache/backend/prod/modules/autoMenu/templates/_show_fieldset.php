
<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Menu', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo link_to($menu->getMenuId(), 'menu_edit', $menu) ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Нэр', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $menu->getMenuName() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Англи', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $menu->getMenuEng() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Үндсэн цэс', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $menu->getMenuParent() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Дараалал', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $menu->getMenuOrd() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Тайлбар', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $menu->getMenuDesc() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Хаяг', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $menu->getMenuState() ?></div>
  </div>
</div>
