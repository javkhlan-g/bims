<?php

/**
 * SystemUser form base class.
 *
 * @method SystemUser getObject() Returns the current form's model object
 *
 * @package    space
 * @subpackage form
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSystemUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'system_user_id' => new sfWidgetFormInputHidden(),
      'login_name'     => new sfWidgetFormInputText(),
      'login_password' => new sfWidgetFormInputText(),
      'display_name'   => new sfWidgetFormInputText(),
      'status'         => new sfWidgetFormInputText(),
      'department_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Department'), 'add_empty' => false)),
      'role_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Roles'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'system_user_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('system_user_id')), 'empty_value' => $this->getObject()->get('system_user_id'), 'required' => false)),
      'login_name'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'login_password' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'display_name'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'status'         => new sfValidatorInteger(array('required' => false)),
      'department_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Department'))),
      'role_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Roles'))),
    ));

    $this->widgetSchema->setNameFormat('system_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemUser';
  }

}
