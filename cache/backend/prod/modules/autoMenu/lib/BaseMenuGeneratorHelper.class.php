<?php

/**
 * menu module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage menu
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseMenuGeneratorHelper extends sfTwitterModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'menu' : 'menu_'.$action;
  }
}
