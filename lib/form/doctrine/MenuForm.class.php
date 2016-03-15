<?php

/**
 * Menu form.
 *
 * @package    space
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MenuForm extends BaseMenuForm {

    public function configure()
    {

        unset($this->validatorSchema['role_list']);
        //following code will remove fields from form
        unset($this->widgetSchema['role_list']);
    }

}
