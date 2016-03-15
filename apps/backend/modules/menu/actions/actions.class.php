<?php

require_once dirname(__FILE__) . '/../lib/menuGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/menuGeneratorHelper.class.php';

/**
 * menu actions.
 *
 * @package    space
 * @subpackage menu
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class menuActions extends autoMenuActions {

    

    public function executeSetCurrent(sfWebRequest $request) {
        $this->getUser()->setAttribute('menu', $request->getPostParameter('menuid'));
        return $this->renderText("ok");
    }

    

}
