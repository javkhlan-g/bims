<?php

/**
 * roles module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage roles
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseRolesGeneratorHelper extends sfTwitterModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'roles' : 'roles_'.$action;
  }
}
