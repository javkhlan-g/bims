<?php

/**
 * LinkingRoleMenu form base class.
 *
 * @method LinkingRoleMenu getObject() Returns the current form's model object
 *
 * @package    space
 * @subpackage form
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLinkingRoleMenuForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'role_id' => new sfWidgetFormInputText(),
      'menu_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'role_id' => new sfValidatorInteger(array('required' => false)),
      'menu_id' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('linking_role_menu[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinkingRoleMenu';
  }

}
