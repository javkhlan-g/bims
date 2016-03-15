<?php

/**
 * systemuser module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage systemuser
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSystemuserGeneratorHelper extends sfTwitterModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'systemuser' : 'systemuser_'.$action;
  }
}
