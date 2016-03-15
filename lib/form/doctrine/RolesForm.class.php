<?php

/**
 * Roles form.
 *
 * @package    space
 * @subpackage form
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RolesForm extends BaseRolesForm
{
  public function configure()
  {
    $this->widgetSchema['menu_list']->setOption('renderer_class', 'sfWidgetFormSelectDoubleList');
  }
}
