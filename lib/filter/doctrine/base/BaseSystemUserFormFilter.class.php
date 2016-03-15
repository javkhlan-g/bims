<?php

/**
 * SystemUser filter form base class.
 *
 * @package    space
 * @subpackage filter
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSystemUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'login_name'     => new sfWidgetFormFilterInput(),
      'login_password' => new sfWidgetFormFilterInput(),
      'display_name'   => new sfWidgetFormFilterInput(),
      'status'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'department_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Department'), 'add_empty' => true)),
      'role_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Roles'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'login_name'     => new sfValidatorPass(array('required' => false)),
      'login_password' => new sfValidatorPass(array('required' => false)),
      'display_name'   => new sfValidatorPass(array('required' => false)),
      'status'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'department_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Department'), 'column' => 'department_id')),
      'role_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Roles'), 'column' => 'role_id')),
    ));

    $this->widgetSchema->setNameFormat('system_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemUser';
  }

  public function getFields()
  {
    return array(
      'system_user_id' => 'Number',
      'login_name'     => 'Text',
      'login_password' => 'Text',
      'display_name'   => 'Text',
      'status'         => 'Number',
      'department_id'  => 'ForeignKey',
      'role_id'        => 'ForeignKey',
    );
  }
}
